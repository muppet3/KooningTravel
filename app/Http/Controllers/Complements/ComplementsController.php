<?php

namespace App\Http\Controllers\Complements;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

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
    public function autos(){
        $data['background']='height: 556px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/autos',$data);
    }
    public function blog(){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        $data['blogs']=Blog::orderBy('id','desc')->get();
        return view('complements/blog',$data);
    }
    public function details($blog){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        $data['blog']=Blog::where('title',str_replace('-',' ',$blog))->first();

        return view('complements/details',$data);
    }

    public function contacto(){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/contacto',$data);
    }
    public function nosotros(){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/nosotros',$data);
    }
    public function seguridad(){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/seguridad',$data);
    }
    public function terminos(){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/terminos',$data);
    }
    public function privacidad(){
        $data['background']='height: 100px; background-image: url(https://kooningtravel.com/img/tour/parques/Experiencias-Xcaret/Xel-ha/Xel-ha.jpg)';
        return view('complements/privacidad',$data);
    }
}
