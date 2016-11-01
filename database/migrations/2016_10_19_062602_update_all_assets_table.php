<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAllAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('all_assets', function (Blueprint $table) {

			$table->integer('personnel_id')->unsigned()->nullable();
            $table->foreign('personnel_id', 'fk_personnel')->references('id')->on('personnels');

            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id', 'fk_status')->references('id')->on('statuses');
            $table->integer('vehicle_id')->unsigned()->nullable();
            $table->foreign('vehicle_id', 'fk_vehicle')->references('id')->on('vehicles');
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->foreign('vendor_id', 'fk_vendor')->references('id')->on('vendors');
            $table->integer('station_id')->unsigned()->nullable();
            $table->foreign('station_id')->references('id')->on('stations');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('all_assets', function (Blueprint $table) {
            $table->dropColumn('');
            
        });
    }
}
