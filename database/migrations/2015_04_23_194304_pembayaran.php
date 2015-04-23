<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pembayaran extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pembayaran',function($table)
		{
			$table->dropColumn('periode');
			$table->dropColumn('gambar');
			$table->string('pembayaran_terakhir');
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
