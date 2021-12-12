<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'not_regex:/[@$!%*#?&]/', 'not_regex:/[0-9]/','max:255'],
            'lastname' => ['nullable','not_regex:/[@$!%*#?&]/', 'not_regex:/[0-9]/', 'max:255'],
            'email' => 'required|unique:users|email:dns',
            'password_register' => ['required', 'min:8', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/'],
            'confirmpassword' => ['required', 'min:8', 'same:password_register'],
            'phone_number' => ['required', 'unique:users', 'not_regex:/[@$!%*#?&]/', 'not_regex:/[A-Z]/', 
            'not_regex:/[a-z]/', 'min:9','max:12']
        ]);

        return redirect('/');
    }
}
