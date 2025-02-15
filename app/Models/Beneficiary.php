<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'address', 'phone_number', 'gender', 'date_of_birth', 'email'];

    public function dependents() {
        return $this->hasMany(Dependent::class);
    }
}
