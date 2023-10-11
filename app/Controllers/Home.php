<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function register()
    {
        echo view('register');
    }

    public function login()
    {
        echo view('login');
    }
}
