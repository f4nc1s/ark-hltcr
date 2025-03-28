<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\UserPlan;
use App\Models\Plan;
use Paystack;

class PaymentController extends Controller
{
    public function redirectToPaystack(Request $request)
{
    $request->validate([
        'plan_id' => 'required|exists:plans,id',
    ]);

    $user = Auth::user();
    $plan = \App\Models\Plan::findOrFail($request->plan_id);

    $nhisFee = 300; // Fixed NHIS fee
    $totalAmount = $plan->price + $nhisFee;
    $amountInKobo = $totalAmount * 100; // Convert to Kobo

    $data = [
        "amount" => $amountInKobo, // Use only the backend-computed amount
        "email" => $user->email,
        "currency" => "NGN",
        "reference" => Paystack::genTranxRef(),
        "metadata" => [
            "plan_id" => $plan->id,
            "user_id" => $user->id,
        ],
    ];

    return Paystack::getAuthorizationUrl($data)->redirectNow();
}

public function handlePaystackCallback()
{
    $paymentDetails = Paystack::getPaymentData();
    // dd($paymentDetails);
    if ($paymentDetails['status'] === true) {
        $paymentData = $paymentDetails['data'];
        $metadata = $paymentData['metadata'];

        $userId = $metadata['user_id'];
        $planId = $metadata['plan_id'];
        $reference = $paymentData['reference'];

        // Find the user and plan
        $user = \App\Models\User::findOrFail($userId);
        $plan = \App\Models\Plan::findOrFail($planId);
        UserPlan::where('user_id', $user->id)->update(['status' => 'deactivated']);
        UserPlan::updateOrCreate(
            ['user_id' => $user->id],
            [
                'plan_id' => $plan->id,
                'status' => 'active',
                'reference' => $reference,
            ]
        );

        return redirect()->route('subscription')->with('success', 'Payment successful, plan upgraded!');
    }

    return redirect()->route('subscription')->with('error', 'Payment failed!');
}
public function handleWebhook(Request $request)
{
    // Get webhook payload from Paystack
    $payload = $request->all();

    // \Log::info('Paystack Webhook Received:', $payload); // Log it for debugging

    if ($payload['event'] === 'charge.success') {
        $reference = $payload['data']['reference'];
        $userId = $payload['data']['metadata']['user_id'] ?? null;
        $planId = $payload['data']['metadata']['plan_id'] ?? null;

        if ($userId && $planId) {
            // Activate user's plan
            UserPlan::updateOrCreate(
                ['user_id' => $userId],
                ['plan_id' => $planId, 'status' => 'active', 'reference' => $reference]
            );
        }
    }

    return response()->json(['status' => 'success']);
}

}