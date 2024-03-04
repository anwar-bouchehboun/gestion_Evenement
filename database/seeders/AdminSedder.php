<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSedder extends Seeder
{

    public function run(): void
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role'=>'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
         $user->assignRole('admin');
    }
}