<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use SoftDeletes;

    protected $fillable = ['vehicle_number', 'vin', 'station_id'];


    public function station()
    {
        return $this->belongsTo(\App\Station::class);
    }

}
