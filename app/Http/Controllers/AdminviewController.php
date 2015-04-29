<?php namespace App\Http\Controllers;

use View;
use \App\Notification;

use Carbon\Carbon;
use Input;
use Redirect;

class AdminviewController extends Controller {
    public function notif()
    {
        return View::make('notifikasi');
	}

	public function addLahan(){
		Notification::cekTenggat();
		$alllahan = lahan::all();
		return view('notifikasi',  ["allNotif" => $alllahan]);
	}
	

}