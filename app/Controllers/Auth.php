<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function showSignUpForm()
    {
        $data = [
            'title' => 'Sign Up | Eventiqo'
        ];
        
        return view('auth/signup', $data);
    }

    public function showLoginForm()
    {
        $data = [
            'title' => 'Login | Eventiqo'
        ];
        
        return view('auth/login', $data);
    }
}
