<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Log;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $logs = [
            //////////////////////////////////////////////////----------   2   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-01-07",
                'login_time' => "09:00:00",
                'logout_time' => "18:00:00",
                'user_id' => 2,
                'total_hours' => "09:00"
            ],
            [
                'date' => "2021-05-19",
                'login_time' => "09:03:00",
                'logout_time' => "18:04:00",
                'user_id' => 2,
                'total_hours' => "09:01"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 2,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   3   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-02-08",
                'login_time' => "09:05:00",
                'logout_time' => "18:08:00",
                'user_id' => 3,
                'total_hours' => "09:03"
            ],
            [
                'date' => "2021-06-17",
                'login_time' => "09:06:00",
                'logout_time' => "18:10:00",
                'user_id' => 3,
                'total_hours' => "09:04"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 3,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   4   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-03-09",
                'login_time' => "09:03:00",
                'logout_time' => "18:06:00",
                'user_id' => 4,
                'total_hours' => "09:03"
            ],
            [
                'date' => "2021-06-15",
                'login_time' => "09:07:00",
                'logout_time' => "18:08:00",
                'user_id' => 4,
                'total_hours' => "09:01"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 4,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   5   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-04-10",
                'login_time' => "09:05:00",
                'logout_time' => "18:05:00",
                'user_id' => 5,
                'total_hours' => "09:00"
            ],
            [
                'date' => "2021-07-23",
                'login_time' => "09:04:00",
                'logout_time' => "18:06:00",
                'user_id' => 5,
                'total_hours' => "09:02"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 5,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   6   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-05-10",
                'login_time' => "09:01:00",
                'logout_time' => "17:00:00",
                'user_id' => 6,
                'total_hours' => "08:59"
            ],
            [
                'date' => "2021-09-21",
                'login_time' => "09:07:00",
                'logout_time' => "18:05:00",
                'user_id' => 6,
                'total_hours' => "08:58"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 6,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   7   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-06-09",
                'login_time' => "09:06:00",
                'logout_time' => "18:08:00",
                'user_id' => 7,
                'total_hours' => "09:02"
            ],
            [
                'date' => "2021-08-12",
                'login_time' => "09:00:00",
                'logout_time' => "18:00:00",
                'user_id' => 7,
                'total_hours' => "09:00"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 7,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   8   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-03-04",
                'login_time' => "09:00:00",
                'logout_time' => "18:00:00",
                'user_id' => 8,
                'total_hours' => "09:00"
            ],
            [
                'date' => "2021-07-11",
                'login_time' => "09:04:00",
                'logout_time' => "18:07:00",
                'user_id' => 8,
                'total_hours' => "09:03"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 8,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   9   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-07-14",
                'login_time' => "09:00:00",
                'logout_time' => "18:00:00",
                'user_id' => 9,
                'total_hours' => "09:00"
            ],
            [
                'date' => "2021-08-19",
                'login_time' => "09:04:00",
                'logout_time' => "18:00:00",
                'user_id' => 9,
                'total_hours' => "08:56"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 9,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   10   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-06-04",
                'login_time' => "09:02:00",
                'logout_time' => "18:00:00",
                'user_id' => 10,
                'total_hours' => "08:58"
            ],
            [
                'date' => "2021-09-15",
                'login_time' => "09:05:00",
                'logout_time' => "17:55:00",
                'user_id' => 10,
                'total_hours' => "08:50"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 10,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   11   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-04-16",
                'login_time' => "09:01:00",
                'logout_time' => "18:00:00",
                'user_id' => 11,
                'total_hours' => "08:59"
            ],
            [
                'date' => "2021-09-17",
                'login_time' => "09:00:00",
                'logout_time' => "18:00:00",
                'user_id' => 11,
                'total_hours' => "09:00"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 11,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   12   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-01-16",
                'login_time' => "09:00:00",
                'logout_time' => "17:59:00",
                'user_id' => 12,
                'total_hours' => "08:59"
            ],
            [
                'date' => "2021-03-17",
                'login_time' => "09:00:00",
                'logout_time' => "18:01:00",
                'user_id' => 12,
                'total_hours' => "09:01"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 12,
                'total_hours' => "00:00"
            ],
            //////////////////////////////////////////////////----------   13   ----------//////////////////////////////////////////////////
            [
                'date' => "2021-02-25",
                'login_time' => "09:07:00",
                'logout_time' => "18:12:00",
                'user_id' => 13,
                'total_hours' => "09:05"
            ],
            [
                'date' => "2021-07-17",
                'login_time' => "09:01:00",
                'logout_time' => "18:02:00",
                'user_id' => 13,
                'total_hours' => "09:01"
            ],
            [
                'date' => "2021-10-19",
                'login_time' => "00:00:01",
                'logout_time' => "00:00:01",
                'user_id' => 13,
                'total_hours' => "00:00"
            ],
        ];

        foreach($logs as $log){
            Log::create($log);
        }
    }
}
