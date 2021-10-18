<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }
    
    public function create_user(Request $request){
        $user = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'position' => $request->input('position'),
                'department' => $request->input('department'),
                'role' => $request->input('role'),
                'image' => $request->input('image')
        ];

        $user_create = User::create($user);

        $d = mktime(0,0,1);
        Log::create([
            'date' => date("Y-m-d"),
            'login_time' => date("H:i:s", $d),
            'logout_time' => date("H:i:s", $d),
            'user_id' => $user_create->id
        ]);
        return "success";
    }
    public function remove_user(Request $request){
        $user = User::find($request->input('id'));
        $user->delete();

        return "remove success";
    }
    public function get_user($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function all_users(Request $request){
        $users = DB::table('users')
                ->where('role', '!=', 'admin')
                ->get();
        return response()->json($users);
    }
}
