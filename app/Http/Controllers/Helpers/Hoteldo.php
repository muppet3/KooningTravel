<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Hoteldo extends Controller
{
    protected $data = [];
	protected $cached = true;
	protected $timeExpire = 86400;
	protected $url = null;
	protected $raw = null;
	protected $xml = null;
	protected $json = null;
	protected $array = null;
	protected $error = null;
	protected $error_description = null;
	protected $action = null;
	public function __construct($action, $data=null){
		/*if ($prueba) {
			$this->url='http://testxml.e-tsw.com/AffiliateService/AffiliateService.svc/restful/';
		}else{
			$this->url='http://xml.e-tsw.com/AffiliateService/V1.0/AffiliateService.svc/restful/';
		}*/
		$this->url='http://xml.e-tsw.com/AffiliateService/V1.0/AffiliateService.svc/restful/';
		$this->action=$action;	
		$this->data['a']=9004880;
		if (!is_null($data)) {
			$this->data=$this->data+$data;
		}
	}
	public function getRecuestData()
	{
		return $this->data;
	}
	public function setCached($value)
	{
		$this->cached=$value;
	}
	public function getCached()
	{
		return $this->cached;
	}
	public function setExpire($value)
	{
		$this->timeExpire=$value;
	}
	public function getExpire()
	{
		return $this->timeExpire;
	}
	public function __set($name, $value) {
		$this->data[$name] = $value;
	}
	public function __get($name){
		if (array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}
		$trace = debug_backtrace();
		trigger_error(
			'Propiedad indefinida mediante __get(): ' . $name .
			' en ' . $trace[0]['file'] .
			' en la línea ' . $trace[0]['line'],
			E_USER_NOTICE);
		return null;
	}
	public function __isset($name){
		return isset($this->data[$name]);
	}
	public function __unset($name){
		unset($this->data[$name]);
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
		$url=$this->getRecuest();
		$curl = curl_init();
		curl_setopt ($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$this->raw = curl_exec ($curl);
		$http_code=curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close ($curl);
		if ($http_code!=200) {
			$trace = debug_backtrace();
			trigger_error('ERROR HTTP CODE '.$http_code.' en '.$trace[0]['file'].' en la línea '.$trace[0]['line'],	E_USER_ERROR);
			$this->raw=null;
			return null;
		}
		return $this->raw;
	}
	public function getRaw() {
		return $this->raw;
	}
	public function getXml() {
		if (is_null($this->raw)) {
			return $this->raw;
		}elseif (is_null($this->xml)) {
			$this->xml=simplexml_load_string($this->raw);
		}
		return $this->xml;
	}
	public function getJson(){
		if (is_null($this->raw)) {
			return $this->raw;
		}elseif (is_null($this->json)) {
			$this->json = json_encode($this->getXml());
		}
		return $this->json;
	}
	public function getArray(){
		if (is_null($this->raw)) {
			return $this->raw;
		}elseif (is_null($this->array)) {
			$this->array=json_decode($this->getJson(),TRUE);
		}
		return $this->array;
	}
	public function fail(){
		if (is_null($this->raw)) {
			return true;
		}elseif (is_null($this->error)) {
			if (empty($this->getXml()->Error)) {
				$this->error=false;
			}else{
				$this->error=true;
				$this->error_description=$this->getXml()->Error->Description;
			}
		}
		return $this->error;
	}
	public function getError(){
		if (is_null($this->raw)) {
			return "unexecuted";
		}elseif (is_null($this->error_description)) {
			$this->fail();
		}
		return $this->error_description;
	}
	public function getRecuest()
	{
		$vars='?'.http_build_query($this->data);
		$vars=str_ireplace("%3A",":",$vars);
		return $this->url.$this->action.$vars;
	}
}
