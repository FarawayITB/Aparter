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
		$allNotif = Notification::where('id_ktp', '=', $nik)->where('kategori','!=','Reminder')->orderBy('id','desc')->get();
		$allretri = Notification::where('id_ktp', '=', "retribusi")->where('kategori','!=','Reminder')->orderBy('id','desc')->get();
		$allReminder = Notification::where('kategori','=','Reminder')->get();
		$data = array(
		    'allNotif'  => $allNotif,
		    'allReminder' => $allReminder
		    'allretri' => $allretri
		);
		return View::make('notifikasi')->with($data);
	}
}