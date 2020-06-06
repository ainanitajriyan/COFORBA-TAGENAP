<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_dana', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('nominal');
        $table->enum('pembayaran',['BNI','BCA','BRI','MANDIRI','alfamart','dana','ovo']);
        $table->string('foto',255);
        $table->enum('keperluan',['bansos','tenaga_medis','rs_rujukan']);
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
        Schema::dropIfExists('t_dana');
    }
}
