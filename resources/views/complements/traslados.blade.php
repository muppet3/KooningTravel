@extends('layouts/structure')
@section('content')


<style type="text/css">
	
	.other { height:600px!important; }
</style>

@section('head')

<div class="traslados top">
	
		<div class="tras" >
		<div class="boxt" >
			<span class="tit" >Reserva tu Traslado!</span>
			<div class="con" >
				<form id="form" action="javascript:void(0);" method="post" >
					<input type="hidden" name="tipotours" value="22">
					<div class="bloq">
						<div class="left" >
							<p class="tipo" >Tipo de Servicio</p>
							<select class="servicio" id="servicio" name="servicio">
								<option value="Redondo">Redondo</option>
								<option value="Sencillo">Sencillo</option>
							</select>
						</div>
						<div class="right" >
							<img class="change" src="/img/Traslados/round2.png" alt="Hotel - Aeropuerto" />
							<img class="change img2t" src="/img/Traslados/round2.png" alt="Aeropuerto - Hotel" style="display: none" />
						</div>
					</div>
					<div class="bloq">
						<div class="left" >
							<p class="tipo" >Hotel</p>
							<input type="text" id="hotel" placeholder="Buscar..." value="" name="hotel" class="hotel"  />
						<ul class="list-group" id="result"></ul>
						<input type="hidden" value="" id="destino" name="destino"  />
						<input type="hidden" value="" id="latitud" name="latitud"  />
						<input type="hidden" value="" id="longitud" name="longitud"  />
					</div>
				</div>
				<div class="bloq" >
					<div class="time1">
						<p class="tipo" >Salida</p>
						<input type="text" name="sd"  class="datepicker from_datepicker cal"  placeholder="aaaa/mm/dd" readonly  autocomplete="off" />
					</div>
					<div class="time2">
						<p class="tipo" >Horario</p>
						<select class="time" name="timein">
							<option value="01:00">01:00</option>
							<option value="01:30">01:30</option>
							<option value="02:00">02:00</option>
							<option value="02:30">02:30</option>
							<option value="03:00">03:00</option>
							<option value="03:30">03:30</option>
							<option value="04:00">04:00</option>
							<option value="04:30">04:30</option>
							<option value="05:00">05:00</option>
							<option value="05:30">05:30</option>
							<option value="06:00">06:00</option>
							<option value="06:30">06:30</option>
							<option value="07:00">07:00</option>
							<option value="07:30">07:30</option>
							<option value="08:00">08:00</option>
							<option value="08:30">08:30</option>
							<option value="09:00">09:00</option>
							<option value="09:30">09:30</option>
							<option value="10:00">10:00</option>
							<option value="10:30">10:30</option>
							<option value="11:00">11:00</option>
							<option value="11:30">11:30</option>
							<option value="12:00">12:00</option>
							<option value="12:30">12:30</option>
							<option value="13:00">13:00</option>
							<option value="13:30">13:30</option>
							<option value="14:00">14:00</option>
							<option value="14:30">14:30</option>
							<option value="15:00">15:00</option>
							<option value="15:30">15:30</option>
							<option value="16:00">16:00</option>
							<option value="16:30">16:30</option>
							<option value="17:00">17:00</option>
							<option value="17:30">17:30</option>
							<option value="18:00">18:00</option>
							<option value="18:30">18:30</option>
							<option value="19:00">19:00</option>
							<option value="19:30">19:30</option>
							<option value="20:00">20:00</option>
							<option value="20:30">20:30</option>
							<option value="21:00">21:00</option>
							<option value="21:30">21:30</option>
							<option value="22:00">22:00</option>
							<option value="22:30">22:30</option>
							<option value="23:00">23:00</option>
							<option value="23:30">23:30</option>
							<option value="24:00">24:00</option>
							<option value="24:30">24:30</option>
						</select>
						<span class="clock" ></span>
					</div>
				</div>
				<div class="bloq roundt" >
					<div class="time1">
						<p class="tipo" >Regreso</p>
						<input type="text" name="ed"  class="datepicker to_datepicker cal"  placeholder="aaaa/mm/dd" readonly autocomplete="off" />
					</div>
					<div class="time2">
						<p class="tipo" >Horario</p>
						<select class="time" name="timeout">
							<option value="01:00">01:00</option>
							<option value="01:30">01:30</option>
							<option value="02:00">02:00</option>
							<option value="02:30">02:30</option>
							<option value="03:00">03:00</option>
							<option value="03:30">03:30</option>
							<option value="04:00">04:00</option>
							<option value="04:30">04:30</option>
							<option value="05:00">05:00</option>
							<option value="05:30">05:30</option>
							<option value="06:00">06:00</option>
							<option value="06:30">06:30</option>
							<option value="07:00">07:00</option>
							<option value="07:30">07:30</option>
							<option value="08:00">08:00</option>
							<option value="08:30">08:30</option>
							<option value="09:00">09:00</option>
							<option value="09:30">09:30</option>
							<option value="10:00">10:00</option>
							<option value="10:30">10:30</option>
							<option value="11:00">11:00</option>
							<option value="11:30">11:30</option>
							<option value="12:00">12:00</option>
							<option value="12:30">12:30</option>
							<option value="13:00">13:00</option>
							<option value="13:30">13:30</option>
							<option value="14:00">14:00</option>
							<option value="14:30">14:30</option>
							<option value="15:00">15:00</option>
							<option value="15:30">15:30</option>
							<option value="16:00">16:00</option>
							<option value="16:30">16:30</option>
							<option value="17:00">17:00</option>
							<option value="17:30">17:30</option>
							<option value="18:00">18:00</option>
							<option value="18:30">18:30</option>
							<option value="19:00">19:00</option>
							<option value="19:30">19:30</option>
							<option value="20:00">20:00</option>
							<option value="20:30">20:30</option>
							<option value="21:00">21:00</option>
							<option value="21:30">21:30</option>
							<option value="22:00">22:00</option>
							<option value="22:30">22:30</option>
							<option value="23:00">23:00</option>
							<option value="23:30">23:30</option>
							<option value="24:00">24:00</option>
							<option value="24:30">24:30</option>
						</select>
						<span class="clock" ></span>
					</div>
				</div>
				<div class="bloq" >
					<div class="time1">
						<p class="tipo" >Tipo de Camioneta</p>
						<select name="clase" class="van">
							<option value="Van">Van</option>
							<option value="Escalade">Escalade</option>
							<option value="Suburban">Suburban</option>
							<option value="Sprinter">Sprinter</option>
						</select>
						<p id="tsm" >10</p>
					</div>
					<div class="serv">
						<p class="tipo" >Servicio</p>
						<select class="cantidad" name="cantidad" value="0" >
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
						</select>
					</div>
				</div>
				<input type="hidden" name="precio" id='total'>
				
				<div class="bloq" >
					<span class="money" ></span>
				</div>
				<div class="bloq" >
					<label class="tx16 text7">Terminos y condiciones con el prestador del servicio.</label>
					<button  type="button" id="traslados" class="enviar" >RESERVAR</button>
				</div>
			</form>
		</div>
		</div>
		<div class="tr" >
		<div class="map" id="mtraslado" ></div>
		<img class="imgmap" src="/img/Traslados/cards.png" alt="Tarjetas Participantes" />
		</div>
		</div>
