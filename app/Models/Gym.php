<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;
    // protected $table = 'gym';
    protected $fillable = ['name', 'location'];

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'gym_plan');
    }
}
