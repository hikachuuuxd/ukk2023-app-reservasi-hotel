<?php

namespace Database\Factories;
use App\Models\FasilityRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FasilityRoom>
 */
class FasilityRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $fillable = ['room_id, fasility_id'];
    public function definition()
    {

        
   
        return [
            'room_id' => mt_rand(1, 5),
            'fasility_id' => mt_rand(1, 10),
        ];
    }
}
