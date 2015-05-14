<?php namespace App;

use DB;
use Datetime;
use Cookie;
use Illuminate\Database\Eloquent\Model;


class Notification extends Model
{
	protected $table = 'ppl_aparter_notifications';
	protected $primaryKey = 'id';
	public $timestamps = false;

	public static function addNotif($id_ktp,$subject,$body,$from,$kategori) {
		DB::table('ppl_aparter_notifications')->insert([
			'body' => $body,
			'id_ktp' => $id_ktp,
			'subject' => $subject,
			'from' => $from,
			'kategori' => $kategori
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
			$id_ktp = Cookie::get('NIK');
			$body = "Waktu pembayaran Anda akan memasuki masa tenggat dalam 1 minggu.";
			Notification::addNotif($body,$id_ktp,$subject);
		}
	}
}