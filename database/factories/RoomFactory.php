<?php

namespace Database\Factories;
use App\Models\Room;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        
        return [
            'name' => $this->faker->sentence(mt_rand(2, 4)),
            'description' => $this->faker->paragraph(mt_rand(5, 8)),
            'price' => $this->faker->numberBetween($min = 150, $max = 647),
            'total' => $this->faker->randomDigitNotNull(),
            'image' => 'deluxe.jpg'
        ];
    }
}
