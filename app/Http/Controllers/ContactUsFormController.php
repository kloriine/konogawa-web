<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactUsFormController extends Controller
{
    public function index() {
        return view('contact');
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=> 'required',
            'message' => 'required'
        ]);
        
        ContactForm::create($request->all());

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
