<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CleaningProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products_array = ['Dettol', 'Citronella', 'Dreft', 'Stofdoek', 'Alcohol', 'Schoonmaak Azijn'];

        foreach($products_array as $product){
            DB::table('cleaning_products')->insert([
                'product' => $product,
            ]);
        }
    }
}
