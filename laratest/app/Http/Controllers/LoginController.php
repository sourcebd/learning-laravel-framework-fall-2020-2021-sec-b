<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(){
        echo "posted!";
    }

    public function test(){
        return view('login/test');
    }
}
