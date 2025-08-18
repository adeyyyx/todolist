<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 1 admin
        User::create([
            'name' => 'Admin Project',
            'email' => 'admin@todolist.com',
            'password' => Hash::make('password'), // default password
            'role' => 'admin',
        ]);

        // Buat 5 user random
        User::factory(5)->create([
            'role' => 'user',
        ]);
    }
}
