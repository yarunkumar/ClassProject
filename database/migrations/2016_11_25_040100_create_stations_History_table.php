<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('stationhis', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('station_id')->nullable();
            $table->string('station_name')->nullable();
            $table->integer('station_number')->nullable();
            $table->string('station_date')->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->integer('zipcode')->nullable();
            $table->string('district')->nullable();
             $table->integer('vendor_id')->nullable();
            $table->string('vendor_name')->nullable();
             $table->integer('grant_id')->nullable();
            $table->string('grant_name')->nullable();

            
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
        //
         Schema::dropIfExists('stationhis');
    }
}
