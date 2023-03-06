<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


         \App\Models\User::factory(3)->create();
        // Fasility Kamar
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

    //    User Data

        \App\Models\User::factory()->create([
             'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 1
          
        ]);
        \App\Models\User::factory()->create([
             'name' => 'Reservasi',
            'email' => 'reservasi@example.com',
            'role' => 2
          
        ]);

        // Room Data
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

    //    Hotel Data
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

//    Order Data
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
?>