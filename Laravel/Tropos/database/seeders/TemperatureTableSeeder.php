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
        //de standaardtemperatuur wordt voor het begin op 20 graden gezet
        'temperatuur' => 20.00,
      ]);
    }
}
