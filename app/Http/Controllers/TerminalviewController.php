<?php namespace App\Http\Controllers;

use DB;
use View;
use Input;
use Cookie;
use Redirect;
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
			Input::file('upload'.$id_lahan)->move(storage_path().'\pembayaran',$nik.'_'.Carbon::now()->month.'_lahan_'.$id_lahan.'.'.$ext);
			
			DB::table('ppl_aparter_pembayaran')->insert([
				'id_tempat_lahan' => $id_lahan,
				'pembayaran_terakhir' => Carbon::now()->month,
				'id_pemilik' => $nik,
			]);

			// buat notifikasi
			$kategori = "Pembayaran";
			$from = "Dispenda";
			$id_ktp = $nik;
			$subject = "Pembayaran";
			$body = "Proses pembayaran berhasil. Terima kasih sudah membayar";
			Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);

		} else{

			// buat notifikasi
			$kategori = "Perluasan Lahan";
			$from = "Dishub";
			$id_ktp = $nik;
			$subject = "Permintaan Perluasan Lahan ID ".$id_lahan;
			$body = "Permintaan perluasan lahan dengan ID ".$id_lahan." sudah diterima dengan panjang:".$panjang." m dan lebar:".$lebar." m.";
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
		$nik = Cookie::get("NIK");
		$id = Input::get('selected');
		$month = Carbon::now()->month;
		$month += 1;

		if (Input::hasFile('upload'))
		{
			$varlahan = "lahan"."_".$id;
			$ext = Input::file('upload')->getClientOriginalExtension();
			Input::file('upload')->move(storage_path().'\pembayaran',$nik.'_'.Carbon::now()->month.'_'.$varlahan.'.'.$ext); // dari cookies	

			$lahan = Lahan::find($id);
			$lahan->id_pemilik = $nik;
			$lahan->status = '1';
			$lahan->tenggat = Carbon::createFromFormat('Y-m-d', Carbon::now()->year.'-'.$month.'-'.Carbon::now()->day);
			$lahan->save();

			DB::table('ppl_aparter_pembayaran')->insert([
				'id_tempat_lahan' => $id,
				'pembayaran_terakhir' => Carbon::now()->month,
				'id_pemilik' => $nik,
			]);

			// buat notifikasi
			$kategori = "Pembelian Lahan";
			$from = "Dishub";
			$id_ktp = $nik;
			$subject = "Pembelian lahan dengan Lahan ID ".$id;
			$body = "Permintaan pembelian lahan dengan Lahan ID ".$id." sudah diterima. Terima kasih sudah melakukan pembelian";
			Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);
		}

		return Redirect::action('SiteController@home');
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