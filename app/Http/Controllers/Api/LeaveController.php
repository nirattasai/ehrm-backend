<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

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

    public function leavesByDate($date) {
        $leaves = Leave::where("created_at", "=", $date)->get();
        return response()->json(array(
            'message' => $date,
            'data' => $leaves
        ));
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
