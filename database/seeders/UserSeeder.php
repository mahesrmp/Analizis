<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['email' => 'admin@gmail.com', 'name' => 'admin', 'password' => bcrypt('admin123'), 'role' => 'admin'],
            ['email' => 'user@gmail.com', 'name' => 'user', 'password' => bcrypt('user123'), 'role' => 'user'],
            ['email' => 'manager@gmail.com', 'name' => 'manager', 'password' => bcrypt('manager123'), 'role' => 'manager'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
