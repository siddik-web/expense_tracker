<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $expenseCategory = config('expanse.expense_category');
        $expenseType = config('expanse.expense_payment_method');

        return [
            'description' => $this->faker->sentence(),
            'expense_date' => $this->faker->dateTimeThisMonth(),
            'amount' => $this->faker->randomFloat(2, 1, 1000000),
            'category' => $this->faker->randomElement($expenseCategory),
            'payment_method' => $this->faker->randomElement($expenseType),
            'user_id' => 1
        ];
    }
}
