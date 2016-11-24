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
        'station_image',
        'vendor_id',
        'grant_id'
    ];
    
    
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

    public function vehicles() {
        return $this->hasMany(\App\Vehicle::class);

    }

    public function setVendorIdAttribute($input)
    {
        $this->attributes['vendor_id'] = $input ? $input : null;
    }
    public function vendor() {
        return $this->belongsTo(\App\Vendor::class);

    }

    public function allassets() {
        return $this->hasMany(\App\AllAsset::class);

    }

    public function relatedfiles() {
        return $this->hasMany(\App\RelatedFile::class);

    }

    public function setGrantIdAttribute($input)
    {
        $this->attributes['grant_id'] = $input ? $input : null;
    }
    public function grants() {
        return $this->belongsTo(\App\Grant::class);

    }
}
