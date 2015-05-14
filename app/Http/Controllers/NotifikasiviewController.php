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
		Notification::cekTenggat();
		$allNotif = DB::table('ppl_aparter_notifikasi')->where('id_ktp', '=', 'budi')->get();
		
		return view('notifikasi',  ["allNotif" => $allNotif]);
	}
	

}