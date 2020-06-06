<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelawanController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    $data['relawan'] = \App\Relawan::orderBy('id')->get();
    return view('relawan', $data);
      }
  public function create(){
    return view('relawan.form');
  }
  public function store(Request $request)
      {
        $rule = [
          'pekerjaan' => 'required',
          'pendapatan' => 'required|numeric',
          'keahlian' => 'required',
          'rs_rujukan' => 'required',
          'nik' => 'required',
        ];
        $this->validate($request, $rule);
        $input = $request->all();

        //Ini menggunakan Eloquent
        $relawan = new \App\Relawan;
        $relawan->pekerjaan = $input['pekerjaan'];
        $relawan->pendapatan = $input['pendapatan'];
        $relawan->keahlian = $input['keahlian'];
        $relawan->rs_rujukan = $input['rs_rujukan'];
        $relawan->nik = $input['nik'];
        $status = $relawan->save();

        if ($status) {
          return redirect('/relawan')->with('success', 'Data Berhasil Ditambahkan');
        } else {
          return redirect('/relawan/create')->with('error', 'Data Gagal Ditambahkan');
        }
      }
      public function edit(Request $request, $id){
        $data['relawan'] = \DB::table('t_relawan')->find($id);
        return view('relawan.form', $data);
      }

      public function update(Request $request, $id){
        $rule = [
          'pekerjaan' => 'required',
          'pendapatan' => 'required|numeric',
          'keahlian' => 'required',
          'rs_rujukan' => 'required',
        ];
        $this->validate($request, $rule);
        $input = $request->all();

          //Ini menggunakan Eloquent
          $relawan =\App\Relawan::find($id);
          //$status = $siswa->update($input);
          $relawan->pekerjaan = $input['pekerjaan'];
          $relawan->pendapatan = $input['pendapatan'];
          $relawan->keahlian = $input['keahlian'];
          $relawan->rs_rujukan = $input['rs_rujukan'];
          $status = $relawan->save();
          if ($status) {
            return redirect('/relawan')->with('success', 'Data Berhasil Diubah');
          } else {
            return redirect('/relawan/create')->with('error', 'Data Gagal Diubah');
          }
        }
        public function destroy(Request $request, $id){
          //$status = \DB::table('t_siswa')->where('id', $id)->delete();

          //Ini menggunakan Eloquent
          $relawan = \App\Relawan::find($id);
          $status = $relawan->delete();

          if ($status) {
            return redirect('/relawan')->with('success', 'Data Berhasil Dihapus');
          } else {
            return redirect('/relawan/create')->with('error', 'Data Gagal Dihapus');
          }
        }
}
