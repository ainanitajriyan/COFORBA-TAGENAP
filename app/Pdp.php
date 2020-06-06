<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdp extends Model
{
  public $table = 't_daftar_pdp';
  protected $fillabe = [
    'id','nama','jenkel','tempatlahir','tgl_lahir', 'usia', 'alamat'
    , 'kota', 'kecamatan', 'kelurahan', 'tgl_penepatan', 'status_pengawasan'
    ,'rs_rujukan','status', 'tgl_penepatan_negatif'
  ];
}

 ?>
