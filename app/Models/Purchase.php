<?php

namespace App\Models;

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
    public function hoteles(){

    }
    public function traslados(){

    }
    public function actividades(){
        
    }
    public function estaPagado(){
        return $this->status==Purchase::PAGADO;
    }
}
