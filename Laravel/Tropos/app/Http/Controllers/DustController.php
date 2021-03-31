<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dust;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class DustController extends Controller
{
    public function show(){
        // return \App\Models\dust::all();
        // return \App\Models\dust::orderBy('time', 'DESC')->first();
        $dust= dust::orderBY('time', 'DESC')->first();
        return view('dust.show', ['dust' => $dust]);
    }
    

    public function average(){
        $db = DB::select("
        SELECT HOUR(time) as hours, FORMAT(AVG(measurement), 'N3') as average
        FROM dust
        GROUP BY hours
        ORDER BY hours DESC        
        ");
        // return $db;
        $average = $db[0]->average;
        $hour = $db[0]->hours;
        // return $db[0]->average . ' ' .  $db[0]->hours ;
        return view('dust.average', ['average' => $average, 'hour'=>$hour]);
    }
}
