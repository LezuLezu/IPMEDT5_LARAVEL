<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCleaning extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cleaning', function (Blueprint $table) {
            $table->date('date');
            $table->time('time');
            $table->string('method');
            $table->string('product')->nullable();
            $table->foreign('method')->references('method')->on('cleaning_ways');
            $table->foreign('product')->references('product')->on('cleaning_products');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_cleaning');
    }
}
