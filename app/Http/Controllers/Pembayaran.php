<?php namespace App\Http\Controllers;


use DB;
use Input;
use Cookie;
use Redirect;
use Carbon\Carbon;
use App\Notification;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Pembayaran extends Controller {

	public function add()
	{
		$nik = Cookie::get("NIK");
		if (Input::get('idtempat_parkir')!="Tidak ada"){
			$idtempat_parkir = substr(Input::get('idtempat_parkir'), 13,1);
		} else{
			$idtempat_parkir = NULL;
		}

		if (Input::get('idtempat_lahan')!="Tidak ada"){
			$idtempat_lahan = substr(Input::get('idtempat_lahan'), 10,1);
		} else{
			$idtempat_lahan = NULL;
		}

		DB::table('ppl_aparter_pembayaran')->insert([
			'id_tempat_parkir' => $idtempat_parkir,
			'id_tempat_lahan' => $idtempat_lahan,
			'pembayaran_terakhir' => Carbon::now()->month." ".Carbon::now()->year,
		]);
		

		if ($idtempat_parkir!=NULL){
			$var = "parkir"."_".$idtempat_parkir;
		} else{
			$var = "lahan"."_".$idtempat_lahan;
		}

		if (Input::hasFile('unggah'))
		{
			$ext = Input::file('unggah')->getClientOriginalExtension();
			Input::file('unggah')->move(storage_path().'\pembayaran',$nik.'_'.Carbon::now()->month.'_'.$var.'.'.$ext); // dari cookies
		}

		$subject = "Pembayaran";
		$id_ktp = $nik;
		$body = "Proses pembayaran berhasil. Terima kasih sudah membayar";
		Notification::addNotif($body,$id_ktp,$subject);
		return Redirect::action('SiteController@home');
	}

}
