<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class windowAirpressureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('window_airpressure')->insert([
            'window_open' => 'closed',
        ]);
    }
}
