@extends('layouts/structure')
@section('video')
<style type="text/css">
body {background-color: #FFF;}
.header .menu2 .tel{ border-radius: 6px; height: 62px; background:#00000030; margin-top: 1px; }
.header .menu2 .product .bg-home{border-radius: 6px;  background:#00000030;width: 82%;height:97%;}
body .home { height:360px; }
</style>
<div class="head home" >
	
	<div class="bgv">
		<video preload="auto" poster="" autoplay loop muted playsinline >
			<source src="/img/fondos/video1.webm" type="video/webm" />
		</video>
	</div>
	<span class="h2">Descansa en tu hotel ideal</span>
	<div class="box" >
		<!--Caja Home-Begin-->
		<form id="contactform" action="" class="box-home" method="GET" >
			
			<div class="inline-block">
				<select style="display:none;" autofocus="autofocus" required="true" data-placeholder="Destino..." class="destination form-control" id="d" name="d" multiple="multiple" >
				</select>
			</div>
			<div class="inline-search">
				<div class="input-style date-from noselect">
					<div class="date-wrapper from_datepicker-wrapper">
						<span class="aa">{{$checkin->day}}</span>
						<span class="ee">
							<span class="ii">{{$checkin->NameMoth($checkin->month)}}</span>
							<span class="uu">{{$checkin->DayWeek($checkin->dayOfWeek)}}</span>
						</span>
					</div>
					<input type="text" name="sd" id="from_hotel_search" class="datepicker from_datepicker" value="{{$checkin->toDateString()}}" placeholder="Del día ..." readonly  autocomplete="off" />
				</div>
				<div class="text date-nights noselect">
					<span class="number-nights">4</span>
				</div>
				<div class="input-style date-to noselect">
					
					<div class="date-wrapper to_datepicker-wrapper" id="to_datepicker-wrapper">
						<span class="aa">{{$checkout->day}}</span>
						<span class="ee">
							<span class="ii">{{$checkout->NameMoth($checkout->month)}}</span>
							<span class="uu">{{$checkout->DayWeek($checkout->dayOfWeek)}}</span>
						</span>
					</div>
					<input type="text" name="ed" id="to_hotel_search" class="datepicker to_datepicker" value="{{$checkout->toDateString()}}" placeholder="al día ..." readonly autocomplete="off" />
				</div>
			</div>
			<div class="inline-block">
				<div class="inline-search passengers noselect">
					<div class="input-style" id="show-passengers-panel"> 
						<span class="rooms-icon" data-title="Habitaciones">1</span>
						<span class="sep"></span>
						<span class="r1a-icon" data-title="Adultos">2</span> 
						<span class="childs-icon none" data-title="Niños">0</span>
						<input class="pax rooms" name="r" id="habita" value="1" type="hidden" />
					</div>
				<div id="passengers-panel" class="noselect simple" style="display: none;"> <span class="panel-arrow"></span>
				<div class="panel-content">
					<ul class="rooms-list">
						<li class="item room-1 clear visible" data-room="1">
							<div class="room-name inline">Hab 1</div>
							<div class="room-r1a inline center">
								<label class="sup-label">Adultos</label>
								<input class="spinner r1a-spin" name="r1a" id="adulto1"  value="2" readonly />
							</div>
							<div class="room-childs inline center">
								<label class="sup-label">Niños</label>
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
						<a class="del-room" href="#"> <span class="del-icon"/></a>
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
					<li class="item room-3 clear hidden" data-room="3"> <a class="del-room" href="#"> <span class="del-icon"/> </a>
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
			<a class="add-room" href="#"><span class="add-icon"></span> Añadir Habitación</a> </div>
		</div>
	</div>
	
</div>
<div class="inline-block">
	<button class="inline-button" id="enviar1" ></button>
</div>
<div class="hidden" >
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
<!--Caja Home End-->
<a class="headf" href="/contacto"></a>
</div>
<a class="explor" href="/explora" >Explora tu próximo viaje</a>
</div>
@stop
@section('content')
<div class="pannel">
<a class="lereve" href="{{Request::root()}}/details/1630/le-reve-hotel-and-spa?d=1630{{$filtros}}">
	<img src="/img/lereve.png" alt="Hotel Lereve" >
</a>


<!-- Slider -->
<div class="sliderh" >
<div class="carousel slide auto" data-ride="carousel" >
<!-- Carousel items -->
<div class="carousel-inner" >
	<div class="item active" >
		<img src="/img/publicidad/anuncios/ofer1.png"  usemap="#Map1" alt="Verano" />
		<map name="Map1">
		<area shape="rect" target="_blank" coords="2,1,361,268" href="/ofertas/10/Preventa-Verano">
			<area class="fives1" shape="rect" target="_blank" coords="368,1,726,136" href="/ofertas/6/Viaja-En-Mexico-Y-Por-Mexico">
				<area class="fives1 fives2" shape="rect" target="_blank" coords="367,136,724,268" href="/ofertas/4/Birthday">
					</map>
				</div>
				<div class="item" >
					<img src="/img/publicidad/anuncios/ofer2.png"  usemap="#Map" alt="Verano" />
					<map name="Map">
					<area shape="rect" target="_blank" coords="2,1,361,268" href="https://www.kooningtravel.com/ofertas/9/Vive-Disfruta-Viaja">
						<area class="fives1" shape="rect" target="_blank" coords="368,1,726,136" href="https://www.kooningtravel.com/ofertas/5/Disfruta-Mexico">
							<area class="fives1 fives2" shape="rect" target="_blank" coords="367,136,724,268" href="https://www.kooningtravel.com/ofertas/7/Goza-tus-viajes-de-negocios">
								</map>
							</div>
						</div>
					</div>
				</div>
				<!-- Slider -->
				<a class="azull" href="{{Request::root()}}/details/381/azul-beach-resort-riviera-maya-hotel-by-karisma?d=381{{$filtros}}">
					<img src="/img/publicidad/banners/azul.png" alt="Hotel Azul" >
				</a>
			</div>
		</div>
		<div class="centerh" >
			<div class="bloque gray">
				<div class="playash" >Playas de México</div>
				<!-- CARRUSEL VERTICAL-->
				<div id="anuncio">
					<!-- Carousel items -->
					<a href="{{Request::root()}}/details/371/krystal-cancun?d=2{{$filtros}}">
						<img src="/img/publicidad/banners/Krystal.png" alt="Temptation" />
					</a>
					<!-- Carousel nav -->
				</div>
				<div class="hint" >
					<div class="bloqueh">
						<div class="banerh" >
							<a href="{{Request::root()}}/search/Cancun?type=1&d=2{{$filtros}}">
								<img alt=" " src="/img/publicidad/playas/cancun.png" />
							</a>
						</div>
						<div  class="banerh2">
							<a href="{{Request::root()}}/search/Acapulco?type=1&d=1{{$filtros}}">
								<img alt=" " src="/img/publicidad/playas/Acapulco.jpg" />
							</a>
							<a class="mar" href="{{Request::root()}}/search/Puerto-Vallarta?type=1&d=12{{$filtros}}">
								<img alt=" "  src="/img/publicidad/playas/PuertoVallarta.jpg" />
							</a>
						</div>
					</div>
					
					<div class="bloqueh">
						<div style="float:left;" class="banerh2">
							<a href="{{Request::root()}}/search/Riviera-Nayarit?type=1&d=112{{$filtros}}" >
								<img alt=" " src="/img/publicidad/playas/RivieraNayarit.jpg" />
							</a>
							<a class="mar" href="{{Request::root()}}/search/Mazatlan?type=1&d=9{{$filtros}}" >
								<img alt=" " src="/img/publicidad/playas/Mazatlan.jpg" />
							</a>
						</div>
						<div style="float:right;" class="banerh">
							<a href="{{Request::root()}}/search/Playa-del-Carmen?type=1&d=16{{$filtros}}" >
								<img alt=" " src="/img/publicidad/playas/playadc.png" />
							</a>
						</div>
					</div>
					<div class="bloqueh">
						<div class="banerh">
							<a href="{{Request::root()}}/search/Riviera-Maya?type=1&d=13{{$filtros}}" >
								<img alt=" " src="/img/publicidad/playas/rivieramaya.png"  />
							</a>
						</div>
						<div class="banerh2">
							<a href="{{Request::root()}}/search/Ixtapa-Zihuatanejo?type=1&d=7{{$filtros}}" >
								<img alt=" " src="/img/publicidad/playas/ixtapa.png" />
							</a>
							<a class="mar" href="{{Request::root()}}/search/Veracruz?type=1&d=31{{$filtros}}" >
								<img alt=" " src="/img/publicidad/playas/Veracruz.jpg" />
							</a>
						</div>
						
					</div>
				</div>
				<div class="hintr" >
					<div id="anuncio2" class="posh" >
						<!-- Carousel items -->
						<a href="{{Request::root()}}/details/1346/nina-hotel---beach-club-by-tukan?d=1346{{$filtros}}">
							<img src="/img/publicidad/banners/Nina.png" alt="Tucan Nina" />
						</a>
						
						<!-- Carousel nav -->
					</div>
					<div id="anuncio4" class="carousel slide"  data-ride="carousel">
						<!-- Carousel items -->
						<div class="carousel-inner" >
							<div class="item active">
								<a href="{{Request::root()}}/search/Isla-Mujeres?type=1&d=6{{$filtros}}">
									<img src="/img/IslaMujeres1.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." />
								</a>
							</div>
							<div class="item">
								<a href="{{Request::root()}}/search/Isla-Mujeres?type=1&d=6{{$filtros}}">
									<img src="/img/IslaMujeres2.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." />
								</a>
							</div>
						</div>
						<!-- Carousel nav -->
					</div>
				</div>
			</div>
			
			<!-- Termina Gris-->
			<!-- Inicia HFFF -->
			
			<div class="bloque">
				<div class="playash white" >Ciudades de México</div>
				<div id="comodin" ></div>
				<div class="hint" >
					<div class="bloqueh">
						<div class="banerh">
							<a href="{{Request::root()}}/search/Ciudad-de-Mexico?type=1&d=11{{$filtros}}" >
								<img src="/img/publicidad/ciudades/cdmx.png" alt=" " />
							</a>
						</div>
						<div class="banerh2">
							<a  href="{{Request::root()}}/search/Puebla?type=1&d=39{{$filtros}}" >
								<img src="/img/publicidad/ciudades/Puebla.jpg" alt=" " />
							</a>
							<a class="mar" href="{{Request::root()}}/search/Queretaro?type=1&d=40{{$filtros}}" >
								<img src="/img/publicidad/ciudades/Queretaro.jpg" alt=" " />
							</a>
						</div>
					</div>
					<div class="bloqueh">
						<div style="float:left;" class="banerh2">
							<a href="{{Request::root()}}/search/Merida?type=1&d=10{{$filtros}}" >
								<img src="/img/publicidad/ciudades/Merida.jpg" alt=" " />
							</a>
							<a class="mar" href="{{Request::root()}}/search/Guanajuato?type=1&d=47{{$filtros}}" >
								<img src="/img/publicidad/ciudades/Guanajuato.jpg" alt=" " />
							</a>
						</div>
						<div style="float:right;" class="banerh">
							<a href="{{Request::root()}}/search/Guadalajara?type=1&d=15{{$filtros}}" >
								<img src="/img/publicidad/ciudades/guadalajara.png" alt=" " />
							</a>
						</div>
					</div>
					<div class="bloqueh">
						<div class="banerh">
							<a href="{{Request::root()}}/search/Monterrey?type=1&d=32{{$filtros}}" >
								<img src="/img/publicidad/ciudades/monterrey.png" alt=" " />
							</a>
						</div>
						<div class="banerh2">
							<a href="{{Request::root()}}/search/Oaxaca?type=1&d=17{{$filtros}}" >
								<img src="/img/publicidad/ciudades/Oaxaca.jpg" alt=" " />
							</a>
							<a class="mar" href="{{Request::root()}}/search/Morelia?type=1&d=5{{$filtros}}" >
								<img src="/img/publicidad/ciudades/Morelia.jpg" alt=" " />
							</a>
						</div>
					</div>
				</div>
				<div class="hintr" >
					<div class="banner-puebla  posh">
						<a href="{{Request::root()}}/details/4635/xoxula-by-inmense?d=39{{$filtros}}">
							<img src="/img/publicidad/banners/Xolula.png" alt="Cholula, Puebla. M&eacute;xico." />
						</a>
					</div>
					<div id="anuncio3" class="carousel slide" data-ride="carousel">
						
						<div class="carousel-inner" >
							<div class="item active">
								<a href="{{Request::root()}}/search/San-Cristobal-de-las-Casas?type=1&d=76{{$filtros}}">
									<img src="/img/SanCristobaldelasCasas1.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." />
								</a>
							</div>
							<div class="item">
								<a href="{{Request::root()}}/search/San-Cristobal-de-las-Casas?type=1&d=76{{$filtros}}">
									<img src="/img/SanCristobaldelasCasas2.png" alt="San Cristobal de las Casas, Chiapas, M&eacute;xico." />
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<!--Inicia Gris -->
				
				<div class="bloque gray">
					<div class="playash" >Complementa tu viaje</div>
					<div class="colh" >
						<a class="gal" href="{{Request::root()}}/promociones" >
							<div class="sombraPromociones2" > 
								<img alt=" " class="imgh" src="/img/publicidad/complementos/SliderOfertas.png" />
								<div class="caption">
									<h4>DESCUENTOS</h4>
									<span>¡Descuentos imperdibles!</span> 
								</div>
							</div>
							</a>
							<div class="gal gal2">
								<div class="sombraPromociones2" >
									<div class="carousel slide" data-ride="carousel" >
										<!-- Carousel items -->
										<div class="carousel-inner" >
											<div class="item active">
												<a  href="/parques/Xcaret">
													<img class="imgh" src="/img/publicidad/complementos/Xcaret.png" alt="Xcaret" />
												</a> 
											</div>
											<div class="item">
												<a href="/parques/Royal-Garrafon">
													<img class="imgh" src="/img/publicidad/complementos/Dolphin.png" alt="Dolphin" />
												</a> 
											</div>
											<div class="item">
												<a href="/parques/Rio-Secreto">
													<img class="imgh" src="/img/publicidad/complementos/RioSecreto.png" alt="Holbox" />
												</a> 
											</div>
										</div>
										<!-- Carousel nav -->
									</div>
									<div class="caption">
										<h4>Parques</h4>
										<span>¡Diviértete en grande!</span> </div>
									</div>
								</div>
								<div class="gal ">
									<div class="sombraPromociones2" >
										<div class="carousel slide" data-ride="carousel" >
											<!-- Carousel items -->
											<div class="carousel-inner" >
												<div class="item active">
													<a  href="/tours/Chichen-Itza">
														<img class="imgh" src="/img/publicidad/complementos/Mayaland.png" alt="Xcaret" />
													</a> 
												</div>
												<div class="item">
													<a href="/tours/Holbox">
														<img class="imgh" src="/img/publicidad/complementos/Holbox.png" alt="Dolphin" />
													</a> 
												</div>
											</div>
											<!-- Carousel nav -->
										</div>
										<div class="caption">
											<h4>Tours</h4>
											<span>¡Explora y descubre!</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						
@stop