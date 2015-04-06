<?php namespace App\Http\Controllers;

use View;

class UserController extends Controller {
    public function pembayaran()
    {
        return View::make('pembayaran');
	}
}
