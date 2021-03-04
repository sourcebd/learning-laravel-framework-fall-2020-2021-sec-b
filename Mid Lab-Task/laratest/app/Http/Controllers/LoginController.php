<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(LoginRequest $req){

        /* $user = User::where('password', $req->password)
                    ->where('username', $req->username)
                    ->get(); */
        //echo count($user);

        $user = DB::table('customers')
                    ->where('password', $req->password)
                    ->where('email', $req->email)
                    ->get();


        if($req->email == "" || $req->password == ""){
           $req->session()->flash('msg', 'Null email or password...');
           return redirect('/login');

        }elseif(count($user) > 0 ){
            //$req->session()->put('password', $req->password);
            //$req->session()->get('name');
            //$req->session()->forget('name');
            //$req->session()->flush();
            //$req->session()->has('name');

            //$req->session()->flash('msg', 'Invalid user info...');
            //$req->session()->flash('error', 'Bad request error...');
            //$req->session()->get('msg');
            //$req->session()->keep('msg');
            //$req->session()->get('msg');
            //$req->session()->reflash();
            //$req->session()->pull('name');

            $req->session()->put('email', $req->email);
            $req->session()->put('username', $req->username);
            return redirect('/home');
        }else{

            $req->session()->flash('msg', 'Invalid email or password...');
            return redirect('/login');
        }
    }
}
