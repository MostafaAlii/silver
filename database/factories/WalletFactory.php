<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{Agent, Admin, Captain, Company, Employee, User};
class WalletFactory extends Factory {
    public function definition(): array {
        $adminId = $this->faker->boolean(70) ? Admin::active()->pluck('id')->random() : null;
        $agentId = !$adminId ? Agent::active()->pluck('id')->random() : null;
        $employeeId = !$adminId && !$agentId ? Employee::active()->pluck('id')->random() : null;
        $companyId = !$adminId && !$agentId && !$employeeId ? Company::active()->pluck('id')->random() : null;

        $captainId = $this->faker->boolean(70) ? Captain::active()->pluck('id')->random() : null;
        $userId = !$captainId ? User::active()->pluck('id')->random() : null;
        $type = $userId ? 'user' : ($captainId ? 'captions' : $this->faker->randomElement(['user', 'captions']));
        return [
            'admin_id' => $adminId,
            'employee_id' => $employeeId,
            'agent_id' => $agentId,
            'company_id' => $companyId,
            'user_id' => $userId,
            'captain_id' => $captainId,
            'type' => $type,
            'status' => $this->faker->randomElement(['package','offer','subscriptions','card','company','bonuses']),
            'amount' => $this->faker->numberBetween($min = 150, $max = 1500),
            'payment_date' => $this->faker->date,
        ];
    }
}