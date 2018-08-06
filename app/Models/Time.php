<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = [
    	'schedule',
    ];
    public function tickets(){
    	return $this->belongsToMany(Ticket::class);
    }
}
