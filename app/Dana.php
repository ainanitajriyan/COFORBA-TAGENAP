<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dana extends Model
{
  public $foreignKey= 'nik';
  public $table = 't_dana';
  protected $fillabe = [
    'id','nominal','pembayaran','foto','keperluan', 'nik'
  ];
  public function pengguna(){
    return $this->hasOne('App\Pengguna','nik','nik');
  }

}

 ?>
