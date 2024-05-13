<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $title = "Login Page";
        return view("pages.LoginUser", compact("title"));
    }
    public function register(Request $request){
        $title = "Register Page";
        return view("pages.RegisterUser", compact("title"));
    }

     
}
