<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SembuhController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    $data['sembuh'] = \App\Sembuh::orderBy('id')->get();
    return view('sembuh', $data);
      }
}
