@extends('layouts/structure')

@section('head')


<div id="promo"  data-ride="carousel" >
	<img class="imgpro" src="/img/promociones/ofertastext.gif" alt="Ofertas Exclusivas">
	
<div class="contp" >
   <form id="contactform" class="head" action="/hotels/search" method="GET" >
      <div class="param" >
          <input type="hidden" name="type" id="type" value="1" />
          <input type="hidden" value="<?php //echo $urls; ?>"  id="destino" />
          <input type="hidden" data-placeholder="<?php //echo $desti; ?>"   value="2" id="ds" name="ds" />
      </div> 
      <div class="top"><h3>¡Reserva tu destino!</h3></div>   
     <hr/>
          <div class="inline-block sear"> 
            <p class="des" >Destino</p>
              <select style="display:none;" data-placeholder="Buscar..." required="true" onclick="fd()"  class="destination form-control" id="d" name="d" multiple="multiple" ></select>
            </div>       
            <div class="inline-date">
              <div class="calp">
                <p class="fechas" >Fecha de llegada</p>
                <input type="text" name="sd" id="from_hotel_search" class="datepicker from_datepicker" placeholder="aaaa-mm-dd" value="<?php //echo $entrada; ?>" readonly  autocomplete="off" />
              </div>
              <div class="calp">
                <p class="fechas" >Fecha de salida</p>
                <input type="text" name="ed" id="to_hotel_search" class="datepicker to_datepicker" placeholder="aaaa-mm-dd" value="<?php //echo $salida; ?>" readonly autocomplete="off" />
              </div>
            </div>
            <div class="inline-block">
              <div class="inline-search passengers noselect">
                <div class="input-style" id="show-passengers-panel">
                  <span class="rooms-icon" data-title="Habitaciones">1</span><span class="sep"></span><span class="r1a-icon" data-title="Adultos">2</span>
                  <span class="childs-icon none" data-title="Niños">0</span>
                  <input class="pax rooms" name="r" id="habita" value="1" type="hidden" />
                </div>
                <div id="passengers-panel" class="noselect simple" style="display: none;">
                  <span class="panel-arrow"></span>
                  <div class="panel-content">
                    <ul class="rooms-list">
                      <li class="item room-1 clear visible" data-room="1">
                        <div class="room-name inline">Hab 1</div>
                        <div class="room-r1a inline center">
                          <label class="sup-label">Adultos</label>
                          <input class="spinner r1a-spin" name="r1a" id="adulto1"  value="2" readonly />
                        </div>
                        <div class="room-childs inline center"><label class="sup-label">Niños</label>
                          <input class="spinner childs-spin" name="r1k" id="Nino1" value="0" readonly />
                        </div>
                        <div class="child-ages" style="display: none;">
                          <label class="sup-label">Edades de los niños en fecha de viaje</label>
                          <select class="small child-age-1" name="r1k1a" style="display: none;">
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                          </select>
                          <select class="small child-age-2" name="r1k2a" style="display: none;">
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                          </select>
                          <select class="small child-age-3" name="r1k3a" style="display: none;">
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                          </select>                        
                        </div>
                      </li>
                      <li class="item room-2 clear hidden" data-room="2">
                        <a class="del-room" href="#">
                          <span class="del-icon"/>
                        </a>
                        <div class="room-name inline">Hab 2</div>
                        <div class="room-r1a inline center">
                          <label class="sup-label">Adultos</label>
                          <input class="spinner r1a-spin" name="r2a" id="adulto2" value="0" readonly />
                        </div>
                        <div class="room-childs inline center">
                          <label class="sup-label">Niños</label>
                          <input class="spinner childs-spin" name="r2k" id="Nino2" value="0" readonly />
                        </div>
                        <div class="child-ages" style="display: none;">
                          <label class="sup-label">Edades de los niños en fecha de viaje</label>
                          <select class="small child-age-1" name="r2k1a" style="display: none;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                          <select class="small child-age-2" name="r2k2a" style="display: none;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                          <select class="small child-age-3" name="r2k3a" style="display: none;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>                        
                        </div>
                      </li>
                      <li class="item room-3 clear hidden" data-room="3">
                        <a class="del-room" href="#">
                          <span class="del-icon"/>
                        </a>
                        <div class="room-name inline">Hab 3</div>
                        <div class="room-r1a inline center">
                          <label class="sup-label">Adultos</label>
                          <input class="spinner r1a-spin" name="r3a" id="adulto3" value="0" readonly />
                        </div>
                        <div class="room-childs inline center">
                          <label class="sup-label">Niños</label>
                          <input class="spinner childs-spin" name="r3k" id="Nino3" value="0" readonly />
                        </div>
                        <div class="child-ages" style="display: none;">
                          <label class="sup-label">Edades de los niños en fecha de viaje</label>
                          <select class="small child-age-1" name="r3k1a" style="display: none;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                          <select class="small child-age-2" name="r3k2a" style="display: none;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                          <select class="small child-age-3" name="r3k3a" style="display: none;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>                       
                        </div>
                      </li>
                    </ul>
                    <a class="add-room" href="#"><span class="add-icon"></span> Añadir Habitación</a>
                  </div>
                </div>
              </div>
              
            </div> 
            <div class="inline-block" >
                <button class="inline-button" id="enviar1" >Buscar</button>
             </div>
          <div class="param" >  
            <input type="hidden" value="0" name="r4a" /> 
            <input type="hidden" value="0" name="r4k" /> 
            <input type="hidden" value="0" name="r4k1a" /> 
            <input type="hidden" value="0" name="r4k2a" /> 
            <input type="hidden" value="0" name="r4k3a" /> 
            <input type="hidden" value="0" name="r5a" /> 
            <input type="hidden" value="0" name="r5k" /> 
            <input type="hidden" value="0" name="r5k1a" />
            <input type="hidden" value="0" name="r5k2a" />
            <input type="hidden" value="0" name="r5k3a" />
          </div>   
        </form>  
      </div>  
	
	<div class="rig"></div>
</div>

@stop



@section('content')


<style type="text/css">
	body{ background: #f1f1f1; }
</style>

<a class="fancy-promo" data-fancybox data-src="#cboxLoadedContent" href="javascript:void(0);" >
	<p class="meses" >Paga a 3 ,6 y 9 meses sin intereses, con tarjetas participantes <img class="card" src="/img/tarjetas.png" alt="Meses sin intereses" /> </p>
</a>

<div class="cuadro container">

	<span class="titl">Ofertas especiales y de temporada</span>
	
	<div class="wrop" >
	
		<div class="item">
			<a href="/ofertas/9/Vive-Disfruta-Viaja">
				<div class="img" >
					<img src="/img/campanas/ViveDisfrutaViaja.png" alt="Vive Disfruta y Viaja">
					<h4>Vive Disfruta y Viaja</h4>
				</div>
				<div class="info">
					<h3>Reserva Ya</h3>
				</div>
			</a>
		</div>					

	</div>
	
	<div class="cycle-slideshow cycle-autoinit"
		data-cycle-fx="scrollHorz"
		data-cycle-speed="10000"
		data-cycle-timeout="1"
		data-cycle-easing="linear"
		>
		<img style="position: absolute!important; left: -2px; " src="/img/banorte.png">
		<img style="position: absolute!important; left:-2px; " src="/img/paypal.png">
	</div>
</div>
@stop