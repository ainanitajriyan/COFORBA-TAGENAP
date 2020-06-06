<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    //$data['pengguna'] = \DB::table('t_biodata')->get();

    $data['pengguna'] = \App\Pengguna::orderBy('id')->get();
    return view('pengguna', $data);
      }
  public function create(){
    return view('pengguna.form');
  }
  public function store(Request $request)
      {
        $rule = [
          'nik'         => 'required|numeric',
          'nama'        => 'required|string',
          'jenkel'      => 'required',
          'tempatlahir' => 'required',
          'tgl_lahir'   => 'required',
          'usia'        => 'required',
          'alamat'      => 'required',
          'kota'        => 'required',
          'kecamatan'   => 'required',
          'kelurahan'   => 'required',
          'telepon'     => 'required|numeric',
          'email'       => 'required',
        ];
        $this->validate($request, $rule);
        $input = $request->all();
        //unset($input['_token']);
        //$status = \DB::table('t_siswa')->insert($input);

        //Ini menggunakan Eloquent
        //$status = \App\Siswa::Create($input);

        $pengguna = new \App\Pengguna;
        $pengguna->nik         = $input['nik'];
        $pengguna->nama        = $input['nama'];
        $pengguna->jenkel      = $input['jenkel'];
        $pengguna->tempatlahir = $input['tempatlahir'];
        $pengguna->tgl_lahir   = $input['tgl_lahir'];
        $pengguna->usia        = $input['usia'];
        $pengguna->alamat      = $input['alamat'];
        $pengguna->kota        = $input['kota'];
        $pengguna->kecamatan   = $input['kecamatan'];
        $pengguna->kelurahan   = $input['kelurahan'];
        $pengguna->telepon     = $input['telepon'];
        $pengguna->email       = $input['email'];
        $status = $pengguna->save();

        if ($status) {
          return redirect('/pengguna')->with('success', 'Data Berhasil Ditambahkan');
        } else {
          return redirect('/pengguna/create')->with('error', 'Data Gagal Ditambahkan');
        }
      }
      public function edit(Request $request, $id){
        $data['pengguna'] = \DB::table('t_pengguna')->find($id);
        return view('pengguna.form', $data);
      }

      public function update(Request $request, $id){
        $rule = [
          'nik'         => 'required',
          'nama'        => 'required|string',
          'jenkel'      => 'required',
          'tempatlahir' => 'required',
          'tgl_lahir'   => 'required',
          'usia'        => 'required',
          'alamat'      => 'required',
          'kota'        => 'required',
          'kecamatan'   => 'required',
          'kelurahan'   => 'required',
          'telepon'     => 'required|numeric',
          'email'       => 'required',
        ];
        $this->validate($request, $rule);
        $input = $request->all();

          //Ini menggunakan Eloquent
          $pengguna =\App\Pengguna::where('id', '=', $id)->first();
          //syntak diatas untuk mengatasi error creating object from empty value
          $pengguna->nik          = $input['nik'];
          $pengguna->nama         = $input['nama'];
          $pengguna->jenkel       = $input['jenkel'];
          $pengguna->tempatlahir  = $input['tempatlahir'];
          $pengguna->tgl_lahir    = $input['tgl_lahir'];
          $pengguna->usia         = $input['usia'];
          $pengguna->alamat       = $input['alamat'];
          $pengguna->kota         = $input['kota'];
          $pengguna->kecamatan    = $input['kecamatan'];
          $pengguna->kelurahan    = $input['kelurahan'];
          $pengguna->telepon      = $input['telepon'];
          $pengguna->email        = $input['email'];
          $status = $pengguna->update();

          if ($status) {
            return redirect('/pengguna')->with('success', 'Data Berhasil Diubah');
          } else {
            ini_set('display_errors',0);
            return redirect('/pengguna/create')->with('error', 'Data Gagal Diubah');
          }
        }
        public function destroy(Request $request, $id){
          //$status = \DB::table('t_siswa')->where('id', $id)->delete();

          //Ini menggunakan Eloquent
          $pengguna = \App\Pengguna::find($id);
          $status = $pengguna->delete();

          if ($status) {
            return redirect('/pengguna')->with('success', 'Data Berhasil Dihapus');
          } else {
            return redirect('/pengguna/create')->with('error', 'Data Gagal Dihapus');
          }
        }
}
