<?php
/**
* wrapper para el uso de api de hoteldo
*/

//if ($DEBUG) {require_once(ROOT . DS .'application' . DS . 'controllers' . DS . 'helpers/fileWriter.php');}
require_once(ROOT . DS .'application' . DS . 'controllers' . DS . 'helpers/wrapper.php');
class WrapperPost extends Wrapper{
	public function __construct($action,$data=null){
		if (DEBUG) {
			$this->url='http://testxml.e-tsw.com/AffiliateService/AffiliateService.svc/restful/';
		}else{
			$this->url='http://xml.e-tsw.com/AffiliateService/V1.0/AffiliateService.svc/restful/';
		}
		$this->data=[];
		$this->action=$action;	
		$this->data['affiliateid']=9004880;
		if (!is_null($data)) {
			$this->data=$this->data+$data;
		}
	}
	protected function prepareXML()
	{
		require_once(ROOT . DS .'application' . DS . 'controllers' . DS . 'helpers/array2xml.php');
		$xml = new Array2xml();
		$xml->setRootName('Request');
		$xml->setRootAttrs(['Type' => 'Reservation','version' => '1.0']);
		$xml->setFilterNumbersInTags(['room']);
		return $xml;
	}
	public function exec(){
		if (!is_null($this->raw)) {
			$this->raw=null;
			$this->xml=null;
			$this->json=null;
			$this->array=null;
			$this->error=null;
			$this->error_description=null;
		}
		$xml = $this->prepareXML();
		$vars=$xml->convert($this->data);
		$url=$this->url.$this->action;
		//if (DEBUG) {write2File("URL recuest ". $url);write2File("DATA recuest ". $vars);}
		$headers = [
		    "Content-type: text/xml",
		    "Content-length: " . strlen($vars),
		    "Connection: close",
		];
		$curl = curl_init();
		curl_setopt ($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $vars);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$raw = curl_exec ($curl);
		$http_code=curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close ($curl);
		if ($http_code!=200) {
			$trace = debug_backtrace();
			trigger_error(
				'ERROR HTTP CODE ' .$http_code.
				' en ' . $trace[0]['file'] .
				' en la línea ' . $trace[0]['line'],
				E_USER_ERROR);
			$raw=null;
			return null;
		}
		$this->raw=$raw;
		//if (DEBUG) {write2File("Response ". $this->raw);}
		return $raw;
	}
	public function getRecuest()
	{
		$xml = $this->prepareXML();
		return ['url'=>$this->url.$this->action, 'xml'=> $xml->convert($this->data) ];
	}	
}