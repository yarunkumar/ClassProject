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
            $table->foreign('station_id', 'fk_vehicles_station')->references('id')->on('stations')->onUpdate('cascade');
            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id', 'fk_vehicles_status')->references('id')->on('statuses')->onUpdate('cascade');
            $table->integer('grant_id')->unsigned()->nullable();
            $table->foreign('grant_id', 'fk_vehicles_grant')->references('id')->on('grants')->onUpdate('cascade');
			$table->integer('unittype_id')->unsigned()->nullable();
            $table->foreign('unittype_id', 'fk_vehicles_unittype')->references('id')->on('unit_types')->onUpdate('cascade');
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
            $table->dropForeign('fk_vehicles_station');
			$table->dropIndex('fk_vehicles_station');
			$table->dropColumn('station_id');
			$table->dropForeign('fk_vehicles_status');
			$table->dropIndex('fk_vehicles_status');
			$table->dropColumn('status_id');
		    $table->dropForeign('fk_vehicles_grant');
			$table->dropIndex('fk_vehicles_grant');
			$table->dropColumn('grant_id');
			$table->dropForeign('fk_vehicles_unittype');
			$table->dropIndex('fk_vehicles_unittype');
			$table->dropColumn('unittype_id');
	        });
    }
}
