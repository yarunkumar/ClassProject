<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vehiclehis', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('vehicle_id')->unsigned()->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('van')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('year', 4)->nullable();
            $table->timestamps();
            
            $table->integer('station_id')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->integer('status_id')->unsigned()->nullable();
            $table->string('status')->nullable();
            $table->integer('grant_id')->unsigned()->nullable();
            $table->string('grant_name')->nullable();
            $table->integer('unittype_id')->unsigned()->nullable();
            $table->string('unittype_name')->nullable();
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->string('vendor_name')->nullable();
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
        Schema::dropIfExists('vehiclehis');
    }
}
