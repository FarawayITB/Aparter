<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use App\Parkir;
use App\RekomendasiParkir;

use DB;
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
		$listParkir = Parkir::paginate(1);
		return View::make('parkir.view_all_data')
					->with('parkir', $listParkir);
	}

	/**
	 * Show the form for creating a new resource.
	 * Dipakai untuk pendaftaran parkir yang baru
	 *
	 * @return Response
	 */
	public function create()
	{
		$kecamatan = DB::table('kecamatan')
						->select('nama_kecamatan')
						->get();

		$jenis = DB::table('jenis_kendaraan')
						->select('jenis_kendaraan_parkir')
						->get();
		return View::make('parkir.form_daftar')->with('kecamatans', $kecamatan)->with('jeniss', $jenis);
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
			$parkir->id_pemilik  		= Input::get('id_pemilik');
			$parkir->alamat      		= Input::get('alamat');
			$parkir->lokasi     		= Input::get('lokasi_lat').",".Input::get('lokasi_lng');
			$parkir->status      		= "Registrasi";
			$parkir->luas       		= Input::get('luas');
			$parkir->tarif       		= Input::get('tarif');
			$parkir->id_kecamatan 		= DB::table('kecamatan')->where('nama_kecamatan','=', Input::get('kecamatan'))->select('id_kecamatan')->first()->id_kecamatan;
			$parkir->id_jenis_kendaraan = DB::table('jenis_kendaraan')->where('jenis_kendaraan_parkir','=', Input::get('jenis'))->select('id_jenis_kendaraan')->first()->id_jenis_kendaraan;
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
