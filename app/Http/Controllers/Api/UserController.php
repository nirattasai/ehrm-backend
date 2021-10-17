<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Log;
use App\Models\Leave;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function start_day(Request $request){
        $user = JWTAuth::user();
        $start_time = $request->input('start_time');
        $user_id = $user->id;
        $date = $request->input('date');
        $response = DB::update('update logs set login_time = ? where user_id = ? and date = ?',[$start_time, $user_id, $date]);
        return $response;
    }

    public function end_day(Request $request){
        $user = JWTAuth::user();
        $end_time = $request->input('end_time');
        $user_id = $user->id;
        $date = $request->input('date');
        DB::update('update logs set logout_time = ? where user_id = ? and date = ?',[$end_time, $user_id, $date]);
        $time = DB::select('select login_time, logout_time from logs where user_id = ? and date = ?',[$user_id, $date]);
        $start_time = date_create($time[0]->login_time);
        $end_time = date_create($end_time);

        $total_hour = date_diff($start_time, $end_time);

        $minutes = $total_hour->days * 24 * 60;
        $minutes += $total_hour->h * 60;
        $minutes += $total_hour->i;

        // Change from float to string
        $total_hours = sprintf('%02d', intdiv($minutes, 60)).':'.sprintf('%02d', ($minutes % 60));

        DB::update('update logs set total_hours = ? where user_id = ? and date = ?',[$total_hours, $user_id, $date]);
        
        return $minutes;
        // return "success";
    }
    
    public function create_leave(Request $request){
        $user = JWTAuth::user();
        $date_start = $request->input('date_start');
        $date_end = $request->input('date_end');
        $type = $request->input('type');
        $leave_dates = $request->input('leave_dates');
        $cause = $request->input('cause');
        $user_id = $user->id;

        $query_type = $type.'_left';
        $qu_left = DB::select('select '.$query_type.' from users where id = '.$user_id);
        $left = $qu_left[0]->$query_type;
        if ($left < $leave_dates){
            return response()->json([
                'status' => 'error'
            ]
            );
        }

        $leave = Leave::create([
            'date_start' => $date_start,
            'date_end' => $date_end,
            'type' => $type,
            'leave_dates' => $leave_dates,
            'cause' => $cause,
            'user_id' => $user_id,

        ]);

        return response()->json([
            'status' => 'success'
        ]);
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
