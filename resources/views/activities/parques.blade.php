@extends('layouts/structure')

@section('content')

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
@stop