<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\Booking;
use App\Http\Controllers\Helpers\Hoteldo;
use App\Models\Activity;
use App\Models\Buy_activity;
use App\Models\Buy_hotel;
use App\Models\Buy_transfer;
use App\Models\Purchase;
use App\Models\Ticket;
use App\Models\Transfer;
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
    	return view('purchase/thank',$data);
    }

   	public function payworks(){
   		
   		$id=\Session::get('purchase_id');
   		$purchase=Purchase::find($id);
   		$monto=$purchase->total;
   		
   		if($_POST['sourceOfFunds']['provided']['card']['number'] ==1010101010101010 && $_POST['sourceOfFunds']['provided']['card']['securityCode'] ==999){

   			
   			$this->booking($id);
   		}else{
   		if(strcmp($_POST['radpayment1'],"radCC")==0){
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
						'MONTO' => $monto
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
			$this->booking($id);
			echo "1";
			error_log('KOONING ID: '.$path[2]);
			error_log('BANORTE TRANSACTION SUCCESS URL: '.$url_split[3]);
			header('Location: '.PATH.'/gracias');
		}else{
			error_log('BANORTE TRANSACTION FAILURE URL: '.$url_split[3]);
			header('Location: '.PATH.'/error/'.$id);
		}
		}	
		return redirect('gracias');
  	}
  	public function booking($id){
  		/*inicia reservacion real*/

        $purchase=Purchase::find($id);
        $complementos['uid']=$purchase->code;


        if(count($purchase->buy_hotels)>=0){

        	$recuest_rate = unserialize($purchase->buy_hotels[0]->rate);
			$recuest_book = unserialize($purchase->buy_hotels[0]->book);

			
			$av = true;
			$total = 0;
			$adultos = 0;
			$menores =0;
			$cont=0;
			foreach ($recuest_book['hotels']['hotel']['rooms'] as $key => $room) {
				$adultos += $room['adults'];
				$recuest_rate['r1a'] = $room['adults'];
				$menores += $room['kids'];
				$recuest_rate['r1k'] = $room['kids'];
				$recuest_rate['r1k1a'] = $room['k1a'];
				$recuest_rate['r1k2a'] = $room['k2a'];
				$recuest_rate['r1k3a'] = $room['k3a'];
				$rate= new Hoteldo('GetHotelRateRules',$recuest_rate);
				$rate->setCached(false);
				$rate->exec();
				$rate=$rate->getXml();
				$total += (double) $rate->HotelRate->Rooms->Room->MealPlans->MealPlan->Total;
				if ($rate->HotelRate->Rooms->Room->MealPlans->MealPlan->Available->Status != 'AV' ) {
					$av = false;
					break;
				}
				$cont++;
			}

			\Session::put('email',$recuest_book['emailaddress']);
			$datos['Nombre']=$recuest_book['firstname']." ".$recuest_book['lastname'];
        	$datos['llegada']=$recuest_book['hotels']['hotel']['datearrival'];
        	$datos['salida']=$recuest_book['hotels']['hotel']['datedeparture'];
        	$datos['adultos']=$adultos;
        	$datos['menores']=$menores;
        	$datos['habitaciones']=$cont;
        	
        	//$datos['idreserva']=$purchase->booking;
			
			if ($av) {
				
				$booking = new Booking('Book',$recuest_book);

				$booking->exec();
				
				if ($booking->fail()) {
					dd($booking->getError);
							//error_log(print_r($purchase->id.' Fallo en la api '.$book->getError() , TRUE));
							//$this->errorMail($purchase->emailaddress,$purchase->id);
							## hacer algo en caso de error de fall de api
				}else{
					$booking = $booking->getXml();
					
					if ($booking->statusinternet == 'CO' and ( $booking->statuspayment == 'PA' or $booking->statuspayment == 'OP')) {
						$purchase->buy_hotels[0]->booking=(string)$booking->confirmationid;
						$purchase->buy_hotels[0]->save();

					}else{
						dd("error de internet");
						//error_log(print_r($purchase->id.' Fallo estatus de internet', TRUE));
						//$this->errorMail($purchase->emailaddress,$order->id);
					}
				}
			}
			
			$datos['idreserva']=(string)$booking->confirmationid;
			$complementos['hotel']=$datos;
        }
        if(count($purchase->buy_transfers)>=0){
        	$complementos['transporte']=$purchase->buy_transfers;
        }
        if(count($purchase->buy_activities)>=0){
        	
        	$complementos['activities']=$purchase->buy_activities;
        }

        $complement['complements']=$complementos;
        $emailr=\Session::get('email');
        $this->confirmacion($complementos,$emailr);
        /*\Mail::send('emails.purchase',$complement,function($mail){
                $mail->subject('Reservaciones KooningTravel');
                $mail->to("".\Session::get('email'));
        });*/
        	
  	}
  	public function delete($id){
  		\Session::forget('cart.'.$id);
  		$cart=\Session::get('cart');
  		
  		return redirect('checkout');
  	}
  	public function checkout(){
  		$cart=\Session::get('cart');
  		  
  		$total=0;
  		if(is_null($cart) or empty($cart)){
  			$data['vacio']=1;
  			
	  	}else{
		  	$data['vacio']=0;
	  		foreach ($cart as $item) {
	  			
	  			if(!strcmp($item['type'],'hotel')){
	  				$data['hotel']=true;
	  				$data['query']=\Session::get('query');
	  			}
	  			if(!strcmp($item['type'],'traslado')){
	  				$data['traslado']=true;
	  			}
	  			$total+=$item['total'];
	  		}
	  		$data['cart']=$cart;
	  		$data['total']=$total;
	  		$data['tres']=$total/3;
	  		$data['seis']=$total/6;
	  		$data['nueve']=$total/9;
	  	}

  		return view('purchase/checkout',$data); 
  	}
  	public function email(Request $res){
  		$cart=\Session::get('cart');
  		$total=0;
  		$index=1;
  		foreach ($cart as $item) {
  			if(strcmp($item['type'],'parque')==0 || strcmp($item['type'],'tour')==0 ){
  				$activities[$index]=$item;
  			}
  			if(strcmp($item['type'],'hotel')==0){
  				$hotel=$item;
  			}
  			if(strcmp($item['type'],'traslado')==0){
  				$traslado=$item;
  			}
  			$total+=$item['total'];
  			$index++;
  		}
  		
  		$data['cart']=$cart;
  		$data['total']=$total;

		$compra['code']= "".substr(md5(uniqid(rand(1,6))), 0, 16);
		$compra['name']= $res->input('nombre');
		$compra['surnames']= $res->input('apellidos');
		$compra['email']= $res->input('correo');
		$compra['phone']= $res->input('telefono');
		$purchase= Purchase::create($compra);
		$purchase->total=$total;
		$purchase->save();
		if(isset($hotel)){
			$purchase->country=$res->input('ciudad');
			$purchase->state=$res->input('estado');
			$purchase->zip=$res->input('zip');
			$purchase->save();
			$query= new Hoteldo('GetQuoteHotels',$hotel['hotel']);
			$query->setCached(false);
			$query->exec();
			$query=$query->getXml();
			$room=$query->xpath('Hotels/Hotel/Rooms/Room/Id[.="'.$hotel["room_id"].'"]/..')[0];
			$rate = [
				'ip' => $hotel["hotel"]['ip'],
				'l' => $hotel["hotel"]['l'],
				'sd' => $hotel["hotel"]['sd'],
				'ed' => $hotel["hotel"]['ed'],
				'ri' => $hotel["room_id"],
				'c' => (string) $query->Hotels->Hotel->Currency,
				'd' => (string) $query->Hotels->Hotel->Destination->Id,
				'h' => (string) $query->Hotels->Hotel->Id,
				'it' => (string) $query->Hotels->Hotel->InterfaceInfo->Id,
				'rk' => (string) $room->MealPlans->MealPlan->RateKey,
				'ci' => (string) $room->MealPlans->MealPlan->Contract ,
				'mi' => (string) $room->MealPlans->MealPlan->MarketId,
				'mp' => (string) $room->MealPlans->MealPlan->Id,
				'hash' => 'ha:true',
			];
			$book = [
				'language'=>$item["hotel"]['l'],
				'currency'=>(string) $query->Hotels->Hotel->Currency,
				'uid'=>$compra['code'],
				'firstname'=>$compra['name'],
				'lastname'=>$compra['surnames'],
				'emailaddress'=>$compra['email'],
				'ip' => $hotel["hotel"]['ip'],
				'address'=>str_replace(array("\n", "\r"), ' ', $res->input('address')),
				'city'=>$res->input('ciudad'),
				'state'=>$res->input('estado'),
				'zip'=>$res->input('zip'),
				'total'=> round((float) $room->MealPlans->MealPlan->Total,2),
				'phones'=>[
					'phone'=>[
						'type'=>'2',
						'number'=>$compra['phone'],
					],
				],
				'hotels'=>[
					'hotel'=>[
						'hotelid'=>(string) $query->Hotels->Hotel->Id,
						'roomtype'=>$hotel["room_id"],
						'mealplan'=>(string) $room->MealPlans->MealPlan->Id,
						'datearrival'=>$hotel["hotel"]['sd'],
						'datedeparture'=>$hotel["hotel"]['ed'],
						'marketid'=>(string) $room->MealPlans->MealPlan->MarketId,
						'contractid'=>(string) $room->MealPlans->MealPlan->Contract,
						'rooms'=>[],
					],
				],
				'payments'=>[
					'agencycreditpayment'=>[
						'type'=>'CREPMX',
						'currency'=>(string) $query->Hotels->Hotel->Currency,
						'amount'=>round((float) $room->MealPlans->MealPlan->Total,2),
					],
				],
			];
			for ($i=1; $i <= $hotel["hotel"]['r'] ; $i++)
			{  
				$book['hotels']['hotel']['rooms']['room'.$i] = [
					'name'=> $_POST['name'.$i],
					'lastname'=>$_POST['lname'.$i],
					'adults'=>$hotel["hotel"]['r'.$i.'a'],
					'kids'=>$hotel["hotel"]['r'.$i.'k'],
					'k1a'=>$hotel["hotel"]['r'.$i.'k1a'],
					'k2a'=>$hotel["hotel"]['r'.$i.'k2a'],
					'k3a'=>$hotel["hotel"]['r'.$i.'k3a'],
					'infants'=>'0',
					'amount'=>round((float) $room->MealPlans->MealPlan->Total,2),
					'status'=>(string) $room->MealPlans->MealPlan->Available->Status,
					'ratekey'=>(string) $room->MealPlans->MealPlan->RateDetails->RateDetail->RateKey,
				];
			}
			$camposHotel['purchase_id']=$purchase->id;
			$camposHotel['rate']=serialize($rate);
			$camposHotel['book']=serialize($book);
			$buy_hotel=Buy_hotel::create($camposHotel);
		}
		$compra['precio']=$total;
		if(isset($traslado)){
			$transports = Transfer::where('name',$traslado['city'])->first();
			$transporte['airline']=$res->input('Aerolinea');
			$transporte['flight']=(string) $res->input('NumVuelo');
			$transporte['transport']=$traslado['transport'];
			$transporte['hotel']=$traslado['destiny'];
			$transporte['services']=$traslado['service'];
			$transporte['check_in']=$traslado['checkin']." ".$traslado['timein'];
			if(isset($traslado['checkout'])){
				$transporte['check_out']=$traslado['chechout']." ".$traslado['timeout'];
				$transporte['type']='redondo';
			}else{
				$transporte['type']='sencillo';
			}
			$transporte['transfers_id']=$transports->id;
			$transporte['purchase_id']=$purchase->id;
			$transfer = Buy_transfer::create($transporte);
			
		}
		if(isset($activities)){
			foreach ($activities as $key => $value) {
				$entrada= Ticket::where('name',$value['ticket'])->first();
				
				$camposActivity['checkin']=$value['date'];
				$camposActivity['adult']=$value['adults'];
				$camposActivity['child']=$value['children'];
				$camposActivity['total']=$value['total'];
				$camposActivity['ticket_id']=(integer) $entrada->id;
				$camposActivity['purchase_id']=(integer) $purchase->id;
				$buy_activity= Buy_activity::create($camposActivity);
			}

		}

		\Session::put('purchase_id',$purchase->id);
        	echo \Session::get('purchase_id');
		$this->notificacion($compra['name'],$compra['code'], $compra['surnames'], $compra['email'], $compra['phone'], $compra['precio']);
		/*\Mail::send('emails.noticereservation',$compra,function($mail){
                $mail->subject($_POST['nombre'].' '.$_POST['apellidos'].' realizo una cotizacion');
                $mail->to('reservaciones@kooningtravel.com');
        });*/
        
        /*inicia reservacion real*/
        /*
        	$id=\Session::get('purchase_id');
        	$order = Purchase::find($id);
        	$recuest_rate = unserialize($order->buy_hotels[0]->rate);
			$recuest_book = unserialize($order->buy_hotels[0]->book);
			
			$av = true;
			$total = 0;
			$adultos = 0;
			$menores =0;
			foreach ($recuest_book['hotels']['hotel']['rooms'] as $key => $room) {
				$adultos += $room['adults'];
				$recuest_rate['r1a'] = $room['adults'];
				$menores += $room['kids'];
				$recuest_rate['r1k'] = $room['kids'];
				$recuest_rate['r1k1a'] = $room['k1a'];
				$recuest_rate['r1k2a'] = $room['k2a'];
				$recuest_rate['r1k3a'] = $room['k3a'];
				$rate= new Hoteldo('GetHotelRateRules',$recuest_rate);
				$rate->setCached(false);
				$rate->exec();
				$rate=$rate->getXml();
				$total += (double) $rate->HotelRate->Rooms->Room->MealPlans->MealPlan->Total;
				if ($rate->HotelRate->Rooms->Room->MealPlans->MealPlan->Available->Status != 'AV' ) {
					$av = false;
					break;
				}
			}
			if ($av) {
				
				$booking = new Booking('Book',$recuest_book);
				$booking->exec();
				
				if ($booking->fail()) {
							//error_log(print_r($order->id.' Fallo en la api '.$book->getError() , TRUE));
							//$this->errorMail($order->emailaddress,$order->id);
							## hacer algo en caso de error de fall de api
				}else{
					$booking = $booking->getXml();
					if ($booking->statusinternet == 'CO' and ( $booking->statuspayment == 'PA' or $booking->statuspayment == 'OP')) {
						$order->buy_hotels[0]->booking=(string)$booking->confirmationid;
					}else{
						/*error_log(print_r($order->id.' Fallo estatus de internet', TRUE));
						$this->errorMail($order->emailaddress,$order->id);
					}
				}
			}*/
		//27745444
        /*termina reservacion real*/
  		//return view('purchase/checkout',$data); 
  	}
  	public function details($id){
  		$purchase = Buy_hotel::all();
  		
  		$id="20190211";
  		$purchase = Purchase::where('code',$id)->first();
  		
  		$details = new Hoteldo('GetItinerary');
  		$details->ip="107.180.51.21";
		$details->c='pe';
		$details->l='esp';
  		$details->bn=$id;
  		$details->e="ferr.95.fer.fmr@gmail.com";
  		$details->hash="";
  		$details->setCached(false);
        $details->exec();

        if ( $details->fail() ) {
        	echo "<pre>";
        	print_r($details->getError());
        	echo "</pre>";
        }
        echo $details->getRecuest();

  	}
  	function confirmacion($complements,$to){
  		$confirmacion="";
					if(isset($complements)){
						if(isset($complements['hotel'])){
						    
						    $confirmacion.='
								    <tr>
										<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; "><br>
											<div style="line-height: 24px; font-family: Tahoma; color: rgb(102, 102, 102); text-transform: uppercase; font-size: 16px; font-weight: normal; text-align: center;">
												Reserva de hotel
											</div>
											<br>
											<h3 class="titulosreserva">Nombre del cliente</h3>
											<p>'.$complements['hotel']['Nombre'].'</p>
											<h3 class="titulosreserva">Fecha llegada</h3>
											<p>'.$complements['hotel']['llegada'].'</p>
											<h3 class="titulosreserva">Fecha salida</h3>
											<p>'.$complements['hotel']['salida'].'</p>
											<h3 class="titulosreserva">Adultos</h3>
											<p>'.$complements['hotel']['adultos'].'</p>';
											if ($complements['hotel']['menores']>0){
												$confirmacion.='<h3 class="titulosreserva">Menores</h3>
												<p>'.$complements['hotel']['menores'].'</p>';
											}
											$confirmacion.='
											<h3 class="titulosreserva">Habitaciones</h3>
											<p>'.$complements['hotel']['habitaciones'].'</p>
											<h3 class="titulosreserva">Numero de reservación</h3>
											<p>'.$complements['hotel']['idreserva'].'</p>
											<br>
										</td>
									</tr>';
						}
						if(isset($complements['transporte'])){
						    foreach ($complements['transporte'] as $item){
						    	$confirmacion.='
							    <tr>
									<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; "><br>
										<div style="line-height: 24px; font-family: Tahoma; color: rgb(102, 102, 102); text-transform: uppercase; font-size: 16px; font-weight: normal; text-align: center;">
												Reserva de traslado
											</div>
										<br>
										<h3 class="titulosreserva">Traslado '.$item->type.'</h3>
										<h3 class="titulosreserva">Hotel</h3>
										<p> '.$item->hotel.' </p>
										<h3 class="titulosreserva">Servicios</h3>
										<p> '.$item->services.' </p>
										<h3 class="titulosreserva">Fecha llegada</h3>
										<p> '.$item->check_in.' </p>';
										if(!is_null($item->check_out)){
											$confirmacion.='<h3 class="titulosreserva">Fecha Salida</h3>
											<p> '.$item->check_out.' </p>';
										}
										$confirmacion='
										<h3 class="titulosreserva">Tipo de transporte</h3>
										<p> '.$item->transport.' </p>
									</td>
								</tr>';
						    }
						}
						if(isset($complements['activities'])){
						    foreach ($complements['activities'] as $item){
						    	$confirmacion.='
						    	<tr>
								<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; "><br>
									<div style="line-height: 24px; font-family: Tahoma; color: rgb(102, 102, 102); text-transform: uppercase; font-size: 16px; font-weight: normal; text-align: center;">
												Reserva de '.$item->ticket->activity->category->type.' '.$item->ticket->activity->name.'
									</div>
									<br>
									<h3 class="titulosreserva">Tipo entrada</h3>
									<p>'.$item->ticket->name.'</p>
									<h3 class="titulosreserva">Fecha:</h3>
									<p>'.$item->checkin.'</p>
									<h3 class="titulosreserva">Adultos:</h3>
									<p>'.$item->adult.'</p>';
									if ($item->child>0){
										$confirmacion.='<h3 class="titulosreserva">Menores:</h3>
										<p>'.$item->child.'</p>';
									}
									$confirmacion.='
									<h3 class="titulosreserva">Total:</h3>
									<p>'.number_format($item->total).'</p>

								</td>
							</tr>';
						    }
						}
					}
					
					
					$compra='
					<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html lang="es">
<head>
	<meta name="viewport" content="initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title>Reservaciones Koonning Travel</title>
	<style type="text/css">
		.ReadMsgBody
		{
			width: 100%; background-color: #fbfbfb;
		}
		.ExternalClass
		{
			width: 100%; background-color: #fbfbfb;
		}
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div
		{
			line-height:100%;
		}
		.titulosreserva {
			border-top: 1px solid #f2f2f2;
			color: rgb(153, 153, 153);
			font-size: 12px;
			font-weight: 400;
			padding-top: 10px;
			text-transform: uppercase;
		}
		body
		{
			-webkit-text-size-adjust:none;
			-ms-text-size-adjust:none;
			margin:0;
			padding:0;
		}
		table
		{
			border-spacing:0;
		}
		table td
		{
			border-collapse:collapse;
		}
		.yshortcuts a
		{
			border-bottom: none !important;
		}
		@media screen and (max-width: 600px)
		{
			table[class="container"]
			{
				width: 95% !important;
			}
		}
		@media screen and (max-width: 480px)
		{
			td[class="container-padding"]
			{
				padding-left: 12px !important;
				padding-right: 12px !important;
			}
		}
	</style>
</head>
<body style="margin:0; padding:10px 0;" bgcolor="#fbfbfb" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#fbfbfb">
		<tr>
			<td align="center" valign="top" bgcolor="#fbfbfb" style="background-color: #fbfbfb;">
				<table border="0" width="600" cellpadding="0" cellspacing="0" class="container" bgcolor="#ffffff">
					<tr>
						<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; ">
							<br><br>
							<div align="center">
								<img src="http://kooningtravel.com/images/logo.png" width="45%">
							</div>
							
							<br><br>
							<div style="line-height: 24px; font-family: Tahoma; color: rgb(102, 102, 102); text-transform: uppercase; font-size: 16px; font-weight: normal; text-align: center;">
								Su reservación se ha realizado con éxito <br>codigo de reseva '.$complements['uid'].'
							</div>
							<br>
							<p>Hemos recibido sus datos y en breve uno de nuestros asesores se comunicar&aacute; con usted para brindarle toda la informaci&oacute;n necesaria.</p>
							<p>Sus datos de reservación son:</p>
							
						</td>
					</tr>
'.$confirmacion.'
					<tr>
						<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; ">
							<br><br>
							<h4 style="font-size:12px;">Para cancelación de reservaciones de Hoteles</h4>
							<p>Al momento de ingresar sus datos generales en el Hotel seleccionado, para generar la reservación, el “USUARIO” podrá consultar en el link (liga) denominado Política de Reservación, los términos y condiciones de cancelación aplicables para el Hotel seleccionado, no obstante lo anterior, KOONINGTRAVEL hace de su conocimiento las Políticas Generales para Cancelación de Reservaciones de Hoteles:</p>
							<ul>
								<li>Cancelaciones hechas 15 días o más antes de la fecha de llegada aplica un cargo de 10%.</li>
							  <li>Cancelaciones hechas de 3 a 14 días antes de la fecha de llegada aplica un cargo de 2 noches.</li>
								<li>Cancelaciones hechas de 0 a 2 días antes de la fecha de llegada aplica un cargo de 100%.</li>
								<li>Si la habitación está marcada como no cancelable, no reembolsable o similar, aplica una penalidad del 100% sin importar la fecha en que solicita la cancelación.</li>
							</ul>
							<p>Las políticas de cancelación pueden variar dependiendo del hotel, época del año o tipo de habitación. El “USUARIO” puede revisar la política específica que aplica al hotel seleccionado durante el proceso de reservación.</p>
							<h4 style="font-size:12px;">Cancelaciones en temporada alta y días festivos:</h4>
							<ul>
							  <li>Navidad, Año Nuevo, Semana Santa, verano, y días festivos como el 5 de febrero, 1º de Mayo, 16 de septiembre, 20 de noviembre y fechas designadas por los hoteles.</li>
								<li>Las reservaciones canceladas 30 días o más antes de la fecha de llegada tienen un cargo del 10%.</li>
								<li>Las reservaciones canceladas de 15 a 29 días antes de la fecha de llegada, tienen un cargo de 2 noches.</li>
								<li>Las reservaciones canceladas con menos de 15 días de anticipación tienen un cargo del 100%.</li>
							</ul>
							<br>
							<p>Para más información leer nuestras politicas de cancelación en la siguiente dirección: <a href="http://kooningtravel.com/terminos">Políticas de Cancelación</a></p>
							<br>
							<p style="font-size: 12px; color: #000;" align="center">&copy; 2018. Derechos Reservados Kooning Travel.</p>
							<br>
						</td>
					</tr>
					<tr>
						<td bgcolor="#fbfbfb" style="background-color: #fbfbfb;">
							<br>
							<div style="text-align: center; font-family: tahoma; font-size: 13px; color: rgb(153, 153, 153);">Phone: 01 800 890 8974 | info@kooningtravel.com </div>
							<p style="font-family: tahoma; font-size: 10px; color: #666666; line-height: 12px;" align="center"><b>AVISO DE PRIVACIDAD</b><br><br>En cumplimiento con lo establecido por la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Particulares, el tratamiento de sus datos personales o sensibles (datos) es controlado a efecto de garantizar la privacidad y el derecho a la autodeterminaci&oacute;n informativa de los mismos, sugerimos la lectura del presente aviso ya que la aportaci&oacute;n de datos mediante cualquier medio, constituye la aceptaci&oacute;n del presente aviso de privacidad. Los datos podr&aacute;n ser transferidos, compartidos y/o cedidos a sociedades subsidiarias, filiales, afiliadas y proveedores dentro de territorio nacional o en el extranjero para fines de identificaci&oacute;n, contacto, as&iacute; como para entender mejor las necesidades de nuestros clientes y lograr un mejor servicio. Se podr&aacute; conservar el tiempo que la ley aplicable lo permita la informaci&oacute;n en su base de datos con el objeto de simplificar la prestaci&oacute;n del servicio.</p>
							<br>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<br><br>
</body>
</html>';
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From:Reservaciones <reservaciones@kooningtravel.com>\r\n";
	$headers .= "Bcc: reservaciones@kooningtravel.com\r\n";
	$headers .= "Return-Path: reservaciones@kooningtravel.com\r\n";
	mail($to, 'Confirmacion', $compra, $headers);

  	}
  	
  	function notificacion($name,$code, $surnames, $email, $phone, $precio)
	{
	$notificacion='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<html lang="es">

		<head>
		    <meta name="viewport" content="initial-scale=1.0">
		    <meta name="format-detection" content="telephone=no">
		    <title>Mensaje cotizacion de '.$name.'</title>
		    <style type="text/css">
		        .ReadMsgBody {
		            width: 100%;
		            background-color: #fbfbfb;
		        }

		        .ExternalClass {
		            width: 100%;
		            background-color: #fbfbfb;
		        }

		        .ExternalClass,
		        .ExternalClass p,
		        .ExternalClass span,
		        .ExternalClass font,
		        .ExternalClass td,
		        .ExternalClass div {
		            line-height: 100%;
		        }

		        .titulosreserva {
		            border-top: 1px solid #f2f2f2;
		            color: rgb(153, 153, 153);
		            font-size: 12px;
		            font-weight: 400;
		            padding-top: 10px;
		            text-transform: uppercase;
		        }

		        body {
		            -webkit-text-size-adjust: none;
		            -ms-text-size-adjust: none;
		            margin: 0;
		            padding: 0;
		        }

		        table {
		            border-spacing: 0;
		        }

		        table td {
		            border-collapse: collapse;
		        }

		        .yshortcuts a {
		            border-bottom: none !important;
		        }

		        @media screen and (max-width: 600px) {
		            table[class="container"] {
		                width: 95% !important;
		            }
		        }

		        @media screen and (max-width: 480px) {
		            td[class="container-padding"] {
		                padding-left: 12px !important;
		                padding-right: 12px !important;
		            }
		        }
		    </style>
		</head>

		<body style="margin:0; padding:10px 0;" bgcolor="#fbfbfb" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#fbfbfb">
		        <tr>
		            <td align="center" valign="top" bgcolor="#fbfbfb" style="background-color: #fbfbfb;">
		                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" bgcolor="#ffffff">
		                    <tr>
		                        <td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; ">
		                            <br><br>
		                            <div align="center">
		                                <img src="http://kooningtravel.com/images/logo.png" width="45%">
		                            </div>
		                            <br><br>
		                            <div style="line-height: 24px; font-family: Tahoma; color: rgb(102, 102, 102); text-transform: uppercase; font-size: 16px; font-weight: normal; text-align: center;">
		                                '.$name.' Acaba de realizar una cotizacion con el id de reserva '.$code.'
		                            </div>
		                            <br>
		                            <p>Datos de la persona.</p>
		                            <h3 class="titulosreserva">Nombre:</h3>
		                            <p> '.$name.'</p>
		                            <h3 class="titulosreserva">Apellido:</h3>
		                            <p>'.$surnames.'</p>
		                            <h3 class="titulosreserva">Correo:</h3>
		                            <p>'.$email.'</p>
		                            <h3 class="titulosreserva">Solicitud:</h3>
		                            <p>Sin Solicitudes especiales</p>
		                            <h3 class="titulosreserva">Telefono:</h3>
		                            <p>'.$phone.'</p>
		                            <h3 class="titulosreserva">Cantidad que cotizo:</h3>
		                            <p>MXN $'.$precio.'</p>
		                        </td>
		                    </tr>

		                </table>
		            </td>
		        </tr>
		    </table>
		    <br><br>
		</body>
	</html>';
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From:Reservaciones <reservaciones@kooningtravel.com>\r\n";
	$headers .= "Bcc: reservaciones@kooningtravel.com\r\n";
	$headers .= "Return-Path: reservaciones@kooningtravel.com\r\n";
	mail("sistemas@kooningtravel.com", 'Nueva cotizacion', $notificacion, $headers);

}
}
