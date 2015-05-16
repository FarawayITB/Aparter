<?php namespace App\Http\Controllers;

use DB;
use Cookie;
use View;

class UserController extends Controller {
    public function pembayaran()
    {
        $nik = Cookie::get("NIK");
    	$parkir = DB::table('ppl_aparter_parkir')
    				->where('id_pemilik', '=', $nik) // where id_pemilik = id_ktp
                    ->where ('tenggat','<>','0000-00-00')
    				->get();

    	$lahan = DB::table('ppl_aparter_lahan')
    				->where('id_pemilik', '=', $nik) // where id_pemilik = id_ktp
    				->join('ppl_aparter_terminal','ppl_aparter_lahan.id_terminal','=','ppl_aparter_terminal.id_terminal')
    				->select('ppl_aparter_lahan.id_lahan','ppl_aparter_terminal.nama')
    				->get();

        return View::make('pembayaran')->with('parkirs', $parkir)->with('lahans', $lahan)->with('id_ktp', $nik);
	}

    public function progress()
    {
        $nik = Cookie::get("NIK");
        $parkir = DB::table('ppl_aparter_parkir')
                    ->where('id_pemilik', '=', $nik) // where id_pemilik = id_ktp
                    ->get();

        $lahan = DB::table('ppl_aparter_lahan')
                    ->where('id_pemilik', '=', $nik) // where id_pemilik = id_ktp
                    ->join('ppl_aparter_terminal','ppl_aparter_lahan.id_terminal','=','ppl_aparter_terminal.id_terminal')
                    ->select('ppl_aparter_lahan.id_lahan','ppl_aparter_terminal.nama')
                    ->get();
        return View::make('progress')->with('parkirs', $parkir)->with('lahans', $lahan)->with('id_ktp', $nik);
    }
}
