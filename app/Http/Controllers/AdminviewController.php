<?php namespace App\Http\Controllers;

use View;
use \App\Notification;

use Carbon\Carbon;
use Input;
use Redirect;

class AdminviewController extends Controller {
    public function notif()
    {
       $allNotif = Notification::all();
		return view('notif_admin',  ["allNotif" => $allNotif]);
	}

	public function addLahan(){
		return View::make('add_lahan');
	}

	public function showsewa(){
		$allNotif = Notification::all();
		return view('dispenda_pembayaran')->with('allNotif', $allNotif);
	}
	

}