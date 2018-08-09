<?php

namespace App\Http\Controllers\Activities;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    //
    public function parques(){
    	$data['home']="";
        $data['parques']="class=active";
        $data['tours']="";
        $data['traslados']="";
        $data['ofertas']="";
        $actividades=Category::where('type','Parque')->get();
        //dd($actividades);
        foreach ($actividades as $key) {
            echo $key->name."<br>";
            dd($key->activities);
            echo "<br>";
        }
        dd();
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
