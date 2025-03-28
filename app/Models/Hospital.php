<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location'];

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'hospital_plan');
    }

}
