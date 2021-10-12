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
        //

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'position' => 'admin_position',
                'department' => 'admin_department',
                'is_admin' => true,
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('password'),
                'position' => 'HR',
                'department' => 'hr department',
            ],
            [
                'name' => 'user1',
                'email' => 'user1@user.com',
                'password' => bcrypt('password'),
                'position' => 'SALE',
                'department' => 'sale department',
            ],
            [
                'name' => 'user2',
                'email' => 'user2@user.com',
                'password' => bcrypt('password'),
                'position' => 'QA',
                'department' => 'qa department',
            ],
            [
                'name' => 'user3',
                'email' => 'user3@user.com',
                'password' => bcrypt('password'),
                'position' => 'CEO',
                'department' => 'CEO',
            ],
            [
                'name' => 'Kiattikun Thongudom',
                'email' => 'kiattikun.tho@ku.th',
                'password' => bcrypt('1874Fca7@'),
                'position' => 'Developer',
                'department' => 'IT department',
            ]
        ];
        
        foreach($users as $user){
            User::create($user);
        }
        
    }
}
