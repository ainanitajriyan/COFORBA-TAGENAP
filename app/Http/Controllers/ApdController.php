<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ApdController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    $data['apd'] = \App\Apd::orderBy('id')->get();
    return view('apd', $data);
      }
  public function create(){
    return view('apd.form');
  }
  public function store(Request $request)
      {
        $rule = [
          'masker'               => 'required|numeric',
          'pelindung_mata'       => 'required|numeric',
          'pelindung_wajah'      => 'required|numeric',
          'gaun_medis'           => 'required|numeric',
          'sarung_tangan_medis'  => 'required|numeric',
          'penutup_kepala'       => 'required|numeric',
          'sepatu_pelindung'     => 'required|numeric',
          'foto'                 => 'required|file|image|mimes:jpeg,png,jpg',
          'resi_pengiriman'      => 'required',
          'nik'                  => 'required|numeric',
        ];
        $this->validate($request, $rule);
        $input = $request->all();

        //Ini menggunakan Eloquent
        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName(); //keterangan foto
        $upload = 'dokumen_donasi_apd'; //tempat menyimpan foto
        $file->move($upload,$nama_file);

        $apd = new \App\Apd;
        $apd->masker              = $input['masker'];
        $apd->pelindung_mata      = $input['pelindung_mata'];
        $apd->pelindung_wajah     = $input['pelindung_wajah'];
        $apd->gaun_medis          = $input['gaun_medis'];
        $apd->sarung_tangan_medis = $input['sarung_tangan_medis'];
        $apd->penutup_kepala      = $input['penutup_kepala'];
        $apd->sepatu_pelindung    = $input['sepatu_pelindung'];
        $apd->foto                = $nama_file;
        $apd->resi_pengiriman     = $input['resi_pengiriman'];
        $apd->nik                 = $input['nik'];
        $status = $apd->save();

        if ($status) {
          return redirect('/apd')->with('success', 'Data Berhasil Ditambahkan');
        } else {
          return redirect('/apd/create')->with('error', 'Data Gagal Ditambahkan');
        }
      }
      public function edit(Request $request, $id){
        $data['apd'] = \DB::table('t_apd')->find($id);
        return view('apd.form', $data);
      }

      public function update(Request $request, $id){
        $gambar = $request->hidden_image;
        $file = $request->file('foto');
        if($file !=''){
        $rule = [
          'masker'              => 'required|numeric',
          'pelindung_mata'      => 'required|numeric',
          'pelindung_wajah'     => 'required|numeric',
          'gaun_medis'          => 'required|numeric',
          'sarung_tangan_medis' => 'required|numeric',
          'penutup_kepala'      => 'required|numeric',
          'sepatu_pelindung'    => 'required|numeric',
          'foto'                => 'required|file|image|mimes:jpeg,png,jpg',
          'resi_pengiriman'     => 'required',
          'nik'                  => 'required',
        ];
        $nama_file = time()."_".$file->getClientOriginalExtension(); //keterangan foto
        $upload = 'dokumen_donasi_apd'; //tempat menyimpan foto
        $file->move($upload,$nama_file);
      } else {
        $rule = [
          'masker'            => 'required|numeric',
          'pelindung_mata'    => 'required|numeric',
          'pelindung_wajah'   => 'required|numeric',
          'gaun_medis'        => 'required|numeric',
          'sarung_tangan_medis' => 'required|numeric',
          'penutup_kepala'    => 'required|numeric',
          'sepatu_pelindung'  => 'required|numeric',
          'resi_pengiriman'   => 'required',
          'nik'                  => 'required',
        ];
      }
        $this->validate($request, $rule);
        $input = $request->all();
          //Ini menggunakan Eloquent
          $apd =\App\Apd::find($id);
          $apd->masker              = $input['masker'];
          $apd->pelindung_mata      = $input['pelindung_mata'];
          $apd->pelindung_wajah     = $input['pelindung_wajah'];
          $apd->gaun_medis          = $input['gaun_medis'];
          $apd->sarung_tangan_medis = $input['sarung_tangan_medis'];
          $apd->penutup_kepala      = $input['penutup_kepala'];
          $apd->sepatu_pelindung    = $input['sepatu_pelindung'];
          $apd->foto                = $gambar;
          $apd->resi_pengiriman     = $input['resi_pengiriman'];
          $apd->nik                 = $input['nik'];
          $status = $apd->save();
          if ($status) {
            return redirect('/apd')->with('success', 'Data Berhasil Diubah');
          } else {
            return redirect('/apd/create')->with('error', 'Data Gagal Diubah');
          }
        }
        public function destroy(Request $request, $id){

          //Ini menggunakan Eloquent
          $apd = \App\Apd::find($id);
          $status = $apd->delete();

          if ($status) {
            return redirect('/apd')->with('success', 'Data Berhasil Dihapus');
          } else {
            return redirect('/apd/create')->with('error', 'Data Gagal Dihapus');
          }
        }
}
