<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTApd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_apd', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('masker',30);
        $table->integer('pelindung_mata',30);
        $table->integer('pelindung_wajah',30);
        $table->integer('gaun_medis',30);
        $table->integer('sarung_tangan_medis',30);
        $table->integer('penutup_kepala',30);
        $table->integer('sepatu_pelindung',30);
        $table->integer('total',30);
        $table->string('foto',100);
        $table->string('resi_pengiriman',100);
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
        Schema::dropIfExists('t_apd');
    }
}
