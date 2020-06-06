<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanaController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    //$data['pengguna'] = \DB::table('t_biodata')->get();

    $data['dana'] = \App\Dana::orderBy('id')->get();
    return view('dana', $data);
      }
  public function create(){
    return view('dana.form');
  }
  public function store(Request $request)
      {
        $rule = [
          'nominal'              => 'required|numeric',
          'pembayaran'           => 'required',
          'foto'                 => 'required',
          'keperluan'            => 'required',
          'nik'                  => 'required',
        ];
        $this->validate($request, $rule);
        $input = $request->all();

        //Ini menggunakan Eloquent
        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName(); //keterangan foto
        $upload = 'dokumen_donasi_dana'; //tempat menyimpan foto
        $file->move($upload,$nama_file);

        $dana = new \App\Dana;
        $dana->nominal              = $input['nominal'];
        $dana->pembayaran           = $input['pembayaran'];
        $dana->foto                 = $nama_file;
        $dana->keperluan            = $input['keperluan'];
        $dana->nik                  = $input['nik'];
        $status = $dana->save();
        // }

        if ($status) {
          return redirect('/dana')->with('success', 'Data Berhasil Ditambahkan');
        } else {
          return redirect('/dana/create')->with('error', 'Data Gagal Ditambahkan');
        }
      }
      public function edit(Request $request, $id){
        $data['dana'] = \DB::table('t_dana')->find($id);
        return view('dana.form', $data);
      }

      public function update(Request $request, $id){
        $gambar = $request->hidden_image;
        $file = $request->file('foto');
        if($file !=''){
        $rule = [
          'nominal'              => 'required|numeric',
          'pembayaran'           => 'required',
          'foto'                 => 'required|file|image|mimes:jpeg,png,jpg',
          'keperluan'            => 'required',
          'nik'                  => 'required',
        ];
        $gambar = rand().".".$file->getClientOriginalExtension(); //keterangan foto
        $upload = 'dokumen_donasi_dana'; //tempat menyimpan foto
        $file->move($upload,$gambar);
      } else {
        $rule = [
          'nominal'              => 'required|numeric',
          'pembayaran'           => 'required',
          'keperluan'            => 'required',
          'nik'                  => 'required',
        ];
      }
        $this->validate($request, $rule);

        $input = $request->all();
          //Ini menggunakan Eloquent
          $dana =\App\Dana::find($id);
          $dana->nominal              = $input['nominal'];
          $dana->pembayaran           = $input['pembayaran'];
          $dana->foto                 = $gambar;
          $dana->keperluan            = $input['keperluan'];
          $dana->nik                  = $input['nik'];
          $status = $dana->save();

          if ($status) {
            return redirect('/dana')->with('success', 'Data Berhasil Diubah');
          } else {
            return redirect('/dana/create')->with('error', 'Data Gagal Diubah');
          }
        }
        public function destroy(Request $request, $id){

          //Ini menggunakan Eloquent
          $dana = \App\Dana::find($id);
          $status = $dana->delete();

          if ($status) {
            return redirect('/dana')->with('success', 'Data Berhasil Dihapus');
          } else {
            return redirect('/dana/create')->with('error', 'Data Gagal Dihapus');
          }
        }
}
