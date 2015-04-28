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
		Schema::table('ppl_aparter_pembayaran',function($table)
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
		Schema::drop('ppl_aparter_parkir');
		Schema::drop('ppl_aparter_terminal');
		Schema::drop('ppl_aparter_kecamatan');
		Schema::drop('ppl_aparter_jenis_kendaraan');
		Schema::drop('ppl_aparter_lahan');
		Schema::drop('ppl_aparter_pembayaran');
	}

}
