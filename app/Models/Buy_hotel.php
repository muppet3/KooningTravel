<?php

namespace App\Models;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;

class Buy_hotel extends Model
{
    
    protected $fillable = [
        'book',
        'rate',
        'answer',
        'booking',
        'purchase_id',
    ];
    // belon
    public function purchase(){
    	return $this->belongsTo(Purchase::class);
    }
}
