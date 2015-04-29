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
		$this->call('TerminalSeeder');
		$this->call('LahanSeeder');
		$this->call('NotificationSeeder');
		$this->call('ParkirSeeder');
		$this->command->info('Kecamatan table seeded!');
		$this->command->info('Jenis Kendaraan table seeded!');
		$this->command->info('Terminal table seeded!');
		$this->command->info('Lahan table seeded!');
		$this->command->info('Notification table seeded!');
		$this->command->info('Parkir table seeded!');
	}

}
