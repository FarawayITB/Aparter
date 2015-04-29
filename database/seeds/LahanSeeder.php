<?php

use Illuminate\Database\Seeder;
use App\Lahan as Lahan;
  
class LahanSeeder extends Seeder {
    public function run() {

        DB::statement("SET foreign_key_checks=0");
        Lahan::truncate();
        DB::statement("SET foreign_key_checks=1");

        Lahan::create( [
            'luas' => '30',
            'id_terminal' => '2345678901',
            'id_pemilik' => '1234567890',
            'status' => 'Request perluasan',
            'harga' => '400000',
            'tenggat' => '2015-05-01',
        ] );

        Lahan::create( [
            'luas' => '40',
            'id_terminal' => '3456789012',
            'id_pemilik' => '2345678901',
            'status' => 'Request perluasan',
            'harga' => '300000',
            'tenggat' => '2015-05-01',
        ] );

        Lahan::create( [
            'luas' => '80',
            'id_terminal' => '4567890132',
            'id_pemilik' => '456789032',
            'status' => 'Request perluasan',
            'harga' => '550000',
            'tenggat' => '2015-05-01',
        ] );
    }
}