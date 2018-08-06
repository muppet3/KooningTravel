<?php

namespace App\Models;

use App\Models\Activity;
use App\Models\Time;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
    	'name',
    	'image',
    	'description',
    	'content',
    	'adult',
    	'child',
    ];
    public function activity(){
    	return $this->belongsTo(Activity::class);
    }
    public function times(){
        return $this->belongsToMany(Time::class);
    }
}

