<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Order::factory()->create([
            'checkIn' => '2023-03-09',
            'checkOut' => '2023-03-11',
            'totalRoom' => '2',
            'room_id' => 1,
            'user_id' => 2,
         
       ]);
        \App\Models\Order::factory()->create([
            'checkIn' => '2023-03-11',
            'checkOut' => '2023-03-12',
            'totalRoom' => '1',
            'room_id' => 2,
            'user_id' => 1,
         
       ]);
        \App\Models\Order::factory()->create([
            'checkIn' => '2023-03-15',
            'checkOut' => '2023-03-17',
            'totalRoom' => '3',
            'room_id' => 3,
            'user_id' => 3,
         
       ]);
    }
}
