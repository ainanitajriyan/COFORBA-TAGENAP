<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use App\Relawan;

class RelasiController extends Controller
{
    public function index(){
      $pengguna = Pengguna::all();
      $relawan= Relawan::all();
      // $relawan= Relawan::where('pekerjaan', $pekerjaan)->firstOrFail();
      return view('relawan',['relawan'=>$relawan], compact('pengguna'));
      // return view('pengguna',['pengguna'=> $pengguna], compact('relawan'));
      // return view('pengguna')
    }
}
