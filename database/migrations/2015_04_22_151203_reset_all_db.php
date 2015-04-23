<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResetAllDb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('kecamatan', function($table)
		{
			$table->increments('id_kecamatan');
			$table->string('nama_kecamatan');
		});

		Schema::create('jenis_kendaraan', function($table)
		{
			$table->increments('id_jenis_kendaraan');
			$table->string('jenis_kendaraan_parkir');
		});

		Schema::create('parkir', function($table)
		{
			$table->increments('id_parkir');
			$table->string('id_pemilik');
			$table->integer('id_kecamatan')->unsigned();
			$table->integer('id_jenis_kendaraan')->unsigned();
			$table->text('alamat');
			$table->string('lokasi');
			$table->string('status');
			$table->float('luas');
			$table->integer('tarif')->unsigned();

			$table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan')->onDelete('cascade');
			$table->foreign('id_jenis_kendaraan')->references('id_jenis_kendaraan')->on('jenis_kendaraan')->onDelete('cascade');
		});

		Schema::create('terminal', function($table)
		{
			$table->increments('id_terminal');
			$table->string('nama');
			$table->string('alamat');
			$table->string('lokasi');
			$table->integer('jumlah_lahan')->unsigned();
		});

		Schema::create('lahan', function($table)
		{
			$table->increments('id_lahan');
			$table->double('luas');
			$table->integer('id_terminal')->unsigned();
			$table->string('id_pemilik');
			$table->string('status');
			$table->integer('harga')->unsigned();

			$table->foreign('id_terminal')->references('id_terminal')->on('terminal')->onDelete('cascade');

		});

		Schema::create('pembayaran', function($table)
		{
			$table->increments('id_pembayaran');
			$table->integer('id_tempat_parkir')->unsigned()->nullable();
			$table->integer('id_tempat_lahan')->unsigned()->nullable();
			$table->string('periode');
			$table->string('gambar');

			$table->foreign('id_tempat_parkir')->references('id_parkir')->on('parkir')->onDelete('cascade');
			$table->foreign('id_tempat_lahan')->references('id_lahan')->on('lahan')->onDelete('cascade');
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
