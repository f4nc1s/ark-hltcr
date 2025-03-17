<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Beneficiary;
use App\Models\Dependent;
use App\Models\Hospital;
use App\Models\Gym;
use App\Models\Spa;
use App\Models\UserSelection;
use App\Models\Plan;
use App\Models\UserPlan;
use App\Models\Kyc;

class DatabaseSeeder extends Seeder {
    public function run() {
        User::factory(10)->create()->each(function ($user) {
            Beneficiary::factory(2)->create(['user_id' => $user->id])->each(function ($beneficiary) {
                Dependent::factory(2)->create(['beneficiary_id' => $beneficiary->id]);
            });
            UserSelection::factory()->create(['user_id' => $user->id]);
            $plan = Plan::inRandomOrder()->first() ?? Plan::factory()->create();

            UserPlan::factory()->create(['user_id' => $user->id, 'status' => 'active', 'plan_id' => $plan->id]);
            UserPlan::factory()->create(['user_id' => $user->id, 'status' => 'expired', 'plan_id' => $plan->id]);
            UserPlan::factory()->create(['user_id' => $user->id, 'status' => 'deactivated', 'plan_id' => $plan->id]);
            Kyc::factory()->create(['user_id' => $user->id]);
        });

        Hospital::factory(5)->create();
        Gym::factory(5)->create();
        Spa::factory(5)->create();
        Plan::factory(3)->create();
    }
}

// Factories

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory {
    protected $model = User::class;
    public function definition() {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ];
    }
}

class BeneficiaryFactory extends Factory {
    protected $model = Beneficiary::class;
    public function definition() {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'date_of_birth' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}

class DependentFactory extends Factory {
    protected $model = Dependent::class;
    public function definition() {
        return [
            'beneficiary_id' => Beneficiary::factory(),
            'full_name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'relationship' => $this->faker->randomElement(['brother', 'sister', 'father', 'mother', 'spouse', 'child']),
        ];
    }
}

class HospitalFactory extends Factory {
    protected $model = Hospital::class;
    public function definition() {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
        ];
    }
}

class GymFactory extends Factory {
    protected $model = Gym::class;
    public function definition() {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
        ];
    }
}

class SpaFactory extends Factory {
    protected $model = Spa::class;
    public function definition() {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
        ];
    }
}

class UserSelectionFactory extends Factory {
    protected $model = UserSelection::class;
    public function definition() {
        return [
            'user_id' => User::factory(),
            'hospital_id' => Hospital::factory(),
            'gym_id' => Gym::factory(),
            'spa_id' => Spa::factory(),
        ];
    }
}

class PlanFactory extends Factory {
    protected $model = Plan::class;
    public function definition() {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'description' => $this->faker->sentence,
        ];
    }
}

class UserPlanFactory extends Factory
{
    protected $model = UserPlan::class;

    public function definition()
    {
        $statuses = ['active', 'expired', 'deactivated'];
        $status = $this->faker->randomElement($statuses);

        // Set start and end dates based on status
        $startDate = $this->faker->dateTimeBetween('-1 year', 'now');
        $endDate = (clone $startDate)->modify('+30 days');

        if ($status === 'expired') {
            $endDate = Carbon::parse($startDate)->addDays(30);
        } elseif ($status === 'deactivated') {
            $endDate = null; // Deactivated plans may not have an end date
        }

        return [
            'user_id' => User::factory(),
            'plan_id' => Plan::factory(),
            'status' => $status,
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}

class KycFactory extends Factory {
    protected $model = Kyc::class;
    public function definition() {
        return [
            'user_id' => User::factory(),
            'document_type' => $this->faker->randomElement(['passport', 'driver_license', 'national_id']),
            'document_number' => $this->faker->uuid,
            'expiry_date' => $this->faker->optional()->date(),
        ];
    }
}
