<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Fasility::factory()->create([
            'name' => 'Televisi',
         
       ]);
        \App\Models\Fasility::factory()->create([
            'name' => 'Kulkas',
         
       ]);
        \App\Models\Fasility::factory()->create([
            'name' => 'Almari 2 Pintu',
         
       ]);
        \App\Models\Fasility::factory()->create([
            'name' => 'Sofa',
         
       ]);
        \App\Models\Fasility::factory()->create([
            'name' => 'AC',
         
       ]);
        \App\Models\Fasility::factory()->create([
            'name' => 'Microwave',
         
       ]);
        \App\Models\Fasility::factory()->create([
            'name' => 'Internet',
         
       ]);
        \App\Models\Fasility::factory()->create([
            'name' => 'Ruang Kerja Pribadi',
         
       ]);
        \App\Models\Fasility::factory()->create([
            'name' => 'Kipas Angin'
         
       ]);
    }
}
