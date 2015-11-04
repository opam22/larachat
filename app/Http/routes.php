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

Route::get('/', [
 'as' => 'index', 'uses' => 'HomeController@index'
 ]);
Route::post('/login', [
 'as' => 'login', 'uses' => 'LoginController@login'
 ]);
Route::get('logout', [
 'as' => 'logout', 'uses' => 'LoginController@logout'
 ]);
Route::get('socket', [
 'as' => 'socket', 'uses' => 'socketController@index'
 ]);
Route::post('sendmessage', [
		'as' => 'send', 'uses' => 'socketController@sendMessage'
	]);
Route::get('writemessage', 'socketController@writemessage');

Route::post('register', [
		'as' => 'register', 'uses' => 'UserController@register'
	]);
