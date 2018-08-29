@extends('layouts/structure')
@section('content')
<div class="conus">
	<div style="display: none;" class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<span>"mensaje"</span>
	</div>
	<div class="cuadro-contacto">
		<div class="top-menu" >
			<div class="ubicacion-pagina" >
				<i class="fa fa-home" aria-hidden="true"></i>
				<a href="/" style="color:#000;">&nbsp;Inicio</a> >
				<b>Contacto</b>
				
			</div>
			<h1 class="titulo-internas">Contáctanos</h1>
		</div>
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
				<input id="enviac" type="submit" value="Enviar" type="button">
			</div>
		</form>
		<div class="rgn">
			<h2 class="tittle-contact">Llámanos</h2>
			<span class="text-contact" >Sin costo desde México:</span>
			<div class="tel" >
				<a class="skype-con" href="skype:018008908974?call"> 01 800 890 8974</a>
				<i class="fa fa-phone" aria-hidden="true"></i>
			</div>
			<h2 class="tittle-contact">Atención a Clientes</h2>
			<span class="text-contact" >24 horas 365 días del año </span>
			<h2 class="tittle-contact">Escríbenos</h2>
			<div class="mail" >
				<a href="mailto:reservaciones@kooningtravel.com" class="email">Reservaciones@kooningtravel.com</a>
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
		</div>
	</div>
</div>
@stop