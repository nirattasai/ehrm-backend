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
        $d = mktime(0,0,1);
        $logs = [
            [
                'date' => date("Y-m-d"),
                'login_time' => date("H:i:s", $d),
                'logout_time' => date("H:i:s", $d),
                'user_id' => 1,
                'is_late' => true
            ],
            [
                'date' => date("Y-m-d"),
                'login_time' => date("H:i:s", $d),
                'logout_time' => date("H:i:s", $d),
                'user_id' => 2,
                'is_absent' => true
            ],
            [
                'date' => date("Y-m-d"),
                'login_time' => date("H:i:s", $d),
                'logout_time' => date("H:i:s", $d),
                'user_id' => 3,
                'is_leave' => true
            ],
            [
                'date' => date("Y-m-d"),
                'login_time' => date("H:i:s", $d),
                'logout_time' => date("H:i:s", $d),
                'user_id' => 4
            ],
            [
                'date' => date("Y-m-d"),
                'login_time' => date("H:i:s", $d),
                'logout_time' => date("H:i:s", $d),
                'user_id' => 5
            ],
        ];

        foreach($logs as $log){
            Log::create($log);
        }
    }
}
