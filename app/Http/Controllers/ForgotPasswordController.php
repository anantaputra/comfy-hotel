<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function submitForgotPassword(Request $request)
    {
        $request->validate([
            'emailForgot' => 'required|email',
        ]);

        $checkemail = DB::table('users')
                    ->select('*')
                    ->where('email', '=', $request->emailForgot)
                    ->get();

        if(count($checkemail) > 0){
            $token = Str::random(64);
    
            DB::table('password_resets')->insert([
                'email' => $request->emailForgot,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);
    
            Mail::send('password.email', ['token' => $token], function ($message) use ($request) {
                $message->to($request->emailForgot);
                $message->subject('Reset Password');
            });
            
            return redirect('/')->with('message', 'We have e-mailed your password reset link!');
        }
    }

    public function showResetPasswordForm($token)
    {
        return view('password.reset', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns|exists:users',
            'password' => ['required', 'min:8', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/'],
            'confirmpassword' => ['required', 'min:8', 'same:password'],
        ]);

        $updatePassword = DB::table('password_resets')
                        ->where([
                            'email' => $request->email,
                            'token' => $request->token,
                        ])
                        ->first();

        if(!$updatePassword){
            return back()->withErrors('token', 'invalid token');
        }

        $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
          return back()->with('message', 'Your password has been changed!');
    }
}
