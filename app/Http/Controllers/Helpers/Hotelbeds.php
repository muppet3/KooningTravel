<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Hotelbeds extends Controller
{
    protected $endpoint = "https://api.test.hotelbeds.com/hotel-api/1.0/";
    protected $endpointcontent ="https://api.test.hotelbeds.com/hotel-content-api/1.0/";
    protected $data=[];
	protected $apikey="p368avxj9uae4zp3ezutxdx2";
	protected $secret="2gwFBJufnm";
	protected $result = null;
	protected $error =[];
	protected $action = null;
	public function __construct($action, $data=null){
		$this->endpoint=$this->endpoint.$action;
		$this->endpointcontent=$this->endpointcontent.$action."?language=CAS&fields=";
		$this->action=$action;
		if(!is_null($data)){
			$this->data=$data;
		}
	}
	public function content($inicio,$fin, $fields="all"){
		$signature = hash("sha256", $this->apikey.$this->secret.time());
		$this->endpointcontent=$this->endpointcontent.$fields."&from=".$inicio."&to=".$fin;
		try
		{	
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $this->endpointcontent,
			CURLOPT_HTTPHEADER => ['Accept:application/json', 'Accept- encoding:Gzip' , 'Api-key:'.$this->apikey.'', 'X-Signature:'.$signature.'']
			));
			$this->result= json_decode(curl_exec($curl));
			if (!curl_errno($curl)) {
				switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
					case 200:  
						break;
					default:
						$this->result=null;
						$this->error['code']=$http_code;
						$this->error['description']=json_decode($resp);	
						return null;				
				}
			}
			curl_close($curl);	
		} catch (Exception $ex) {$this->result=null;
			$this->error['code']="404";
			$this->error['description']=$ex->getMessage();
		}
		return $this->result;

	}
	public function hotels($hoteles){
		$signature = hash("sha256", $this->apikey.$this->secret.time());
		$pax="";
	   	for ($room=1; $room <= $this->r ; $room++) { 
		   	$pax=$pax."<paxes>";
	   		$adul="r".$room."a";
	   		$ni="r".$room."k";
	   		for ($i=1; $i <= $this->total[$adul] ; $i++) { 
		   		$pax = $pax.'<pax type="AD"/> ';
		  	}
		   	for ($i2=1; $i2 <= $this->total[$ni] ; $i2++) { 
		   		$edad=$ni."".$i2."a";
		   		$pax = $pax.'<pax type="CH" age="'.$this->total[$edad].'"/> ';
		   	}
		   	$pax=$pax.'</paxes>';
	   	}
	   	$valores='
			<availabilityRQ xmlns="http://www.hotelbeds.com/schemas/messages" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" language="CAS">
				<stay checkIn="'.$this->sd.'" checkOut="'.$this->ed.'"/>
				<occupancies>
					<occupancy rooms="'.$this->r.'" adults="'.$this->adultos.'" children="'.$this->menores.'">
					'.$pax.'
					</occupancy>
				</occupancies>'.$hoteles.'
			</availabilityRQ>';
		try
		{
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => $valores,
			CURLOPT_URL => $this->endpoint,
			CURLOPT_HTTPHEADER => ['Accept:application/json', 'Accept- encoding:Gzip' ,'Access-Control-Allow-Methods:POST' , 'Content-Type:application/xml', 'Api-key:'.$this->apikey.'', 'X-Signature:'.$signature.'']
			));
			$this->result= json_decode(curl_exec($curl));		
			if (!curl_errno($curl)) {
				switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
					case 200:  
						break;
					default:
						
						$this->error['code']=$http_code;
						$this->error['description']=$this->result;	
						$this->result=null;
						return null;				
				}
			}
			curl_close($curl);	
		} catch (Exception $ex) {$this->result=null;
			$this->error['code']="404";
			$this->error['description']=$ex->getMessage();
		}
		return $this->result;

	}
	public function checkrates($rateKey){
		$signature = hash("sha256", $this->apikey.$this->secret.time());
		try
		{	
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => $rateKey,
			CURLOPT_URL => $this->endpoint,
			CURLOPT_HTTPHEADER => ['Accept:application/json', 'Accept- encoding:Gzip' ,'Access-Control-Allow-Methods:POST' , 'Content-Type:application/xml', 'Api-key:'.$this->apikey.'', 'X-Signature:'.$signature.'']
			));
			$this->result= json_decode(curl_exec($curl));
			if (!curl_errno($curl)) {
				switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
					case 200:  
						break;
					default:
						$this->result=null;
						$this->error['code']=$http_code;
						$this->error['description']=json_decode($resp);	
						return null;				
				}
			}
			curl_close($curl);	
		} catch (Exception $ex) {
			$this->result=null;
			$this->error['code']="404";
			$this->error['description']=$ex->getMessage();
		}
		return $this->result;
	}
	/*public function listbooking(){
		$signature = hash("sha256", $this->apikey.$this->secret.time());
	}*/
	public function fail(){
		if(is_null($this->result)){
			return true;
		}else{
			return false;
		}
	}
	public function endpoints($type =1){
		if($type==1){
			return $this->endpoint;
		}else{
			return $this->endpointcontent;
		}
	}
	public function getError(){
			return $this->error;
	}
	public function getResult(){
		return $this->result;
	}
	public function getData(){
		return $this->data;
	}
}
