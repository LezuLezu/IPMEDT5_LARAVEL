<?php

namespace App\Http\Controllers;
use App\Models\Buzzer;

use Illuminate\Http\Request;

class BuzzerController extends Controller
{
    public function aanuit(){
        $buzzer = Buzzer::all()->first();

        if($buzzer->buzzer_on == 'uit'){
            $buzzer->buzzer_on = 'aan';
        }
        else{
            $buzzer->buzzer_on = 'uit';
        }
        $buzzer->save();
        return redirect('/monoxide');
    }
}
