<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteIdPemilik extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lahan',function($table)
		{
			$table->dropColumn('id_pemilik');
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
	}

}
