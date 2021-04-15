<?php

namespace App\Http\Controllers;

use \App\Models\Temperatuur;

use Illuminate\Http\Request;

class TemperatuurController extends Controller
{
  //Functie voor het laten zien van de gemeten temperatuur en het bijpassende advies
  public function showTemp(){
    $temp = \App\Models\Temperatuur::first()->temperatuur;
    return view('temperature', ['temp' => $temp]);
  }

  //Functie die de view returned met alle mogelijke adviezen + informatie
  public function showTempInfo(){
    return view('temperatureInfo');
  }
}
