<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetGrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_grant', function ($table) {

            $table->integer('all_asset_id')->unsigned()->nullable();
            $table->foreign('all_asset_id')->references('id')->on('all_assets')->onDelete("cascade");

            $table->integer('grant_id')->unsigned()->nullable();
            $table->foreign('grant_id')->references('id')->on('grants')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_grant');
    }


}
