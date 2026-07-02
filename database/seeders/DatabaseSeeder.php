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
        User::create([
            'name' => 'Admin Ponce',
            'email' => 'admin@ponce.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Contador Ponce',
            'email' => 'contador@ponce.com',
            'password' => bcrypt('contador123'),
            'role' => 'contador',
        ]);

        User::create([
            'name' => 'Asistente Ponce',
            'email' => 'asistente@ponce.com',
            'password' => bcrypt('asistente123'),
            'role' => 'asistente',
        ]);

        User::create([
            'name' => 'Cliente Ejemplo',
            'email' => 'cliente@ponce.com',
            'password' => bcrypt('cliente123'),
            'role' => 'cliente',
        ]);
    }
}
