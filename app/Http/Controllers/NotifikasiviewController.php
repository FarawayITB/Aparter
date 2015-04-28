<?php namespace App\Http\Controllers;

use View;
use \App\Notification;

use Carbon\Carbon;
use Input;
use Redirect;
use DB;

class NotifikasiviewController extends Controller {
    public function home()
    {
        return View::make('notifikasi');
	}
	public function test(){
		$allNotif = Notification::all();
		return view('notifikasi',  ["allNotif" => $allNotif]);
	}

	public static function addNotif() {
		$type = Input::get('jenis_daftar');
		$alamat = Input::get('alamat');
		$subject = "Pendaftaran" $type "di" $alamat "telah diterima.";
		$body = "Pendaftaran" $type "di" $alamat "telah diterima.";
		DB::table('notifications')->insert([
			'type' => $type,
			'subject' => $subject,
			'body' => $body,
			'created_at' => Carbon::now(),
			]);

		return Redirect::action('SiteController@home');
	}
}