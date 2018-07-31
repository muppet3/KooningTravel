<?php

namespace App\Models;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    const DISPONIBLE = true;
    const NO_DISPONIBLE = false;

    protected $fillable = [
    	'name',
    	'status',
    	'check_in',
    	'check_out',
    ];
    public function estaDisponible(){
    	return $this->status == Campaign::DISPONIBLE;
    }
    public function destinations(){
    	return $this->belongsToMany(Destination::class);
    }
}
