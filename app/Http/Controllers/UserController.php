<?php namespace App\Http\Controllers;

use DB;
use View;

class UserController extends Controller {
    public function pembayaran()
    {
    	$parkir = DB::table('ppl_aparter_parkir')
    				->where('id_pemilik', '=', '3273060611940005') // where id_pemilik = id_ktp
    				->get();

    	$lahan = DB::table('ppl_aparter_lahan')
    				->where('id_pemilik', '=', '3273060611940005') // where id_pemilik = id_ktp
    				->join('terminal','lahan.id_terminal','=','terminal.id_terminal')
    				->select('lahan.id_lahan','terminal.nama')
    				->get();

        return View::make('pembayaran')->with('parkirs', $parkir)->with('lahans', $lahan)->with('id_ktp', '3273060611940005');
	}
}
