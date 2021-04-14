<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CarbonMonoxideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carbon_monoxide')->insert([
            'amount' => 0
        ]);
    }
}
