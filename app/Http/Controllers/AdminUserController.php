<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    public function index () {
        $users = DB::table('users')->paginate(10);
        return view('admin-user', ['users' => $users]);
    }
}
