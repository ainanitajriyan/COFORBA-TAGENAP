<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apd extends Model
{
  public $foreignKey= 'nik';
  public $table = 't_apd';
  protected $fillabe = [
    'id','masker', 'pelindung_mata', 'pelindung_wajah', 'gaun_medis', 'sarung_tangan_medis',
    'penutup_kepala','sepatu_pelindung','total','foto','resi_pengiriman', 'nik'
  ];
  public function pengguna(){
    return $this->hasOne('App\Pengguna','nik','nik');
  }
  // INI MEMAKAI ACESSOR DAN MUTATOR SEBAGAI PENJUMLAHAN TOTAL
  protected $appends = ['total'];
    public function getTotalAttribute(){
      return $this->masker+$this->pelindung_mata+$this->pelindung_wajah+$this->gaun_medis+$this
                  ->sarung_tangan_medis+$this->penutup_kepala+$this->sepatu_pelindung;
    }
}

 ?>
