<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stationhis extends Model
{
    //
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
         'vendor_name',
        'grant_id',
        'grant_name',
    ];
}
