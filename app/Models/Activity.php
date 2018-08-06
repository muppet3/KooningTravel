<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	 protected $fillable = [
    	'name',
    	'description',
    	'map',
    	'slogan',
    	'image',
    	'location',
    	'coordinates',
    	'background',
    	'terms',
    ];
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function getRouteKeyName()
    {
        return 'name';
    }
}
