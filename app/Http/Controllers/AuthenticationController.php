<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function registerForm()
    {
        return view ('auth.register');
    }

    public function loginForm()
    {
        return view ('auth.login');
    }
}
