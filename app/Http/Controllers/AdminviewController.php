<?php namespace App\Http\Controllers;

use View;
use \App\Notification;
use DB;
use Carbon\Carbon;
use Input;
use Redirect;

class AdminviewController extends Controller {
    public function notif()
    {
       $allNotif = Notification::all();
		return view('notif_admin',  ["allNotif" => $allNotif]);
	}

	public function retribusi(){
		return View::make('add_lahan');
	}

	public function ubah(){
		$from = "Dispenda";
		$kategori = "Retribusi";
		$subject = "Perubahan Retribusi";
		$body = Input::get('isi');	
		$id_ktp = "retribusi";
		Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);
		
		return View::make('add_lahan');
	}

	public function showsewa(){
		$pembayaran = DB::table('ppl_aparter_pembayaran')->get();
		return view('dispenda_pembayaran')->with('pembayaran', $pembayaran);
	}
	
	public function setuju($id_pembayaran){
		$user = DB::table('ppl_aparter_pembayaran')->where('id_pembayaran', '=', $id_pembayaran);
		
		$from = "Dispenda";
		$kategori = "Pembayaran";
		$subject = "Pembayaran";
		
		$id_ktp = $user->select('id_pemilik')->first()->id_pemilik;
		
		$body = "Proses pembayaran telah di verifikasi. Terima kasih sudah membayar";
		$user->delete();
		Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);
		return Redirect::action('AdminviewController@showsewa');
	}

	public function ditolak($id_pembayaran){
		$user = DB::table('ppl_aparter_pembayaran')->where('id_pembayaran', '=', $id_pembayaran);
		
		$from = "Dispenda";
		$kategori = "Pembayaran";
		$subject = "Pembayaran";
		
		$id_ktp = $user->select('id_pemilik')->first()->id_pemilik;
		$body = "Proses pembayaran telah ditolak, pastikan anda mengupload bukti yang valid";
		$user->delete();
		Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);
		return Redirect::action('AdminviewController@showsewa');
	}

}