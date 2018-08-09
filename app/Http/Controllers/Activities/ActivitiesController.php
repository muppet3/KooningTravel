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
        $data['categorias']=Category::where('type','Parque')->get();
        $data['background']=" height: 100px; background-image: url(https://kooningtravel.com/img/Home/fondos/fondoParque.png); ";
        return view('activities/parques',$data);
    }

    public function tours(){
    	
        $data['categorias']=Category::where('type','Tour')->get();
        $data['background']=" height: 100px; background-image: url(https://kooningtravel.com/img/Home/fondos/FondoTours.jpg); ";

        return view('activities/tours',$data);
    }
    public function details($actividad){
        $activity = Activity::where('name',$actividad)->first();
        if(strcmp($activity->category->type,'Parque')){
            $data['parques']="class=active";
            $data['tours']="";
        }else{
             $data['parques']="";
            $data['tours']="class=active";
        }
        $data['activity']=$activity;
        $data['background']='height: 556px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        //dd($activity->category->name);
        
        return view('activities/details',$data);
    }
}
