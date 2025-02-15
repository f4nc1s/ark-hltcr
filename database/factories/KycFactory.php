<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kyc;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kyc>
 */
class KycFactory extends Factory
{
    protected $model = Kyc::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'document_type' => $this->faker->randomElement(['passport', 'driver_license', 'national_id']),
            'document_number' => $this->faker->uuid,
            'expiry_date' => $this->faker->optional()->date(),
        ];
    }
}
