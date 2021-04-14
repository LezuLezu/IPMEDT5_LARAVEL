<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumidityController extends Controller
{
    public function showHum(){
        return view('humidity', [
          'hum' => \App\Models\Humidity::latest()->first(),
          'avghum' => \App\Models\Humidity::avg('luchtvochtigheid'),
          'sum' => \App\Models\Humidity::all(),

        ]);
      }
}
