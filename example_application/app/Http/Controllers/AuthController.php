<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ],[
            'email.required'=>'Email as invalid!',
            'email.email'=>'Email is invalid!',
            'password.required'=>'Password is invalid!',
        ]);

        if(Auth::attempt($credentials,$request->remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->with('403','Email or Password is Invalid!');

    }

     public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('forms.login'));
    }

    public function create(){
        return view('users.create');
    }
}
