<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->string('ofd_id')->nullable();
            $table->string('ofd_full_name')->nullable();
            $table->string('ofd_email')->nullable();
            $table->string('ofd_phone')->nullable();
            $table->string('ofd_role')->nullable();
            
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
        Schema::dropIfExists('personnels');
    }
}
