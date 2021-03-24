<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirpressureController extends Controller
{
    public function show() {
        return view('airpressure')->with('airpressure', \App\Models\Airpressure::first()->measurement);
    }
}
