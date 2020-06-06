<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeninggalController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    $data['meninggal'] = \App\Meninggal::orderBy('id')->get();
    return view('meninggal', $data);
      }
}
