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
            $table->foreign('personnel_id', 'fk_all_assets_personnel')->references('id')->on('personnels')->onUpdate('cascade');
            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id', 'fk_all_assets_status')->references('id')->on('statuses')->onUpdate('cascade');
            $table->integer('vehicle_id')->unsigned()->nullable();
            $table->foreign('vehicle_id', 'fk_all_assets_vehicle')->references('id')->on('vehicles')->onUpdate('cascade');
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->foreign('vendor_id', 'fk_all_assets_vendor')->references('id')->on('vendors')->onUpdate('cascade');
            $table->integer('station_id')->unsigned()->nullable();
            $table->foreign('station_id', 'fk_all_assets_station')->references('id')->on('stations')->onUpdate('cascade');
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
            $table->dropForeign('fk_all_assets_personnel');
		    $table->dropIndex('fk_all_assets_personnel');
			$table->dropColumn('personnel_id');
            $table->dropForeign('fk_all_assets_status');
			$table->dropIndex('fk_all_assets_status');
			$table->dropColumn('status_id');
            $table->dropForeign('fk_all_assets_vehicle');
			$table->dropIndex('fk_all_assets_vehicle');
			$table->dropColumn('vehicle_id');
            $table->dropForeign('fk_all_assets_vendor');
			$table->dropIndex('fk_all_assets_vendor');
			$table->dropColumn('vendor_id');
            $table->dropForeign('fk_all_assets_station');
			$table->dropIndex('fk_all_assets_station');
			$table->dropColumn('station_id');
        });
    }
}
?>