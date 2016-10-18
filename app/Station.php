<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Station extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'station_name',
        'station_number',
        'station_date',
        'address',
        'city',
        'zipcode',
        'district',
        'station_document',
        'station_image', ];


    /**
     * Set attribute to date format
     * @param $input
     */
    public function setStationDateAttribute($input)
    {
        if ($input != '') {
            $this->attributes['station_date'] = Carbon::createFromFormat("Y-m-d", $input)->format('Y-m-d');
        } else {
            $this->attributes['station_date'] = '';
        }
    }
    public function vehicles() {
        return $this->hasMany('App\Vehicle');

    }

    public function allassets() {
        return $this->hasMany('App\AllAsset');

    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getStationDateAttribute($input)
    {
        if ($input != '0000-00-00' && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format("Y-m-d");
        } else {
            return '';
        }

    }


}
