<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use App\Parkir;
use App\RekomendasiParkir;
use App\Notification;

use DB;
use View;
use Cookie;
use Session;
use Redirect;
use Carbon\Carbon;

class ParkirController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$listParkir = Parkir::all();
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
		$kecamatan = DB::table('ppl_aparter_kecamatan')
						->select('nama_kecamatan')
						->get();

		$jenis = DB::table('ppl_aparter_jenis_kendaraan')
						->select('jenis_kendaraan_parkir')
						->get();


		$nik = Cookie::get('NIK');
		return View::make('parkir.form_daftar')->with('kecamatans', $kecamatan)->with('jeniss', $jenis)->with('nik',$nik);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// store
		$parkir	= new Parkir;

		$parkir->id_pemilik  		= Input::get('id_pemilik');
		$parkir->alamat      		= Input::get('alamat');
		$parkir->lokasi     		= Input::get('lokasi_lat').",".Input::get('lokasi_lng');
		$parkir->status      		= "1";
		$parkir->id_kecamatan 		= DB::table('ppl_aparter_kecamatan')->where('nama_kecamatan','=', Input::get('kecamatan'))->select('id_kecamatan')->first()->id_kecamatan;
		$parkir->id_jenis_kendaraan = DB::table('ppl_aparter_jenis_kendaraan')->where('jenis_kendaraan_parkir','=', Input::get('jenis'))->select('id_jenis_kendaraan')->first()->id_jenis_kendaraan;
		
		if(Input::get('jenis_daftar') == 1)	// lahan pribadi
		{
			$month = Carbon::now()->month;
			$month++;
			
			$parkir->luas       		= Input::get('luas');
			$parkir->tarif       		= Input::get('tarif');
			$parkir->tenggat			= Carbon::now()->year."-".$month."-".Carbon::now()->day;
			$parkir->save();

			/* Create Notification */
			$from = "Dishub";
			$kategori = "Pendaftaran Parkir";
			$alamat = Input::get('alamat');
			$subject = "Pendaftaran Lahan Parkir Pribadi ".$alamat;
			$id_ktp = Input::get('id_pemilik');
			$body = "Pendaftaran lahan parkir pribadi di ".$alamat." sudah diterima dengan status : daftar.";
			Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);

		}
		else	// rekomendasi
		{
			$parkir->save();

			/* Create Notification */
			$from = "Dishub";
			$kategori = "Pendaftaran Rekomendasi Parkir";
			$alamat = Input::get('alamat');
			$subject = "Pendaftaran Lahan Parkir Pribadi ".$alamat;
			$id_ktp = Input::get('id_pemilik');
			$body = "Perekomendasian lahan parkir di ".$alamat." sudah diterima.";
			Notification::addNotif($id_ktp,$subject,$body,$from,$kategori);

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
	public function show()
	{
		return View::make('parkir');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function search()
	{
		$kecamatan = strtolower(Input::get('searchbox'));
		$id_kecamatan = DB::table('ppl_aparter_kecamatan')->where('nama_kecamatan','=', $kecamatan)->pluck('id_kecamatan');
		$listParkir = Parkir::where('id_kecamatan', '=', $id_kecamatan)->where('status', '=', 4)->get();
		return View::make('searchparkir')
					->with('parkir', $listParkir);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$kecamatan = DB::table('kecamatan')
						->select('nama_kecamatan')
						->get();

		$jenis = DB::table('jenis_kendaraan')
						->select('jenis_kendaraan_parkir')
						->get();
		//find customer
		$editParkir = Parkir::find($id);
		//show the edit form
		return View::make('parkir.form_edit')->with('parkir', $editParkir)->with('kecamatans', $kecamatan)->with('jeniss', $jenis);;
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
