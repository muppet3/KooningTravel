<?php

namespace App\Models;

use App\Models\Transfer;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;

class Buy_transfer extends Model
{
    protected $fillable=[
    	'airline',
    	'flight',
    	'type',
    	'transport',
    	'hotel',
        'services',
    	'check_in',
    	'check_out',
        'transfers_id',
        'purchase_id',
    ];
    public function transfer(){
    	return $this->belongsTo(Transfer::class);
    }
    public function purchase(){
    	return $this->belongsTo(Purchase::class);
    }
}
