<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAllAssetsWithVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('all_assets', function (Blueprint $table) {

			$table->integer('vendor_id')->unsigned()->nullable();
            $table->foreign('vendor_id', 'fk_vendor')->references('id')->on('vendors');


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
