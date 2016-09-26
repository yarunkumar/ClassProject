<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable=[
        'id',
        'make',
        'model',
        'year_vehicle',
        'city_code',
        'type',
    ];

    public function station() {
        return $this->belongsTo('App\Station');
    }
}
