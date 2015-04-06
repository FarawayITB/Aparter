<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parkir', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_pemilik')->index();
			$table->text('alamat');
			$table->string('lokasi');
			$table->string('status');
			$table->float('luas');
			$table->integer('tarif');
		});
		
		Schema::create('kecamatan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
		});
		
		
		Schema::create('jenis_kendaraan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('jenis_kendaraan');
		});
		
		Schema::create('pembayaran', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_tempat');
			$table->text('alamat');
			$table->string('lokasi');
			$table->integer('status');
			$table->integer('integer');
		});
		
		
		Schema::create('terminal', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->text('alamat');
			$table->string('lokasi');
			$table->integer('jumlah_lahan');
		});
		
		
		Schema::create('lahan', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('id_terminal')->unsigned();
			$table->foreign('id_terminal')
				  ->references('id')->on('terminal')
				  ->onDelete('cascade');
				  
			$table->integer('id_pemilik')->index();
			$table->string('status');
			$table->float('luas');
			$table->integer('harga');
		});
		
		Schema::create('parkir_kecamatan', function(Blueprint $table)
		{
			$table->integer('id_parkir')->unsigned();
			$table->foreign('id_parkir')
				  ->references('id')->on('parkir')
				  ->onDelete('cascade');
				  
			$table->integer('id_kecamatan')->unsigned();
			$table->foreign('id_kecamatan')
				  ->references('id')->on('kecamatan')
				  ->onDelete('cascade');
		});
		
		Schema::create('parkir_jenis_kendaraan', function(Blueprint $table)
		{
			$table->integer('id_parkir')->unsigned();
			$table->foreign('id_parkir')
				  ->references('id')->on('parkir')
				  ->onDelete('cascade');
				  
			$table->integer('id_jenis_kendaraan')->unsigned();
			$table->foreign('id_jenis_kendaraan')
				  ->references('id')->on('jenis_kendaraan')
				  ->onDelete('cascade');
		});
		Schema::create('parkir_pembayaran', function(Blueprint $table)
		{
			$table->integer('id_parkir')->unsigned();
			$table->foreign('id_parkir')
				  ->references('id')->on('parkir')
				  ->onDelete('cascade');
				  
			$table->integer('id_pembayaran')->unsigned();
			$table->foreign('id_pembayaran')
				  ->references('id')->on('pembayaran')
				  ->onDelete('cascade');
		});
		Schema::create('terminal_pembayaran', function(Blueprint $table)
		{
			$table->integer('id_terminal')->unsigned();
			$table->foreign('id_terminal')
				  ->references('id')->on('terminal')
				  ->onDelete('cascade');
				  
			$table->integer('id_pembayaran')->unsigned();
			$table->foreign('id_pembayaran')
				  ->references('id')->on('pembayaran')
				  ->onDelete('cascade');
		});
		
		Schema::create('terminal_lahan', function(Blueprint $table)
		{
			$table->integer('id_terminal')->unsigned();
			$table->foreign('id_terminal')
				  ->references('id')->on('terminal')
				  ->onDelete('cascade');
				  
			$table->integer('id_lahan')->unsigned();
			$table->foreign('id_lahan')
				  ->references('id')->on('lahan')
				  ->onDelete('cascade');
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
		Schema::drop('kecamatan');
		Schema::drop('parkir_kecamatan');
		Schema::drop('jenis_kendaraan');
		Schema::drop('parkir_jenis_kendaraan');
		Schema::drop('pembayaran');
		Schema::drop('parkir_pembayaran');
		Schema::drop('terminal');
		Schema::drop('terminal_pembayaran');
		Schema::drop('lahan');
		Schema::drop('terminal_lahan');
	}

}
