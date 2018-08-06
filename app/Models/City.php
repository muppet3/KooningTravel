<?php

namespace App\Models;

use App\Models\Transfer;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	'name',
    	'code',
    	'country',
    ];
    public function transfers(){
    	return $this->hasMany(Transfer::class);
    }
    public function blogs(){
    	return $this->hasMany(Blog::class);
    }
}
