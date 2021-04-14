<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            humidityTableSeeder::class,
            airpressureTableSeeder::class,
            LedTableSeeder::class,
            TemperatureTableSeeder::class,
            CarbonMonoxideTableSeeder::class,
            BuzzerTableSeeder::class

        ]);
    }
}
