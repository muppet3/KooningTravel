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

   	public function payworks(Request $request){
   		$id=\Session::get('purchase_id');
   		$purchase=Purchase::find($id);
   		$monto=$purchase->total;
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
			$datos['Nombre']=$recuest_book['firstname']." ".$recuest_book['lastname'];
        	$datos['llegada']=$recuest_book['hotels']['hotel']['datearrival'];
        	$datos['salida']=$recuest_book['hotels']['hotel']['datedeparture'];
        	$datos['adultos']=$adultos;
        	$datos['menores']=$menores;
        	$datos['habitaciones']=$cont;
        	$datos['idreserva']=$purchase->buy_hotels->booking;
        	//$datos['idreserva']=$purchase->booking;
			
			if ($av) {
				
				$booking = new Booking('Book',$recuest_book);
				$booking->exec();
				
				if ($booking->fail()) {
							//error_log(print_r($purchase->id.' Fallo en la api '.$book->getError() , TRUE));
							//$this->errorMail($purchase->emailaddress,$purchase->id);
							## hacer algo en caso de error de fall de api
				}else{
					$booking = $booking->getXml();
					if ($booking->statusinternet == 'CO' and ( $booking->statuspayment == 'PA' or $booking->statuspayment == 'OP')) {
						$purchase->buy_hotels[0]->booking=(string)$booking->confirmationid;
					}else{
						//error_log(print_r($purchase->id.' Fallo estatus de internet', TRUE));
						//$this->errorMail($purchase->emailaddress,$order->id);
					}
				}
			}
			$complementos['hotel']=$datos;
        }
        if(count($purchase->buy_transfers)>=0){
        	$complementos['transporte']=$purchase->buy_transfers;
        }
        if(count($purchase->buy_activities)>=0){
        	
        	$complementos['activities']=$purchase->buy_activities;
        }
        $complement['complements']=$complementos;
        \Mail::send('emails.purchase',$complement,function($mail){
                $mail->subject('Reservaciones KooningTravel');
                $mail->to('ferr.95.fer.fmr@gmail.com');
        });
        return redirect('gracias');
        	
  	}
  	public function delete($id){
  		\Session::forget('cart.'.$id);
  		$cart=\Session::get('cart');
  		
  		return redirect('checkout');
  	}
  	public function checkout(){
  		$cart=\Session::get('cart');
  		  
  		$total=0;
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
				'zip'=>"77540",
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
		\Mail::send('emails.noticereservation',$compra,function($mail){
                $mail->subject($_POST['nombre'].' '.$_POST['apellidos'].' realizo una cotizacion');
                $mail->to('reservaciones@kooningtravel.com');
        });
        \Session::put('purchase_id',$purchase->id);
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
  		$purchase = Purchase::where('code',$id)->first();
  		
  		$details = new Hoteldo('GetItinerary');
  		$details->ip="107.180.51.21";
		$details->c='pe';
		$details->l='esp';
  		$details->bn='27745444';
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
}
