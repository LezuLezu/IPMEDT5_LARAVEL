<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonoxideController extends Controller
{
    public function show(){
        return view('monoxide')->with('carbon_monoxide', \App\Models\Monoxide::first()->amount);
    }
}
