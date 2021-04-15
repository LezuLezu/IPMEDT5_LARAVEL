<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirpressureController extends Controller
{
    public function show() {
        $window_status = \App\Models\AirpressureWindow::first()->window_open;   //status van het raam en de verwarming ophalen 
        $heater_status = \App\Models\AirpressureHeater::first()->heater_on;

        //status raam en verwarming omzetten naar het nederlandse woorden en opslaan in variabele
        if($window_status == "open") {
            $window_status = "open";
        } elseif($window_status == "closed") {
            $window_status = "dicht";
        }

        if($heater_status == "on") {
            $heater_status = "aan";
        } elseif($heater_status == "off") {
            $heater_status = "uit";
        }

        //view returnen met de data
        return view('airpressure', ['airpressure' => \App\Models\Airpressure::first()->measurement,
                                    'window_status' => $window_status,
                                    'heater_status' => $heater_status,
                                    'desired_airpressure' => \App\Models\Airpressure::first()->gewenste_luchtdruk
                                    ]);
    }

    //input van de gewenste luchtdruk van de pagina opslaan
    public function store(Request $request, \App\Models\Airpressure $airpressure) {
        $airpressure = \App\Models\Airpressure::first();
        $airpressure->gewenste_luchtdruk = $request->input('airpressure');

        $airpressure->save();
        return redirect('/airpressure');

    }
}