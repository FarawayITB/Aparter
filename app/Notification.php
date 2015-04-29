<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

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
}