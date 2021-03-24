<?php

namespace App\Http\Controllers;

use \App\Models\Temperatuur;

use Illuminate\Http\Request;

class TemperatuurController extends Controller
{
  public function showTemp(){
    $temp = \App\Models\Temperatuur::first()->temperatuur;
    return view('temperature', ['temp' => $temp]);
    // return view('temperature')->with('temperature', \App\Models\Temperatuur::first()->temperatuur);
  }
}
