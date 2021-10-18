<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'position' => 'admin',
                'department' => 'admin',
                'role' => "admin",
                'image' => "",
            ],

            // Header
            [
                'name' => 'กลวัชร',
                'email' => 'hr@user.com',
                'password' => bcrypt('password'),
                'position' => 'Header HR',
                'department' => 'hr department',
                'role' => "header",
                'personal_leave_left' => 6,
                'image' => "",
            ],
            [
                'name' => 'ธนกฤต',
                'email' => 'sale@user.com',
                'password' => bcrypt('password'),
                'position' => 'Header Sale',
                'department' => 'sale department',
                'role' => 'header',
                'vacation_leave_left' => 7,
                'image' => "",
            ],
            [
                'name' => 'นิรัตศัย',
                'email' => 'it@user.com',
                'password' => bcrypt('password'),
                'position' => 'Header IT',
                'department' => 'it department',
                'role' => 'header',
                'maternity_leave_left' => 91,
                'image' => "",
            ],

            // User
                // HR department
            [
                'name' => 'Chat',
                'email' => 'user1@hr.com',
                'password' => bcrypt('password'),
                'position' => 'HR',
                'department' => 'hr department',
                'sick_leave_left' => 28,
                'image' => "",
            ],
            [
                'name' => 'Prapawarin',
                'email' => 'user2@hr.com',
                'password' => bcrypt('password'),
                'position' => 'HR',
                'department' => 'hr department',
                'sick_leave_left' => 29,
                'image' => "",
            ],
            [
                'name' => 'Pang',
                'email' => 'user3@hr.com',
                'password' => bcrypt('password'),
                'position' => 'HR',
                'department' => 'hr department',
                'vacation_leave_left' => 7,
                'image' => "",
            ],

                // Sale department
            [
                'name' => 'Bath',
                'email' => 'user1@sale.com',
                'password' => bcrypt('password'),
                'position' => 'Sale',
                'department' => 'sale department',
                'maternity_leave_left' => 90,
                'image' => "",
            ],
            [
                'name' => 'Bank',
                'email' => 'user2@sale.com',
                'password' => bcrypt('password'),
                'position' => 'Sale',
                'department' => 'sale department',
                'sick_leave_left' => 28,
                'image' => "",
            ],
            [
                'name' => 'Kiattikun',
                'email' => 'user3@sale.com',
                'password' => bcrypt('password'),
                'position' => 'Sale',
                'department' => 'sale department',
                'personal_leave_left' => 8,
                'image' => "",
            ],

                // IT department
            [
                'name' => 'First',
                'email' => 'user1@it.com',
                'password' => bcrypt('password'),
                'position' => 'IT',
                'department' => 'it department',
                'personal_leave_left' => 5,
                'image' => "",
            ],
            [
                'name' => 'Kon',
                'email' => 'user2@it.com',
                'password' => bcrypt('password'),
                'position' => 'IT',
                'department' => 'it department',
                'sick_leave_left' => 27,
                'image' => "",
            ],
            [
                'name' => 'Nok',
                'email' => 'user3@it.com',
                'password' => bcrypt('password'),
                'position' => 'IT',
                'department' => 'it department',
                'vacation_leave_left' => 5,
                'image' => "",
            ],
        ];
        
        foreach($users as $user){
            User::create($user);
        }
        
    }
}
