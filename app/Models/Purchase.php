<?php

namespace App\Models;

use App\Models\Buy_activity;
use App\Models\Buy_hotel;
use App\Models\Buy_transfer;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /*  estatus */
	const COTIZADO='cotizado';
	const PAGADO='pagado';
	const PENDIETE='pendiente';
	

    protected $fillable = [
        'code',
        'name',
        'surnames',
        'email',
        'country',
        'state',
        'phone',
        'request',
        'status',
        'numbercard',
    ];
    public function buy_hotels(){
        return $this->hasMany(Buy_hotel::class);
    }
    public function buy_transfers(){
        return $this->hasMany(Buy_transfer::class);
    }
    public function buy_activities(){
        return $this->hasMany(Buy_activity::class);
    }
    public function estaPagado(){
        return $this->status==Purchase::PAGADO;
    }
}
