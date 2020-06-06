<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pengguna', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('nik');
          $table->string('nama',100);
          $table->enum('jenkel',['L','P'])->default('L');
          $table->string('tempatlahir',30);
          $table->date('tgl_lahir',50);
          $table->int('usia',2);
          $table->string('alamat',50);
          $table->string('kota',50);
          $table->enum('kecamatan',['andir', 'astana_anyar', 'antapani', 'arcamanik', 'babakan_ciparay', 'bandung_kidul','bandung_kulon',
'bandung_wetan', 'batununggal', 'bojongloa_kaler', 'bojongloa_kidul','buah_batu', 'cibeunying_kaler', 'cibeunying_kidul',
'cibiru', 'cicendo', 'cidadap', 'cinambo','coblong','gedebage','kiaracondong','lengkong','mandalajati','panyileukan','rancasari',
'regol','sukajadi','sukasari','sumur_bandung', 'ujung_berung'])->default('andir');
          $table->string('kelurahan',20);
          $table->string('telepon',18);
          $table->string('email',30);
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
        Schema::dropIfExists('t_pengguna');
    }
}
