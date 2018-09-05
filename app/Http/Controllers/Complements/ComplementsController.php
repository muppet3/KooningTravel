<?php

namespace App\Http\Controllers\Complements;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ComplementsController extends Controller
{
    //
    public function traslados(){
    	$data['home']="";
        $data['parques']="";
        $data['tours']="";
        $data['traslados']="class=active";
        $data['ofertas']="";
        $data['background']='height: 556px; background-image: url(/../img/fondos/traslados.png)';
        return view('complements/traslados',$data);
    }
    public function booking(Request $res){
        
        $traslado = Transfer::where('name',$res->input('destino'))->first();
        if(strcmp($res->input('clase'), 'Van') !==0){
            $precio=$traslado->van;
        }
        if(strcmp($res->input('clase'), 'Escalade') !==0){
            $precio=$traslado->escalade;
        }
        if(strcmp($res->input('clase'), 'Suburban') !==0){
            $precio=$traslado->suburban;
        }
        if(strcmp($res->input('clase'), 'Sprinter') !==0){
            $precio=$traslado->sprinter;
        }
        
        $item['type']="traslado";
        $item['city']=$res->input('destino');
        $item['destiny']=$res->input('hotel');
        $item['checkin']=$res->input('sd');
        $item['timein']=$res->input('timein');
        if(strcmp($res->input('servicio'), 'Redondo') ==0){
            $precio=$precio+$precio;
            $item['checkout']=$res->input('ed');
            $item['timeout']=$res->input('timeout');
        }
        $item['service']=$res->input('cantidad');
        $item['transport']=$res->input('clase');
        $item['total']=$precio*$res->input('cantidad');
        
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
    public function price(){

        $traslado = Transfer::where('name',$_POST['ciudad'])->first();
        
        if(strcmp($_POST['tipo'], 'Van') ==0){
            $precio=$traslado->van;
        }
        if(strcmp($_POST['tipo'], 'Escalade') ==0){
            $precio=$traslado->escalade;
        }
        if(strcmp($_POST['tipo'], 'Suburban') ==0){
            $precio=$traslado->suburban;
        }
        if(strcmp($_POST['tipo'], 'Sprinter') ==0){
            $precio=$traslado->sprinter;
        }


        if(strcmp($_POST['servicio'], 'Redondo') ==0){
            $precio=$precio+$precio;
        }
        

        $precio=$precio*$_POST['cantidad'];
        echo $precio;
        
    }
    public function autos(){
         $data['background']='height: 556px; background-image: url(/../img/fondos/autos.png)';
        return view('complements/autos',$data);
    }
    public function blog(){
        $data['checkin']=Carbon::now()->addDay(4);
        $data['checkout']=Carbon::now()->addDay(8);
        $data['blogs']=Blog::orderBy('id','desc')->get();
        return view('complements/blog',$data);
    }
    public function details($blog){
        $data['checkin']=Carbon::now()->addDay(4);
        $data['checkout']=Carbon::now()->addDay(8);
        $data['blog']=Blog::where('title',str_replace('-',' ',$blog))->first();

        return view('complements/details',$data);
    }

    public function contacto(){
        return view('complements/contacto',$data);
    }
    public function nosotros(){
        return view('complements/nosotros',$data);
    }
    public function seguridad(){
        return view('complements/seguridad',$data);
    }
    public function terminos(){
        return view('complements/terminos',$data);
    }
    public function privacidad(){
        return view('complements/privacidad',$data);
    }
}
