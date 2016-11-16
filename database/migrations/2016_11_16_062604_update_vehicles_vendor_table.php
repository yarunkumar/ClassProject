<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVehiclesVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {


            $table->integer('vendor_id')->unsigned()->nullable();
            $table->foreign('vendor_id', 'fk_vehicles_vendor')->references('id')->on('vendors')->onUpdate('cascade');

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
            $table->dropForeign('fk_vehicles_vendor');
            $table->dropIndex('fk_vehicles_vendor');
            $table->dropColumn('vendor_id');
            
        });
    }
}
