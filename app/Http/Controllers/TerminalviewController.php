<?php namespace App\Http\Controllers;

use DB;
use View;
use Input;
use Carbon\Carbon;
use \App\Terminal;
use \App\Lahan;

class TerminalviewController extends Controller {
    public function home()
    {
        return View::make('terminal');
	}
	
	public function cek()
	{
		$allTerminal = terminal::all();
		return view('terminal',  ["allTerminal" => $allTerminal]);
	}

	public function lahan($id_terminal)
	{
		$lahan_terminal = Lahan::where('id_terminal', '=', $id_terminal)->get();//fetch dari DB semua lahan, tampilin sesuai contoh
		$nama_terminal = terminal::where('id_terminal', '=', $id_terminal)->get();

		return View::make('lahan',compact('lahan_terminal', 'nama_terminal'));
	}

	public function lahan_saya()
	{
		$lahan = DB::table('ppl_aparter_lahan')
				->join('terminal', 'lahan.id_terminal', '=', 'terminal.id_terminal')
				->where('id_pemilik', '=', '3273060611940005') // dari cookies
				->get();
				
		return View::make('lahan_saya')->with('lahans', $lahan)->with('$lahans', $lahan);
	}

	public function store_lahan_saya()
	{
		$id_lahan = Input::get('idlahan');
		$panjang = Input::get('panjang'.$id_lahan);
		$lebar = Input::get('lebar'.$id_lahan);
		$luas = $panjang*$lebar;

		$user_lahan = Lahan::find($id_lahan);	// get id info from database

		if (Input::hasFile('upload'.$id_lahan))
		{
			$ext = Input::file('upload'.$id_lahan)->getClientOriginalExtension();
			Input::file('upload'.$id_lahan)->move(storage_path().'\pembayaran','3273060611940005_'.Carbon::now()->month.'.'.$ext);
			
			DB::table('ppl_aparter_pembayaran')
				->where('id_tempat_lahan', $id_lahan)
				->update(['pembayaran_terakhir' => Carbon::now()->month]);

			// buat notifikasi

			$subject = "Pembayaran Bulanan Lahan ID ".$id_lahan;
			$id_ktp = Input::get('id_pemilik');
			$body = "Pendaftaran sewa lahan dengan ID ".$id_lahan." sudah diterima.";
			Notification::addNotif($body,$id_ktp,$subject);

		} else{

			$user_lahan->status = 'request perluasan menjadi '.$luas;
			$user_lahan->save();

			// buat notifikasi
			$subject = "Permintaan Perluasan Lahan ID ".$id_lahan;
			$id_ktp = Input::get('id_pemilik');
			$body = "Permintaan perluasan lahan dengan ID ".$id_lahan." sudah diterima.";
			Notification::addNotif($body,$id_ktp,$subject);
		}

		
		$lahan = DB::table('ppl_aparter_lahan')
				->join('terminal', 'lahan.id_terminal', '=', 'terminal.id_terminal')
				->where('id_pemilik', '=', '3273060611940005') // dari cookies
				->get();

		return View::make('lahan_saya')->with('lahans', $lahan)->with('$lahans', $lahan);
	}
}