<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;


class PurchaseController extends Controller
{
    //
    public function gracias(){
    	$data['home']="class=active";
        $data['parques']="";
        $data['tours']="";
        $data['traslados']="";
        $data['ofertas']="";  
         $data['background']=" height: 100px; background-image: url(https://kooningtravel.com/img/Home/fondos/fondoParque.png); ";
    	return view('purchase/thank',$data);
    }

   	public function payworks(Request $request){
   		$id=\Session::get('carrito');
   		if($_POST['MESES'] == '1'){
			$postdata = http_build_query(
				array(
					'ID_AFILIACION' => '7971857', 
					'USUARIO' => 'a7971857',
					'CLAVE_USR' => 'koon1857',
					'CMD_TRANS' => 'AUTH',
					'ID_TERMINAL' => '79718571',
					'MODO' => 'PRD',
					'MODO_ENTRADA' => 'MANUAL',
					'URL_RESPUESTA' => 'https://kooningtravel.com/payworks/'.$id,
					'IDIOMA_RESPUESTA' => 'ES',
					'NUMERO_TARJETA' => $_POST['sourceOfFunds']['provided']['card']['number'],
					'FECHA_EXP' => $_POST['sourceOfFunds']['provided']['card']['expiry']['month']."".$_POST['sourceOfFunds']['provided']['card']['expiry']['year'],
					'CODIGO_SEGURIDAD' => $_POST['sourceOfFunds']['provided']['card']['securityCode'],
					'NUMERO_CONTROL' => $id,
					'MONTO' => $monto
				)
			);
		}else{
			$postdata = http_build_query(
				array(
					'ID_AFILIACION' => '7971857', 
					'USUARIO' => 'a7971857',
					'CLAVE_USR' => 'koon1857',
					'CMD_TRANS' => 'AUTH',
					'ID_TERMINAL' => '79718571',
					'MODO' => 'PRD',
					'MODO_ENTRADA' => 'MANUAL',
					'URL_RESPUESTA' => 'https://kooningtravel.com/payworks/'.$id,
					'IDIOMA_RESPUESTA' => 'ES',
					'NUMERO_TARJETA' => $_POST['sourceOfFunds']['provided']['card']['number'],
					'FECHA_EXP' => $_POST['sourceOfFunds']['provided']['card']['expiry']['month']."".$_POST['sourceOfFunds']['provided']['card']['expiry']['year'],
					'CODIGO_SEGURIDAD' => $_POST['sourceOfFunds']['provided']['card']['securityCode'],
					'NUMERO_CONTROL' => $id,
					'MONTO' => $monto,
					'DIFERIMIENTO_INICIAL'=> '00',
					'NUMERO_PAGOS' => $_POST['MESES'],
					'TIPO_PLAN' => '03'
				)
			);
		}
						//peticion post via curl
		$ch = curl_init('https://via.banorte.com/payw2');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

		$response = curl_exec($ch);//inicia conexion
		curl_close($ch); //cierra la conexion

		$url_split = explode("\"", $response);
		$url_parts = parse_url($url_split[3]);
		$path_parts = parse_url($url_split[3], PHP_URL_PATH);
		parse_str($url_parts['query'], $query_parts);
		if($query_parts["amp;RESULTADO_PAYW"] == 'A'){
			$_POST['payment_status']='Completed';
			$path = explode("/", $path_parts);
			$_POST['nombre_titular']=$_POST($holder_name);
			$this->verification($id);
			echo "1";
			error_log('KOONING ID: '.$path[2]);
			error_log('BANORTE TRANSACTION SUCCESS URL: '.$url_split[3]);
			header('Location: '.PATH.'/gracias');
		}else{
			error_log('BANORTE TRANSACTION FAILURE URL: '.$url_split[3]);
			header('Location: '.PATH.'/error/'.$id);
		}	
  	}
  	public function delete($id){
  		\Session::forget('cart.'.$id);
  		$cart=\Session::get('cart');
  		
  		return redirect('checkout');
  	}
  	public function checkout(){
  		$data['background']=" height: 100px; background-image: url(https://kooningtravel.com/img/Home/fondos/FondoTours.jpg); ";
  		$cart=\Session::get('cart');
  		  
  		$total=0;
  		foreach ($cart as $item) {
  			
  			if(!strcmp($item['type'],'hotel')){
  				$data['hotel']=true;
  			}
  			if(!strcmp($item['type'],'traslado')){
  				$data['traslado']=true;
  			}
  			$total+=$item['total'];
  		}
  		$data['cart']=$cart;
  		$data['total']=$total;


  		return view('purchase/checkout',$data); 
  	}
  	public function email(Request $res){
		$data['background']=" height: 100px; background-image: url(https://kooningtravel.com/img/Home/fondos/FondoTours.jpg); ";
  		$cart=\Session::get('cart');

  		$total=0;
  		foreach ($cart as $item) {
  			
  			if(!strcmp($item['type'],'hotel')){
  				$data['hotel']=true;
  				$hotel=$item;
  			}
  			if(!strcmp($item['type'],'traslado')){
  				$traslado=$item;
  				$data['traslado']=true;
  			}
  			$total+=$item['total'];
  		}
  		$data['cart']=$cart;
  		$data['total']=$total;

		$llenados['code']= "".substr(md5(uniqid(rand(1,6))), 0, 16);
		$llenados['name']= $res->input('nombre');
		$llenados['surnames']= $res->input('apellidos');
		$llenados['email']= $res->input('correo');
		$llenados['phone']= $res->input('telefono');
		$purchase= Purchase::create($llenados);

		if(isset($hotel)){
			$purchase->country=$res->input('ciudad');
			$purchase->state=$res->input('estado');
			$purchase->save();
		}
		if(isset($traslados)){
			$llenados['Aerolinea']=$res->input('Aerolinea');
			$llenados['NumVuelo']=$res->input('NumVuelo');
		}
		dd($purchase);



		\Mail::send('emails.noticereservation',$campos,function($mail){
                $mail->subject($_POST['name'].' '.$_POST['surnames'].' realizo una cotizacion');
                $mail->to('ferr.95.fer.fmr@gmail.com');
            });
  		return view('purchase/checkout',$data); 
  	}
}
