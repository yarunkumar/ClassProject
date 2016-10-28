<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAssetGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset_grants', function (Blueprint $table) {

            $table->integer('all_asset_id')->unsigned()->nullable();
            $table->foreign('all_asset_id', 'fk_all_asset')->references('id')->on('all_assets');

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
        Schema::table('asset_grants', function (Blueprint $table) {
            $table->dropColumn('');
            
        });
    }
}
