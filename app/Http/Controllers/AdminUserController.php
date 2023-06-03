<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index () {
        $user = Auth::user();
        $users = User::where('role_id', 2)->orderByDesc('created_at')->paginate(10);
        return view('admin-user', ['users' => $users]);
    }

    public function store () {
        $this->validate(request(), [
            'userName' => 'required',
            'userEmail' => 'required',
            'userPassword' => 'required',
        ]);

        $user = new User();
        $user->name = request('userName');
        $user->email = request('userEmail');
        $user->password = Hash::make(request('userPassword'));
        $user->role_id = 2;
        $user->save();

        $notification = [
            'message' => 'User added successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function destroy ($id) {
        User::where('id', $id)->delete($id);

        $notification = [
            'message' => 'User has been deleted successfully!',
            'alert-type' => 'info'
        ];

        return back()->with($notification);
    }
}
