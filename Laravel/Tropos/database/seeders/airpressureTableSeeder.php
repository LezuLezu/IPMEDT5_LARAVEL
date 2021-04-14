<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class airpressureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airpressure')->insert([
            'measurement' => 0,
        ]);
    }
}