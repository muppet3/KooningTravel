<?php

namespace App\Models;

use App\Models\GroupFacility;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
     protected $fillable=[
    	'code',
    	'description',
    	'groupfacility_id',
    ];
    public function groupfacility(){
    	return $this->belongsTo(GroupFacility::class);
    }
}
