<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllassetsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('all_assethis', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('asset_id')->nullable();
            $table->string('name')->nullable();
            $table->string('asset_type')->nullable();
            $table->string('model')->nullable();
            $table->string('make')->nullable();
            $table->string('manu')->nullable();
            $table->string('serial_number')->nullable();
            $table->integer('model_imei')->nullable();
            $table->date('date_purchased')->nullable();
            $table->date('warranty_date')->nullable();
            $table->string('cost')->nullable();
            $table->integer('imei')->nullable();
            $table->string('mobile_type')->nullable();
            $table->string('os')->nullable();
            $table->text('comments')->nullable();
            $table->string('ntm_uid')->nullable();
            $table->string('ntm_pass')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('mac')->nullable();
            $table->string('cad_ip')->nullable();
            $table->string('sim_id')->nullable();
            $table->string('sim_phone')->nullable();
            $table->string('gps_protocol')->nullable();
            $table->string('firmware_ver')->nullable();
            $table->string('radio_id')->nullable();
            $table->string('meid_model_num')->nullable();
            $table->string('meid')->nullable();
            $table->string('phone')->nullable();
            $table->string('multi_tech_sim')->nullable();
            $table->string('mdc_id')->nullable();
            $table->string('mdc_pass')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('asset_tag')->nullable();
            $table->tinyInteger('network_status')->nullable()->default(0);
            $table->string('drop_status')->nullable();
            $table->string('switch_serial')->nullable();
            $table->string('screen_size')->nullable();
            $table->string('ac_adapter')->nullable();
            $table->string('stylus')->nullable();
            $table->string('seid_num')->nullable();
            $table->string('emid')->nullable();
            $table->string('tmv_num')->nullable();
            $table->string('tmv_alias')->nullable();
            $table->string('radio_desc')->nullable();
            $table->string('tier_level')->nullable();
            $table->string('system_alias')->nullable();
            $table->string('system_id')->nullable();

            $table->string('status_id')->nullable();
            $table->string('status')->nullable();
            $table->string('station_id')->nullable();
            $table->string('station_name')->nullable();
            $table->string('vehicle_id')->nullable();
            $table->string('vehicle_name')->nullable();
            $table->string('vendor_id')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('grant_name')->nullable();


           

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('all_assethis');
    }
}
