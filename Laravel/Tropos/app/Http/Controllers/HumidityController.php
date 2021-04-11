<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumidityController extends Controller
{
    public function showHum(){
        $hum = \App\Models\Luchtvochtigheid::first()->humidity;
        return view('humidity', ['hum' => $hum]);
      }
}
