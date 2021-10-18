<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use App\Models\Log;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function (){
            $users = DB::select('select * from users');
            $d = mktime(0,0,1);
            foreach($users as $user){
                Log::create([
                    'date' => date("Y-m-d"),
                    'login_time' => date("H:i:s", $d),
                    'logout_time' => date("H:i:s", $d),
                    'user_id' => $user->id
                ]);
            }
        })->daily();

        $schedule->call(function (){
            $logs = DB::select('select * from logs where date = ?',[date("Y-m-d")]);
            foreach($logs as $log){
                $login_time = strtotime($log->login_time);
                $late_time = strtotime(env('LATE_TIME'));
                if(($log->login_time == "00:00:01" or $log->logout_time == "00:00:01") and $log->is_leave == 0){
                    DB::update("update logs set is_absent = 1 where id = ?",[$log->id]);
                }
                else if(($login_time >= $late_time) and $log->is_leave == 0){
                    DB::update("update logs set is_late = 1 where id = ?",[$log->id]);
                }
            }
        })->dailyAt(env('OUT_TIME'));

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
