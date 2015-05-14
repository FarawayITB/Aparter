<?php namespace App\Http\Controllers;

use View;
use \App\Notification;

use Input;
use Cookie;
use Redirect;
use Carbon\Carbon;

class NotifikasiviewController extends Controller {
    public function home()
    {
        return View::make('notifikasi');
	}

	public function test(){

		$nik = Cookie::get("NIK");

		Notification::deleteReminder();
		Notification::cekTenggat();
		$allNotif = Notification::where('id_ktp', '=', $nik)->orderBy('id','desc')->get();
		
		return view('notifikasi',  ["allNotif" => $allNotif]);
	}
}