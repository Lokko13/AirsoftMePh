<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Sentinel;

class HomeController extends Controller
{
    public function index(){
        if(Sentinel::guest()){
            return view('welcome');
        }
        else {
            return view('home');
        }
    }
}
