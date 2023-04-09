<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@booking.com',
            'password' => bcrypt('adminadmin'),
            'email_verified_at' => now(),
            'role_id' => 1, // Administrador
        ]);
    }
}
