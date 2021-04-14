<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirpressureController extends Controller
{
    public function show() {
        return view('airpressure', ['airpressure' => \App\Models\Airpressure::first()->measurement,
                                    'window_status' => \App\Models\AirpressureWindow::first()->window_open,
                                    'heater_status' => \App\Models\AirpressureHeater::first()->heater_on,
                                    'desired_airpressure' => \App\Models\Airpressure::first()->gewenste_luchtdruk
                                    ]);
    }

    public function store(Request $request, \App\Models\Airpressure $airpressure) {
        $airpressure = \App\Models\Airpressure::first();
        $airpressure->gewenste_luchtdruk = $request->input('airpressure');

        try {
            $airpressure->save();
            return redirect('/airpressure');
        }
        catch(Exception $e) {
            return redirect('/airpressure');
        }

    }
}
