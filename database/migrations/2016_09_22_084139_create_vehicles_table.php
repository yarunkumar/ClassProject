<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_number');
            $table->string('van');
            $table->string('make');
            $table->string('model');
            $table->date('YEAR');
            $table->integer('station_id')->unsigned()->nullable();
            $table->foreign('station_id', 'fk_station')->references('id')->on('stations');
            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id', 'fk_status')->references('id')->on('statuses');
            $table->integer('grant_id')->unsigned()->nullable();
            $table->foreign('grant_id', 'fk_grant')->references('id')->on('grants');
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
