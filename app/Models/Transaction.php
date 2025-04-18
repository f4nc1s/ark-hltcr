<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_id',
        'track_number',
        'service_id',
        'paytype',
        'status',
        'effective_date',
        'expiry_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
