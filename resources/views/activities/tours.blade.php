@extends('layouts/structure')
@section('content')
<div class="tours" >
	
	<!-- Tours Mayaland 2018 -->
	<div class="white-content clear" id="parque-de-atracciones-parques-tematicos">
		<div class="wrapper icon-tickets categoria-tickets clear">
			
			@foreach($categorias as $categoria)
			<h2 class="h2">{{$categoria->name}}</h2>
			<div class="carousel-wrapper">
				<div class="carousel center">
					<ul class="ticket-list clear">
						@foreach($categoria->activities as $activity)
						<li class="item">
							<div class="image-wrapp">
								<a href="{{Request::root()}}/tours/{{$activity->name}}"><img src="/img/tour/parques/Experiencias-Xcaret/Xcaret/{{$activity->image}}" alt="{{$categoria->name}}" /></a>
							</div>
							<h3><a href="{{Request::root()}}/tours/{{$activity->name}}">{{$activity->slogan}}</a></h3>
							<p><a href="{{Request::root()}}/tours/{{$activity->name}}">{{$activity->location}}</a></p>
						</li>
						@endforeach
						@endforeach
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
</div>
@stop