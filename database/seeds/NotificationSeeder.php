<?php

use Illuminate\Database\Seeder;
use App\Notification as Notification;
  
class NotificationSeeder extends Seeder {
    public function run() {

        DB::statement("SET foreign_key_checks=0");
        Notification::truncate();
        DB::statement("SET foreign_key_checks=1");

        Notification::create( [
            'id_ktp' => '3273060611940005',
            'subject' => 'Pendaftaran Lahan Parkir Pribadi Jl. Bebek 42',
            'body' => 'Pendaftaran Lahan Parkir Pribadi Jl. Bebek 42 sudah diterima.',
            'is_read' => '0',
            'is_admin' => '0',
        ] );

        Notification::create( [
            'id_ktp' => '3273060611940005',
            'subject' => 'Pendaftaran Rekomendasi Parkir Jl. Ayam Blok F1',
            'body' => 'Pendaftaran Rekomendasi Parkir Jl. Ayam Blok F1 sudah diterima.',
            'is_read' => '0',
            'is_admin' => '0',
        ] );

        Notification::create( [
            'id_ktp' => '3273060611940005',
            'subject' => 'Tenggat Waktu Lahan Terminal Dago',
            'body' => 'Batas pembayaran lahan di Terminal Dago akan mencapai waktu tenggat.',
            'is_read' => '0',
            'is_admin' => '0',
        ] );
    }
}