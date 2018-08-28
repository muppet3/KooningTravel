@extends('layouts/structure')
@section('head')
<style type="text/css">
.other { height:600px!important; }
</style>
<div class="traslados top autos" >
	<div class="cuadro-contacto">
		<h1 class="titulo-internas">Contáctanos</h1>
		<form id="conatcton" class="contacton" action="/contacto" method="post">
			<input type="hidden" name="asunto" value="Reservaciones para Autos" >
			<div class="input-group">
				<label>Nombre</label>
				<input type="text" placeholder="Tu nombre completo" maxlength="40" name="Nombre" class="form-control">
				<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="text" placeholder="ejemplo@gmail.com" name="Correo" class="form-control">
				<div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
			</div>
			<div class="input-group">
				<label>Teléfono</label>
				<input type="text" id="telefono" maxlength="10" placeholder="10 dígitos" name="Telefono" class="form-control">
				<div class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></div>
			</div>
			<div class="input-group">
				<label>Mensaje</label>
				<textarea  placeholder="Escribe tu mensaje aquí" name="Mensaje" class="form-control" ></textarea>
			</div>
			<div class="input-group" >
				<input id="enviac" type="submit" type="button">
			</div>
		</form>
	</div>
	<img class="viaja" src="/img/Autos/ofertas-auto.jpg" alt="Viaja comodo, viaja seguro, viaja con nosotros." />
</div>
@stop
@section('content')
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