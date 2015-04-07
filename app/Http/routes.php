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

Route::get('/parkir', 'ParkirController@index');

Route::get('/terminal', 'TerminalviewController@cek');

Route::get('/tentang', 'SiteController@tentang');

Route::get('user/pembayaran', 'UserController@pembayaran');

Route::post('user/status', 'Pembayaran@add');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/notifikasi', 'SiteController@notifikasi');
//Route::get('notifikasi/test', 'NotifikasiviewController@test');
Route::get('parkir/daftar', 'ParkirController@create');

Route::get('terminal/lahan', 'TerminalviewController@lahan');

Route::post('parkir/save', 'ParkirController@store');
