<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKonsultasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_konsultasi', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('batuk',['ya','tidak']);
            $table->enum('pilek',['ya','tidak']);
            $table->enum('sakit_tenggorokan',['ya','tidak']);
            $table->enum('menggigil',['ya','tidak']);
            $table->enum('suhu_badan',['ya','tidak']);
            $table->enum('lemah_lesu',['ya','tidak']);
            $table->enum('sakit_kepala',['ya','tidak']);
            $table->enum('nyeri_otot',['ya','tidak']);
            $table->enum('nyeri_perut',['ya','tidak']);
            $table->enum('mual',['ya','tidak']);
            $table->enum('diare',['ya','tidak']);
            $table->string('riwayat_penyakit',200);
            $table->string('gejala_lainnya',120);
            $table->string('negara_kunjungan',50);
            $table->string('kota_kunjungan',50);
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_konsultasi');
    }
}
