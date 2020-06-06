<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTRsRujukan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_rs_rujukan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_rs', 100);
            $table->integer('jml_dokter_paru');
            $table->integer('jml_tenaga_medis');
            $table->string('kota', 20);
            $table->enum('kecamatan', ['Andir','Astana Anyar','Antapani','Arcamanik','Babakan Ciparay',
            'Bandung Kidul','Bandung Kulon','Bandung Wetan','Batununggal','Bojongloa Kaler','Bojongloa Kidul',
            'Buah Batu','Cibeunying Kaler','Cibeunying Kidul','Cibiru','Cicendo','Cidadap','Cinambo','Coblong',
            'Gedebage','Kiaracondong','Lengkong','Mandalajati','Panyileukan','Rancasari','Regol','Sukajadi',
            'Sukasari','Sumur Bandung','Ujung Berung']);
            $table->string('kelurahan', 20);
            $table->string('kd_pos', 5);
            $table->enum('status', ['positif_covid','isolasi']);
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
        Schema::dropIfExists('t_rs_rujukan');
    }
}
