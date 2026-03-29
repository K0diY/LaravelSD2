<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        Conference::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'surname' => 'User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'name' => 'Jonas',
            'surname' => 'Jonaitis',
            'email' => 'jonas@example.com',
            'password' => bcrypt('password123'),
        ]);
    }
}