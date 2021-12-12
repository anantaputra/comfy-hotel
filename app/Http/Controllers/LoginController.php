<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email_login' => 'required|email:dns',
            'password' => 'required'
        ]);
    }
}