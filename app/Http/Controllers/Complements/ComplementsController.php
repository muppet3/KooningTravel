<?php

namespace App\Http\Controllers\Complements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComplementsController extends Controller
{
    //
    public function traslados(){
    	$data['home']="";
        $data['parques']="";
        $data['tours']="";
        $data['traslados']="class=active";
        $data['ofertas']="";
        return view('complements/traslados',$data);
    }
}
