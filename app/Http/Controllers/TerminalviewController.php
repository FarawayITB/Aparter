<?php namespace App\Http\Controllers;

use View;
use \App\terminal;

class TerminalviewController extends Controller {
    public function home()
    {
        return View::make('terminal');
	}
	
	public function cek()
	{
		$allTerminal = terminal::all();
		return view('terminal',  ["allTerminal" => $allTerminal]);
	}

	public function lahan()
	{
		return View::make('lahan');
	}
}