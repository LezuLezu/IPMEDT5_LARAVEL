<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumidityController extends Controller
{
    public function showHum(){
        return view('humidity', [
          'hum' => \App\Models\Humidity::first(),
          'avghum' => \App\Models\Humidity::avg('luchtvochtigheid'),

        ]);
      }
}
