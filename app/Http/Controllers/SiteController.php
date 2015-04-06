<?php namespace App\Http\Controllers;

use View;

class SiteController extends Controller {
    public function home()
    {
        return View::make('index');
	}
}
