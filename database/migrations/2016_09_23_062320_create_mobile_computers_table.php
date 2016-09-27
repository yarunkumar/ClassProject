<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_computers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('laptop_model');
            $table->integer('laptop_serial');
            $table->string('laptop_name');
            $table->string('laptop_model_imei');
            $table->string('laptop_imei');
            $table->string('laptop_mobile_type');
            $table->date('laptop_date_purchased')->nullable();
            $table->decimal('laptop_cost', 15, 2);
            
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
        Schema::dropIfExists('mobile_computers');
    }
}
