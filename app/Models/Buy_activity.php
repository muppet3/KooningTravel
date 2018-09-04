<?php

namespace App\Models;

use App\Models\Purchase;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

class Buy_activity extends Model
{
    protected $fillable =[
    	'checkin',
    	'adult',
    	'child',
    	'total',
        'tickets_id',
        'purchases_id',
    ];
    public function purchase(){
    	return $this->belongsTo(Purchase::class);
    }
    public function ticket(){
    	return $this->belongsTo(Ticket::class);
    }
}

