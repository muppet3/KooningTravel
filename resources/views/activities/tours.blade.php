@extends('layouts/structure')

@section('content')

	
<!-- Tours Mayaland 2018 -->
<div class="white-content clear" id="parque-de-atracciones-parques-tematicos">
  <div class="wrapper icon-tickets categoria-tickets clear">
    <h2 class="h2">Mayaland</h2>
    <div class="carousel-wrapper">
        <div class="carousel center">
            <ul class="ticket-list clear">
                <li class="item">
                    <div class="image-wrapp"><a href="/Tours/Chichen-Itza"><img src="/img/tour/parques/Mayaland-Tours/ChichenItzaCancun.jpg" alt="Chichen Itza" /></a></div>
                    <h3><a href="/Tours/Chichen-Itza"¡>Chichén Itzá Tour con Continuación a Cancún!</a></h3>
                    <p><a href="/Tours/Chichen-Itza">Chichen Itza, Yucatan, M&eacute;xico.</a></p>
                </li>
                <li class="item">
                    <div class="image-wrapp"><a href="/Tours/Uxmal"><img src="/img/tour/parques/Mayaland-Tours/UxmalLuzySonido.jpg" alt="Chichen Itza" /></a></div>
                    <h3><a href="/Tours/Uxmal">¡Uxmal Luz y Sonido!</a></h3>
                    <p><a href="/Tours/Uxmal">¡Uxmal, Yucatan, M&eacute;xico.</a></p>
                </li>                
                <li class="item">
                    <div class="image-wrapp"><a href="/Tours/Celestun"><img src="/img/tour/parques/Mayaland-Tours/Celestun.jpg" alt="Celestun" /></a></div>
                    <h3><a href="/Tours/Celestun">¡Celestun Flamingos!</a></h3>
                    <p><a href="/Tours/Celestun">Celestun, Yucatan, M&eacute;xico.<span class="price-from"></a></p>
                </li>
                <li class="item">
                    <div class="image-wrapp"><a href="/Tours/Parque-Ecologico"><img src="/img/tour/parques/Mayaland-Tours/TulumParqueEcologicoTankah.jpg" alt="Tulum Parque Ecologico Tankah" /></a></div>
                    <h3><a href="/Tours/Parque-Ecologico">¡Sitio Arqueológico de Tulum y Parque Ecológico Tankah!</a></h3>
                    <p><a href="/Tours/Parque-Ecologico">Sitio Arqueológico, Riviera Maya Quintana Roo, M&eacute;xico.</a></p>
                </li>
            </ul>
        </div>
        <a class="carousel-prev disabled"><span class="ir"></span></a> <a class="carousel-next"><span class="ir"></span></a> 
      </div>
  </div>
</div>

<!-- Otros Tours 2018 -->
<div class="grey-content clear" id="parque-de-atracciones-parques-tematicos">
  <div class="wrapper icon-tickets categoria-tickets clear">
    <h2 class="h2">Otros Tours</h2>
    <div class="carousel-wrapper">
        <div class="carousel center">
            <ul class="ticket-list clear">
                <li class="item">
                    <div class="image-wrapp"><a href="/Tours/Catamaran"><img src="/img/tour/parques/Catamaran-Tours/Cata.png" alt="Catamaran" /></a></div>
                    <h3><a href="/Tours/Catamaran">¡Disfruta del mar caribe con privacidad y comodidad!</a></h3>
                    <p><a href="/Tours/Catamaran">Riviera Maya, Quintana Roo, M&eacute;xico.</a></p>
                </li>
                <li class="item">
                    <div class="image-wrapp"><a href="/Tours/Holbox"><img src="/img/tour/parques/Holbox-Tours/holbox1.png" alt="Holbox" /></a></div>
                    <h3><a href="/Tours/Holbox">¡El escape perfecto!</a></h3>
                    <p><a href="/Tours/Holbox">Holbox, Quintana Roo M&eacute;xico.</a></p>
                </li>                
            </ul>
        </div>
        <a class="carousel-prev disabled"><span class="ir"></span></a> <a class="carousel-next"><span class="ir"></span></a> 
      </div>
  </div>
</div>




<!--

	@foreach($categorias as $categoria)
		<h2>{{$categoria->name}}</h2><br>
		@foreach($categoria->activities as $activity)
			<a href="{{Request::root()}}/tours/{{$activity->name}}" >
				{{$activity->image}}<br>
				{{$activity->slogan}}<br>
				{{$activity->location}}<br>
			</a>
			<br>
		@endforeach
		<br><br>
	@endforeach
-->




@stop