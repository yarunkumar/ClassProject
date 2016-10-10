<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['ofd_id', 'ofd_full_name', 'ofd_email', 'ofd_phone', 'ofd_role', ];
    
    
    
}
