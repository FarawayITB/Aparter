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

	public function lahan()
	{
		//fetch dari DB semua lahan, tampilin sesuai contoh

		return View::make('lahan');
	}

	public function lahan_saya()
	{
		$lahan = DB::table('lahan')
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
			
			DB::table('pembayaran')
				->where('id_tempat_lahan', $id_lahan)
				->update(['pembayaran_terakhir' => Carbon::now()->month]);

			// buat notifikasi

		} else{

			$user_lahan->status = 'request perluasan menjadi '.$luas;
			$user_lahan->save();

			// buat notifikasi
		}

		
		$lahan = DB::table('lahan')
				->join('terminal', 'lahan.id_terminal', '=', 'terminal.id_terminal')
				->where('id_pemilik', '=', '3273060611940005') // dari cookies
				->get();

		return View::make('lahan_saya')->with('lahans', $lahan)->with('$lahans', $lahan);
	}
}