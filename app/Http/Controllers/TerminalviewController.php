<?php namespace App\Http\Controllers;

use View;

class TerminalviewController extends Controller {
    public function home()
    {
        return View::make('terminalview');
	}
}