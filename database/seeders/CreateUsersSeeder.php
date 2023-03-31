<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Position;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => '1',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'User',
                'email' => 'pm@gmail.com',
                'role' => '2',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => '3',
                'password' => bcrypt('12345678')
            ]
        ];
  
        $positions = [
            [
                'position_name' => 'Admin'
            ],
            [
                'position_name' => 'Employee'
            ],
            [
                'position_name' => 'Project_Manager'
            ]
        ];
  
        // Insert records into the users table
        User::insert($users);

        // Insert records into the positions table
        Position::insert($positions);
    }
}
