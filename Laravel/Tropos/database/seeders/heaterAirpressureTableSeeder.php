<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class heaterAirpressureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heater_airpressure')->insert([
            'heater_on' => 'on',
        ]);
    }
}
