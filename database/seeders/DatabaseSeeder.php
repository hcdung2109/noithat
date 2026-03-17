<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure default test user exists
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => 'password', // default factory-like password
            ],
        );

        // Ensure admin account exists
        User::firstOrCreate(
            ['email' => 'binh@gmail.com'],
            [
                'name' => 'Binh',
                'password' => '12345678', // will be hashed by cast
            ],
        );

        $this->call(ProjectSeeder::class);
    }
}
