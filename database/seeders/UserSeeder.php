<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (UserRole::cases() as $role) {
            User::create([
                'name' => $role->name . ' User',
                'email' => strtolower($role->name) . '@marriott.edu',
                'password' => Hash::make('password'),
                'role' => $role->value,
            ]);
        }
    }
}
