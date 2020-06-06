<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odp extends Model
{
  public $table = 't_daftar_odp';
  protected $fillabe = [
    'id','nama','jenkel','tempatlahir','tgl_lahir', 'usia', 'alamat'
    , 'kota', 'kecamatan', 'kelurahan', 'tgl_penepatan', 'status_pemantauan'
    , 'tgl_penepatan_negatif'
  ];
}

 ?>
