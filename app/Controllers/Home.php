<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Welcome to Eventiqo',
        ];
        
        return view('index', $data);
    }
}
