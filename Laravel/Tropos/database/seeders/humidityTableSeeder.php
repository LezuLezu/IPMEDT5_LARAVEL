<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class humidityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x = 0; $x < 72; $x++) {
            DB::table('humidity')->insert([
                'luchtvochtigheid' => rand ( 40, 60 ),
            ]);
        }
    }
}
