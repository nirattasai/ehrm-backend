<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB;

class LeaveController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = Leave::with("user")->get();
        return response()->json(array(
            'message' => 'all',
            'data' => $leaves
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $leaves = $user->leaves;
        return response()->json(array(
            'data' => $leaves
        ));
    }

    public function myLeaves() {
        $user = JWTAuth::user();
        $leaves = $user->leaves;
        return response()->json(array(
            'data' => $leaves
        ));
    }

    public function waitingLeaves(Request $request){
        $user = JWTAuth::user();
        $raw = "select leaves.id, users.id as user_id, leaves.created_at, users.name from leaves inner join users on leaves.user_id = users.id where department = '".$user->department."' and status = 'waiting'";
        $leaves = DB::select(DB::raw($raw));
        return response()->json($leaves);
    }

    public function waitingLeavesById($id){
        $leaves = Leave::with('user')
                  ->where('user_id', '=', $id)
                  ->get();
        return $leaves;
    }

    public function update_status(Request $request, $id){
        $leave = Leave::findOrFail($id);
        $leave->status = $request->input('status');
        $leave->save();

        if ($leave->status == "confirmed"){
            $sql_leave_type = $leave->type."_left";

            DB::update("update users set ".$sql_leave_type." = ".$sql_leave_type. "- ".$leave->leave_dates." where id = ".$leave->user_id);

        }
        
        return "update success";
    }
    
    public function leavesByDate($date) {
        $raw = "select * from leaves inner join users on leaves.user_id = users.id where '".$date."'  between date_start and date_end and status = 'confirmed'";
        $leaves = DB::select(
            DB::raw($raw)
        );
        return response()->json($leaves);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
