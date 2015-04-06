<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;

class Pembayaran extends Controller {

	public function add()
	{
		echo Input::get('no-ktp');
		return 'asdadas';
	}

}
