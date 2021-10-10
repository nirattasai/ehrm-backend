<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    //
    public function create_user(Request $request){
        $user = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'position' => $request->input('position'),
                'department' => $request->input('department'),
        ];

        User::create($user);
        return "success";
    }

    public function remove_user(Request $request){
        $user = User::find($request->input('id'));
        $user->delete();

        return "remove success";
    }

    public function all_users(Request $request){
        $users = User::all();
        return response()->json($users);
    }
}
