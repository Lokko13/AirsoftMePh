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

Route::get('/', 'HomeController@index')->name('home');

Route::group(array('prefix' => 'auth'), function(){
    Route::group(array('middleware' => 'guest'), function(){
        Route::get('login', 'AuthController@getLogin')->name('login');
        Route::get('register', 'AuthController@getRegister')->name('register');
        Route::post('login', 'AuthController@postLogin')->name('auth.login');
        Route::post('register', 'AuthController@postRegister')->name('auth.register');
        Route::get('activation/complete', 'AuthController@completeActivation')->name('auth.activation.complete');
        Route::get('activation/new/{user_id?}', 'AuthController@getActivation')->name('auth.activation.new');
    });

    Route::get('logout', 'AuthController@logout')->name('logout');
});