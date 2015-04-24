<?php

use Illuminate\Database\Seeder;
use App\Terminal as Terminal;
  
class TerminalSeeder extends Seeder {
    public function run() {

        DB::statement("SET foreign_key_checks=0");
        Terminal::truncate();
        DB::statement("SET foreign_key_checks=1");

        Terminal::create( [
            'nama' => 'Terminal Leuwi Panjang',
            'alamat' => 'Leuwi Panjang',
            'lokasi' => '0,0',
            'jumlah_lahan' => '20',
        ] );

        Terminal::create( [
            'nama' => 'Terminal Ledeng',
            'alamat' => 'Ledeng',
            'lokasi' => '0,0',
            'jumlah_lahan' => '15',
        ] );

        Terminal::create( [
            'nama' => 'Terminal Cicaheum',
            'alamat' => 'Cicaheum',
            'lokasi' => '0,0',
            'jumlah_lahan' => '25',
        ] );

        Terminal::create( [
            'nama' => 'Terminal ST. Hall',
            'alamat' => 'Stasiun',
            'lokasi' => '0,0',
            'jumlah_lahan' => '50',
        ] );

        Terminal::create( [
            'nama' => 'Terminal Lembang',
            'alamat' => 'Leuwi Panjang',
            'lokasi' => '0,0',
            'jumlah_lahan' => '37',
        ] );

        Terminal::create( [
            'nama' => 'Terminal Kebon Kelapa',
            'alamat' => 'Kebon Kelapa',
            'lokasi' => '0,0',
            'jumlah_lahan' => '41',
        ] );

        Terminal::create( [
            'nama' => 'Terminal Margahayu',
            'alamat' => 'Margahayu',
            'lokasi' => '0,0',
            'jumlah_lahan' => '27',
        ] );
    }
}