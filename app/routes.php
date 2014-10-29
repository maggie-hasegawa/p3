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

Route::get('/lorem', function()
{
	return View::make('lorem-ipsum');
});

Route::get('/users', function()
{
	return View::make('users');
});

Route::post('/lorem', function()
{
	$number = $_POST["number-of-paragraphs"];
	return View::make('paragraphs')
		->with('number', $number);
});

Route::post('/users', function()
{
	$number = $_POST["number-of-users"];
	return View::make('data')
		->with('number', $number);
});

