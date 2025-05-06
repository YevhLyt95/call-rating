<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    public function run(){
        User::create([
            'name' => 'Sales User',
            'email' => 'sale@example.com',
            'password' => Hash::make('password'),
            'role' => 'sale',
         ]);
        User::create([
            'name' => 'Editor User',
            'email' => 'editor@example.com',
            'password' => Hash::make('password'),
            'role' => 'editor',
        ]);
    }
}
