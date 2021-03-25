<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dust;

class DustController extends Controller
{
    public function show(){
        // return \App\Models\dust::all();
        // return \App\Models\dust::orderBy('time', 'DESC')->first();
        $dust= dust::orderBY('time', 'DESC')->first();
        return view('dust.show', ['dust' => $dust]);
    }
}
