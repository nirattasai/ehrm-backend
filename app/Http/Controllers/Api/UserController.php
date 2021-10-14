<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Log;
use App\Models\Leave;

class UserController extends Controller
{
    //
    public function start_day(Request $request){
        $start_time = $request->input('start_time');
        $user_id = $request->input('user_id');
        $date = $request->input('date');
        $response = DB::update('update logs set login_time = ? where user_id = ? and date = ?',[$start_time, $user_id, $date]);
        return $response;
    }

    public function end_day(Request $request){
        
        $end_time = $request->input('end_time');
        $user_id = $request->input('user_id');
        $date = $request->input('date');
        DB::update('update logs set logout_time = ? where user_id = ? and date = ?',[$end_time, $user_id, $date]);
        $time = DB::select('select login_time, logout_time from logs where user_id = ? and date = ?',[$user_id, $date]);
        $start_time = date_create($time[0]->login_time);
        $end_time = date_create($end_time);

        $total_hour = date_diff($start_time, $end_time);

        $minutes = $total_hour->days * 24 * 60;
        $minutes += $total_hour->h * 60;
        $minutes += $total_hour->i;

        DB::update('update logs set total_hours = ? where user_id = ? and date = ?',[$minutes/60, $user_id, $date]);
        
        return $minutes;
        // return "success";
    }
    
    public function create_leave(Request $request){
        $date_start = $request->input('date_start');
        $date_end = $request->input('date_end');
        $type = $request->input('type');
        $leave_dates = $request->input('leave_dates');
        $cause = $request->input('cause');
        $user_id = $request->input('user_id');

        $leave = Leave::create([
            'date_start' => $date_start,
            'date_end' => $date_end,
            'type' => $type,
            'leave_dates' => $leave_dates,
            'cause' => $cause,
            'user_id' => $user_id,
        ]);

        $sql_leave_type = NULL;
        if ($type == 'sick_leave'){
            $sql_leave_type = 'sick_leave_left';
        }
        elseif ($type == 'personal_leave'){
            $sql_leave_type = 'personal_leave_left';
        }
        elseif ($type == 'vacation_leave'){
            $sql_leave_type = 'vacation_leave_left';
        }
        elseif ($type == 'maternity_leave'){
            $sql_leave_type = 'maternity_leave_left';
        }

        DB::update("update users set ".$sql_leave_type." = ".$sql_leave_type. "- ".$leave_dates." where id = ".$user_id);

        return $leave;
    }

    public function test(Request $request){
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
        return $logs;
    }
}
