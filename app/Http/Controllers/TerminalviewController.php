<?php namespace App\Http\Controllers;

use DB;
use View;
use Input;
use Cookie;
use \App\Lahan;
use \App\Terminal;
use Carbon\Carbon;
use App\Notification;

class TerminalviewController extends Controller {
	public function home()
    {
        return View::make('terminal');
	}
	
	public function cek()
	{
		$allTerminal = Terminal::all();

		$Terminals = json_decode(json_encode($allTerminal), true);

		foreach ($Terminals as &$terminal) {
			$terminal['jumlah_lahan'] = DB::table('ppl_aparter_lahan')
											->where('id_terminal','=',$terminal['id_terminal'])
											->where('id_pemilik','=',null)
											->count();
		}

		$allTerminal = $Terminals;

		return View::make('terminal')->with("allTerminal", $allTerminal);
	}

	public function lahan($id_terminal)
	{
		$lahan_terminal = DB::table('ppl_aparter_lahan')
							->where('id_terminal', '=', $id_terminal)
							->where('id_pemilik','=',null)
							->get();//fetch dari DB semua lahan, tampilin sesuai contoh
		$nama_terminal = terminal::where('id_terminal', '=', $id_terminal)->get();

		return View::make('lahan',compact('lahan_terminal', 'nama_terminal'));
	}

	public function lahan_saya()
	{
		$lahan = DB::table('ppl_aparter_lahan')
				->join('ppl_aparter_terminal', 'ppl_aparter_lahan.id_terminal', '=', 'ppl_aparter_terminal.id_terminal')
				->where('id_pemilik', '=', Cookie::get("NIK")) // dari cookies
				->get();
				
		return View::make('lahan_saya')->with('lahans', $lahan)->with('$lahans', $lahan);
	}

	public function store_lahan_saya()
	{
		$nik = Cookie::get("NIK");

		$id_lahan = Input::get('idlahan');
		$panjang = Input::get('panjang'.$id_lahan);
		$lebar = Input::get('lebar'.$id_lahan);
		$luas = $panjang*$lebar;

		$user_lahan = Lahan::find($id_lahan);	// get id info from database

		if (Input::hasFile('upload'.$id_lahan))
		{
			$last_month = Carbon::now()->month;
			$last_month++;
			$ext = Input::file('upload'.$id_lahan)->getClientOriginalExtension();
			Input::file('upload'.$id_lahan)->move(storage_path().'\pembayaran',$nik.'_'.Carbon::now()->month.'.'.$ext);
			
			DB::table('ppl_aparter_pembayaran')
				->where('id_tempat_lahan', $id_lahan)
				->update(['pembayaran_terakhir' => $last_month." ".Carbon::now()->year]);

			// buat notifikasi
			$kategori = "Pembayaran";
			$from = "Dispenda";
			$id_ktp = $nik;
			$subject = "Pembayaran";
			$body = "Proses pembayaran berhasil. Terima kasih sudah membayar";
			Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);

		} else{

			$user_lahan->status = 'request perluasan menjadi '.$luas;
			$user_lahan->save();

			// buat notifikasi
			$kategori = "Perluasan Lahan";
			$from = "Dishub";
			$id_ktp = $nik;
			$subject = "Permintaan Perluasan Lahan ID ".$id_lahan;
			$body = "Permintaan perluasan lahan dengan ID ".$id_lahan." sudah diterima.";
			Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);
		}

		
		$lahan = DB::table('ppl_aparter_lahan')
				->join('ppl_aparter_terminal', 'ppl_aparter_lahan.id_terminal', '=', 'ppl_aparter_terminal.id_terminal')
				->where('id_pemilik', '=', $nik) // dari cookies
				->get();
		return View::make('lahan_saya')->with('lahans', $lahan)->with('$lahans', $lahan);
	}

	public function buy_lahan()
	{
		echo 'buy Lahan';
	}

	public function cariterminal()
	{
		$terminal = Input::get('terminal');
		$allTerminal = Terminal::where('nama', 'LIKE', '%'.$terminal.'%')->get();

		$Terminals = json_decode(json_encode($allTerminal), true);

		foreach ($Terminals as &$terminal) {
			$terminal['jumlah_lahan'] = DB::table('ppl_aparter_lahan')
											->where('id_terminal','=',$terminal['id_terminal'])
											->where('id_pemilik','=',null)
											->count();
		}

		$allTerminal = $Terminals;
		return View::make('terminal')->with('cariterminal', $allTerminal);
	}
}