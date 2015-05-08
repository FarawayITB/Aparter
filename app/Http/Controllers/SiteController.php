<?php namespace App\Http\Controllers;

use DB;
use Cookie;
use View;
use Response;

class SiteController extends Controller {
    public function home()
    {
    	$id = Cookie::get("NIK");

    	// $cookie = Cookie::make("NIK", 0, 0);
        // $response = Response::json($cookie_values);
        // $response->headers->setCookie($cookie);
    	// Cookie::unqueue("NIK");
    	// echo "id: " + $id;
    	// $id = 1;
		$nik = DB::table("ppl_dukcapil_ktp")
				->where("id","=", $id)
				->first();
		Cookie::queue("NIK", $nik->nik);
        return View::make('index');
	}

	public function parkir()
	{
		return View::make('parkir');
	}

	public function terminal()
	{
		return View::make('terminal');
	}

	public function tentang()
	{
		return View::make('tentang');
	}

	public function notifikasi()
	{
		return View::make('notifikasi');
	}

	public function admin()
	{
		return View::make('notif');
	}

	public function login()
	{
		return View::make('login');
	}

	public function check(){
		return View::make("check");
	}
}
