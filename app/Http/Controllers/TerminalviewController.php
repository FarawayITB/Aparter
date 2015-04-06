<?php namespace App\Http\Controllers;

use View;

class TerminalviewController extends Controller {
    public function home()
    {
        return View::make('terminal');
	}
	public function cek(){
		return view('terminal');
	}
}