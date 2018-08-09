<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('user.profile');
});


Route::get('register/create', 'RegistrationController@create');
Route::post('store', 'RegistrationController@store');
//
//Route::get('/login', 'SessionController@create');
//Route::post('/login/store','SessionController@store');
//Route::get('/logout','SessionController@destroy');

// route to show the login form

Route::get('login/create', array('uses' => 'SessionController@create'));

// route to process the form

Route::post('login', array('uses' => 'SessionController@store'));
Route::get('logout', array('uses' => 'SessionController@destroy'));


Route::auth();

Route::get('/home', 'HomeController@index');
