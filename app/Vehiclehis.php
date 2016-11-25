<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiclehis extends Model
{
    //
     protected $fillable = [
        'vehicle_id',
        'van',
        'make',
        'model',
        'year',
        'station_id',
        'station_name',
        'status_id',
        'status',
        'grant_id',
        'grant_name',
        'unittype_id',
        'unittype_name',
       'vendor_id',
       'vendor_name',
    ];
}
