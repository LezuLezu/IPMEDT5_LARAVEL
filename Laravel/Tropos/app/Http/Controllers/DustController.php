<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dust;
use DB;
use Symfony\Component\Process\Process;

class DustController extends Controller
{

    public function show(){
        // return \App\Models\dust::all();
        // return \App\Models\dust::orderBy('time', 'DESC')->first();
        $dust= dust::orderBY('time', 'DESC')->first();
        // Ledcontrol by file
        $file = fopen('\App\LedControl.txt', 'w'); 
        $url = $_SERVER['REQUEST_URI'];

        // return $_SERVER['REQUEST_URI'];
        $text = ',' .$url .  $dust->measurement;
        fwrite($file, $text);
        fclose($file);
        return view('dust.show', ['dust' => $dust]);
    }
    

    public function average(){
        // Get average from db by calculations
        $db = DB::select("
        SELECT HOUR(time) as hours, FORMAT(AVG(measurement), 'N3') as average
        FROM dust
        GROUP BY hours
        ORDER BY hours DESC        
        ");
        // return $db;
        $average = $db[0]->average;
        $hour = $db[0]->hours;

        // Led control file
        // return $_SERVER['REQUEST_URI'];
        $file = fopen('\App\LedControl.txt', 'w'); 
        $url = $_SERVER['REQUEST_URI'];
        $text = $url . ',' . $average;
        fwrite($file, $text);
        fclose($file);
        
        // return $db[0]->average . ' ' .  $db[0]->hours ;
        return view('dust.average', ['average' => $average, 'hour'=>$hour]);
    }
}
