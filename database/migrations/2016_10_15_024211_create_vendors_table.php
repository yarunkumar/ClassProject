<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->string('vendor_name')->nullable();
            $table->string('vendor_address')->nullable();
            $table->string('vendor_web')->nullable();
            $table->string('vendor_phone')->nullable();
            $table->string('vendor_fax')->nullable();
            $table->string('vendor_tech_sup')->nullable();
            $table->string('vendor_rep')->nullable();
            $table->string('vendor_rep_phone')->nullable();
            $table->string('vendor_rep_phone_m')->nullable();
            $table->string('vendor_email')->nullable();
            
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
        Schema::dropIfExists('vendors');
    }
}
