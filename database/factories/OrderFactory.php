<?php

namespace Database\Factories;
use App\Models\Order;
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
    public function definition()
    {
        return [
            'checkIn' => $this->faker->date(),
            'checkOut' => $this->faker->date(),
            'totalRoom' => $this->faker->randomDigit(),
            'room_id' => mt_rand(1, 5),
            'user_id' => mt_rand(1, 5),

        ];
    }
}
