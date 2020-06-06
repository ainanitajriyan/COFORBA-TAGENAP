<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDaftarOdp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_daftar_odp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',100);
            $table->enum('jenkel',['L','P'])->default('L');
            $table->string('tempatlahir',30);
            $table->date('tgl_lahir',50);
            $table->integer('usia');
            $table->string('alamat',50);
            $table->string('kota',50);
            $table->enum('kecamatan',['Andir','Astana Anyar','Antapani','Arcamanik','Babakan Ciparay',
            'Bandung Kidul','Bandung Kulon','Bandung Wetan','Batununggal','Bojongloa Kaler','Bojongloa Kidul',
            'Buah Batu','Cibeunying Kaler','Cibeunying Kidul','Cibiru','Cicendo','Cidadap','Cinambo','Coblong',
            'Gedebage','Kiaracondong','Lengkong','Mandalajati','Panyileukan','Rancasari','Regol','Sukajadi',
            'Sukasari','Sumur Bandung','Ujung Berung']);
            $table->string('kelurahan',20);
            $table->date('tgl_penetapan');
            $table->enum('status_pemantauan',['isolasi','rujukan']);
            $table->date('tgl_penetapan_negatif');
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
        Schema::dropIfExists('t_daftar_odp');
    }
}
