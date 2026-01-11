<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This seeder is safe to run in production to create admin accounts.
     */
    public function run(): void
    {
        // Main Admin Account
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@ramoilsystem.com')],
            [
                'name' => env('ADMIN_NAME', 'بەڕێوەبەری یەکەم'),
                'phone' => env('ADMIN_PHONE', '0750 000 0000'),
                'role' => 'admin',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
                'email_verified_at' => now(),
            ]
        );

        // Rebwar Ali Account
        User::updateOrCreate(
            ['email' => env('REBWAR_EMAIL', 'example@ramoilsystem.com')],
            [
                'name' => env('REBWAR_NAME', 'ڕێبوار'),
                'phone' => env('REBWAR_PHONE', '0750 000 0000'),
                'role' => env('REBWAR_ROLE', 'admin'),
                'password' => Hash::make(env('REBWAR_PASSWORD', 'password')),
                'email_verified_at' => now(),
            ]
        );
    }
}
