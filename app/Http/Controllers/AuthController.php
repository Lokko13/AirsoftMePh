<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use Sentinel;
use Activation;

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
                return redirect()->route('home');
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

        $new_user = Sentinel::register($credentials);
        
        return redirect('login')->withFlashMessage('User Successfully Created!');

        if($new_user){
            Activation::create(Sentinel::findById($new_user->id));

            $usersRole = Sentinel::findRoleByName('Users');
            $usersRole->users()->attach($new_user);

            //return redirect('login')->withFlashMessage('User Successfully Created!');
            return redirect(route('auth.activation.new') . '/' . $new_user->id);
        }
        else {
            return redirect()->back()->withInputs()->withErrorMessage('Registration Failed');
        }
    }

    public function completeActivation(Request $request) {
        $user_id = $request->get('id');
        $code = $request->get('key');
        if(Activation::complete(Sentinel::findById($user_id), $code)){
            $data['param_string'] = route('home');
            $data['anchor_text'] = "Activation successful, click this to redirect to home";
        }
        else {
            return 'activation not found';
        }

    }

    public function getActivation($user_id = null){
        $data['param_string'] = "#";

        if($user_id == null){
            $data['anchor_text'] = "No user defined";
        }
        else {
            $activation = Activation::exists(Sentinel::findById($user_id));
            if($activation && !$activation->completed) {
                $code = $activation->code;
                $data['anchor_text'] = "Click here to Activate";
                $data['param_string'] = "?id=$user_id&key=$code";
            }
            else {
                $data['anchor_text'] = "Activation for user is complete";
            }
        }
        return view('auth.activation')->with('data', $data);
    }

    public function logout(){
        Sentinel::logout();
        return redirect()->route('home');
    }

    public function facebookAuth(){

    }

    public function twitterAuth(){

    }
}
