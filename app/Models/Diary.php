<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable =[
    	'ip',
    	'city',
    	'state',
    	'url',
    	'lenght',
    	'latitude',
    	'date',
    ];
}