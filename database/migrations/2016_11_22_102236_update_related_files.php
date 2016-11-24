<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRelatedFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('related_files', function (Blueprint $table) {
            $table->integer('station_id')->unsigned()->nullable();
            $table->foreign('station_id', 'fk_station')->references('id')->on('stations')->onUpdate('cascade');
            $table->integer('allasset_id')->unsigned()->nullable();
            $table->foreign('allasset_id', 'fk_allasset')->references('id')->on('all_assets')->onUpdate('cascade');
            $table->integer('vehicle_id')->unsigned()->nullable();
            $table->foreign('vehicle_id', 'fk_vehicle_vehicle')->references('id')->on('vehicles')->onUpdate('cascade');
            $table->integer('grant_id')->unsigned()->nullable();
            $table->foreign('grant_id', 'fk_grant')->references('id')->on('grants')->onUpdate('cascade');
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->foreign('vendor_id', 'fk_vendor_vendor')->references('id')->on('vendors')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('related_files', function (Blueprint $table) {
            $table->dropForeign('fk_station_station_id_related_file');
            $table->dropIndex('fk_station_station_id_related_file');
            $table->dropColumn('station_id');
            $table->dropForeign('fk_allasset_allasset_id_related_file');
            $table->dropIndex('fk_allasset_allasset_id_related_file');
            $table->dropColumn('allasset_id');
            $table->dropForeign('fk_vehicle__vehicle_vehicle_id_related_file');
            $table->dropIndex('fk_vehicle_vehicle_vehicle_id_related_file');
            $table->dropColumn('vehicle_id');
            $table->dropForeign('fk_grant_grant_id_related_file');
            $table->dropIndex('fk_grant_grant_id_related_file');
            $table->dropColumn('grant_id');
            $table->dropForeign('fk_vendor_vendor_vendor_id_related_file');
            $table->dropIndex('fk_vendor_vendor_vendor_id_related_file');
            $table->dropColumn('vendor_id');

        });
    }
}
