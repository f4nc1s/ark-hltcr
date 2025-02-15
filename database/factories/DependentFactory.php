<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dependent;
use App\Models\Beneficiary;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dependent>
 */
class DependentFactory extends Factory
{
    protected $model = Dependent::class;

    public function definition()
    {
        return [
            'beneficiary_id' => Beneficiary::factory(),
            'full_name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'relationship' => $this->faker->randomElement(['brother', 'sister', 'father', 'mother', 'spouse', 'child']),
        ];
    }
}
