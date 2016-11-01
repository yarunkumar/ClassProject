<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class AllAsset /intended to manage all assets except station, unit/
 *
 * @package App
 * @property string $name
 * @property string $model
 * @property string $make
 * @property string $manu
 * @property string $serial_number
 * @property string $model_imei
 * @property date $date_purchased
 * @property date $warranty_date
 * @property string $cost
 * @property string $imei
 * @property string $mobile_type
 * @property string $os
 * @property text $comments
 * @property string $ntm_uid
 * @property string $ntm_pass
 * @property string $ip_address
 * @property string $mac
 * @property string $cad_ip
 * @property string $sim_id
 * @property string $sim_phone
 * @property string $gps_protocol
 * @property string $firmware_ver
 * @property string $radio_id
 * @property string $meid_model_#
 * @property string $meid
 * @property string $phone
 * @property string $multi_tech_sim
 * @property string $mdc_id
 * @property string $mdc_pass
 * @property string $cpu
 * @property string $ram
 * @property string $asset_tag
 * @property tinyInteger $network_status
 * @property string $drop_status
 * @property string $switch_serial
 * @property string $screen_size
 * @property string $ac_adapter
 * @property string $stylus
 * @property string $seid_num
 * @property string $emid
 * @property string $tmv_num
 * @property string $tmv_alias
 * @property string $radio_desc
 * @property string $tier_level
 * @property string $system_alias
 * @property string $system_id
*/
class AllAsset extends Model
{
    use SoftDeletes;
    
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
//        'status_id',
//        removed grant_id because included within the asset_grants table
//        without removing app is giving error on grant_id
//        'grant_id',
//        'station_id',
//        'vehicle_id',
//        'personnel_id',
//        'vendor_id',
    ];

    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDatePurchasedAttribute($input)
    {
        if ($input != null) {
            $this->attributes['date_purchased'] = Carbon::createFromFormat("Y-m-d", $input)->format('Y-m-d');
        } else {
            $this->attributes['date_purchased'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDatePurchasedAttribute($input)
    {
        if ($input != '0000-00-00' && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format("Y-m-d");
        } else {
            return '';
        }
    }
    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setWarrantyDateAttribute($input)
    {
        if ($input != null) {
            $this->attributes['warranty_date'] = Carbon::createFromFormat("Y-m-d", $input)->format('Y-m-d');
        } else {
            $this->attributes['warranty_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getWarrantyDateAttribute($input)
    {
        if ($input != '0000-00-00' && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format("Y-m-d");
        } else {
            return '';
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo*
     *
     */

    public function station()
    {
        return $this->belongsTo(\App\Station::class);
    }

//    Grant many to many to assets, asset_grants table migration file is included, but giving error when placing foreign keys, pls try on your end (might be to the myisam)

    public function grants()
    {
//        return $this->hasMany('App\Grant');
        return $this->belongsToMany('App\Grant', 'asset_grant','all_asset_id','grant_id');
    }
    public function vehicle()
    {
        return $this->belongsTo(\App\Vehicle::class);
    }

    public function status()
    {
        return $this->belongsTo(\App\Status::class);
    }

    public function personnel()
    {
        return $this->belongsTo(\App\Personnel::class);
    }

    public function vendor()
    {
        return $this->belongsTo(\App\Vendor::class);
    }

//    low on priority list, will work later

//    public function unittype()
//    {
//        return $this->belongsTo(\App\UnitType::class);
//    }

    
}
