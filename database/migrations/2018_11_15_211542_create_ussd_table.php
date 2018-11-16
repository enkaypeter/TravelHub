<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUssdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ussd', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ACCORD')->default('0');
            $table->integer('AAC')->default('0');
            $table->integer('ACPN')->default('0');
            $table->integer('ADC')->default('0');
            $table->integer('APC')->default('0');
            $table->integer('APGA')->default('0');
            $table->integer('GDPN')->default('0');
            $table->integer('FDP')->default('0');
            $table->integer('PDP')->default('0');
            $table->integer('PPN')->default('0');
            $table->integer('YES PARTY')->default('0');
            $table->integer('YPP')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ussd');
    }
}
