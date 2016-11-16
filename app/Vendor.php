<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendor
 *
 * @package App
 * @property string $vendor_name
 * @property string $vendor_address
 * @property string $vendor_web
 * @property string $vendor_phone
 * @property string $vendor_fax
 * @property string $vendor_tech_sup
 * @property string $vendor_rep
 * @property string $vendor_rep_phone
 * @property string $vendor_rep_phone_m
 * @property string $vendor_email
*/
class Vendor extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'vendor_name',
        'vendor_address',
        'vendor_web',
        'vendor_phone',
        'vendor_fax',
        'vendor_tech_sup',
        'vendor_rep',
        'vendor_rep_phone',
        'vendor_rep_phone_m',
        'vendor_email'
    ];

    public function allassets()
    {
        return $this->hasMany('App\AllAsset');
    }

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }

    public function stations()
    {
        return $this->hasMany('App\Station');
    }




}
