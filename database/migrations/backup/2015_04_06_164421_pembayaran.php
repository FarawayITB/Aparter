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
		Schema::table('pembayaran', function(Blueprint $table)
		{
			$table->dropColumn(['alamat', 'lokasi', 'status','integer']);
			$table->string('gambar');
			$table->string('periode');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pembayaran');
	}

}
