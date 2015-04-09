<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;
use DB;

class Pembayaran extends Controller {

	public function add()
	{
		DB::table('pembayaran')->insert([
			'id' => Input::get('no-ktp'),
			'id_tempat' => Input::get('idtempat'),
			'gambar' => Input::file('unggah')->move("D:\\upload\\",Input::get('no-ktp')."_April.png"),
			'periode' => '1,2,3,4,5'
		]);
		
		return Redirect::action('SiteController@home');
	}

}
