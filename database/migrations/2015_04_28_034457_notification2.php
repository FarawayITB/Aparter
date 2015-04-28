<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notification2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('notifications',function($table)
		{
			$table->dropColumn('type');
			$table->dropColumn('subject');
			$table->dropColumn('object_id');
			$table->dropColumn('object_type');
			$table->dropColumn('sent_at');
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parkir');
		Schema::drop('terminal');
		Schema::drop('kecamatan');
		Schema::drop('jenis_kendaraan');
		Schema::drop('lahan');
		Schema::drop('pembayaran');
		Schema::drop('notifications');
	}

}
