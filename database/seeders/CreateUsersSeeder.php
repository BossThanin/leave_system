<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\User;
use App\Models\Position;
use App\Models\Leavetype;

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
                'name' => 'ProjectManager',
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
                'position_name' => 'Project_Manager'
            ],
            [
                'position_name' => 'Employee'
            ]
        ];

        $leavetype = [
            [
                'leavetype_name' => 'ลาป่วย'
            ],
            [
                'leavetype_name' => 'ลาพักผ่อนประจำปี'
            ],
            [
                'leavetype_name' => 'ลากิจ'
            ],
            [
                'leavetype_name' => 'ลาอุปสมบท'
            ],
            [
                'leavetype_name' => 'ลาเพื่อสมรส'
            ],
            [
                'leavetype_name' => 'ลาคลอดบุตร'
            ],
            [
                'leavetype_name' => 'ลารับราชหารทหาร'
            ],
            [
                'leavetype_name' => 'ลาเพื่อทำหมัน'
            ],
            [
                'leavetype_name' => 'ลาเพื่อการฝึกอบรม'
            ]
        ];  
        $employee = [
            [
                'first_name' => 'Tony',
                'last_name' => 'Stark',
                'position_id' => 1
            ],
            [
                'first_name' => 'Thor',
                'last_name' => 'Odinson',
                'position_id' => 2
            ],
            [
                'first_name' => 'Captain',
                'last_name' => 'America',
                'position_id' => 3
            ],
        ];  
        User::insert($users);
        Position::insert($positions);
        leavetype::insert($leavetype);
        Employee::insert($employee);
    }
}
