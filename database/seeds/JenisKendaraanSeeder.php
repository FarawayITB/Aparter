<?php

use Illuminate\Database\Seeder;
use App\JenisKendaraan as JenisKendaraan;
  
class JenisKendaraanSeeder extends Seeder {
    public function run() {

        DB::statement("SET foreign_key_checks=0");
        JenisKendaraan::truncate();
        DB::statement("SET foreign_key_checks=1");

        JenisKendaraan::create( [
            'jenis_kendaraan_parkir' => 'Roda 2'
        ] );

        JenisKendaraan::create( [
            'jenis_kendaraan_parkir' => 'Roda 4'
        ] );
    }
}