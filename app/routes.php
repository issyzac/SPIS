<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('dashboard', function()
{
    return View::make('dashboard');
});



Route::get('classes', function()
{
    return View::make('classes.class');
});


Route::get('about', function()
{
    return View::make('about');
});

Route::get('contact', 'Pages@contact');

Route::resource('users', 'UserController');

Route::get('/register', 'UserController@showUserRegistration');

Route::post('/register', 'UserController@saveUser');