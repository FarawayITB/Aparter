<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notification;
use App\Parkir;
use DB;

use Illuminate\Http\Request;

class AdminDishubController extends Controller {

	public function notif()
	{
		$allNotif = Notification::all();
		return view('dishub.notif')->with('allNotif', $allNotif);
	}
	
	public function showParkir($status)
	{
		$parkir = DB::table('ppl_aparter_parkir')
					->join('ppl_aparter_kecamatan', 'ppl_aparter_parkir.id_kecamatan', '=', 'ppl_aparter_kecamatan.id_kecamatan')
					->join('ppl_aparter_jenis_kendaraan', 'ppl_aparter_parkir.id_jenis_kendaraan', '=', 'ppl_aparter_jenis_kendaraan.id_jenis_kendaraan')
					->select('id_pemilik', 'alamat', 'lokasi', 'status', 'luas', 'tarif', 'tenggat', 'nama_kecamatan', 'jenis_kendaraan_parkir')
					->where('status', '=', $status)
					->get();
					
		return view('dishub.parkir')->with('parkir', $parkir);
	}
	
	public function showLahan($status)
	{
		$lahan = DB::table('ppl_aparter_lahan')
					->join('ppl_aparter_terminal', 'ppl_aparter_lahan.id_terminal', '=', 'ppl_aparter_terminal.id_terminal')
					->select('id_pemilik', 'luas', 'status', 'harga', 'tenggat', 'nama', 'alamat')
					->where('status', '=', $status)
					->get();
		
		return view('dishub.lahan')->with('lahan', $lahan);
	}

}
