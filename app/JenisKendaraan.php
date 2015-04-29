<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKendaraan extends Model {

	protected $table = 'ppl_aparter_jenis_kendaraan';
	protected $primaryKey = 'id_jenis_kendaraan';
	public $timestamps = false;

}