</div>
@stop

<div class="traslados">
<div class="white-content clear bgt2" id="parque-de-atracciones-parques-tematicos">
	<div class="wrapper icon-tickets categoria-tickets clear">
		<h2 class="h2">Complementa tu viaje!</h2>
		<div class="carousel-wrapper">
			<div class="carousel center">
				<ul class="ticket-list clear">
					<li class="item">
						<div class="image-wrapp"><a href="/Parques/Xcaret"><img src="/img/tour/parques/Experiencias-Xcaret/Xcaret/xcaret.png" alt=" " /></a></div>
						<h3><a href="/Parques/Xcaret">¡Xcaret, Orgullo de M&eacute;xico!</a></h3>
						<p><a href="/Parques/Xcaret">Xcaret, Riviera Maya Quintana Roo, M&eacute;xico.</a></p>
					</li>
					<li class="item">
						<div class="image-wrapp"><a href="/Parques/Royal-Garrafon"><img src="/img/tour/parques/Dolphin-Discovery/RoyalGarrafon.png" alt=" " /></a></div>
						<h3><a href="/Parques/Royal-Garrafon">¡Las mejores vacaciones en Isla Mujeres!</a></h3>
						<p><a href="/Parques/Royal-Garrafon">Royal Garrafon, Isla Mujeres Quintana Roo M&eacute;xico.</a></p>
					</li>
					<li class="item">
						<div class="image-wrapp"><a href="/Tours/Chichen-Itza"><img src="/img/tour/parques/Mayaland-Tours/ChichenItzaCancun.jpg" alt="Chichen Itza" /></a></div>
						<h3><a href="/Tours/Chichen-Itza"¡>Chichén Itzá Tour con Continuación a Cancún!</a></h3>
						<p><a href="/Tours/Chichen-Itza">Chichen Itza, Yucatan, M&eacute;xico.</a></p>
					</li>
					<li class="item">
						<div class="image-wrapp"><a href="/Tours/Catamaran"><img src="/img/tour/parques/Catamaran-Tours/Cata.png" alt="Catamaran" /></a></div>
						<h3><a href="/Tours/Catamaran">¡Disfruta del mar caribe con privacidad y comodidad!</a></h3>
						<p><a href="/Tours/Catamaran">Riviera Maya, Quintana Roo, M&eacute;xico.</a></p>
					</li>
					<li class="item">
						<div class="image-wrapp"><a href="/Parques/Rio-Secreto"><img src="/img/tour/parques/Rio-Secreto/RioSecreto.png" alt=" " /></a></div>
						<h3><a href="/Parques/Rio-Secreto">¡Un m&aacute;gico tesoro en la Riviera Maya!</a></h3>
						<p><a href="/Parques/Rio-Secreto">Solo entrada, Riviera Maya Quintana Roo M&eacute;xico.</a></p>
					</li>
				</ul>
			</div>
			<a class="carousel-prev disabled"><span class="ir"></span></a> <a class="carousel-next"><span class="ir"></span></a>
		</div>
	</div>
</div>
<p class="pp" ></p>
<div class="cycle-slideshow cycle-autoinit"
	data-cycle-fx="scrollHorz"
	data-cycle-speed="10000"
	data-cycle-timeout="1"
	data-cycle-easing="linear"
	>
	<img style="position: absolute!important; left: -2px; " src="/img/banorte.png">
	<img style="position: absolute!important; left:-2px; " src="/img/paypal.png">
</div>
<p class="pp" ></p>
</div>

@stop