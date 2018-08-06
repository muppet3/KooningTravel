<?php

namespace App\Models;

use App\Models\Campaign;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    
    protected $fillable = [
    	'code',
    	'name',
    	'type',
    ];
    public function campaigns(){
    	return $this->belongsToMany(Campaign::class);
    }
}
