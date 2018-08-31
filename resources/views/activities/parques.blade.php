@extends('layouts/structure')
@section('content')
<!-- PARQUES EXPERIENCIAS XCARET 2018 -->
<div class="parques" >
	@foreach($categorias as $categoria)
	<div class="{{$categoria->colorfondo}}-content clear" id="parque-de-atracciones-parques-tematicos">
		<div class="wrapper icon-tickets categoria-tickets clear">
			
			
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
						
					</ul>
				</div>
				<a class="carousel-prev disabled"><span class="ir"></span></a> <a class="carousel-next"><span class="ir"></span></a>
			</div>
			
		</div>
	</div>
	@endforeach
<!--
	@foreach($categorias as $categoria)
		<h2>{{$categoria->name}}</h2><br>
		@foreach($categoria->activities as $activity)
			<a href="{{Request::root()}}/parques/{{$activity->name}}" >
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