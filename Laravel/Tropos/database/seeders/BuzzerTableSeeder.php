<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BuzzerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buzzers')->insert([
            'buzzer_on' => 'uit'
        ]);
    }
}
