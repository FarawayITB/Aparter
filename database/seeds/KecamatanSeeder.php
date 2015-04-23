<?php

use Illuminate\Database\Seeder;
use App\Kecamatan as Kecamatan;
  
class KecamatanSeeder extends Seeder {
    public function run() {

        DB::statement("SET foreign_key_checks=0");
        Kecamatan::truncate();
        DB::statement("SET foreign_key_checks=1");

        Kecamatan::create( [
            'nama_kecamatan' => 'Campaka'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Ciroyom'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Dugus Cariang'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Garuda'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Kebonjeruk'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Maleber'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Antapani Kidul'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Antapani Kulon'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Antapani Tengah'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Antapani Wetan'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Cisaranten Endah'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Cisaranten Kulon'
        ] );

        Kecamatan::create( [
            'nama_kecamatan' => 'Cisaranten Bina Harapan'
        ] );
    }
}