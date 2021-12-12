<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'not_regex:/[@$!%*#?&]/', 'not_regex:/[0-9]/','max:255'],
            'lastname' => ['nullable','not_regex:/[@$!%*#?&]/', 'not_regex:/[0-9]/', 'max:255'],
            'email_register' => 'required|unique:users|email:dns',
            'password_register' => ['required', 'min:8', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/'],
            'confirmpassword' => ['required', 'min:8', 'same:password_register'],
            'phone_number' => ['required', 'unique:users', 'not_regex:/[@$!%*#?&]/', 'not_regex:/[A-Z]/', 
            'not_regex:/[a-z]/', 'min:9','max:12']
        ]);

        $user = new User;

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email_register;
        $user->password = Hash::make($request->password_register);
        $user->phone_number = $request->phone_number;

        $user->save();

        return redirect('/');
    }
}
