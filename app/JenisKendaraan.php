<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKendaraan extends Model {

	protected $table = 'jenis_kendaraan';
	protected $primaryKey = 'id_jenis_kendaraan';
	public $timestamps = false;

}
