<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


/**
 * Class UnitType
 *
 * @package App
 * @property string $name
*/
class UnitType extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];


    
}
