<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index( Request $req){

        $name = "Nafi";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('home.index')
        //         ->with('name', 'Nafi')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('home.index', compact('id', 'name'));

    }

    public function show($id){

        $user = Customer::find($id);
        //print_r($user);
        return view('home.details')->with('user', $user);
    }

    public function create(){
        return view('home.create');
    }

    public function store(UserRequest $req){

/*
        $this->validate($req, [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        /*$req->validate([
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        //$validation->validate();

        /*$validation = Validator::make($req->all(), [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ]);

        if($validation->fails()){
         //   return redirect()->route('home.create')->with('errors', $validation->errors());

            return Back()->with('errors', $validation->errors())->withInput();            
        }*/

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());

            $filename = time().".".$file->getClientOriginalExtension();

            $file->move('upload', $filename);

            $user = new Customer();
            $user->full_name     = $req->full_name;
            $user->username     = $req->username;
            $user->email         = $req->email;
            $user->password      = $req->password;
            $user->country       = $req->country;
            $user->phone         = $req->phone;
            $user->city          = $req->city;
            $user->company_name = $req->company_name;
            $user->user_type = $req->user_type;
            $user->date_added = $req->date_added;
            $user->profile_img = $filename;

            $user->save();
            return redirect()->route('home.userlist');
        }
    }

    public function edit($id){
        
        $user = Customer::find($id);
        return view('home.edit')->with('user', $user);
    }


    public function update($id, Request $req){

        $user = Customer::find($id);
        
            $user->full_name     = $req->full_name;
            $user->username     = $req->username;
            $user->email         = $req->email;
            $user->password      = $req->password;
            $user->country       = $req->country;
            $user->phone         = $req->phone;
            $user->city          = $req->city;
            $user->company_name = $req->company_name;
            $user->user_type = $req->user_type;
            $user->date_added = $req->date_added;
            $user->save();


        return redirect('/home/userlist');
    }

    public function userlist(){
        
        $userlist = Customer::all();
        //$userlist = $this->getUserlist();
        return view('home.list')->with('list', $userlist);
    }

    /*public function getUserlist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

    public function delete($id){

        $user = Customer::find($id);
        return view('home.delete')->with('user', $user);
    }

    public function destroy($id){

        if(Customer::destroy($id)){
            return redirect('/home/userlist');
        }else{
            return redirect('/home/delete/'.$id);
        }

    }
}
