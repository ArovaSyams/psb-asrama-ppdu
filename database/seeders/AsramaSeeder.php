<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asramas')->insert([
            [
                'nama' => 'Bani Umar',
                'nomor_asrama' => 12,
                'pengasuh_asrama' => 'KH. Iqbal Hasyim',
                'jumlah_santri' => 360,
                'deskripsi' => 'asrama 12 putra putri bani umar pondok pesantren darul ulum',
                'biaya_pendaftaran' => 2000000,
                'biaya_perbulan' => 500000,
                'kuota_pendaftaran' => 60,
            ],
            [
                'nama' => 'Al-kautsar',
                'nomor_asrama' => '13',
                'pengasuh_asrama' => 'KH. Iqbal Hasyim',
                'jumlah_santri' => '360',
                'deskripsi' => 'asrama 12 putra putri bani umar pondok pesantren darul ulum',
                'biaya_pendaftaran' => 2000000,
                'biaya_perbulan' => 500000,
                'kuota_pendaftaran' => 60,
            ],
            [
                'nama' => 'Ardales',
                'nomor_asrama' => '14',
                'pengasuh_asrama' => 'KH. Iqbal Hasyim',
                'jumlah_santri' => '360',
                'deskripsi' => 'asrama 12 putra putri bani umar pondok pesantren darul ulum',
                'biaya_pendaftaran' => 2000000,
                'biaya_perbulan' => 500000,
                'kuota_pendaftaran' => 60,
            ],
            [
                'nama' => 'Ar-risalah',
                'nomor_asrama' => '15',
                'pengasuh_asrama' => 'KH. Iqbal Hasyim',
                'jumlah_santri' => '360',
                'deskripsi' => 'asrama 12 putra putri bani umar pondok pesantren darul ulum',
                'biaya_pendaftaran' => 2000000,
                'biaya_perbulan' => 500000,
                'kuota_pendaftaran' => 60,
            ],
            [
                'nama' => 'Al-falah',
                'nomor_asrama' => '16',
                'pengasuh_asrama' => 'KH. Iqbal Hasyim',
                'jumlah_santri' => '360',
                'deskripsi' => 'asrama 12 putra putri bani umar pondok pesantren darul ulum',
                'biaya_pendaftaran' => 2000000,
                'biaya_perbulan' => 500000,
                'kuota_pendaftaran' => 60,
            ],
        ]);
    }
}
