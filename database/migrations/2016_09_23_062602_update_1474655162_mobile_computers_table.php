<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1474655162MobileComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mobile_computers', function (Blueprint $table) {
            $table->integer('assettype_id')->unsigned()->nullable();
            $table->foreign('assettype_id', 'fk_assettype')->references('id')->on('asset_types');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mobile_computers', function (Blueprint $table) {
            $table->dropColumn('');
            
        });
    }
}
