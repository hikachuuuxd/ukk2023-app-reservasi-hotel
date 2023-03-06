<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hotel::factory()->create([
            'name' => "Kolam Renang",
         
       ]);
        \App\Models\Hotel::factory()->create([
            'name' => "Restaurant",
         
       ]);
        \App\Models\Hotel::factory()->create([
            'name' => "Layanan Resepsionis 24 Jam",
         
       ]);
        \App\Models\Hotel::factory()->create([
            'name' => "Tempat Gym",
         
       ]);
        \App\Models\Hotel::factory()->create([
            'name' => "Ruang Spa",
         
       ]);
    }
}
