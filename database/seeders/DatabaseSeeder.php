<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat admin default langsung
        User::create([
            'name' => 'Admin',
            'email' => 'admin@display.com',
            'password' => bcrypt('admin123'), // wajib di-hash
        ]);
    }
}