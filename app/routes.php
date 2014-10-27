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

Route::get('/p3', function()
{
	return View::make('index');
});

Route::get('/p3/lorem', function()
{
	return View::make('lorem-ipsum');
});

Route::get('/p3/users', function()
{
	return View::make('users');
});
