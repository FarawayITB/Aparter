<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	protected $fillable = ['type', 'subject', 'body', 'object_id', 'object_type', 'sent_at'];

	public function getDates() {
		return ['created_at', 'updated_at', 'sent_at'];
	}
}