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
Route::get('socket', 'socketController@index');
Route::post('sendmessage', [
		'as' => 'send', 'uses' => 'socketController@sendMessage'
	]);
Route::get('writemessage', 'socketController@writemessage');
Route::post('login', [
		'as' => 'login', 'uses' => 'UserController@login'
	]);
Route::post('register', [
		'as' => 'register', 'uses' => 'UserController@register'
	]);
Route::post('logout', [
		'as' => 'logout', 'uses' => 'UserController@logout'
	]);