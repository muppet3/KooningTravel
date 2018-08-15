@extends('layouts/structure')
@section('head')

	<span style="font-size:46px; text-align: center;">
	<b>
		{{$activity->background}}<br>
		@foreach($activity->tickets as $ticket)
			{{$ticket->name}}<br>
			Precio Adulto: {{$ticket->adult}}<br>
			Precio Menor:{{$ticket->child}}<br><br>
			@break
		@endforeach
	</b>
	</span>
@stop

@section('content')
	@foreach($activity->tickets as $ticket)
		Image: {{$ticket->image}}<br>
		Nombre: {{$ticket->name}}<br>
		Descripcion: {{$ticket->description}}<br>
		Contenido en pdf(Nombre del pdf):{{$ticket->content}}<br><br><br>		
	@endforeach
	Parque: {{$activity->name}}!!<br>
	descripción parque: {{$activity->name}}!!<br>
	Image del mapa: {{$activity->image}}<br>
	Descripcion del parque: {{$activity->description}}<br>
	Video pendiente<br>
	link del mapa : {{$activity->coordinates}}<br><br>

	Nombre Categoria:{{$activity->category->name}}<br><br>

	@foreach ($activity->category->activities as $Activity)
		<a href="{{Request::root()}}/{{strtolower($activity->category->type)}}/{{$Activity->name}}" >
			{{$Activity->image}}<br>
			{{$Activity->slogan}}<br>
			{{$Activity->location}}<br>
		</a>
	@endforeach

@stop