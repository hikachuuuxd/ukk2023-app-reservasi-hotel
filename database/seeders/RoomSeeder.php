<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Room::factory()->create([
            'name' => 'Deluxe',
            'slug' => 'deluxe',
            'description' => 'terletak di lantai 3 dengan pemandangan kolam dan taman yang indah',
            'price' => 500.000,
            'total' => 10,
         
       ]);
        \App\Models\Room::factory()->create([
            'name' => 'Superior',
            'slug' => 'superior',
            'description' => 'Kamar dengan ukuran berukuran 30 m2. Terletak di lantai 2 ',
            'price' => 300.000,
            'total' => 10,
         
       ]);
        \App\Models\Room::factory()->create([
            'name' => 'Standart',
            'slug' => 'standart',
            'description' => 'Minimalis, murah dan nyaman',
            'price' => 150.000,
            'total' => 10,
         
       ]);
    }
}
