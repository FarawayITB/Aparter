<?php namespace App\Http\Controllers;

use View;

class NotifikasiviewController extends Controller {
    public function home()
    {
        return View::make('notifikasi');
	}
	public function test(){
		return view('notifikasi');
	}
}