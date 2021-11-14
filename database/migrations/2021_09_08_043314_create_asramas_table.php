<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asramas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_asrama');
            $table->integer('nomor_asrama')->unique();
            $table->string('pengasuh_asrama');
            // $table->integer('jumlah_asrama');
            $table->integer('jumlah_santri');
            $table->text('deskripsi_asrama');
            $table->integer('biaya_pendaftaran');
            $table->integer('biaya_perbulan');
            $table->integer('kuota_pendaftaran');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asramas');
    }
}
