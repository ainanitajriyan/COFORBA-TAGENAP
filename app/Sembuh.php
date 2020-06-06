<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sembuh extends Model
{
  public $table = 't_daftar_sembuh';
  protected $fillabe = [
    'id','nama','jenkel','tempatlahir','tgl_lahir', 'usia', 'alamat'
    , 'kota', 'kecamatan', 'kelurahan', 'tgl_penepatan','status'
  ];
}

 ?>
