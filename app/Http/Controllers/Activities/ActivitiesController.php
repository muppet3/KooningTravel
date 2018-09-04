<?php

namespace App\Http\Controllers\Activities;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;
class ActivitiesController extends Controller
{
    //
    public function parques(){
        $data['categorias']=Category::where('type','Parque')->get();
        $blanco=true;
        foreach ($data['categorias'] as $key) {
            if($blanco){
                $key->colorfondo="white";
                $blanco=false;
            }else{
                $key->colorfondo="grey";
                $blanco=true;
            }
        }
        $data['background']=" height: 100px; background-image: url(https://kooningtravel.com/img/Home/fondos/fondoParque.png); ";
        return view('activities/parques',$data);
    }
    public function tours(){
    	
        $data['categorias']=Category::where('type','Tour')->get();
        $blanco=true;
        foreach ($data['categorias'] as $key) {
            if($blanco){
                $key->colorfondo="white";
                $blanco=false;
            }else{
                $key->colorfondo="grey";
                $blanco=true;
            }
        }
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
        $data['background']='height: 556px; background-image: url(/../img/activity/'.str_replace(' ', '-', strtolower($activity->category->name)).'/'.strtolower($activity->name).'/'.strtolower($activity->name).'.jpg)';
        //dd($activity->category->name);
        
        return view('activities/details',$data);
    }
    public function booking(Request $res,$actividad){

        $activity=Activity::where('name',$actividad)->first();
        $ticket=Activity::where('name',$actividad)->first()->tickets->where('name',$res->input('entrada'))->first();
        
        $item=[];
        $item['type']=strtolower($activity->category->type);
        $item['activity']=$actividad;
        $item['ticket']=$ticket->name;
        $item['location']=$activity->location;
        $item['date']=$res->input('fecha');
        $item['schedule']=$res->input('horario');
        $item['adults']=$res->input('adultos');
        $item['children']=$res->input('menores');
        $item['total']=($res->input('adultos')*($activity->category->divisa*$ticket->adult))+($res->input('menores')*($activity->category->divisa*$ticket->child));
        //Session::put('cart', $cart);  
        
        $carrito=\Session::get('cart');
        if(is_null($carrito) or empty($carrito)){
            \Session::forget('cart');
            
            $carrito['1']=$item;
            \Session::put('cart', $carrito); 
        }else{
            
            \Session::push('cart', $item); 
        }
        return redirect('checkout');
    }
    public function price(Request $res){
        $ticket = Ticket::where('name',$res->entrada)->first();
        $precios = array(
            'Adult'=>number_format($ticket->adult,2),
            'Child'=>number_format($ticket->child,2),
        );
        echo json_encode($precios);
    }
}
