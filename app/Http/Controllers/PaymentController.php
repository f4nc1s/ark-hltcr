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

    public function handlePaystackCallback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData(); // Replace with your actual implementation

        if ($paymentDetails['status'] !== true) {
            return redirect()->route('subscription')->with('error', 'Payment failed or cancelled.');
        }

        $user = Auth::user();
        $userPlan = $user->userPlan;

        if (!$userPlan) {
            return redirect()->route('subscription')->with('error', 'No plan selected.');
        }

        $kyc = $user->kyc;
        $trxnId = $paymentDetails['data']['reference']; // Unique transaction ID
        $transdate = now()->format('YmdHis');

        // You may map plan_id to serviceId dynamically instead of hardcoding
        $serviceId = 'AXA34445628';

        // Save initial transaction record
        Transaction::create([
            'user_id' => $user->id,
            'transaction_id' => $trxnId,
            'service_id' => $serviceId,
            'paytype' => 'new',
            'status' => 'pending',
        ]);

        // Prepare payload
        $payload = [
            'FirstName'       => $user->first_name,
            'LastName'        => $user->last_name,
            'Email'           => $user->email,
            'Address'         => $kyc?->address,
            'State'           => $kyc?->state,
            'Gender'          => ucfirst($kyc?->gender ?? 'NA'),
            'DateOfBirth'     => $kyc?->dob,
            'PhoneMake'       => 'NA',
            'ServiceID'       => $serviceId,
            'PhoneNumber'     => $user->phone_number,
            'Paytype'         => 'new',
            'TransactioNDate' => $transdate,
            'TransactionID'   => $trxnId,
        ];

        $response = Http::withHeaders([
            'X-API-KEY' => env('CUBECOVER_API_KEY')
        ])->get('https://pilot-embed.cubecover.ai/3pp/sync', $payload);

        if ($response->successful() && $response['status']) {
            Transaction::where('transaction_id', $trxnId)->update([
                'status' => 'synced',
                'track_number' => $response['data']['trackNumber'],
                'effective_date' => $response['data']['effectiveDate'],
                'expiry_date' => $response['data']['expiryDate'],
            ]);

            return redirect()->route('dashboard')->with('success', 'Plan activated successfully.');
        } elseif (strtolower($response['message']) === 'sync pending') {
            // Use a closure-based dispatch or a queued job for long polling
            dispatch(function () use ($trxnId) {
                sleep(180); // wait 3 minutes

                $statusResponse = Http::withHeaders([
                    'X-API-KEY' => env('CUBECOVER_API_KEY')
                ])->get('https://pilot-embed.cubecover.ai/3pp/sync-status', [
                    'trxnId' => $trxnId,
                ]);

                if ($statusResponse->successful() && $statusResponse['status']) {
                    Transaction::where('transaction_id', $trxnId)->update([
                        'status' => 'synced',
                        'track_number' => $statusResponse['data']['trackNumber'],
                        'effective_date' => $statusResponse['data']['effectiveDate'],
                        'expiry_date' => $statusResponse['data']['ExpiryDate'],
                    ]);
                } else {
                    Log::warning("Sync status still pending or failed for: $trxnId", [
                        'response' => $statusResponse->json()
                    ]);
                }
            });

            return redirect()->route('dashboard')->with('info', 'Subscription pending confirmation. We’ll update you shortly.');
        } else {
            Transaction::where('transaction_id', $trxnId)->update([
                'status' => 'failed',
            ]);

            return redirect()->route('dashboard')->with('error', 'Sync failed: ' . $response['message']);
        }
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
