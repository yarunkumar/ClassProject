<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 *
 * @package App
 * @property string $status
*/
class Status extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['status'];
    
    
    
}
