<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['asst_type', ];
    
    
    
}
