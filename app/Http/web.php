<?php
/**
 * Created by PhpStorm.
 * user: admin
 * Date: 07/08/2018
 * Time: 15:22
 */


//Route::resource('users', 'UserController');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
//Route::get('regindex', 'RegistrationController@index');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
