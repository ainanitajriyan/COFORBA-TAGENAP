<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositifController extends Controller
{
  public function index(){
    //INI MENGGUNAKAN Eloquent
    $data['positif'] = \App\Positif::orderBy('id')->get();
    return view('positif', $data);
      }
}
