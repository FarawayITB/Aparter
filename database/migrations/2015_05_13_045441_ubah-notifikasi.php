<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UbahNotifikasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ppl_aparter_notifications',function($table)
		{
			$table->dropColumn('is_read');
			$table->dropColumn('is_admin');
			$table->string('from');
			$table->string('kategori');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ppl_aparter_jenis_kendaraan');
		Schema::drop('ppl_aparter_kecamatan');
		Schema::drop('ppl_aparter_lahan');
		Schema::drop('ppl_aparter_parkir');
		Schema::drop('ppl_aparter_pembayaran');
		Schema::drop('ppl_aparter_terminal');
		Schema::drop('ppl_dukcapil_ktp');
	}

}
