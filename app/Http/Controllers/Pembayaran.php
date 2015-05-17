<?php namespace App\Http\Controllers;


use DB;
use File;
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
			if (Input::get('idtempat_parkir')[14] == " "){
				$idtempat_parkir = substr(Input::get('idtempat_parkir'), 13, 1);
			} else{
				$idtempat_parkir = substr(Input::get('idtempat_parkir'), 13, 2);
			}
			$varparkir = "parkir"."_".$idtempat_parkir;
		} else{
			$idtempat_parkir = NULL;
		}

		if (Input::get('idtempat_lahan')!="Tidak ada"){
			if (Input::get('idtempat_lahan')[11] == " "){
				$idtempat_lahan = substr(Input::get('idtempat_lahan'), 10, 1);
			} else{
				$idtempat_lahan = substr(Input::get('idtempat_lahan'), 10, 2);
			}
			$varlahan = "lahan"."_".$idtempat_lahan;
		} else{
			$idtempat_lahan = NULL;
		}

		DB::table('ppl_aparter_pembayaran')->insert([
			'id_tempat_parkir' => $idtempat_parkir,
			'id_tempat_lahan' => $idtempat_lahan,
			'pembayaran_terakhir' => Carbon::now()->month,
			'id_pemilik' => $nik,
		]);

		if (Input::hasFile('unggah'))
		{
			$file = Input::file('unggah');
			$ext = Input::file('unggah')->getClientOriginalExtension();
			if (isset($varlahan) && !isset($varparkir)){
				Input::file('unggah')->move(storage_path().'\pembayaran',$nik.'_'.Carbon::now()->month.'_'.$varlahan.'.'.$ext); // dari cookies	
			} else{
				if (!isset($varlahan) && isset($varparkir)){
					Input::file('unggah')->move(storage_path().'\pembayaran',$nik.'_'.Carbon::now()->month.'_'.$varparkir.'.'.$ext); // dari cookies	
				} else{
					Input::file('unggah')->move(storage_path().'\pembayaran',$nik.'_'.Carbon::now()->month.'_'.$varlahan.'.'.$ext); // dari cookies	
					File::copy(storage_path().'\pembayaran\\' . $nik.'_'.Carbon::now()->month.'_'.$varlahan.'.'.$ext, storage_path().'\pembayaran' . '\\'.$nik.'_'.Carbon::now()->month.'_'.$varparkir.'.'.$ext);
				}
			}
		}

		$from = "Dispenda";
		$kategori = "Pembayaran";
		$subject = "Pembayaran";
		$id_ktp = $nik;
		$body = "Proses pembayaran berhasil. silahkan tunggu konfirmasi pembayaran";
		Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);
		return Redirect::action('SiteController@home');
	}

}
