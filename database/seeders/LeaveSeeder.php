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
        $leaves = [
            [
                'date_start' => "2021-01-11",
                'date_end' => "2021-01-14",
                'type' => "personal_leave",
                'leave_dates' => 4,
                'cause' => "ทำธุระ",
                'user_id' => 2,
                'status' => "confirmed",
            ],
            [
                'date_start' => "2021-02-22",
                'date_end' => "2021-02-24",
                'type' => "vacation_leave",
                'leave_dates' => 3,
                'cause' => "พักร้อน",
                'user_id' => 3,
                'status' => "confirmed",
            ],
            [
                'date_start' => "2021-03-04",
                'date_end' => "2021-03-10",
                'type' => "maternity_leave",
                'leave_dates' => 7,
                'cause' => "ลาคลอด",
                'user_id' => 4,
                'status' => "confirmed",
            ],
            [
                'date_start' => "2021-04-18",
                'date_end' => "2021-04-19",
                'type' => "sick_leave",
                'leave_dates' => 2,
                'cause' => "เป็นไข้",
                'user_id' => 5,
                'status' => "confirmed",
            ],
            [
                'date_start' => "2021-05-05",
                'date_end' => "2021-05-05",
                'type' => "sick_leave",
                'leave_dates' => 1,
                'cause' => "เป็นหวัด",
                'user_id' => 6,
                'status' => "confirmed",
            ],
            [
                'date_start' => "2021-06-12",
                'date_end' => "2021-06-14",
                'type' => "vacation_leave",
                'leave_dates' => 3,
                'cause' => "ไปน้ำตก",
                'user_id' => 7,
                'status' => "cancelled",
            ],
            [
                'date_start' => "2021-07-08",
                'date_end' => "2021-07-15",
                'type' => "maternity_leave",
                'leave_dates' => 8,
                'cause' => "ลาคลอด",
                'user_id' => 8,
                'status' => "confirmed",
            ],
            [
                'date_start' => "2021-08-26",
                'date_end' => "2021-08-27",
                'type' => "sick_leave",
                'leave_dates' => 2,
                'cause' => "ไปหาหมอ",
                'user_id' => 9,
                'status' => "confirmed",
            ],
            [
                'date_start' => "2021-09-29",
                'date_end' => "2021-09-30",
                'type' => "personal_leave",
                'leave_dates' => 2,
                'cause' => "ไปวันเกิด",
                'user_id' => 10,
                'status' => "cancelled",
            ],
            [
                'date_start' => "2021-10-19",
                'date_end' => "2021-10-23",
                'type' => "personal_leave",
                'leave_dates' => 5,
                'cause' => "ไปงานแต่ง",
                'user_id' => 11,
                'status' => "waiting",
            ],
            [
                'date_start' => "2021-07-23",
                'date_end' => "2021-07-25",
                'type' => "sick_leave",
                'leave_dates' => 3,
                'cause' => "เป็นโควิด-19",
                'user_id' => 12,
                'status' => "confirmed",
            ],
            [
                'date_start' => "2021-05-11",
                'date_end' => "2021-05-15",
                'type' => "vacation_leave",
                'leave_dates' => 5,
                'cause' => "ขึ้นดอย",
                'user_id' => 13,
                'status' => "cancelled",
            ],
        ];

        foreach($leaves as $leave){
            Leave::create($leave);
        }
    }
}
