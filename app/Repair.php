<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repair
 *
 * @package App
 * @property string $vehicle
 * @property string $assets
*/
class Repair extends Model
{
    use SoftDeletes;
    
//    protected $fillable = ['vehicle_id', 'assets_id'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setVehicleIdAttribute($input)
    {
        $this->attributes['vehicle_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAssetsIdAttribute($input)
    {
        $this->attributes['assets_id'] = $input ? $input : null;
    }
    
    public function vehicle()
    {
        return $this->hasMany(Vehicle::class, 'vehicle_id')->withTrashed();
    }
    
    public function assets()
    {
        return $this->hasMany(AllAsset::class, 'assets_id')->withTrashed();
    }
    
}
