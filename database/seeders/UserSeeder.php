<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Carlos Gómez',
            'email' => 'carlosgomez@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'rol' => 2 
        ]);

        User::create([
            'name' => 'Ana Torres',
            'email' => 'anatorres@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'rol' => 2
        ]);

        User::create([
            'name' => 'Luis Fernández',
            'email' => 'luisfernandez@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'rol' => 2
        ]);

        User::create([
            'name' => 'Marta López',
            'email' => 'martalopez@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'rol' => 2
        ]);

        User::create([
            'name' => 'Jorge Martínez',
            'email' => 'jorgemartinez@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'rol' => 2
        ]);

        User::factory()->count(5)->create([
            'rol' => 2
        ]);

        User::factory()->count(100)->create([
            'rol' => 1
        ]);
    }
}
