<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Command\DumpCommand;
use App\User;

class HomeController extends Controller
{
    public function index( Request $req){

        $name = "alamin";
        $id = "123";

            return view('home.index', compact('id', 'name'));

    }

    public function show($id){

        $user = User::find($id);
        return view('home.details')->with('user', $user);

    }

    public function create(){
        return view('home.create');
    }

    public function store(Request $req){

        //insert into DB or model...

        echo $req->username;

        $user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->dept = $req->dept;
        $user->cgpa = $req->cgpa;
        $user->type = $req->type;

        $user-> save();

        return redirect('/home/userlist');
    }

    public function edit($id){
      
        $user = User::find($id);
        return view('home.edit')->with('user', $user);
    }


    public function update($id, Request $req){

        //updating DB or model

        $user = User::find($id);

        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->dept = $req->dept;
        $user->cgpa = $req->cgpa;
        $user->type = $req->type;

        $user-> save();

        return redirect('/home/userlist');
    }

    public function userlist(){
        // db model userlist

        $userlist = User::all();
        return view('home.list')->with('list', $userlist);
    }

    public function delete($id){

        $user = User::find($id);
        return view('home.delete')->with('user', $user);
    }

    public function destroy($id){

        if(User::destroy($id)){
            return redirect('/home/userlist');
        }else{
            return redirect('/home/delete/'.$id);
        }
    }
}
