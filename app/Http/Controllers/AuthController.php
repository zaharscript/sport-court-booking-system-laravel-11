<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //display the login form
    public function login()
    {
        return view('auth.login');
    }

    //display the register form
    public function register()
    {
        return view('auth.register');
    }

    //display the forgot password form
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    //display the reset password form
    public function resetPassword()
    {
        return view('auth.reset-password');
    }
}
