<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Admin\AdminSeeder;
use Database\Seeders\Frontend\UserSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([

             'name' => 'Azizul Hakim',
            'email' => 'ahakim@gmail.com',
            'password' => bcrypt('password'),
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
        ]);

        $this->call([
            // AdminSeeder::class
            UserSeeder::class
        ]);
    }
}
