<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserSelection;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Gym;
use App\Models\Spa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserSelection>
 */
class UserSelectionFactory extends Factory
{
    protected $model = UserSelection::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'hospital_id' => Hospital::factory(),
            'gym_id' => Gym::factory(),
            'spa_id' => Spa::factory(),
        ];
    }
}
