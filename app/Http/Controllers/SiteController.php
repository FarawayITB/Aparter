<?php namespace App\Http\Controllers;

use View;

class SiteController extends Controller {
    public function home()
    {
        return View::make('index');
	}

	public function parkir()
	{
		return View::make('parkir');
	}

	public function terminal()
	{
		return View::make('terminal');
	}

	public function tentang()
	{
		return View::make('tentang');
	}

	public function notifikasi()
	{
		return View::make('notifikasi');
	}

	public function tes()
	{
		return View::make('tes');
	}
}
