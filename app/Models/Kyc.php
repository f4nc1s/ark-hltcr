<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    use HasFactory;
    protected $table = 'kyc';

    protected $fillable = [
        'user_id',
        'document_type',
        'document_number',
        'expiry_date',
        'address',
        'state',
        'gender',
        'dob',
    ];
}
