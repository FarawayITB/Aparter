<?php namespace App\Http\Controllers;

use DB;
use View;
use \App\terminal;

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
				
		return View::make('lahan_saya')->with('lahans', $lahan);
	}
}