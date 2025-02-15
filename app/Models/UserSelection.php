<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSelection extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'hospital_id', 'gym_id', 'spa_id'];

    public function hospital() {
        return $this->belongsTo(Hospital::class);
    }

    public function gym() {
        return $this->belongsTo(Gym::class);
    }

    public function spa() {
        return $this->belongsTo(Spa::class);
    }
}
