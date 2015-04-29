<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Datetime;


class Notification extends Model
{
	protected $table = 'ppl_aparter_notifications';
	protected $primaryKey = 'id';
	public $timestamps = false;

	public static function addNotif($body,$id_ktp,$subject) {
		DB::table('ppl_aparter_notifications')->insert([
			'body' => $body,
			'id_ktp' => $id_ktp,
			'subject' => $subject
			]);
	}

	public static function cekTenggat() {
		$datetime = new Datetime('today');
		$datetime->modify('-7 day');
		$adatenggat = DB::table('ppl_aparter_lahan')
			->where('tenggat','>=',$datetime)
			->get();
		if ($adatenggat != null) {
			$subject = "Masa tenggat";
			$id_ktp = $id_ktp;
			$body = "Waktu pembayaran Anda akan memasuki masa tenggat dalam 1 minggu.";
			addNotif($body,$id_ktp,$subject);
		}
	}
}