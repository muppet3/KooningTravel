<?php

namespace App\Http\Controllers\Activities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivitiesController extends Controller
{
    //
    public function parques(){
    	$data['home']="";
        $data['parques']="class=active";
        $data['tours']="";
        $data['traslados']="";
        $data['ofertas']="";
        return view('activities/parques',$data);
    }

    public function tours(){
    	$data['home']="";
        $data['parques']="";
        $data['tours']="class=active";
        $data['traslados']="";
        $data['ofertas']="";
        return view('activities/tours',$data);
    }
    public function details($actividad){
        
    }
}
