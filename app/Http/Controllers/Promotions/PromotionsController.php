<?php

namespace App\Http\Controllers\Promotions;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionsController extends Controller
{
    public function ofertas($campaign){
       //$campaña = Campaign::find($campaign);
        $campaña = Campaign::where('name',str_replace('-',' ',$campaign))->first();
        $playas=$campaña->destinations->where('type','playa');
        $ciudades=$campaña->destinations->where('type','ciudad');
        $internacionales=$campaña->destinations->where('type','internacional');

        if(count($playas)>0){
            $playas->status="active";
            $ciudades->status=" ";
            $internacionales->status=" ";
            $data['playas']=$playas;

        }
        if(count($ciudades)>0){
            if(!isset($playas->status)){
                $playas->status=" ";
                $ciudades->status="active";
                $internacionales->status=" ";
            }
            $data['ciudades']=$ciudades;
        }
        if(count($internacionales)>0){
            if(!isset($ciudades->status)){
                $playas->status=" ";
                $ciudades->status=" ";
                $internacionales->status="active";
            }
            $data['internacionales']=$internacionales;
        }
        if(!is_null($campaña->check_in)){
            $data['check_in']="&sd=".$campaña->check_in;
            $data['check_out']="&ed=".$campaña->check_out;
            
        }else{
            $data['check_in']="&sd=2018-08-03";
            $data['check_out']="&ed=2018-08-07";
        }
        $data['adicionales']="&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0";
        $campaña->name=str_replace(" ", "-", $campaña->name);
        $data['campaña']=$campaña;
    	$data['home']="";
        $data['parques']="";
        $data['tours']="";
        $data['traslados']="";
        $data['ofertas']="class=active";
        //dd($data);
        return view('promotions/ofertas',$data);
    }
    public function promociones(){
        $promociones=Campaign::orderBy('id','DESC')->get();
        $data['promociones']=$promociones;
    	$data['home']="";
        $data['parques']="";
        $data['tours']="";
        $data['traslados']="";
        $data['ofertas']="class=active";
        return view('promotions/promociones',$data);
    }
}
