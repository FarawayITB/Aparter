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
			$table->integer('id_kecamatan')->unsigned();
			$table->string('nama_kecamatan');
			
			$table->primary('id_kecamatan');
		});

		Schema::create('jenis_kendaraan', function($table)
		{
			$table->integer('id_jenis_kendaraan')->unsigned();
			$table->string('jenis_kendaraan_parkir');

			$table->primary('id_jenis_kendaraan');
		});

		Schema::create('parkir', function($table)
		{
			$table->string('id_parkir');
			$table->string('id_pemilik');
			$table->integer('id_kecamatan')->unsigned();
			$table->integer('id_jenis_kendaraan')->unsigned();
			$table->text('alamat');
			$table->string('lokasi');
			$table->string('status');
			$table->float('luas');
			$table->integer('tarif')->unsigned();

			$table->primary('id_parkir');
			$table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan')->onDelete('cascade');
			$table->foreign('id_jenis_kendaraan')->references('id_jenis_kendaraan')->on('jenis_kendaraan')->onDelete('cascade');
		});

		Schema::create('terminal', function($table)
		{
			$table->string('id_terminal');
			$table->string('nama');
			$table->string('alamat');
			$table->string('lokasi');
			$table->integer('jumlah_lahan')->unsigned();

			$table->primary('id_terminal');
		});

		Schema::create('lahan', function($table)
		{
			$table->string('id_lahan');
			$table->double('luas');
			$table->string('id_terminal');
			$table->string('id_pemilik');
			$table->string('status');
			$table->integer('harga')->unsigned();

			$table->primary('id_lahan');
			$table->foreign('id_terminal')->references('id_terminal')->on('terminal')->onDelete('cascade');

		});

		Schema::create('pembayaran', function($table)
		{
			$table->integer('id_pembayaran')->unsigned();
			$table->string('id_tempat_parkir')->nullable();
			$table->string('id_tempat_lahan')->nullable();
			$table->string('periode');
			$table->string('gambar');

			$table->primary('id_pembayaran');
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
