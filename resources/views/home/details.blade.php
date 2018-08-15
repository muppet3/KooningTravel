@extends('layouts/structure')
@section('head')
<style type="text/css">
	.container{ background: #FFF; margin:20px auto; border-radius: 4px; padding: 0px; }
</style>
<h2 class="h2" >The Westin Lagunamar Ocean Resort Villas Cancún<img src='https://kooningtravel.com/intranet/images/star4.5.png' class='imagen-estrellas' />
</h2>
<p class='info-details'>Cancún-Zona Hotelera Mar Caribe, Quintana Roo. México</p>
<div class="box" >
	<form id="contactform" class="box-home" action="javascript:(void);" method="GET" >
		
		<div class="hidden" >
			<input type="hidden"  id="type" value="1">
			<input value="2<?php ////echo $_GET['d']; ?>" name="d" id="de" type='hidden'/>
			<?php
			/*
				$originales = "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ&'";
				$modificadas = "aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr  ";
				$nombreH = utf8_decode($nombreH);
				$nombreH = strtr($nombreH, utf8_decode($originales), $modificadas);
				$nombreH = strtolower($nombreH);
				$nombreH=utf8_encode($nombreH);
			*/
			?>
			<input  type="hidden" id="linksm" <?php ////echo "value='".$id."'"; ?>>
			<input  type="hidden" id="hotelDestino" <?php ////echo "value='".$nombreH."'"; ?>>
		</div>
		<div style="display:none!important;" class="inline-block">
			<select  required="true" data-placeholder="Destino..." class="destination form-control" id="d" name="d" multiple="multiple" >
			</select>
		</div>
		<div class="inline-search">
			<div class="input-style date-from noselect">
				<div class="date-wrapper from_datepicker-wrapper"> <span class="aa"><?php ////echo $dia1; ?></span> <span class="ee"> <span class="ii"><?php //echo $mes1; ?></span> <span class="uu"><?php //echo $semana; ?></span> </span> </div>
				<input type="text" name="sd" id="from_hotel_search" class="datepicker from_datepicker" value="<?php ////echo $entradad; ?>" placeholder="Del día ..." readonly  autocomplete="off" />
			</div>
			<div class="text date-nights noselect"> <span style="height:46px;" class="number-nights"><?php ////echo $interval->d; ?></span> </div>
			<div class="input-style date-to noselect">
				<div class="date-wrapper to_datepicker-wrapper" id="to_datepicker-wrapper"> <span class="aa"><?php ////echo $dia2; ?></span> <span class="ee"> <span class="ii"><?php //echo $mes2; ?></span> <span class="uu"><?php ////echo $semana2; ?></span> </span> </div>
				<input type="text" name="ed" id="to_hotel_search" class="datepicker to_datepicker" value="<?php //echo $salidad; ?>" placeholder="al día ..." readonly autocomplete="off" />
			</div>
		</div>
		<div class="inline-block">
			<div class="inline-search passengers noselect" >
				<!-- imprime variables -->
				<div class="input-style" id="show-passengers-panel">
					<span class="rooms-icon" data-title="Habitaciones">1</span>
					<span class="sep"></span>
					<span class="r1a-icon" data-title="Adultos">2</span>
					<span class="childs-icon none" data-title="Niños">0</span>
					<input class="pax rooms form-control" name="r" id="habita" value="1" type="hidden" />
				</div>
				<div id="passengers-panel" class="noselect simple" style="display: none;">
					<span class="panel-arrow"></span>
					<div class="panel-content">
						<ul class="rooms-list">
							<li class="item room-1 clear visible" data-room="1">
								<div class="room-name inline">Hab 1</div>
								<div class="room-r1a inline center">
									<label class="sup-label">Adultos</label>
									<input class="spinner r1a-spin" name="r1a" id="adulto1" value="0" readonly />
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
	</div>
	@stop
	@section('content')
	<div class="search-body" >
		<div class="container" >
			<div class="bread-crub">
				<i class="fa fa-home" aria-hidden="true"></i>
				<a class="icon-home" href="/" >&nbsp;Inicio</a> >
				<b>Hoteles</b>
			</div>
			<ul class="nav nav-tabs ">
				<li ><a data-toggle="tab" href="#info" >Informacion General</a></li>
				<li class="active"><a data-toggle="tab" href="#details">Detalle Habitacion</a></li>
			</ul>
			
			
			<!--Bloques info hotel begin-->
			<div class="tab-content">

				<div id="info" class="tab-pane fade  active in">
					<div class="item-hotel" >
						<div class="info-title">A cerca del Hotel</div>

						<div class="col-md-12" >

							<div class="col-md-8" >
							  <div id="myCarousel" class="carousel slide" data-ride="carousel">				    
								    <div class="carousel-inner">
								    	<div class="item active">
								        	<img src="https://images.e-tsw.com/_lib/vimages/Cancun/Hotels/Dreams-Sands-Cancun-Resort-Spa/Gallery/Cancun-Dreams-Sands-Deluxe-Vista-PMK.jpg" alt="" >
								     	</div>
								    	<div class="item">
								        	<img src="https://images.e-tsw.com/_lib/vimages/Cancun/Hotels/Dreams-Sands-Cancun-Resort-Spa/Gallery/Cancun-Dreams-Sands-El-Patio-Restaurant.jpg" alt="" >
								     	</div>
								    	<div class="item">
								        	<img src="https://images.e-tsw.com/_lib/vimages/Cancun/Hotels/Dreams-Sands-Cancun-Resort-Spa/Gallery/Cancun-Dreams-Sands-Facilidades-nupciales.jpg" alt="" >
								     	</div>				      	
								    </div>
								    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
								      <span class="glyphicon glyphicon-chevron-left"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a class="right carousel-control" href="#myCarousel" data-slide="next">
								      <span class="glyphicon glyphicon-chevron-right"></span>
								      <span class="sr-only">Next</span>
								    </a>
								  </div>

								</div>

								<div class="col-md-4">									
									<div class="col-md-12">

										<div class="col-md-12 best-price" >
											<span class="search-price" >¡Encuentra el mejor precio para este hotel!</span>										
											<a class="btn btn-primary" data-toggle="tab"  href="#details">Mostrar Precios</a>
										</div>

										<div class="col-md-12 chek-in">
											<h3 class="details" >DETALLE HOTEL</h3>
											<h3 class="check-in" >
												<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Llegada
												<p class="text-details" >3:00 p.m.</p>
											</h3>
											<h3 class="check-out" >
												<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Salida
												<p class="text-details" >12:00 p.m.</p>
											</h3>
											<h3 class="world">
												<span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Total Habitaciones
												<p class="text-details" >438 Habitaciones</p>
											</h3>
										</div>

									</div>
								</div>

							</div>



						<div class="col-md-12 ">

							<p class="info-details-hotel" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

							<p class="info-details-hotel" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

							<div class="info-title">Instalaciones</div>

							<ul class="list-items col-md-4" >
								<li><i class="fa fa-check" aria-hidden="true"></i>Piscina (s) sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Estacionamiento sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Centro de Negocios costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Bar (es) sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Elevador (es) sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Vapor costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Playa sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Spa costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Jacuzzi sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tienda/Minisuper costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Salón de Belleza costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Facilidades Nupciales costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Club de Playa sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Gimnasio sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Restaurante (s) sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Área de juegos infantiles sin costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Sauna costo extra.</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Boutique (s) sin costo extra.</li>
							</ul>



							

						</div>

						
						
						
						
						
						
					</div>


				</div>



				<div id="details" class="tab-pane fade ">
					<div class="item-hotel" >
						<div class="info-title">Habitación tipo Estudio Villa</div>
						
						<div class="bloque-hotel-item" >
							<div class="items-hotel col-md-4">
								<img class="img-hotel-details" src="https://images.e-tsw.com/_lib/vimages/Cancun/Hotels/Cancun-The-Westin-Lagunamar/Gallery/Cancun-The-Westin-Lagunamar-Estudio-Villa.jpg" alt="Habitación tipo Estudio Villa" >
							</div>
							<div class="items-hotel estructura-habitacion col-md-6">
								<h3>Plan Sólo Habitación </h3>
								<h4 class="info-promo" >Descuento Especial! Aplica para estadías entre 27/Ago/2018 y 20/Nov/2018. Valido para reservaciones antes del 18/Nov/2018</h4>
								<div class="destino-hotel" >
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading0">
											<h4 class="panel-title">
											<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="false" aria-controls="collapse0">
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><i class="glyphicon glyphicon-chevron-down9" aria-hidden="false"></i>Ver políticas de cancelación
											</a>
											</h4>
										</div>
										<div id="collapse0" class="panel-collapse active in collapse" role="tabpanel" aria-labelledby="heading0"><div class="panel-body panel_text">
											<div class="table-responsive">
												<table class="table table-responsive">
													<tbody><tr style="background=#E9540D"> <th style="width:50px; padding-left:10px; padding-right:0px;" class="info"> Sábado</th><th class="info"> 13</th><th style="width:50px; padding-left:10px; padding-right:0px;" class="info"> Domingo</th><th class="info"> 14</th><th style="width:50px; padding-left:10px; padding-right:0px;" class="info"> Lunes</th><th class="info"> 15</th><th style="width:50px; padding-left:10px; padding-right:0px;" class="info"> Martes</th><th class="info"> 16</th></tr>
													<tr><td colspan="2" class="Warning"> $ 4,093</td><td colspan="2" class="Warning"> $ 4,093</td><td colspan="2" class="Warning"> $ 4,093</td><td colspan="2" class="Warning"> $ 4,093</td></tr>
												</tbody></table></div>
												<p class="info-message" >Permite cancelar sin cargo hasta 4 días antes de la fecha de llegada, de 3 dias a 24 horas antes de su llegada, aplica 2 noches de estancia. En caso de No Show, o salida anticipada queda sujeto al cobro por el total reservado.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items-hotel col-md-2 background">
								<p class="total-night">Total 4 Noches</p>
								<p class="precio-real" >$16,370.73</p>
								<p class="precio-promedio">Precio Promedio por noche:</p>
								<p class="precio-final">$ 4,093</p>
								<p class="inpuestos" >Impuestos incluidos</p>
								<a href="/hotels/1123/booking/STU" class="btn btn-danger">RESERVAR</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!--Bloques info hotel end-->
			<div class="line-details" ></div>
			<!--Mapa details-->
			<div  id="verMapa">
				
				<h3 class="info-title">Ubicación</h3>
				
				<div id="mapa"> </div>
				
				<input type="hidden" value="" id="lat" >	
				<input type="hidden" value="" id="long" >

				
			</div>
			<!--Mapa details-->
		</div>
	</div>
	<!--Begin MENSAJES-->
	<div class="alert alert-primary messaje" role="alert">
		<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span> Quedan pocas habitaciones disponibles.
	</div>
	<!--End MENSAJES-->
	<script language="javascript" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz2r9rdcvkdJ_6Cy06hX6wmYr7fvyRnaA&callback=initMap" defer></script>




	@stop