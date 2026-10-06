<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@perpustakaan.test'],
            [
                'name' => 'Admin Perpustakaan',
                'password' => Hash::make('password'),
            ]
        );
    }
}