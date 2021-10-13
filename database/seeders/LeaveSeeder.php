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
            [
                'date_start' => date("2021-10-11"),
                'date_end' => date("2021-10-12"),
                'type' => "sick_leave",
                'leave_dates' => 3,
                'cause' => "กินไม่ได้ นอนไม่หลับ กระส่ายกระสับ ตับพิการ อาหารไม่ย่อย",
                'user_id' => 6,
            ],
            [
                'date_start' => date("2021-10-15"),
                'date_end' => date("2021-10-15"),
                'type' => "personal_leave",
                'leave_dates' => 1,
                'cause' => "จะดูไข่เน่าไลฟ์ อย่ามากวน",
                'user_id' => 6,
            ],
            [
                'date_start' => date("2021-10-18"),
                'date_end' => date("2021-10-22"),
                'type' => "vacation_leave",
                'leave_dates' => 5,
                'cause' => "หนีเที่ยวดีกว่า งานการไม่อยากทำ เหน่ย",
                'user_id' => 6,
            ],
            [
                'date_start' => date("2021-10-25"),
                'date_end' => date("2021-10-27"),
                'type' => "personal_leave",
                'leave_dates' => 3,
                'cause' => "ไม่มีอะไร วันลามันเหลือ",
                'user_id' => 6,
            ],

        ];

        foreach($leaves as $leave){
            Leave::create($leave);
        }
    }
}
