<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        // login method
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return Auth::user();
        }

        return "out";
    }

    public function about_me(Request $request){
        return Auth::user();
    }

    public function logout(Request $request){
        Auth::logout();

        return Auth::user();
    }

    public function is_admin(Request $request){
        return Auth::user();
    }
}
