@extends('layouts/structure')

@section('content')

<div class="conus">

<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span>"mensaje"</span> 
</div>



<div class="ubicacion-pagina" > <i class="fa fa-home" aria-hidden="true"></i> <a href="/" style="color:#000;">&nbsp;Inicio</a> > <b>Contacto</b> </div>

  <h1 class="titulo-internas">Contáctanos</h1>
  <div class="col-md-7 cuadro-contacto">
    <form id="conatcton" class="contacton jonas" action="" method="post">
      <label>Nombre:</label>
      <div class="input-group">
        <input type="text" placeholder="Tu nombre completo" maxlength="40" name="Nombre" class="form-control">
        <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
      </div>
      <br>
      <label>Email:</label>
      <div class="input-group">
        <input type="text" placeholder="ejemplo@gmail.com" name="Correo" class="form-control">
        <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
      </div>
      <br>
      <label>Teléfono:</label>
      <div class="input-group">
        <input type="text" placeholder="10 dígitos" name="Telefono" class="form-control">
        <div class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></div>
      </div>
      <br>
      <label>Mensaje:</label>
      <textarea  placeholder="Escribe tu mensaje aquí" name="Mensaje" class="form-control" style="resize: none; height: 120px;"></textarea>
      <div style="margin:29px 0px; width: 100%; display: inline-block;">
        <input id="enviac" type="submit" class="btn btn-sm btn-reserva envn" type="button">
      </div>
    </form>
  </div>
  <div class="col-md-5 rgn"><br/>
    <h2 class="minititulo-internas">Llámanos</h2>
    Sin costo desde México: <br>  
<a href="skype:018008908974?call">
  <i class="fa fa-phone" aria-hidden="true"></i>01 800 890 8974</a>

    <h2 class="minititulo-internas">Atención a Clientes</h2>
    24 horas <br>
    365 días del año
    <h2 class="minititulo-internas">Escríbenos</h2>
    <a style="color: #000;" href="mailto:reservaciones@kooningtravel.com">reservaciones@kooningtravel.com</a> </div>
</div>


@stop