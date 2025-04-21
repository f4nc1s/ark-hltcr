<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\UserPlan;
use App\Models\User;
use App\Models\Plan;
use App\Models\Transaction;
use App\Jobs\SyncCubeCover;
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

    // public function handlePaystackCallback()
    // {
    //     $paymentDetails = Paystack::getPaymentData();
    //     // dd($paymentDetails);
    //     if ($paymentDetails['status'] === true) {
    //         $paymentData = $paymentDetails['data'];
    //         $metadata = $paymentData['metadata'];

    //         $userId = $metadata['user_id'];
    //         $planId = $metadata['plan_id'];
    //         $reference = $paymentData['reference'];

    //         // Find the user and plan
    //         $user = \App\Models\User::findOrFail($userId);
    //         $plan = \App\Models\Plan::findOrFail($planId);
    //         UserPlan::where('user_id', $user->id)->update(['status' => 'deactivated']);
    //         UserPlan::updateOrCreate(
    //             ['user_id' => $user->id],
    //             [
    //                 'plan_id' => $plan->id,
    //                 'status' => 'active',
    //                 'reference' => $reference,
    //             ]
    //         );

    //         return redirect()->route('subscription')->with('success', 'Payment successful, plan upgraded!');
    //     }

    //     return redirect()->route('subscription')->with('error', 'Payment failed!');
    // }

    // public function handlePaystackCallback()
    // {
    //     $paymentDetails = Paystack::getPaymentData();

    //     if ($paymentDetails['status'] !== true) {
    //         return redirect()->route('subscription')->with('error', 'Payment failed or cancelled.');
    //     }

    //     $paymentData = $paymentDetails['data'];
    //     $metadata = $paymentData['metadata'];

    //     $userId = $metadata['user_id'] ?? null;
    //     $planId = $metadata['plan_id'] ?? null;
    //     $reference = $paymentData['reference'];

    //     if (!$userId || !$planId) {
    //         return redirect()->route('subscription')->with('error', 'Invalid payment metadata.');
    //     }

    //     $user = User::findOrFail($userId);
    //     $plan = Plan::findOrFail($planId);
    //     $kyc = $user->kyc;
    //     $trxnId = $reference;
    //     $transdate = now()->format('YmdHis');
    //     $serviceId = 'AXA34445628';

    //     // Deactivate old plan
    //     UserPlan::where('user_id', $user->id)->update(['status' => 'deactivated']);

    //     // Activate new plan
    //     UserPlan::updateOrCreate(
    //         ['user_id' => $user->id],
    //         [
    //             'plan_id' => $plan->id,
    //             'status' => 'active',
    //             'reference_code' => $reference ?? Str::uuid()
    //         ]
    //     );

    //     // Log transaction
    //     Transaction::updateOrCreate(
    //         ['transaction_id' => $trxnId], // match existing
    //         [
    //             'user_id' => $user->id,
    //             'service_id' => $serviceId,
    //             'paytype' => 'new',
    //             'status' => 'pending',
    //         ]
    //     );

    //     // Prepare insurance sync payload
    //     $payload = [
    //         'FirstName'       => $user->first_name,
    //         'LastName'        => $user->last_name,
    //         'Email'           => $user->email,
    //         'Address'         => $kyc?->address,
    //         'State'           => $kyc?->state,
    //         'Gender'          => ucfirst($kyc?->gender ?? 'NA'),
    //         'DateOfBirth'     => $kyc?->dob,
    //         'PhoneMake'       => 'NA',
    //         'ServiceID'       => $serviceId,
    //         'PhoneNumber'     => $user->phone_number,
    //         'Paytype'         => 'new',
    //         'TransactioNDate' => $transdate,
    //         'TransactionID'   => $trxnId,
    //     ];

    //     $response = Http::withHeaders([
    //         'X-API-KEY' => env('CUBECOVER_API_KEY')
    //     ])->get('https://pilot-embed.cubecover.ai/3pp/sync', $payload);

    //     if ($response->successful() && $response['status']) {
    //         Transaction::where('transaction_id', $trxnId)->update([
    //             'status' => 'synced',
    //             'track_number' => $response['data']['trackNumber'],
    //             'effective_date' => $response['data']['effectiveDate'],
    //             'expiry_date' => $response['data']['expiryDate'],
    //         ]);

    //         return redirect()->route('dashboard')->with('success', 'Plan activated successfully.');
    //     } elseif (strtolower($response['message']) === 'sync pending') {
    //         dispatch(function () use ($trxnId) {
    //             sleep(180);

    //             $statusResponse = Http::withHeaders([
    //                 'X-API-KEY' => env('CUBECOVER_API_KEY')
    //             ])->get('https://pilot-embed.cubecover.ai/3pp/sync-status', [
    //                 'trxnId' => $trxnId,
    //             ]);

    //             if ($statusResponse->successful() && $statusResponse['status']) {
    //                 Transaction::where('transaction_id', $trxnId)->update([
    //                     'status' => 'synced',
    //                     'track_number' => $statusResponse['data']['trackNumber'],
    //                     'effective_date' => $statusResponse['data']['effectiveDate'],
    //                     'expiry_date' => $statusResponse['data']['ExpiryDate'],
    //                 ]);
    //             } else {
    //                 Log::warning("Sync status still pending or failed for: $trxnId", [
    //                     'response' => $statusResponse->json()
    //                 ]);
    //             }
    //         });

    //         return redirect()->route('dashboard')->with('info', 'Subscription pending confirmation. We’ll update you shortly.');
    //     } else {
    //         Transaction::where('transaction_id', $trxnId)->update([
    //             'status' => 'failed',
    //         ]);

    //         return redirect()->route('dashboard')->with('error', 'Sync failed: ' . $response['message']);
    //     }
    // }

    public function handlePaystackCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        if ($paymentDetails['status'] !== true) {
            return redirect()->route('subscription')->with('error', 'Payment failed or cancelled.');
        }

        $paymentData = $paymentDetails['data'];
        $metadata = $paymentData['metadata'];

        $userId = $metadata['user_id'] ?? null;
        $planId = $metadata['plan_id'] ?? null;
        $reference = $paymentData['reference'];

        if (!$userId || !$planId) {
            return redirect()->route('subscription')->with('error', 'Invalid payment metadata.');
        }

        $user = User::findOrFail($userId);
        $plan = Plan::findOrFail($planId);

        // Deactivate any current active plans
        UserPlan::where('user_id', $user->id)->update(['status' => 'deactivated']);

        // Create new user plan with pending status
        UserPlan::updateOrCreate(
            ['reference_code' => $reference],
            [
                'user_id' => $user->id,
                'plan_id' => $plan->id,
                'status' => 'pending',
                'start_date' => now(),
            ]
        );


        // Store transaction
        Transaction::updateOrCreate(
            ['transaction_id' => $reference],
            [
                'user_id' => $user->id,
                'service_id' => 'AXA34445628',
                'paytype' => 'new',
                'status' => 'pending',
            ]
        );

        // Dispatch CubeCover sync job
        SyncCubeCover::dispatch($user, $plan, $reference)->delay(now()->addMinutes(1));

        return redirect()->route('dashboard')->with('info', 'Payment received. Subscription syncing in progress.');
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

    public function handleCubeWebhook(Request $request)
    {
        $data = $request->all();

        $transactionId = $data['TransactionID'] ?? null;

        if (!$transactionId) return response()->json(['error' => 'Invalid webhook'], 400);

        // Update Transaction
        Transaction::where('transaction_id', $transactionId)->update([
            'status' => 'synced',
            'track_number' => $data['trackNumber'] ?? null,
            'effective_date' => $data['effectiveDate'] ?? now(),
            'expiry_date' => $data['expiryDate'] ?? null,
        ]);

        // Update UserPlan to active
        UserPlan::where('reference_code', $transactionId)->update([
            'status' => 'active',
        ]);

        return response()->json(['message' => 'ok'], 200);
    }
}
