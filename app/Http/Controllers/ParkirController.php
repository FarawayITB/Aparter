<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Parkir;
use App\RekomendasiParkir;

use View;
use Session;
use Redirect;

class ParkirController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		daftarParkir();
	}

	/**
	 * Show the form for creating a new resource.
	 * Dipakai untuk pendaftaran parkir yang baru
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('parkir.form_daftar');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// store
		$parkir				= new Parkir;
		$rekomendasiParkir	= new RekomendasiParkir;
		if(Input::get('jenis_daftar') == 1)	// lahan pribadi
		{
			$parkir->id_pemilik  = Input::get('id_pemilik');
			$parkir->alamat      = Input::get('alamat');
			$parkir->lokasi      = Input::get('lokasi');
			$parkir->status      = Input::get('status');
			$parkir->luas        = Input::get('luas');
			$parkir->tarif       = Input::get('tarif');
			$parkir->save();
		}
		else	// rekomendasi
		{
			$rekomendasiParkir->id_pemilik  = Input::get('id_pemilik');
			$rekomendasiParkir->alamat      = Input::get('alamat');
			$rekomendasiParkir->lokasi      = Input::get('lokasi');
			$rekomendasiParkir->status      = Input::get('status');
			$rekomendasiParkir->save();
		}

		// redirect
		Session::flash('message', 'Input data sukses!');
		return Redirect::to('parkir/daftar');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
