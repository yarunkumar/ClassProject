<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assetgrants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grant_name')->nullable();
            $table->date('date_issued')->nullable();
            $table->string('grant_type')->nullable();
            $table->date('date_matures')->nullable();
            $table->decimal('grant_value', 15, 2)->nullable();
            $table->text('grant_comments')->nullable();

            $table->integer('file_id')->unsigned()->nullable();
            $table->foreign('file_id', 'fk_file')->references('id')->on('related_files');
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grants');
    }
}
