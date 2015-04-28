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
			$table->dropColumn('ppl_aparter_id_pemilik');
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
