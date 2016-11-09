<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use Sentinel;

class AuthController extends Controller
{
    public function getLogin(){
    	return view('auth.login');
    }

    public function getRegister(){
    	return view('auth.register');
    }

    public function postLogin(LoginFormRequest $request){

        $credentials = [
            'login' => $request->username,
            'password' => $request->password
        ];

        try {
            if (Sentinel::authenticate($credentials, $request->has('remember'))) {
                return "authenticated";
            }
            return redirect()->back()->withInput()->withErrorMessage('Invalid credentials provided');
        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            return redirect()->back()->withInput()->withErrorMessage('User Not Activated.');
        } catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e) {
            return redirect()->back()->withInput()->withErrorMessage($e->getMessage());
        }
    }

    public function postRegister(Request $request){

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
