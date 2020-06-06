<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTRelawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_relawan', function (Blueprint $table) {
          $table->integer('id_relawan');
          $table->string('pekerjaan',50);
          $table->integer('pendapatan',20);
          $table->enum('keahlian',['perawat','konsultan','apoteker'])->default('perawat');
          $table->enum('rs_rujukan',['rs_advent','rs_alislam','rs_borromeus','rs_immanuel','rsk_kopo','rs_salamun','rs_santosa','rs_sartika_asih','rs_ujung_berung','rs_pindad'])->default('rs_borromeus');
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
        Schema::dropIfExists('t_relawan');
    }
}
