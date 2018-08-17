<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\Hoteldo;
use App\Models\Campaign;
use App\Models\Destination;
use App\Models\Purchase;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        $data['checkin']=Carbon::now()->addDay(4);
        $data['checkout']=Carbon::now()->addDay(8);
        $data['pathSearch']='';
        $data['home']="class=active";
        $data['parques']="";
        $data['tours']="";
        $data['traslados']="";
        $data['ofertas']=""; 
        $data['background']="";
        return view('home/home',$data);
    }
    public function search($destino){
        $data['checkin']=Carbon::now()->addDay(4);
        $data['checkout']=Carbon::now()->addDay(8);
        // validacion de fechas   background-image: url(https://kooningtravel.com/img/Home/fondos/FondoHoteles.png
        $data['background']="height: 270px; background-image: url(https://kooningtravel.com/img/Home/fondos/FondoHoteles.png";
        $errores= $this->validationrooms();
        $defaultquery=false;
        if(count($errores)>0){
            $defaultquery=true;
        }
        $errores=$this->validationdates($errores);        
        if($defaultquery){
            $query = $this->defaultquery();
            $huespedes='<span class="date">2 adultos sin menores, 1 habitación.</span>';
        }else{
            $query = $this->query();
            $totaladultos=$_GET['r1a']+$_GET['r2a']+$_GET['r3a'];
            $totalmenores=$_GET['r1k']+$_GET['r2k']+$_GET['r3k'];
            $huespedes='<span class="date"> ';
            if($totaladultos==1){
                $huespedes.='1 Adulto ';
            }else{
                $huespedes.=$totaladultos.' Adultos ';
            }
            if($totalmenores==1){
                $huespedes.='1 menor';
            }else{
                $huespedes.=$totalmenores.' menores, ';
            }
            if($_GET['r']=1){
                $huespedes.='1 habitación.</span>';
            }else{
                $huespedes.=$_GET['r'].' habitaciones.</span>';
            }
        }
        $errorquery="0";
        if (isset($_GET['type']) and $_GET['type']==1) {
            $query->d=$_GET['d'];
            $query->h="";
        }else{
            $query->h=$_GET['d'];
            $query->d="";
        }
        $query->setCached(false);
        $query->exec();
        
        if ( $query->fail() ) {
            switch ($query->getError()) {
                case 'No se encontraron resultados':
                    $errorquery="No se encontraron resultados, le sugerimos cambiar de fechas o destino.";
                    break;
                case 'No results found':
                    $errorquery="No se encontraron resultados, le sugerimos cambiar de fechas o destino.";
                    break;
                case 'Hubo un error de timeout':
                    $errorquery="El servidor tardo mucho tiempo en responder, intentelo nuevamente.";
                    break;
                default:
                    $errorquery="Ocurrio una interrupcion inesperada. intentelo nuevamente.";
                    break;
            }
        }
        $sd = new \DateTime($_GET['sd']);
        $ed = new \DateTime($_GET['ed']);
        $interval = $ed->diff($sd);
        if($errorquery=="0"){
            $room_list=[];
            $min=100000;
            $max=0;
            foreach ($query->getXml()->Hotels->Hotel as $hotel) {
                $destinocorrecto=$hotel->Destination->Name;
                foreach ($hotel->Rooms->Room as $room) {
                    $item=[];
                    $item['adultos'] = ($_GET['r1a']+$_GET['r2a']+$_GET['r3a']);
                    $precio=$room->MealPlans->MealPlan->AgencyPublic->AgencyPublic/$interval->d;
                    
                    if (empty($hotel->Reviews->Review->Rating)) {
                        if($precio < 1000){
                            $item['stars']=1;
                        }else if($precio < 2000){
                            $item['stars']=3;
                        }else if($precio < 3000){
                            $item['stars']=4;
                        }else{
                            $item['stars']=5;
                        }
                    }else{
                        $item['stars']= (float) $hotel->Reviews->Review->Rating;
                    }
                    if ($precio> 0 and $precio<= 1000) {
                        $item['pricerange'] = "btw0k-1k";
                    }elseif ($precio> 1000 and $precio<= 3000) {
                        $item['pricerange'] = "btw1k-3k";
                    }elseif ($precio> 3000 and $precio<= 6000) {
                        $item['pricerange'] = "btw3k-5k";
                    }elseif ($precio> 6000 and $precio<= 8000) {
                        $item['pricerange'] = "btw5k-8k";
                    }elseif ($precio> 8000 ) {
                        $item['pricerange'] = "more8k";
                    }
                    
                    if (isset($room->MealPlans->MealPlan->Promotions)) {
                        $promotionhoteldo=(string) $room->MealPlans->MealPlan->Promotions->Promotion->Description;
                        $desc = substr($promotionhoteldo, 0,2);
                        if(is_numeric($desc)){
                            $item['descuento']="-".$desc."%";
                            $item['preciodescuento']=number_format((100*$precio)/(100-$desc));
                        }
                    }
                    $item['id']= (string) $hotel->Id;
                    $item['name']= (string) $hotel->Name;
                    $item['url']=str_replace(" ","-",$hotel->Name);
                    if (empty((string) $hotel->Image)) {
                        $item['image']= '//kooningtravel.com/images/hotel-generico.jpg';
                    }else{
                        $item['image']= (string) $hotel->Image;
                    }
                    $item['city_name']= (string) $hotel->CityName;
                    $item['country_name']= (string) $hotel->CountryName;
                    $item['room_name']= (string) $room->Name;
                    $item['meal_plan']= (string) $room->MealPlans->MealPlan->Name;
                    $item['agency_public'] = (string) $room->MealPlans->MealPlan->AgencyPublic->AgencyPublic;
                    $totaldo=((float) $room->MealPlans->MealPlan->Total/$interval->d);
                    $item['total_noches'] = $interval->d;
                    $item['price']=number_format($precio);
                    $item['precio']=$precio;

                    if (!isset($menor)) {
                        $menor = $item;
                    }
                    if ($item['price'] < $menor['price'] ) {
                        $menor = $item;
                    }
                }
                if($min > $menor['precio']){
                    $min=$menor['precio'];
                }
                if($menor['precio']> $max){
                    $max=$menor['precio'];
                }
                $room_list[]=$menor;
                unset($menor);
            }
            $data['min']=$min;
            if($max>8000){
                $max=8001;
            }
            $data['max']=$max;
            $data['destino']=$destinocorrecto;
            $data['rooms']=$room_list;
            if($defaultquery){
                $data['url']='&sd='.$_GET["sd"].'&ed='.$_GET["ed"].'&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0';
            }else{
                $get_numero = count($_GET);
                $get_etiquetas = array_keys($_GET);
                $get_valores = array_values($_GET);
                $url="";
                for ($i=2; $i <=($get_numero-1) ; $i++) { 
                    if(strcmp($get_etiquetas[$i],"d")!== 0){
                        $url.="&".$get_etiquetas[$i]."=".$get_valores[$i];
                    }
                    
                }
               $data['url']=$url;
            }
        }else{
            $data['destino']=$destino;
            $data['erroresquery']=$errorquery;
        }
        if(!empty($errores)){
            $data['errores']=$errores;
        }
        $fechas='
        <span class="date"> 
            <label class="day">'.$this->stylefecha($_GET['sd']).' </label> 
            <label class="day">&nbsp;- '.$this->stylefecha($_GET['ed']).' </label>
            <p class="details">( ';
        if($interval->d==1){
            $fechas.='1 noche)</p>';
        }else{
            $fechas.=$interval->d.' noches) </p>
            </span>';
        }
        $data['fechas']=$fechas;
        $data['huespedes']=$huespedes;
        
        return view('home/search',$data);
    }
    public function details($id, $hotel){
        $data['background']="height: 270px; background-image: url(https://kooningtravel.com/img/Home/fondos/FondoHoteles.png";
        $data['hotel']=$hotel;
        $errores= $this->validationrooms();
        $defaultquery=false;
        if(count($errores)>0){
            $defaultquery=true;
        }
        $errores=$this->validationdates($errores);   
        $hotel= new Hoteldo('GetHotelInformation');
        $hotel->ip="".$_SERVER["REMOTE_ADDR"];
        $hotel->c='pe';
        $hotel->l='esp';
        $hotel->h=$id;
        $hotel->exec();     
        if ($hotel->fail()) {
            if ( (string) $hotel->getError() == "Detail room No results found") {
                $erroresquery="No se encontro la habitacion para las fechas establecidas.";
            }
        }else{
            $gethoteles=$hotel->getXml();

            $data['servicios']=$gethoteles->Hotel->Services->Service;
            $data['facilities']=$gethoteles->Hotel->Facilities->Comfort;
            $data['habitaciones']=$gethoteles->Hotel->TotalRooms;
            $data['instalaciones']=$gethoteles->Hotel->Facilities->Comfort;
            if(count($gethoteles->Hotel->Galleries->Image)>1){
                $gethoteles->Hotel->Galleries->Image[1]->Active=" active";
            }else{
                $gethoteles->Hotel->Galleries->Image[0]->Active=" active";
            }
            $data['images']=$gethoteles->Hotel->Galleries->Image;
            $data['nombre']=$gethoteles->Hotel->Name;
            $data['checkin']=$gethoteles->Hotel->CheckIn;
            $data['checkout']=$gethoteles->Hotel->CheckOut;
            $data['descripcion']=$gethoteles->Hotel->Description;
            //dd($gethoteles);
        }
        if($defaultquery){
            $query = $this->defaultquery();
            $huespedes='<span class="date">2 adultos sin menores, 1 habitación.</span>';
        }else{
            $query = $this->query();
            $totaladultos=$_GET['r1a']+$_GET['r2a']+$_GET['r3a'];
            $totalmenores=$_GET['r1k']+$_GET['r2k']+$_GET['r3k'];
            $huespedes='<span class="date"> ';
            if($totaladultos==1){
                $huespedes.='1 Adulto ';
            }else{
                $huespedes.=$totaladultos.' Adultos ';
            }
            if($totalmenores==1){
                $huespedes.='1 menor';
            }else{
                $huespedes.=$totalmenores.' menores, ';
            }
            if($_GET['r']=1){
                $huespedes.='1 habitación.</span>';
            }else{
                $huespedes.=$_GET['r'].' habitaciones.</span>';
            }
        }
        
        $errorquery="0";
        if (isset($_GET['type']) and $_GET['type']==1) {
            $query->d=$_GET['d'];
            $query->h="";
        }else{
            $query->h=$_GET['d'];
            $query->d="";
        }
        $query->setCached(false);
        $query->exec();
        if ( $query->fail() ) {
            switch ($query->getError()) {
                case 'No se encontraron resultados':
                    $errorquery="No se encontraron resultados, le sugerimos cambiar de fechas o destino.";
                    break;
                case 'No results found':
                    $errorquery="No se encontraron resultados, le sugerimos cambiar de fechas o destino.";
                    break;
                case 'Hubo un error de timeout':
                    $errorquery="El servidor tardo mucho tiempo en responder, intentelo nuevamente.";
                    break;
                default:
                    $errorquery="Ocurrio una interrupcion inesperada. intentelo nuevamente.";
                    break;
            }
        }
        $sd = new \DateTime($_GET['sd']);
        $ed = new \DateTime($_GET['ed']);
        $interval = $ed->diff($sd);
        if($errorquery=="0"){
            $getquery=$query->getXml();
             \Session::forget('query');
            \Session::put('query', $query->getRecuestData());            
            $data['estrellas']=substr($getquery->Filters->Categories->Category->Name,0,1);
            $data['titulo']="Hotel ".$getquery->Hotels->Hotel->Name." | KooningTravel";
            $data['id']=$id;
            $data['ubicacion']=$getquery->Hotels->Hotel->CityName.", ".$getquery->Hotels->Hotel->CountryName;
            $contador=0;
            foreach ($getquery->Hotels->Hotel->Rooms->Room as $room) {
                if($contador==0){
                    $room->MealPlans->MealPlan->RateDetails->RateDetail->CancellationPolicy->Activo=" active";
                    $contador=1;
                }
                $precio=$room->MealPlans->MealPlan->AgencyPublic->AgencyPublic;
                if(isset($room->MealPlans->MealPlan->Promotions)){
                    $desc = substr($room->MealPlans->MealPlan->Promotions->Promotion->Description, 0,2);
                    if(is_numeric($desc)){
                        $room->MealPlans->MealPlan->Promotions->Promotion->Porcentaje="-".$desc."%";
                        $room->MealPlans->MealPlan->Promotions->Promotion->Monto=number_format((100*$precio)/(100-$desc));
                    }
                }
                $room->MealPlans->MealPlan->AgencyPublic->Precio=number_format((float)$precio);
                $room->MealPlans->MealPlan->AgencyPublic->PrecioPromedio=number_format((float)($precio/4));
            }
            
            $data['rooms']=$getquery->Hotels->Hotel->Rooms->Room;
            $data['defaultimage']=$getquery->Hotels->Hotel->Image;
            $data['latitud']=$getquery->Hotels->Hotel->Latitude;
            $data['longitud']=$getquery->Hotels->Hotel->Longitude;
            //dd($getquery);
            if($defaultquery){
                $data['url']='&sd='.$_GET["sd"].'&ed='.$_GET["ed"].'&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0';
            }else{
                $get_numero = count($_GET);
                $get_etiquetas = array_keys($_GET);
                $get_valores = array_values($_GET);
                $url="";
                for ($i=2; $i <=($get_numero-1) ; $i++) { 
                    $url.="&".$get_etiquetas[$i]."=".$get_valores[$i];
                }
               $data['url']=$url;
            }
            
        }else{
            $data['erroresquery']=$errorquery;
        }
        if(!empty($errores)){
            $data['errores']=$errores;
        }
        
        $fechas='
            <span class="date"> 
            <label class="day">'.$this->stylefecha($_GET['sd']).' </label> 
            <label class="day">&nbsp;- '.$this->stylefecha($_GET['ed']).' </label>
            <p class="details">( ';
        if($interval->d==1){
            $fechas.='1 noche)</p>';
        }else{
            $fechas.=$interval->d.' noches) </p>
            </span>';
        }
        $data['fechas']=$fechas;
        $data['huespedes']=$huespedes;
        //dd($data);
        return view('home/details',$data);
    }
    public function booking($room_id,$id){
        $data['background']=" height: 100px; background-image: url(https://kooningtravel.com/img/Home/fondos/fondoParque.png); ";
        $valores=\Session::get('query');
        $valores['h']=$id;
        $query= new Hoteldo('GetQuoteHotels',$valores);
        $_SESSION["room_id"]=$room_id;
        $query->setCached(false);
        $query->exec();
        if ( $query->fail() ) {
            switch ($query->getError()) {
                case 'No se encontraron resultados':
                    $errorquery="No se encontraron resultados, le sugerimos cambiar de fechas o destino.";
                    break;
                case 'No results found':
                    $errorquery="No se encontraron resultados, le sugerimos cambiar de fechas o destino.";
                    break;
                case 'Hubo un error de timeout':
                    $errorquery="El servidor tardo mucho tiempo en responder, intentelo nuevamente.";
                    break;
                default:
                    $errorquery="Ocurrio una interrupcion inesperada. intentelo nuevamente.";
                    break;
            }
        }
        $query=$query->getXml();
        $room=$query->xpath('Hotels/Hotel/Rooms/Room/Id[.="'.$room_id.'"]/..')[0];
        $room->Destino=$query->Hotels->Hotel->CityName.", ".$query->Hotels->Hotel->CountryName;
        $room->NameHotel=$query->Hotels->Hotel->Name;
        $sd=$this->formatofechas($valores['sd']);
        $ed=$this->formatofechas($valores['ed']);
        $room->Entrada=$this->stylefecha($sd,1);
        $room->Salida=$this->stylefecha($ed,1);
        $sd = new \DateTime($sd);
        $ed = new \DateTime($ed);
        $interval = $ed->diff($sd);
        if($interval->d==1){
            $room->Noche="1 Noche";
        }else{
            $room->Noche=$interval->d." Noches";
        }
        if($valores['r']==1){
             $room->Habitaciones="1 Habitacion";
        }else{
             $room->Habitaciones=$valores['r']." Habitaciones";
        }
        if(isset($query->Hotels->Hotel->Image)){
            $room->ImagenHotel=$query->Hotels->Hotel->Image;
        }
        if(isset($query->Hotels->Hotel->CategoryId)){
            $room->Estrellas= substr($query->Hotels->Hotel->CategoryId, 1,1);
        }
        $adultos=$valores['r1a']+$valores['r2a']+$valores['r3a'];
        $menores=$valores['r1k']+$valores['r2k']+$valores['r2k'];
        if($adultos==1){
            $room->Adultos="1 Adulto";
        }else{
            $room->Adultos=$adultos." Adultos";
        }
        if($menores==1){
            $room->Menores="1 Menor";
        }elseif($menores==0){
            
        }else{
            $room->Menores=$menores." Menores";
        }
        $precio=$room->MealPlans->MealPlan->AgencyPublic->AgencyPublic;
        if(isset($room->MealPlans->MealPlan->Promotions)){
            $desc = substr($room->MealPlans->MealPlan->Promotions->Promotion->Description, 0,2);
            if(is_numeric($desc)){
                $room->MealPlans->MealPlan->Promotions->Promotion->Porcentaje="-".$desc."%";
                $room->MealPlans->MealPlan->Promotions->Promotion->Monto=number_format((100*$precio)/(100-$desc));
            }
        }
        $total=(float)$precio;
        $room->MealPlans->MealPlan->AgencyPublic->Precio=number_format($total);
        //1001 -> tulum || 2 - cancun || riviera maya -> 13 || playa del carmen -> 16
        $iddestino=$query->Hotels->Hotel->Destination->Id;
        if($iddestino==2 or $iddestino==1001 or $iddestino==13 or $iddestino==16){
            $data['traslado']="existe traslado";
        }
        $data['room']=$room;
        $data['tres']=number_format($total/3);
        $data['seis']=number_format($total/6);
        $data['nueve']=number_format($total/9);
        $data['total']=number_format($total);
        //dd($data);
        return view('purchase/checkout',$data);   
    }
    public function alertemail(Request $request, $room_id,$id){
        $idhotel=\Session::get('idhotel');
        $carrito=\Session::get('carrito');

        if(empty($carrito) or $idhotel!=$id){
            $campos = $request->all();
            $endpoint = 'http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'];
            try
            { 
                $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $endpoint,
                ));
                $resp = unserialize(curl_exec($curl));

                if (!curl_errno($curl)) {
                    switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
                        case 200:  
                            
                            $campos['country'] = $resp['geoplugin_countryName'];
                            $campos['state']=$resp['geoplugin_region'];
                            break;
                        default:
                    }
                }
                curl_close($curl);  
            } catch (Exception $ex) {
                printf("Error while sending request, reason: %s\n",$ex->getMessage());
            }
            $campos['code']=substr(md5(uniqid(rand(1,6))), 0, 16);
            
            $compra= Purchase::create($campos);
            \Session::put('carrito', $compra->id);
            \Session::put('idhotel', $id);
            $valores=\Session::get('query');
            $valores['h']=$id;
            $query= new Hoteldo('GetQuoteHotels',$valores);
            $_SESSION["room_id"]=$room_id;
            $query->setCached(false);
            $query->exec();
            if ( $query->fail() ) {
                switch ($query->getError()) {
                    case 'No se encontraron resultados':
                        $errorquery="No se encontraron resultados, le sugerimos cambiar de fechas o destino.";
                        break;
                    case 'No results found':
                        $errorquery="No se encontraron resultados, le sugerimos cambiar de fechas o destino.";
                        break;
                    case 'Hubo un error de timeout':
                        $errorquery="El servidor tardo mucho tiempo en responder, intentelo nuevamente.";
                        break;
                    default:
                        $errorquery="Ocurrio una interrupcion inesperada. intentelo nuevamente.";
                        break;
                }
            }
            $query=$query->getXml();
            $room=$query->xpath('Hotels/Hotel/Rooms/Room/Id[.="'.$room_id.'"]/..')[0];
            $room->Destino=$query->Hotels->Hotel->CityName.", ".$query->Hotels->Hotel->CountryName;
            $room->NameHotel=$query->Hotels->Hotel->Name;
            $sd=$this->formatofechas($valores['sd']);
            $ed=$this->formatofechas($valores['ed']);
            $room->Entrada=$this->stylefecha($sd,1);
            $room->Salida=$this->stylefecha($ed,1);
            $sd = new \DateTime($sd);
            $ed = new \DateTime($ed);
            $interval = $ed->diff($sd);

            $precio=$room->MealPlans->MealPlan->AgencyPublic->AgencyPublic;
            if(isset($room->MealPlans->MealPlan->Promotions)){
                $desc = substr($room->MealPlans->MealPlan->Promotions->Promotion->Description, 0,2);
                if(is_numeric($desc)){
                    $room->MealPlans->MealPlan->Promotions->Promotion->Porcentaje="-".$desc."%";
                    $room->MealPlans->MealPlan->Promotions->Promotion->Monto=number_format((100*$precio)/(100-$desc));
                }
            }
            $room->MealPlans->MealPlan->AgencyPublic->Precio=number_format((float)$precio);
           
            $campos["precio"]=number_format((float)$precio);
            
            \Mail::send('emails.noticereservation',$campos,function($mail){
                $mail->subject($_POST['name'].' '.$_POST['surnames'].' realizo una cotizacion');
                $mail->to('ferr.95.fer.fmr@gmail.com');
            });
            echo "Email enviado";
        }else{
            echo"Mensaje enviado con anterioridad";
        }      
    }
    public function stylefecha($fecha , $completo = 0){
        $dias = array('','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo');
        $meses = array('','Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic');
        $semana = $dias[date('N', strtotime(''.$fecha))];
        $mes = $meses[date('n', strtotime(''.$fecha))];
        $dia =date('d', strtotime(''.$fecha));
        $year=date('Y', strtotime(''.$fecha));
        if($completo==1){
            return $semana.', '.$dia.' '.$mes.' '.$year;
        }else{
            return $dia.' '.$mes.' '.$year;
        }
    }
    public function formatofechas($fecha){
        return substr($fecha,0,4)."-".substr($fecha,4,2)."-".substr($fecha,6,8);
    }
    public function list(){
        if (isset($_GET['term'])) {
            $hoteles = json_decode(file_get_contents("js/Destinos/DestinosHoteldo.json"));
            $destinations_array=[];
            $c=0;
            foreach ($hoteles->Destination as $destination) {
                if (preg_match('/^'.$_GET['term'].'/i',(string) $destination->Name)) {
                    $destinations_array[]=['id'=>(string)$destination->Id,'text'=>(string) $destination->Name,'metadata'=>'1'];
                    $c++;
                    if ($c==5) {
                        break;
                    }
                }
            }
            $c=0;
            $hotels = json_decode(file_get_contents("js/Hoteles/HotelDo.json"));
            $hotels_array=[];
            foreach ($hotels as $hotel) {
                if (preg_match('/^'.$_GET['term'].'/i',(string) $hotel->Name)) {
                    $hotels_array[]=['id'=>(string)$hotel->Id,'text'=>(string) $hotel->Name,'metadata'=>'0'];
                    $c++;
                    if ($c==5) {
                        break;
                    }
                }
            }
            $response=[];
            $response[]=['text'=>'Destinos','children'=>$destinations_array];
            $response[]=['text'=>'Hoteles','children'=>$hotels_array];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
    public function formatofecha($date, $format){
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
    private function validationdates($errores) {

        $fecha_entrada = strtotime($_GET['sd']);
        $fecha_salida= strtotime($_GET['ed']);
        $fecha_actual = strtotime(date("Y-m-d"));
        
        if($this->formatofecha($_GET['sd'], 'Y-m-d') and $this->formatofecha($_GET['ed'], 'Y-m-d')){
            if($fecha_actual > $fecha_entrada){            
                $entrada =strtotime ( '+4 day' , strtotime ( date("Y-m-d") ) ) ;
                $entrada = date ( 'Y-m-j' , $entrada );
                $salida = strtotime ( '+4 day' , strtotime ( $entrada ) ) ;
                $salida = date ( 'Y-m-j' , $salida );
                $_GET['sd']=$entrada;
                $_GET['ed']=$salida;
                array_push($errores, "Las fechas no pueden ser pasadas.");
            }
            if($fecha_salida<$fecha_entrada){
                $salida = strtotime ( '+4 day' , strtotime ($_GET['sd'])) ;
                $salida = date ( 'Y-m-j' , $salida );
                $_GET['ed']= $salida;
                array_push($errores, "La fecha de salida no puede ser menor que la fecha de entrada.");
            }
            if($fecha_entrada==$fecha_salida){
                $salida = strtotime ( '+4 day' , strtotime ($_GET['sd'])) ;
                $salida = date ( 'Y-m-j' , $salida );
                $_GET['ed']= $salida;
                array_push($errores, "La fecha de entrada y salida no pueden ser las mismas.");
            }
        }else{
            $entrada =strtotime ( '+4 day' , strtotime ( date("Y-m-d") ) ) ;
            $entrada = date ( 'Y-m-j' , $entrada );
            $salida = strtotime ( '+4 day' , strtotime ( $entrada ) ) ;
            $salida = date ( 'Y-m-j' , $salida );
            $_GET['sd']=$entrada;
            $_GET['ed']=$salida;
            array_push($errores, "El formato de fecha es incorrecto.");
        }
        return $errores;
    }
    private static function validationrooms() {
        $errores= array();
        $maxadultos=4;
        $maxmenores=3;
        $maxedad=12;
        if($_GET['r']>3 or $_GET['r']<1){
            echo "el numero de habitaciones debe ser inferior a 4 y como minimo 1 habitacion";  
            array_push($errores, "El numero de habitaciones debe ser entre 1 y 3.");          
        }
        
        if(!isset($_GET['r1a']) or $_GET['r1a']>$maxadultos or $_GET['r1a']<1) {
            array_push($errores, "Habitacion 1: el numero de adultos debe ser entre 1 y 4.");
        }
        if(!isset($_GET['r1k']) or $_GET['r1k']>$maxmenores or $_GET['r1k']<0) {
            array_push($errores, "Habitacion 1: El numero de menores debe ser entre 0 y 3.");
        }
        if(!isset($_GET['r1k1a']) or $_GET['r1k1a']>$maxedad or $_GET['r1k1a']<0){
            array_push($errores, "Habitacion 1: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        if(!isset($_GET['r1k2a']) or $_GET['r1k2a']>$maxedad or $_GET['r1k2a']<0){
           array_push($errores, "Habitacion 1: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        if(!isset($_GET['r1k3a']) or $_GET['r1k3a']>$maxedad or $_GET['r1k3a']<0){
           array_push($errores, "Habitacion 1: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        if(!isset($_GET['r2a']) or $_GET['r2a']>$maxadultos or $_GET['r2a']<0){
            array_push($errores, "Habitacion 2: el numero de adultos debe ser entre 0 y 4.");
        }
        if(!isset($_GET['r2k']) or $_GET['r2k']>$maxmenores or $_GET['r2k']<0){
            array_push($errores, "Habitacion 2: El numero de menores debe ser entre 0 y 3.");
        }
        if(!isset($_GET['r2k1a']) or $_GET['r2k1a']>$maxedad or $_GET['r2k1a']<0){
            array_push($errores, "Habitacion 2: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        if(!isset($_GET['r2k2a']) or $_GET['r2k2a']>$maxedad or $_GET['r2k2a']<0){
           array_push($errores, "Habitacion 2: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        if(!isset($_GET['r2k3a']) or $_GET['r2k3a']>$maxedad or $_GET['r2k3a']<0){
           array_push($errores, "Habitacion 2: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        if(!isset($_GET['r3a']) or $_GET['r3a']>$maxadultos or $_GET['r3a']<0){
            array_push($errores, "Habitacion 3: el numero de adultos debe ser entre 0 y 4.");
        }
        if(!isset($_GET['r3k']) or $_GET['r3k']>$maxmenores or $_GET['r3k']<0){
            array_push($errores, "Habitacion 3: El numero de menores debe ser entre 0 y 3.");
        }
        if(!isset($_GET['r3k1a']) or $_GET['r3k1a']>$maxedad or $_GET['r3k1a']<0){
            array_push($errores, "Habitacion 3: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        if(!isset($_GET['r3k2a']) or $_GET['r3k2a']>$maxedad or $_GET['r3k2a']<0){
            array_push($errores, "Habitacion 3: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        if(!isset($_GET['r3k3a']) or $_GET['r3k3a']>$maxedad or $_GET['r3k3a']<0){
           array_push($errores, "Habitacion 3: La edad del menor debe ser entre 0 y 12 años de edad.");
        }
        return $errores;
    }
    public function llenadoinfo(){
        /* hoteles */
        $hotels=new Hoteldo('GetHotels',['l'=>'esp']);
        $hotels->exec();
        $hoteles=array();
        foreach ($hotels->getXml() as $hotel) {
            $hotel=['Id'=>(string)$hotel->Id,'Name'=>(string) $hotel->Name];
            array_push($hoteles,$hotel);
        }
        $file = 'js/Hoteles/HotelDo.json';
        file_put_contents($file, json_encode($hoteles));
        dd(file_get_contents("js/Hoteles/HotelDo.json"));
    }
    private static function query() {
        $query= new Hoteldo('GetQuoteHotels');
        $query->ip="".$_SERVER["REMOTE_ADDR"];
        $query->c='pe';
        $query->h='';
        $query->l='esp';
        $query->d=$_GET['d'];
        $query->sd=str_ireplace("-","",$_GET['sd']);
        $query->ed=str_ireplace("-","",$_GET['ed']);
        $query->r=$_GET['r'];
        $query->r1a=$_GET['r1a'];
        $query->r1k=$_GET['r1k'];
        $query->r1k1a=$_GET['r1k1a'];
        $query->r1k2a=$_GET['r1k2a'];
        $query->r1k3a=$_GET['r1k3a'];
        $query->r2a=$_GET['r2a'];
        $query->r2k=$_GET['r2k'];
        $query->r2k1a=$_GET['r2k1a'];
        $query->r2k2a=$_GET['r2k2a'];
        $query->r2k3a=$_GET['r2k3a'];
        $query->r3a=$_GET['r3a'];
        $query->r3k=$_GET['r3k'];
        $query->r3k1a=$_GET['r3k1a'];
        $query->r3k2a=$_GET['r3k2a'];
        $query->r3k3a=$_GET['r3k3a'];
        $query->r4a="0";
        $query->r4k="0";
        $query->r4k1a="0";
        $query->r4k2a="0";
        $query->r4k3a="0";
        $query->r5a="0";
        $query->r5k="0";
        $query->r5k1a="0";
        $query->r5k2a="0";
        $query->r5k3a="0";
        $query->hash="ha:false";
        return $query;
    }
    private static function defaultquery() {
        $query= new Hoteldo('GetQuoteHotels');
        $query->ip="".$_SERVER["REMOTE_ADDR"];
        $query->c='pe';
        $query->h='';
        $query->l='esp';
        $query->d=$_GET['d'];
        $query->sd=str_ireplace("-","",$_GET['sd']);
        $query->ed=str_ireplace("-","",$_GET['ed']);
        $query->r="1";
        $query->r1a="2";
        $query->r1k="0";
        $query->r1k1a="0";
        $query->r1k2a="0";
        $query->r1k3a="0";
        $query->r2a="0";
        $query->r2k="0";
        $query->r2k1a="0";
        $query->r2k2a="0";
        $query->r2k3a="0";
        $query->r3a="0";
        $query->r3k="0";
        $query->r3k1a="0";
        $query->r3k2a="0";
        $query->r3k3a="0";
        $query->r4a="0";
        $query->r4k="0";
        $query->r4k1a="0";
        $query->r4k2a="0";
        $query->r4k3a="0";
        $query->r5a="0";
        $query->r5k="0";
        $query->r5k1a="0";
        $query->r5k2a="0";
        $query->r5k3a="0";
        return $query;
    }
}
