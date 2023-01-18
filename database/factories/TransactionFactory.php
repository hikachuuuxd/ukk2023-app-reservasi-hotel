<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'totalOrder' => $this->faker->numberBetween($min = 150, $max = 647),
            'tglTransaction' => $this->faker->date(),
            'order_id' => mt_rand(1, 5),
        ];
    }
}
