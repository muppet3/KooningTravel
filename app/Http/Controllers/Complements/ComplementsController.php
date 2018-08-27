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
        $data['background']='height: 556px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/traslados',$data);
    }
    public function blog(){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/blog',$data);
    }
    public function details(){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/details',$data);
    }
}
