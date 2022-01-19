<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function attemptLogin(Request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = 'App\\Http\\Controllers\\AuthController@attemptLogin';

        /* if $user is false (invalid credentials) */
        if(!$user)
        {
            return redirect()->route('auth.login');
        }

        return redirect()->route('dashboard');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function attemptRegister()
    {

    }

    public function logout()
    {
        'App\\Http\\Controllers\\AuthController@logout';
        return redirect()->route('auth.login');
    }
}
