<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CleaningWaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methods_array = ['Stofzuigen', 'Stoffen', 'Dweilen', 'Poetsen'];

        foreach($methods_array as $method){
            DB::table('cleaning_ways')->insert([
                'method' => $method,
            ]);
        }
    }
}
