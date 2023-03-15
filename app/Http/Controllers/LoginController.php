<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index () {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password'), 'role_id' => 1])){
            $user = Auth::user();
            $success['token'] = $user->createToken('appToken')->accessToken;
            $request->session()->regenerate();
            return redirect()->intended();
        } else {
            return back()->with('loginError','Your email or password does not match our records');
        }

        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended();
        // }

        // return back()->with('loginError','Your email or password does not match our records');
    }
}
