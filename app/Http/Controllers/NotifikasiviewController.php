<?php namespace App\Http\Controllers;

use View;
use \App\Notification;

use Carbon\Carbon;
use Input;
use Redirect;

class NotifikasiviewController extends Controller {
    public function home()
    {
        return View::make('notifikasi');
	}

	public function test(){
		Notification::deleteReminder();
		Notification::cekTenggat();
		$allNotif = Notification::where('id_ktp', '=', 'budi')->get();
		
		return view('notifikasi',  ["allNotif" => $allNotif]);
	}
}