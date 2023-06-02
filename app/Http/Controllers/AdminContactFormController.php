<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Support\Facades\Auth;

class AdminContactFormController extends Controller
{
    public function index () {
        $user = Auth::user();
        $contactFormsData = ContactForm::paginate(10);
        return view('admin-contact', ['contactFormsData' => $contactFormsData]);
    }

    public function destroy ($id) {
        ContactForm::where('id', $id)->delete($id);

        $notification = [
            'message' => 'Data has been deleted successfully!',
            'alert-type' => 'info'
        ];

        return back()->with($notification);
    }
}
