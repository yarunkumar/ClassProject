<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllAssethis extends Model
{
    //
    protected $fillable = [
        'name',
        'asset_type',
        'model',
        'make',
        'manu',
        'serial_number',
        'model_imei',
        'date_purchased',
        'warranty_date',
        'cost',
        'imei',
        'mobile_type',
        'os',
        'comments',
        'ntm_uid',
        'ntm_pass',
        'ip_address',
        'mac',
        'cad_ip',
        'sim_id',
        'sim_phone',
        'gps_protocol',
        'firmware_ver',
        'radio_id',
        'meid_model_num',
        'meid',
        'phone',
        'multi_tech_sim',
        'mdc_id',
        'mdc_pass',
        'cpu',
        'ram',
        'asset_tag',
        'network_status',
        'drop_status',
        'switch_serial',
        'screen_size',
        'ac_adapter',
        'stylus',
        'seid_num',
        'emid',
        'tmv_num',
        'tmv_alias',
        'radio_desc',
        'tier_level',
        'system_alias',
        'system_id',
        'status_id',
        'status',
//        removed grant_id because included within the asset_grants table
//        without removing app is giving error on grant_id
//        'grant_id',
        'station_id',
        'station_name',
        'vehicle_id',
        'vehicle_name',
        'personnel_id',
        'vendor_id',
        'vendor_name',
    ];
}
