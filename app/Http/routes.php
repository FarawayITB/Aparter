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

Route::get('/', 'SiteController@home');

Route::get('/index', 'SiteController@home');

Route::get('/parkir', 'SiteController@parkir');

Route::get('/terminal', 'SiteController@terminal');

Route::get('/tentang', 'SiteController@tentang');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('parkir/daftar', 'ParkirController@create');
Route::get('terminal/cek', 'TerminalviewController@cek');

Route::post('parkir/save', 'ParkirController@store');
