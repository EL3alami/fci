<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create a student user
        User::factory()->create([
            'SSN' => '12345678901234',
            'Full_Name' => 'Test Student',
            'Email' => 'student@test.com',
            'Role' => 'student',
            'PasswordHash' => Hash::make('password123'),
        ]);

        // Create a professor user
        User::factory()->create([
            'SSN' => '11223344556677',
            'Full_Name' => 'Test Professor',
            'Email' => 'professor@test.com',
            'Role' => 'professor',
            'PasswordHash' => Hash::make('password123'),
        ]);

        // Create an admin user
        User::factory()->create([
            'SSN' => '99887766554433',
            'Full_Name' => 'Test Admin',
            'Email' => 'admin@test.com',
            'Role' => 'admin',
            'PasswordHash' => Hash::make('password123'),
        ]);
    }
}
