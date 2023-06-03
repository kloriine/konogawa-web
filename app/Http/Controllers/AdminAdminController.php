<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminAdminController extends Controller
{
    public function index () {
        $user = Auth::user();
        $users = User::where('role_id', 1)->orderByDesc('created_at')->paginate(10);
        return view('admin-admin', ['users' => $users]);
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
        $user->role_id = 1;
        $user->save();

        $notification = [
            'message' => 'Admin added successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function edit (Request $request, $id) {
        $this->validate(request(), [
            'userName' => 'required',
            'userEmail' => 'required',
            'userPassword' => 'required',
        ]);

        $data = array(
            'name' => $request->input('userName'),
            'email' => $request->input('userEmail'),
            'password' => Hash::make($request->input('userPassword')),
        );
        User::where('id', $id)->update($data);

        $notification = [
            'message' => 'Admin updated successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function destroy ($id) {
        User::where('id', $id)->delete($id);

        $notification = [
            'message' => 'Admin has been deleted successfully!',
            'alert-type' => 'info'
        ];

        return back()->with($notification);
    }
}
