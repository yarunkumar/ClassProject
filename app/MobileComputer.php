<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MobileComputer extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['laptop_model', 'laptop_serial', 'laptop_name', 'laptop_model_imei', 'laptop_imei', 'laptop_mobile_type', 'laptop_date_purchased', 'laptop_cost', 'type_id'];
    
    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setLaptopDatePurchasedAttribute($input)
    {
        if ($input != '') {
            $this->attributes['laptop_date_purchased'] = Carbon::createFromFormat("Y-m-d", $input)->format('Y-m-d');
        } else {
            $this->attributes['laptop_date_purchased'] = '';
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getLaptopDatePurchasedAttribute($input)
    {
        if ($input != '0000-00-00' && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format("Y-m-d");
        } else {
            return '';
        }
    }
    
    public function type()
    {
        return $this->belongsTo(\App\Type::class);
    }
    
}
