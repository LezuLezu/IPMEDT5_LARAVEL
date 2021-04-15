<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Models\Clean as Clean; 
use \App\Models\Products as Products;
use \App\Models\Methods as Methods;

use Carbon\Carbon;
use Exception;


class CleaningController extends Controller
{
    public function create(){
        return view('dust.create--clean', [
            'products' => Products::all(),
            'methods' => Methods::all(),
        ]);
    }
    public function store(Request $request, Clean $clean){
        $clean->date = Carbon::now('Europe/Amsterdam')->toDateString();
        $clean->time = Carbon::now('Europe/Amsterdam')->toTimeString();
        $clean->method = $request->input('method');
        $clean->product = $request->input('product');
        try{
            $clean->save();
            return redirect('/dust/clean');
        }catch(Exception $e){
            return redirect('/dust/create');
        }
    }
    public function show(){
        $clean = Clean::all();
        return view('/dust/clean', ['cleaned' => $clean]);
    }
}
