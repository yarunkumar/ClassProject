<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {

            $table->integer('station_id')->unsigned()->nullable();
            $table->foreign('station_id', 'fk_station')->references('id')->on('stations');
            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->integer('grant_id')->unsigned()->nullable();
            $table->foreign('grant_id', 'fk_grant')->references('id')->on('grants');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropColumn('');
            
        });
    }
}
