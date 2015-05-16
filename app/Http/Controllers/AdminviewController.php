<?php namespace App\Http\Controllers;

use View;
use \App\Notification;

use Carbon\Carbon;
use Input;
use Redirect;

class AdminviewController extends Controller {
    public function notif(){
       $allNotif = Notification::all();
		return view('notif_admin',  ["allNotif" => $allNotif]);
	}

	public function addLahan(){
		return View::make('add_lahan');
	}

	public function showLahan(){
		$lahan = DB::table('ppl_aparter_pembayaran')
					->join('ppl_aparter_terminal', 'ppl_aparter_lahan.id_terminal', '=', 'ppl_aparter_terminal.id_terminal')
					->join('ppl_aparter_lahan', 'ppl_aparter_pembayaran.id_tempat_lahan', '=', 'ppl_aparter_lahan.id_lahan')
					->select('id_pembayaran', 'id_pemilik', 'luas', 'status', 'harga', 'nama', 'alamat', 'pembayaran_terakhir')
					->where('status', '=', $status)
					->get();
					
		return view('dispenda_pembayaran')->with('parkir', $parkir);
	}

	public function showParkir($status)
	{
		$parkir = DB::table('ppl_aparter_parkir')
					->join('ppl_aparter_kecamatan', 'ppl_aparter_parkir.id_kecamatan', '=', 'ppl_aparter_kecamatan.id_kecamatan')
					->join('ppl_aparter_jenis_kendaraan', 'ppl_aparter_parkir.id_jenis_kendaraan', '=', 'ppl_aparter_jenis_kendaraan.id_jenis_kendaraan')
					->join('ppl_aparter_pembayaran', 'ppl_aparter_parkir.id_parkir', '=', 'ppl_aparter_pembayaran.id_tempat_parkir')
					->select('id_pemilik', 'alamat', 'lokasi', 'status', 'tarif', 'nama_kecamatan', 'jenis_kendaraan_parkir', 'pembayaran_terakhir')
					->where('status', '=', $status)
					->get();
					
		return view('dishub.parkir')->with('parkir', $parkir);
	}
	

}