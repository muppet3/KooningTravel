@extends('layouts/structure')
@section('head')

	
	<h1 style="color:black;">
		{{$activity->background}}
		@foreach($activity->tickets as $ticket)
			{{$ticket->name}}<br>
			{{$ticket->adult}}<br>
			{{$ticket->child}}<br>
			@break
		@endforeach
	</h1>
@stop

@section('content')

@stop