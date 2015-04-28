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

		Schema::create('ppl_aparter_kecamatan', function($table)
		{
			$table->increments('id_kecamatan');
			$table->string('nama_kecamatan');
		});

		Schema::create('ppl_aparter_jenis_kendaraan', function($table)
		{
			$table->increments('id_jenis_kendaraan');
			$table->string('jenis_kendaraan_parkir');
		});

		Schema::create('ppl_aparter_parkir', function($table)
		{
			$table->increments('id_parkir');
			$table->string('id_pemilik')->nullable();
			$table->integer('id_kecamatan')->unsigned();
			$table->integer('id_jenis_kendaraan')->unsigned();
			$table->text('alamat');
			$table->string('lokasi');
			$table->string('status');
			$table->float('luas');
			$table->integer('tarif')->unsigned();
			$table->date('tenggat');

			$table->foreign('id_pemilik')->references('nik')->on('ppl_dukcapil_ktp')->onDelete('cascade');
			$table->foreign('id_kecamatan')->references('id_kecamatan')->on('ppl_aparter_kecamatan')->onDelete('cascade');
			$table->foreign('id_jenis_kendaraan')->references('id_jenis_kendaraan')->on('ppl_aparter_jenis_kendaraan')->onDelete('cascade');
		});

		Schema::create('ppl_aparter_terminal', function($table)
		{
			$table->increments('id_terminal');
			$table->string('nama');
			$table->string('alamat');
			$table->string('lokasi');
			$table->integer('jumlah_lahan')->unsigned();
		});

		Schema::create('ppl_aparter_lahan', function($table)
		{
			$table->increments('id_lahan');
			$table->double('luas');
			$table->integer('id_terminal')->unsigned();
			$table->string('id_pemilik')->nullable();
			$table->string('status');
			$table->integer('harga')->unsigned();
			$table->date('tenggat');

			$table->foreign('id_terminal')->references('id_terminal')->on('ppl_aparter_terminal')->onDelete('cascade');
			$table->foreign('id_pemilik')->references('nik')->on('ppl_dukcapil_ktp')->onDelete('cascade');

		});

		Schema::create('ppl_aparter_pembayaran', function($table)
		{
			$table->increments('id_pembayaran');
			$table->integer('id_tempat_parkir')->unsigned()->nullable();
			$table->integer('id_tempat_lahan')->unsigned()->nullable();
			$table->string('pembayaran_terakhir');
	

			$table->foreign('id_tempat_parkir')->references('id_parkir')->on('ppl_aparter_parkir')->onDelete('cascade');
			$table->foreign('id_tempat_lahan')->references('id_lahan')->on('ppl_aparter_lahan')->onDelete('cascade');
		});

		Schema::create('ppl_aparter_notifications', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('id_ktp');
			$table->string('subject');
            $table->text('body')->nullable();
            $table->boolean('is_read')->default(0);
            $table->boolean('is_admin')->default(0);

            $table->foreign('id_ktp')->references('nik')->on('ppl_dukcapil_ktp')->onDelete('cascade');
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
		Schema::drop('ppl_aparter_notifications');
	}

}
