<?php

namespace Database\Factories;
use App\Models\Fasility;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fasility>
 */
class FasilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
      
        return [
            'name' => $this->faker->sentence(mt_rand(2, 4))
        ];
    }
}
