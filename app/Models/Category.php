<?php

namespace App\Models;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
		'name',
		'type',
		'divisa',
	];
	public function activities(){
		return $this->hasMany(Activity::class);
	}
    public function getRouteKeyName()
	{
    	return 'name';
	}
}
