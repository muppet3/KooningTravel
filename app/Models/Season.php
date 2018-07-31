<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
    	'image',
    	'path',
    	'check_in',
    	'check_out',
    	'on',
    	'of',
    ];
}
