<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserPlan;
use App\Models\User;
use App\Models\Plan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPlan>
 */
class UserPlanFactory extends Factory
{
    protected $model = UserPlan::class;

    public function definition()
    {
        $statuses = ['active', 'expired', 'deactivated'];
        $status = $this->faker->randomElement($statuses);
        $startDate = Carbon::now()->subDays(rand(1, 180));
        $endDate = (clone $startDate)->addDays(30);
        if ($status === 'expired') {
            $endDate = Carbon::now()->subDays(rand(1, 30));
        } elseif ($status === 'deactivated') {
            $endDate = null;
        }

        return [
            'user_id' => User::factory(),
            'plan_id' => Plan::factory(),
            'reference_code' => $this->generateUniqueReferenceCode(),
            'status' => $status,
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
    private function generateUniqueReferenceCode()
    {
        do {
            $code = strtoupper(Str::random(10));
        } while (UserPlan::where('reference_code', $code)->exists());

        return $code;
    }
}
