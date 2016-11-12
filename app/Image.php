<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = [
//        'original_name',
//        'filename',
    ];

    public static $rules = [
        'file' => 'required|mimes:png,gif,jpeg,jpg,bmp,pdf,'
    ];

    public static $messages = [
        'file.mimes' => 'Uploaded file is not in image format',
        'file.required' => 'Image is required'
    ];
}