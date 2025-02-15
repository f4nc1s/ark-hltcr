<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Spa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spa>
 */
class SpaFactory extends Factory
{
    protected $model = Spa::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
        ];
    }
}
