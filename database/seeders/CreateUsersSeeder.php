<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@gg.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Instruktur User',
                'email' => 'instruktur@gg.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Leonardus Reka',
                'email' => 'reka@gg.com',
                'type' => 2,
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
