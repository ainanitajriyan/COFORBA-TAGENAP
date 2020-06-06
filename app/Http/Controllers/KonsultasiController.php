<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    //$data['pengguna'] = \DB::table('t_biodata')->get();

    $data['konsultasi'] = \App\Konsultasi::orderBy('id')->get();
    return view('Konsultasi', $data);
      }
  public function create(){
    return view('konsultasi.form');
  }
  public function store(Request $request)
      {
        $rule = [
          'batuk'             => 'required',
          'pilek'             => 'required',
          'sakit_tenggorokan' => 'required',
          'suhu_badan'        => 'required',
          'lemah_lesu'        => 'required',
          'sakit_kepala'      => 'required',
          'nyeri_otot'        => 'required',
          'nyeri_perut'       => 'required',
          'mual'              => 'required',
          'diare'             => 'required',
          'riwayat_penyakit'  => 'required',
          'gejala_lainnya'    => 'required',
          'negara_kunjungan'  => 'required',
          'kota_kunjungan'   => 'required',
          'tgl_berangkat'     => 'required',
          'tgl_pulang'        => 'required',
        ];
        $this->validate($request, $rule);
        $input = $request->all();
        //unset($input['_token']);
        //$status = \DB::table('t_siswa')->insert($input);

        //Ini menggunakan Eloquent
        //$status = \App\Siswa::Create($input);

        $konsultasi = new \App\Konsultasi;
        $konsultasi->batuk              = $input['batuk'];
        $konsultasi->pilek              = $input['pilek'];
        $konsultasi->sakit_tenggorokan  = $input['sakit_tenggorokan'];
        $konsultasi->menggigil          = $input['menggigil'];
        $konsultasi->suhu_badan         = $input['suhu_badan'];
        $konsultasi->lemah_lesu         = $input['lemah_lesu'];
        $konsultasi->sakit_kepala       = $input['sakit_kepala'];
        $konsultasi->nyeri_otot         = $input['nyeri_otot'];
        $konsultasi->nyeri_perut        = $input['nyeri_perut'];
        $konsultasi->mual               = $input['mual'];
        $konsultasi->diare              = $input['diare'];
        $konsultasi->riwayat_penyakit   = $input['riwayat_penyakit'];
        $konsultasi->gejala_lainnya     = $input['gejala_lainnya'];
        $konsultasi->negara_kunjungan   = $input['negara_kunjungan'];
        $konsultasi->kota_kunjungan     = $input['kota_kunjungan'];
        $konsultasi->tgl_berangkat      = $input['tgl_berangkat'];
        $konsultasi->tgl_pulang         = $input['tgl_pulang'];
        $status = $konsultasi->save();

        if ($status) {
          return redirect('/konsultasi')->with('success', 'Data Berhasil Ditambahkan');
        } else {
          return redirect('/konsultasi/create')->with('error', 'Data Gagal Ditambahkan');
        }
      }
      public function edit(Request $request, $id){
        $data['konsultasi'] = \DB::table('t_konsultasi')->find($id);
        return view('konsultasi.form', $data);
      }

      public function update(Request $request, $id)
      {
        $rule = [
          'batuk'             => 'required',
          'pilek'             => 'required',
          'sakit_tenggorokan' => 'required',
          'suhu_badan'        => 'required',
          'lemah_lesu'        => 'required',
          'sakit_kepala'      => 'required',
          'nyeri_otot'        => 'required',
          'nyeri_perut'       => 'required',
          'mual'              => 'required',
          'diare'             => 'required',
          'riwayat_penyakit'  => 'required',
          'gejala_lainnya'    => 'required',
          'negara_kunjungan'  => 'required',
          'kota_kunjungan'    => 'required',
          'tgl_berangkat'     => 'required',
          'tgl_pulang'        => 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
          //Ini menggunakan Eloquent
          $konsultasi =\App\Konsultasi::find($id);
          $konsultasi->batuk             = $input['batuk'];
          $konsultasi->pilek             = $input['pilek'];
          $konsultasi->sakit_tenggorokan = $input['sakit_tenggorokan'];
          $konsultasi->menggigil         = $input['menggigil'];
          $konsultasi->suhu_badan        = $input['suhu_badan'];
          $konsultasi->lemah_lesu        = $input['lemah_lesu'];
          $konsultasi->sakit_kepala      = $input['sakit_kepala'];
          $konsultasi->nyeri_otot        = $input['nyeri_otot'];
          $konsultasi->nyeri_perut       = $input['nyeri_perut'];
          $konsultasi->mual              = $input['mual'];
          $konsultasi->diare             = $input['diare'];
          $konsultasi->riwayat_penyakit  = $input['riwayat_penyakit'];
          $konsultasi->gejala_lainnya    = $input['gejala_lainnya'];
          $konsultasi->negara_kunjungan  = $input['negara_kunjungan'];
          $konsultasi->kota_kunjungan    = $input['kota_kunjungan'];
          $konsultasi->tgl_berangkat     = $input['tgl_berangkat'];
          $konsultasi->tgl_pulang         = $input['tgl_pulang'];
          $status = $konsultasi->save();

          if ($status) {
            return redirect('/konsultasi')->with('success', 'Data Berhasil Diubah');
          } else {
            return redirect('/konsultasi/create')->with('error', 'Data Gagal Diubah');
          }
        }

        public function destroy(Request $request, $id){
          //Ini menggunakan Eloquent
          $konsultasi = \App\Konsultasi::find($id);
          $status = $konsultasi->delete();

          if ($status) {
            return redirect('/konsultasi')->with('success', 'Data Berhasil Dihapus');
          } else {
            return redirect('/konsultasi/create')->with('error', 'Data Gagal Dihapus');
          }
        }
}
