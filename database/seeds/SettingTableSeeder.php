<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::insert([
            'id' => 1,
            'test_date' => NULL,
            'registration_fee' => 100000,
            'message_payment_success' => 'Selamat! Pembayaran Anda telah berhasil diverifikasi!',
            'message_payment_failed' => 'Maaf! Pembayaran Anda belum berhasil diverifikasi, silhkan upload bukti pembayaran dengan jelas!',
            'message_grade_out' => 'Nilai Hasil Test Anda telah keluar!'
        ]);
    }
}
