@extends('layouts/structure')
@section('head')

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

<div class="serach-body" >
	<div class="container" >
		<div class="bread-crub">
			<i class="fa fa-home" aria-hidden="true"></i>
			<a class="icon-home" href="/" >&nbsp;Inicio</a> >
			<b>Hoteles</b>
		</div>
	</div>



</div>

@stop