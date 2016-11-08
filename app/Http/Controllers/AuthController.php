<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Sentinel;

class AuthController extends Controller
{
    public function getLogin(){
    	return view('auth.login');
    }

    public function getRegister(){
    	return view('auth.register');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'username'    => $request->username,
            'password' => $request->password,
        ];

        dd(Sentinel::authenticate($credentials));
    }

    public function postRegister(Request $request){
        $this->validate($request, [
            'username' => 'required|max:255|min:6|unique:users',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|max:255|min:6',
            'password2' => 'same:password',
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        $credentials = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name,
        ];

        Sentinel::register($credentials);
    }

    public function facebookAuth(){

    }

    public function twitterAuth(){

    }
}
