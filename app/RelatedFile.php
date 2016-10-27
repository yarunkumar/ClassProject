<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RelatedFile
 *
 * @package App
 * @property string $related_file
 * @property string $related_image
 * @property text $comments
*/
class RelatedFile extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['related_file', 'comments'];
    
    
    
}
