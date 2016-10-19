<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'AuthController@getLogin')->name('login');
Route::get('register', 'AuthController@getRegister')->name('register');
Route::post('auth/login', 'AuthController@postLogin')->name('auth.login');
Route::post('auth/register', 'AuthController@postRegister')->name('auth.register');