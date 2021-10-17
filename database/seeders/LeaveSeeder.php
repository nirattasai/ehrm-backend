<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leave;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $d_s = mktime(0,0,0,1,1,2021);
        $d_e = mktime(0,0,0,1,5,2021);
        $leaves = [
            [
                'date_start' => date("Y-m-d", $d_s),
                'date_end' => date("Y-m-d", $d_e),
                'type' => "sick_leave",
                'leave_dates' => 5,
                'cause' => "--Some message or detail--",
                'user_id' => 1,
            ],
            [
                'date_start' => date("Y-m-d", $d_s),
                'date_end' => date("Y-m-d", $d_e),
                'type' => "personal_leave",
                'leave_dates' => 5,
                'cause' => "--Some message or detail--",
                'user_id' => 2,
            ],
            [
                'date_start' => date("Y-m-d", $d_s),
                'date_end' => date("Y-m-d", $d_e),
                'type' => "vacation_leave",
                'leave_dates' => 5,
                'cause' => "--Some message or detail--",
                'user_id' => 3,
            ],
            [
                'date_start' => date("Y-m-d", $d_s),
                'date_end' => date("Y-m-d", $d_e),
                'type' => "maternity_leave",
                'leave_dates' => 5,
                'cause' => "--Some message or detail--",
                'user_id' => 4,
            ],
            [
                'date_start' => date("Y-m-d", $d_s),
                'date_end' => date("Y-m-d", $d_e),
                'type' => "sick_leave",
                'leave_dates' => 5,
                'cause' => "--Some message or detail--",
                'user_id' => 5,
            ],
        ];

        foreach($leaves as $leave){
            Leave::create($leave);
        }
    }
}
