<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserMobileController extends Controller
{
    public function login() {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] = $user->createToken('appToken')->accessToken;
            return response()->json([
                'success' => true,
                'token' => $success,
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Your credentials does not match our records',
            ], 401);
        }
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);
        if($validator->fails()){
            return response()->json([
            'success' => false,
            'message' => $validator->errors(),
            ], 401);
        }
        $input = $request->all();
        $input['role_id'] = 2;
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('appToken')->accessToken;
        return response()->json([
            'success' => true,
            'token' => $success,
            'user' => $user
        ]);
    }

    public function logout(){
        if(Auth::user()){
            $user = Auth::user();
            $user->tokens()->delete();
            return response()->json([
                'success' => true,
                'message' => 'Logout successfully',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Unable to Logout',
            ]);
        }
    }

    public function changePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string'],
            'newPassword' => ['required', 'string'],
            'confirmPassword' => ['required', 'same:newPassword'],
        ], [
            'confirmPassword.same' => 'Your new password and confirm password does not match'
        ]);
        if($validator->fails()){
            return response()->json([
            'success' => false,
            'message' => $validator->errors(),
            ], 401);
        }
        $input = $request->all();
        $user = Auth::user();
        $user->password = Hash::make($input['newPassword']);
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'Password changed successfully',
        ]);
    }
}
