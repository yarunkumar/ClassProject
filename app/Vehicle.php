<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicle
 *
 * @package App
 * @property string $van
 * @property string $make
 * @property string $model
 * @property integer $year
 * @property integer $unittype_id
 * @property-read \App\UnitType $unittype
*/
class Vehicle extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['van', 'make', 'model', 'year', 'unittype_id','status_id','grant_id','station_id'];
    
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setUnitTypeIdAttribute($input)
    {
        $this->attributes['unittype_id'] = $input ? $input : null;
    }
    
    public function unittype()
    {
        return $this->belongsTo(\App\UnitType::class);
    }

    public function grant()
    {
        return $this->belongsTo(\App\Grant::class);
    }

    public function station()
    {
        return $this->belongsTo(\App\Station::class);
    }

    public function status()
    {
        return $this->belongsTo(\App\Status::class);
    }

    public function allassets() {
        return $this->hasMany('\App\AllAsset');

    }

    //Intended to use with multiple file uploads (in progress)
    //    public function relatedfile()
//    {
//        return $this->belongsTo(\App\Status::class);
//    }
}
