<?php namespace App\Http\Controllers;

use View;
use \App\parkir;

class NotifikasiviewController extends Controller {
    public function home()
    {
        return View::make('notifikasi');
	}
	public function test(){
		$allParkir = Parkir::all();
		return view('notifikasi',  ["allParkir" => $allParkir]);
	}
}