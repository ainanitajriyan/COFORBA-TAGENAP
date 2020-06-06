<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
  public $table = 't_konsultasi';
  protected $fillabe = [
    'id','batuk', 'pilek', 'sakit_tenggorokan', 'menggigil','suhu_badan','lemah_lesu',
    'sakit_kepala','nyeri_otot','nyeri_perut','mual','diare', 'riwayat_penyakit', 'gejala_lainnya',
    'negara_kunjungan', 'kota_kunjungan', 'tgl_berangkat', 'tgl_pulang'
  ];
  }

 ?>
