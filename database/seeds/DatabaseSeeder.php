<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('KecamatanSeeder');
		$this->call('JenisKendaraanSeeder');
		$this->command->info('Kecamatan table seeded!');
		$this->command->info('Jenis Kendaraan table seeded!');
	}

}
