<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
<<<<<<< HEAD
            'password' => Hash::make('admin123'),
=======
            'password' => Hash::make('admin'),
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
        ]);
    }
}
