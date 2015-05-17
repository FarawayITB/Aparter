<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notification;
use App\Parkir;
use App\Lahan;
use App\Terminal;

use DB;
use Redirect;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
					->select('id_parkir', 'id_pemilik', 'alamat', 'lokasi', 'status', 'luas', 'tarif', 'tenggat', 'nama_kecamatan', 'jenis_kendaraan_parkir')
					->where('status', '=', $status)
					->get();
					
		return view('dishub.parkir')->with('parkir', $parkir);
	}
	
	public function showLahan($status)
	{
		if($status == 5)
		{
			$lahan = DB::table('ppl_aparter_lahan')
						->join('ppl_aparter_terminal', 'ppl_aparter_lahan.id_terminal', '=', 'ppl_aparter_terminal.id_terminal')
						->select('id_lahan', 'id_pemilik', 'luas', 'status', 'harga', 'tenggat', 'nama', 'alamat')
						->get();
		}
		else	// $status != 5
		{
			$lahan = DB::table('ppl_aparter_lahan')
						->join('ppl_aparter_terminal', 'ppl_aparter_lahan.id_terminal', '=', 'ppl_aparter_terminal.id_terminal')
						->select('id_lahan', 'id_pemilik', 'luas', 'status', 'harga', 'tenggat', 'nama', 'alamat')
						->where('status', '=', $status)
						->get();
		}
		
		return view('dishub.lahan')->with('lahan', $lahan);
	}
	
	public function confirmParkir()
	{
		$notif = new Notification;
		
		$status = Input::get('status');
		$alamat = Input::get('alamat');
		
		$notif->id_ktp = Input::get('no_ktp');
		$notif->subject = "Konfirmasi";
		$notif->kategori = "Proses pendaftaran dan perpanjangan parkir";
		$notif->from = "Dishub";
		
		if($status == 1)
		{
			$notif->body = "Lahan parkir Anda di alamat ".$alamat." DITOLAK. Hubungi Dishub untuk lebih detailnya";
			$parkir = Parkir::where('id_parkir', '=', Input::get('id'))->delete();
		}
		else if($status == 2)
		{
			$notif->body = "Lahan parkir Anda di alamat ".$alamat." telah DISETUJUI. Hubungi Dishub untuk lebih detailnya";
			$parkir = Parkir::where('id_parkir', '=', Input::get('id'))->update(['status' => 2]);
		}
		else if($status == 3)
		{
			$notif->body = "Lahan parkir Anda di alamat ".$alamat." sedang DIPROSES. Hubungi Dishub untuk lebih detailnya";
			$parkir = Parkir::where('id_parkir', '=', Input::get('id'))->update(['status' => 3]);
		}
		else if($status == 4)
		{
			$notif->body = "Lahan parkir Anda di alamat ".$alamat." telah SELESAI. Hubungi Dishub untuk lebih detailnya";
			$parkir = Parkir::where('id_parkir', '=', Input::get('id'))->update(['status' => 4]);
		}
		
		
		$notif->save();
		
		return Redirect::to('admin/dishub/showParkir/1')->with('success', true)->with('message','Konfirmasi berhasil !');
		
	}
	
	public function confirmLahan()
	{
		$notif = new Notification;
		
		$status = Input::get('status');
		$terminal = Input::get('terminal');
		
		$notif->id_ktp = Input::get('no_ktp');
		$notif->subject = "Konfirmasi";
		$notif->kategori = "Proses pendaftaran dan perluasan lahan di terminal";
		$notif->from = "Dishub";
		
		if($status == 1)
		{
			$notif->body = "Lahan Anda di terminal ".$terminal." DITOLAK. Hubungi Dishub untuk lebih detailnya";
			$lahan = Lahan::where('id_lahan', '=', Input::get('id'))->delete();
		}
		else if($status == 2)
		{
			$notif->body = "Lahan Anda di terminal ".$terminal." telah DISETUJUI. Hubungi Dishub untuk lebih detailnya";
			$lahan = Lahan::where('id_lahan', '=', Input::get('id'))->update(['status' => 2]);
		}
		else if($status == 3)
		{
			$notif->body = "Lahan Anda di terminal ".$terminal." sedang DIPROSES. Hubungi Dishub untuk lebih detailnya";
			$lahan = Lahan::where('id_lahan', '=', Input::get('id'))->update(['status' => 3]);
		}
		else if($status == 4)
		{
			$notif->body = "Lahan Anda di terminal ".$terminal." telah SELESAI. Hubungi Dishub untuk lebih detailnya";
			$lahan = Lahan::where('id_lahan', '=', Input::get('id'))->update(['status' => 4]);
		}
		
		$notif->save();
		
		return Redirect::to('admin/dishub/showLahan/1')->with('success', true)->with('message','Konfirmasi berhasil !');
		
	}
	
	public function addLahan()
	{
		$terminal = Terminal::all();
		
		return view('dishub.addLahan')->with('terminal', $terminal);
	}
	
	public function save()
	{
		$rules = array(
			'luas' => 'required',
			'harga' => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {    
			return Redirect::to('admin/dishub/addLahan')->with('error', true)->with('message','Data tidak valid atau ada yang kosong!')->withErrors($validator)->withInput();
		} else {                
			$lahan = new Lahan;
			
			$lahan->id_terminal = Input::get('terminal');
			$lahan->luas = Input::get('luas');
			$lahan->harga = Input::get('harga');
			$lahan->status = "1";
			$lahan->tenggat = "0000-00-00";
			
			$lahan->save();
			
			return Redirect::to('admin/dishub/showLahan/5')->with('success', true)->with('message','Data berhasil masuk !');
		}
	}
	
	public function delete($id)
	{
		$lahan = Lahan::find($id);
		$lahan->delete();
		
		return Redirect::to('admin/dishub/showLahan/5')->with('success', true)->with('message','Data berhasil dihapus !');
	}

}
