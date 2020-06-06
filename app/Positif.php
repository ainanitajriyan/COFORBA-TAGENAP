<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positif extends Model
{
  public $table = 't_daftar_positif';
  protected $fillabe = [
    'id','nama','jenkel','tempatlahir','tgl_lahir', 'usia', 'alamat'
    , 'kota', 'kecamatan', 'kelurahan', 'tgl_penepatan','rs_perawatan'
  ];
}

 ?>
