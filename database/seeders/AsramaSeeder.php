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
            'nama_asrama' => 'Bani Umar',
            'nomor_asrama' => '12',
            'pengasuh_asrama' => 'KH. Iqbal Hasyim',
            'jumlah_santri' => '360',
            'deskripsi_asrama' => 'asrama 12 putra putri bani umar pondok pesantren darul ulum',
            'biaya_pendaftaran' => 2000000,
            'biaya_perbulan' => 500000,
            'kuota_pendaftaran' => 60,
        ]);
    }
}
