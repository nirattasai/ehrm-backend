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
            ]
        ];
        
        foreach($users as $user){
            User::create($user);
        }
        
    }
}
