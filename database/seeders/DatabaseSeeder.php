<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat Admin MenuGO
        User::updateOrCreate(
            ['email' => 'admin@menugo.com'],
            [
                'name' => 'Admin MenuGO',
                'password' => Hash::make('adminn123'),
                'role' => 'admin_menugo',
            ]
        );

        // Buat Owner UMKM
        User::updateOrCreate(
            ['email' => 'owner@menugo.com'],
            [
                'name' => 'Owner Bebek Setiawan',
                'password' => Hash::make('ownerumkm123'),
                'role' => 'owner_umkm',
            ]
        );
    }
}
