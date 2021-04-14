<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TemperatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('temperature')->insert([
        'temperatuur' => 20.00,
      ]);
    }
}
