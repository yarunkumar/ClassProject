<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1479282512StationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stations', function (Blueprint $table) {
            $table->integer('grant_id')->unsigned()->nullable();
            $table->foreign('grant_id', 'fk_grant_grant_id_station')->references('id')->on('grants');
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->foreign('vendor_id', 'fk_vendor_vendor_id_station')->references('id')->on('vendors');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stations', function (Blueprint $table) {
            $table->dropForeign('fk_grant_grant_id_station');
            $table->dropIndex('fk_grant_grant_id_station');
            $table->dropColumn('grant_id');
            $table->dropForeign('fk_vendor_vendor_id_station');
            $table->dropIndex('fk_vendor_vendor_id_station');
            $table->dropColumn('vendor_id');
            
        });
    }
}
