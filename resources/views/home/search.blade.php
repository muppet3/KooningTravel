@extends('layouts/structure')
@section('head')

	<span class='h2'>Hoteles en Holbox, México</span>
  <p class='fechas-info'>El día Sábado 11 de Agosto al Miércoles 15 de Agosto</p>
@stop

@section('content')
  
 
  @foreach($rooms as $room)
  este es el href <a class="star_{{$room['stars']}} {{$room['pricerange']}}" href="{{Request::root()}}/details/{{$room['id']}}/{{$room['url']}}?d={{$room['id']}}{{$url}}" >
    adultos: {{$room['adultos']}}<br>
        stars {{$room['stars']}}<br>
      pricerange: {{$room['pricerange']}}<br>
        @isset($room['preciodescuento'])
          descuento: {{$room['descuento']}}<br>
          preciodescuento: {{$room['preciodescuento']}}<br>
        @endisset
        id: {{$room['id']}}<br>
        name: {{$room['name']}}<br>
        
        image: {{$room['image']}}<br>
        city_name: {{$room['city_name']}}<br>
        country_name: {{$room['country_name']}}<br>
      room_name: {{$room['room_name']}}<br>
        meal_plan: {{$room['meal_plan']}}<br>
        agency_public: {{$room['agency_public']}}<br>
        total_noches: {{$room['total_noches']}}<br>
        price: {{$room['price']}}<br>
        </a>
      <br>
      <br>
  @endforeach 

@stop