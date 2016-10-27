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

			
            $table->integer('file_id')->unsigned()->nullable();
            $table->foreign('file_id', 'fk_file')->references('id')->on('related_files');


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
