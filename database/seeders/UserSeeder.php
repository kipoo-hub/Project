<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate([
            'name'     => 'Administrator',
            'email'    => 'admin1@example.com',
            'password' => Hash::make('password'),
            'role'     => 'admin'
        ]);

        User::create([
            'name'     => 'Petugas Layanan',
            'email'    => 'petugas@example.com',
            'password' => Hash::make('password'),
            'role'     => 'petugas'
        ]);
    }
}
