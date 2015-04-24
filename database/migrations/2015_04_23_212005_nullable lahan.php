<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullableLahan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lahan',function($table)
		{
			$table->string('id_pemilik')->nullable()->change();
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
