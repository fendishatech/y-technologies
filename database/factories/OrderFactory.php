<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'order_no' => fake()->unique()->numberBetween(10000000, 99999999),
            'material' => fake()->randomElement(['sheet metal', 'lamera']),
            'size' => fake()->randomNumber(3, false) . 'mm*' . fake()->randomNumber(3, false) . 'mm',
            'thickness' => fake()->randomElement(["3mm", "6mm", "9mm"]),
            'quantity' => fake()->numberBetween(1, 50),
            'completed' => fake()->numberBetween(0, 20),
            'item_name' => fake()->words(2, true),
            'item_id' => fake()->uuid(),
            'progress' => fake()->randomElement(['pending', 'completed']),
            'status' => fake()->randomElement(['active', 'completed']),
            'price' => fake()->randomFloat(2, 10, 1000),
            'prepay' => fake()->randomFloat(2, 0, 500),
            'remaining' => fake()->randomFloat(2, 0, 500),
        ];
    }
}
