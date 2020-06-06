<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
  public $table = 't_pengguna';
  public $primaryKey= 'nik';
  protected $fillabe = [
    'id_pengguna','nik', 'nama', 'jenkel', 'tempatlahir','tgl_lahir',
    'usia','alamat','kota','kecamatan','kelurahan','telepon',
    'email'
  ];
  public function relawan(){
    return $this->belongsTo(Relawan::class);
    }
  public function apd(){
      return $this->belongsTo(Apd::class);
      }
  public function dana(){
      return $this->belongsTo(Dana::class);
        }
  }

 ?>
