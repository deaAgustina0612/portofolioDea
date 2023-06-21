<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function auth(Request $req){
        $credentials = $req->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect('/admin');
        }

        return redirect()->back();
    }

    function register(){
        return view('register');
    }


    function daftar(Request $req){

        $validate = $this->validate($req,[
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        $validate['password'] = bcrypt($req->password);

        user::create($validate);
        return redirect('');
    }
    function show(){
        return view('admin');
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
}



