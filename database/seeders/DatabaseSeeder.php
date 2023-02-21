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
        \App\Models\Room::factory(5)->create();
        \App\Models\Fasility::factory(10)->create();
        \App\Models\FasilityRoom::factory(10)->create();
        \App\Models\Order::factory(5)->create();
         \App\Models\User::factory(3)->create();
        \App\Models\Transaction::factory(5)->create();
        \App\Models\Hotel::factory(5)->create();

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
    }
}
