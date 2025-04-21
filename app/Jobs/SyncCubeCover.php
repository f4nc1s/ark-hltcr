<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SyncCubeCover implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $plan;
    protected $trxnId;

    public function __construct(User $user, $plan, $trxnId)
    {
        $this->user = $user;
        $this->plan = $plan;
        $this->trxnId = $trxnId;
    }

    public function handle()
    {
        $kyc = $this->user->kyc;

        $payload = [
            'FirstName'       => $this->user->first_name,
            'LastName'        => $this->user->last_name,
            'Email'           => $this->user->email,
            'Address'         => $kyc?->address,
            'State'           => $kyc?->state,
            'Gender'          => ucfirst($kyc?->gender ?? 'NA'),
            'DateOfBirth'     => $kyc?->dob,
            'PhoneMake'       => 'NA',
            'ServiceID'       => 'AXA34445628',
            'PhoneNumber'     => $this->user->phone_number,
            'Paytype'         => 'new',
            'TransactioNDate' => now()->format('YmdHis'),
            'TransactionID'   => $this->trxnId,
        ];

        $response = Http::withHeaders([
            'X-API-KEY' => env('CUBECOVER_API_KEY')
        ])->get('https://pilot-embed.cubecover.ai/3pp/sync', $payload);

        if (!$response->successful() || strtolower($response['message']) === 'sync pending') {
            // Retry in next scheduler run
            return;
        }

        // Webhook will finalize plan activation
    }
}
