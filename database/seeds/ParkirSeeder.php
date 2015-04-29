<?php

use Illuminate\Database\Seeder;
use App\Parkir as Parkir;
  
class ParkirSeeder extends Seeder {
    public function run() {

        DB::statement("SET foreign_key_checks=0");
        Parkir::truncate();
        DB::statement("SET foreign_key_checks=1");

        Parkir::create( [
            'id_pemilik' => '3273060611940005',
            'id_kecamatan' => '1',
            'id_jenis_kendaraan' => '1',
            'alamat' => 'Jl. Bebek 42',
            'lokasi' => '',
            'status' => 'Registrasi',
            'luas' => '100',
            'tarif' => '2000',
            'tenggat' => '2015-05-01',
        ] );

        Parkir::create( [
            'id_pemilik' => '3273060611940005',
            'id_kecamatan' => '1',
            'id_jenis_kendaraan' => '1',
            'alamat' => 'Jl. Ganesha 10',
            'lokasi' => '',
            'status' => 'Registrasi',
            'luas' => '50',
            'tarif' => '1000',
            'tenggat' => '2015-05-07',
        ] );

        Parkir::create( [
            'id_pemilik' => '3273060611940005',
            'id_kecamatan' => '1',
            'id_jenis_kendaraan' => '1',
            'alamat' => 'Jl. Kanayakan 14',
            'lokasi' => '',
            'status' => 'Registrasi',
            'luas' => '85',
            'tarif' => '1000',
            'tenggat' => '2015-05-02',
        ] );
    }
}