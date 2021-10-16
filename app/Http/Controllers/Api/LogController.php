<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LogResource;
use App\Http\Resources\LogCollection;
use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class LogController extends Controller
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
        $logs = Log::get();
        return response()->json(array(
            'message' => 'all',
            'data' => $logs
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
        $logs = $user->logs;
        return response()->json(array(
            'data' => $logs
        ));
    }

    public function myLogs() {
        $user = JWTAuth::user();
        $logs = $user->logs;
        return response()->json(array(
            'data' => $logs
        ));
    }

    public function logsByDate($date) {
        $logs = Log::where("date", "=", $date)->get();
        return response()->json(array(
            'message' => $date,
            'data' => $logs
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
