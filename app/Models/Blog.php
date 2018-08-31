<?php

namespace App\Models;

use App\Models\Segment;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =[
    	'title',
    	'location',
    	'image',
    	'description',
    	'views',
    ];
    public function segments(){
        return $this->hasMany(Segment::class);
    }
}
