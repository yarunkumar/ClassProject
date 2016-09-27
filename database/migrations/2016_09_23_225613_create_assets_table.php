<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asset_name');
            $table->integer('asset_id');
            $table->date('asset_date_purchased')->nullable();
            $table->string('laptop_name');
            $table->string('laptop_model_imei');
            $table->string('laptop_imei');
            $table->string('laptop_mobile_type');
            $table->decimal('asset_cost', 15, 2);

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
        Schema::drop('assets');
    }
}
