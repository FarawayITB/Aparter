<?php namespace App\Http\Controllers;

use Input;
use DB;
use Cookie;
use View;

class APIController extends Controller {
    public function parkir()
    {
    	$data = Input::all();
    	$status = DB::table('ppl_aparter_parkir')
    				->where('id_parkir','=', $data['idparkir'])
    				->where('id_pemilik','=', $data['user'])
    				->first();
    	echo ($status->status*25).'%';
        die();
	}

    public function lahan()
    {
        $data = Input::all();
        $status = DB::table('ppl_aparter_lahan')
                    ->where('id_lahan','=', $data['idlahan'])
                    ->where('id_pemilik','=', $data['user'])
                    ->first();
        echo ($status->status*25).'%';
        die();
    }
}
