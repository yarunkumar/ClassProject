<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    //
    protected $fillable=[
        'id',
        'st_name',
        'st_no',
        'updated_at',
        'created_at',
    ];
    
    public function vehicles() {
        return $this->hasMany('App\Vehicle');

        }
   
}
