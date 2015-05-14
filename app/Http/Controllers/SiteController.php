<?php namespace App\Http\Controllers;

use DB;
use Cookie;
use View;
use Response;
use App\Notification;

class SiteController extends Controller {
    public function home()
    {
    	$id = Cookie::get("activeID");
		$nik = DB::table("ppl_dukcapil_ktp")
				->where("id","=", $id)
				->first();
		Cookie::queue(Cookie::make("NIK", $nik->nik, '999999',null, null, false, false));
		Cookie::queue(Cookie::make("activeID", $id, '999999',null, null, false, false));
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
		$allNotif = Notification::all();
		
		return view('notif_admin',  ["allNotif" => $allNotif]);
	}

	public function login()
	{
		return View::make('login');
	}

	public function check(){
		return View::make("check");
	}
}
