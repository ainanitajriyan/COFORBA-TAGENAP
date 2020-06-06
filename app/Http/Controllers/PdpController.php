<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdpController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    $data['pdp'] = \App\Pdp::orderBy('id')->get();
    return view('pdp', $data);
      }
}
