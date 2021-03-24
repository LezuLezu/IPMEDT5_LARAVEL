<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('led_temperature')->insert([
        'led_on' => 'uit'
      ]);
    }
}
