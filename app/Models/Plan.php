<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description'];

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class, 'hospital_plan');
    }

    public function gyms()
    {
        return $this->belongsToMany(Gym::class, 'gym_plan');
    }
}
