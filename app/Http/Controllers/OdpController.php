<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OdpController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    $data['odp'] = \App\Odp::orderBy('id')->get();
    return view('odp', $data);
      }
}
