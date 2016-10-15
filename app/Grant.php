<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Grant
 *
 * @package App
 * @property string $grant_name
 * @property date $date_issued
 * @property string $grant_type
 * @property date $date_matures
 * @property decimal $grant_value
 * @property text $grant_comments
*/
class Grant extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['grant_name', 'date_issued', 'grant_type', 'date_matures', 'grant_value', 'grant_comments'];
    
    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateIssuedAttribute($input)
    {
        if ($input != null) {
            $this->attributes['date_issued'] = Carbon::createFromFormat("Y-m-d", $input)->format('Y-m-d');
        } else {
            $this->attributes['date_issued'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateIssuedAttribute($input)
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
    public function setDateMaturesAttribute($input)
    {
        if ($input != null) {
            $this->attributes['date_matures'] = Carbon::createFromFormat("Y-m-d", $input)->format('Y-m-d');
        } else {
            $this->attributes['date_matures'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateMaturesAttribute($input)
    {
        if ($input != '0000-00-00' && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format("Y-m-d");
        } else {
            return '';
        }
    }


//    public function allassets()
//    {
//        return $this->hasMany('App\AllAsset');
//    }

}
