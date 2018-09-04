<?php

namespace App\Models;

use App\Models\Transfer;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;

class Buy_transfer extends Model
{
    protected $fillable=[
    	'airline',
    	'fligh',
    	'type',
    	'transport',
    	'hotel',
    	'check_in',
    	'check_out',
        'purchases_id',
    ];
    public function transfer(){
    	return $this->belongsTo(Transfer::class);
    }
    public function purchase(){
    	return $this->belongsTo(Purchase::class);
    }
}
