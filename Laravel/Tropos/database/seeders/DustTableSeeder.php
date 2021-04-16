<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class DustTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dust_array = ['43,9', '85,1', '56.3'];
        foreach($dust_array as $dust){
            DB::table('dust')->insert([
                'date' => Carbon::now('Europe/Amsterdam')->toDateString(),
                'time' => Carbon::now('Europe/Amsterdam')->toTimeString(),
                'measurement' => $dust,
                'unit' => "ug/m^3",
            ]);
        }
    }
}

// DB::table('carbon_monoxide')->insert([
//     'amount' => 0
// ]);