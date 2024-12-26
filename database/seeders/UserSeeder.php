<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'user@gmail.com',
                'name' => 'User 1',
                'password' => bcrypt('foobarrr'),
            ],
            [
                'email' => 'user2@gmail.com',
                'name' => 'User 2',
                'password' => bcrypt('foobarrr'),

            ],
            [
                'email' => ' user3@gmail.com',
                'name' => 'User 3',
                'password' => bcrypt('foobarrr'),
            ],
        ];

        $admin = User::firstOrCreate([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => bcrypt('foobarrr'),
        ]);

        $admin->assignRole('admin');

        foreach ($users as $user) {
            $userModel = User::firstOrCreate($user);
            $userModel->assignRole('user');
        }
    }
}
