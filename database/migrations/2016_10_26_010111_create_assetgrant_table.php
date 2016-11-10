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
             $table->engine = 'InnoDB';
			$table->increments('id');

			$table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
			
            $table->integer('all_asset_id')->unsigned()->nullable();
            $table->foreign('all_asset_id', 'fk_asset_grant_all_asset')->references('id')->on('all_assets')->onUpdate('Cascade')->onDelete('Cascade');

            $table->integer('grant_id')->unsigned()->default(1);
            $table->foreign('grant_id', 'fk_asset_grant_grant')->references('id')->on('grants')->onUpdate('Cascade')->onDelete('Cascade');

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
