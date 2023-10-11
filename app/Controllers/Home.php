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
        if($this->request->getMethod() =="get"){
            echo view('register');
        } 
        //post
        else if($this->request->getMethod()=="post"){
            // validate
            if($this->validate([
                "username"=> "required",
                "email" => "required|valid_email",
                "password"=>"required"
            ])){
                       // submit the form
            $username= $this->request->getVar("username");
            $email= $this->request->getVar("email");
            $password= $this->request->getVar("password");
           echo "username: $username" ;
            }
            else{
                return redirect()->back()->withInput();
            }
        }
    }

    public function login()
    {
        echo view('login');
    }
}
