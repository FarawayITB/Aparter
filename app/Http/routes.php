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

Route::get('/', 'SiteController@check');

Route::get('/login', 'SiteController@login');

Route::get('/home', 'SiteController@home');

Route::get('/parkir', 'ParkirController@show');

Route::get('/terminal', 'TerminalviewController@cek');

Route::get('/parkir/cari', 'ParkirController@search');

Route::get('/tentang', 'SiteController@tentang');

Route::get('user/pembayaran', 'UserController@pembayaran');

Route::post('user/status', 'Pembayaran@add');

Route::get('/admin', 'SiteController@admin');

Route::get('/admin/notif', 'AdminviewController@notif');

Route::get('/admin/addlahan', 'AdminviewController@addLahan');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/notifikasi', 'NotifikasiviewController@test');

Route::get('parkir/daftar', 'ParkirController@create');

Route::get('terminal/{id_terminal}', 'TerminalviewController@lahan');

Route::post('terminal/cari', 'TerminalviewController@cariterminal');

Route::post('parkir/save', 'ParkirController@store');

Route::get('/user/lahan','TerminalviewController@lahan_saya');

Route::post('/user/save_lahan', 'TerminalviewController@store_lahan_saya');

Route::post('/user/store_lahan', 'TerminalviewController@buy_lahan');

Route::get('parkir/{id}/edit', 'ParkirController@edit');

Route::post('parkir/{id}/update', 'ParkirController@update');

Route::get('user/progress', 'UserController@progress');

Route::post('/api/progress/parkir', 'APIController@parkir');

Route::post('/api/progress/lahan', 'APIController@lahan');

/** hendro punya */
Route::get('admin/dishub/notif', 'AdminDishubController@notif');

Route::get('admin/dishub/showParkir/{status}', 'AdminDishubController@showParkir');

Route::get('admin/dishub/showLahan/{status}', 'AdminDishubController@showLahan');

Route::get('admin/dispenda/showsewa', 'AdminviewController@showsewa');

Route::get('admin/dispenda/retribusi', 'AdminviewController@retribusi');

Route::get('admin/dispenda/tolak/{id_pembayaran}', 'AdminviewController@ditolak');

Route::get('admin/dispenda/setuju/{id_pembayaran}', 'AdminviewController@setuju');

Route::get('admin/dispenda/notif', 'AdminviewController@notif');

Route::post('admin/dispenda/ubah', 'AdminviewController@ubah');

Route::post('admin/dishub/confirmParkir', 'AdminDishubController@confirmParkir');

Route::post('admin/dishub/confirmLahan', 'AdminDishubController@confirmLahan');

Route::get('admin/dishub/addLahan', 'AdminDishubController@addLahan');

Route::post('admin/dishub/save', 'AdminDishubController@save');

Route::get('admin/dishub/delete/{id}', 'AdminDishubController@delete');
