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
            'id_terminal' => '1',
            'id_pemilik' => '3273060611940005',
            'status' => 'Request perluasan',
            'harga' => '400000',
            'tenggat' => '2015-05-01',
        ] );

        Lahan::create( [
            'luas' => '40',
            'id_terminal' => '2',
            'id_pemilik' => '3273060611940005',
            'status' => 'Request perluasan',
            'harga' => '300000',
            'tenggat' => '2015-05-01',
        ] );

        Lahan::create( [
            'luas' => '80',
            'id_terminal' => '3',
            'id_pemilik' => '3273060611940005',
            'status' => 'Request perluasan',
            'harga' => '550000',
            'tenggat' => '2015-05-01',
        ] );
    }
}