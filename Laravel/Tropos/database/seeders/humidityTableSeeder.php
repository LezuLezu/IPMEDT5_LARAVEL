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
        DB::table('humidity')->insert([
            'luchtvochtigheid' => 50,
        ]);
    }
}
