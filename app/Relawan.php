<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
  public $foreignKey= 'nik';
  public $table = 't_relawan';
  protected $fillabe = [
    'id','pekerjaan', 'pendapatan', 'keahlian', 'rs_rujukan', 'nik'
  ];
  // $table->foreign('id_user')->references('id_user')->on('pengguna');
  //Satu relawan dimiliki oleh pengguna
  public function pengguna(){
    return $this->hasOne('App\Pengguna','nik','nik');
  }


}

 ?>
