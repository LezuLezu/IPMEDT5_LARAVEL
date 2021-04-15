<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirpressureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airpressure', function (Blueprint $table) {
            $table->id();
            $table->double('measurement', 8, 4)->default(0);    //de gemeten data van de arduino sensor
            $table->integer('gewenste_luchtdruk')->default(1025);   //de gewenste luchtdruk die is ingevoerd op de pagina
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airpressure');
    }
}