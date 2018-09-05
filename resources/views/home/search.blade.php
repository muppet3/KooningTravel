@extends('layouts/structure')
@section('head')
<span class='h2'>Hoteles en Holbox, México</span>
<p class='fechas-info'>El día Sábado 11 de Agosto al Miércoles 15 de Agosto</p>
@stop

@section('content')

<style type="text/css">
  html body .search-body { background: #F0F0F0; }

</style>

<div class="search-body" >
  <div class="container" >
    <div class="bread-crub">
      <i class="fa fa-home" aria-hidden="true"></i>
      <a class="icon-home" href="/" >&nbsp;Inicio</a> >
      <b>Hoteles</b>
    </div>
    <div class="col-md-3 main-box" >
      <div class="caja-search" >
        <form id="contactform" class="head" action="javascript:(void);" method="GET" >
          <div class="hidden">
            <input type="hidden" name="type" id="type" value="1">
            <input type="hidden" value="{{$destino}}"  id="destino"> <!--url -->
            <input type='hidden' value="2" name="d" >                <!--numero -->
          </div>
          <span class="label1">Destino / Hotel</span>
          <hr>
          <div class="inline-search">
          <select id="d" data-placeholder="{{$destino}}"  class="destination" name="d"  style="width:100%;"  multiple="multiple" >            
          </select>
        </div>        
        <div class="inline-search">
          <div class="input-style date-from noselect">
            <div class="date-wrapper from_datepicker-wrapper">
              <span class="aa a1">{{$checkin->day}}</span>
              <span class="ee">
                <span class="ii">{{$checkin->NameMoth($checkin->month)}}</span>
                <span class="uu">{{$checkin->DayWeek($checkin->dayOfWeek)}}</span>
              </span>
            </div>
            <input type="text" name="sd" id="from_hotel_search" class="datepicker from_datepicker" value="{{$checkin->toDateString()}}" placeholder="Del día ..." readonly  autocomplete="off" />
          </div>
          <div class="text date-nights noselect">
            <span class="number-nights">4</span>
          </div>
          <div class="input-style date-to noselect">
            <div class="date-wrapper to_datepicker-wrapper" id="to_datepicker-wrapper">
              <span class="aa a2">{{$checkout->day}}</span>
              <span class="ee">
                <span class="ii">{{$checkout->NameMoth($checkout->month)}}</span>
                <span class="uu">{{$checkout->DayWeek($checkout->dayOfWeek)}}</span>
              </span>
            </div>
            <input type="text" name="ed" id="to_hotel_search" class="datepicker to_datepicker" value="{{$checkout->toDateString()}}" placeholder="al día ..." readonly autocomplete="off" />
          </div>
        </div>
        <div class="inline-block">
          <div class="inline-search passengers noselect" >
            <!-- imprime variables -->
            <div class="input-style" id="show-passengers-panel">
              <span class="rooms-icon" data-title="Habitaciones">1</span>
              <span class="sep"></span>
              <span class="r1a-icon" data-title="Adultos">2</span>
              <span class="childs-icon none" data-title="Niños">0</span>
              <input class="pax rooms form-control" name="r" id="habita" value="1" type="hidden" />
            </div>
            <div id="passengers-panel" class="noselect simple" style="display: none;">
              <span class="panel-arrow"></span>
              <div class="panel-content">
                <ul class="rooms-list">
                  <li class="item room-1 clear visible" data-room="1">
                    <div class="room-name inline">Hab 1</div>
                    <div class="room-r1a inline center">
                      <label class="sup-label">Adultos</label>
                      <input class="spinner r1a-spin" name="r1a" id="adulto1" value="0" readonly />
                    </div>
                    <div class="room-childs inline center"><label class="sup-label">Niños</label>
                    <input class="spinner childs-spin" name="r1k" id="Nino1" value="0" readonly />
                  </div>
                  <div class="child-ages" style="display: none;">
                    <label class="sup-label">Edades de los niños en fecha de viaje</label>
                    <select class="small child-age-1" name="r1k1a" style="display: none;">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                    <select class="small child-age-2" name="r1k2a" style="display: none;">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                    <select class="small child-age-3" name="r1k3a" style="display: none;">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </li>
                <li class="item room-2 clear hidden" data-room="2">
                  <a class="del-room" href="#">
                    <span class="del-icon"/>
                    </a>
                    <div class="room-name inline">Hab 2</div>
                    <div class="room-r1a inline center">
                      <label class="sup-label">Adultos</label>
                      <input class="spinner r1a-spin" name="r2a" id="adulto2" value="0" readonly />
                    </div>
                    <div class="room-childs inline center">
                      <label class="sup-label">Niños</label>
                      <input class="spinner childs-spin" name="r2k" id="Nino2" value="0" readonly />
                    </div>
                    <div class="child-ages" style="display: none;">
                      <label class="sup-label">Edades de los niños en fecha de viaje</label>
                      <select class="small child-age-1" name="r2k1a" style="display: none;">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                      <select class="small child-age-2" name="r2k2a" style="display: none;">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                      <select class="small child-age-3" name="r2k3a" style="display: none;">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                    </div>
                  </li>
                  <li class="item room-3 clear hidden" data-room="3">
                    <a class="del-room" href="#">
                      <span class="del-icon"/>
                      </a>
                      <div class="room-name inline">Hab 3</div>
                      <div class="room-r1a inline center">
                        <label class="sup-label">Adultos</label>
                        <input class="spinner r1a-spin" name="r3a" id="adulto3" value="0" readonly />
                      </div>
                      <div class="room-childs inline center">
                        <label class="sup-label">Niños</label>
                        <input class="spinner childs-spin" name="r3k" id="Nino3" value="0" readonly />
                      </div>
                      <div class="child-ages" style="display: none;">
                        <label class="sup-label">Edades de los niños en fecha de viaje</label>
                        <select class="small child-age-1" name="r3k1a" style="display: none;">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                        <select class="small child-age-2" name="r3k2a" style="display: none;">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                        <select class="small child-age-3" name="r3k3a" style="display: none;">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                    </li>
                  </ul>
                  <a class="add-room" href="#"><span class="add-icon"></span> Añadir Habitación</a>
                </div>
              </div>
            </div>
          </div>
          <div class="inline-block">
            <button class="inline-button" id="envio1" type="button" ></button>
          </div>
          <div class="hidden" >
            <input type="hidden" value="0" name="r4a" />
            <input type="hidden" value="0" name="r4k" />
            <input type="hidden" value="0" name="r4k1a" />
            <input type="hidden" value="0" name="r4k2a" />
            <input type="hidden" value="0" name="r4k3a" />
            <input type="hidden" value="0" name="r5a" />
            <input type="hidden" value="0" name="r5k" />
            <input type="hidden" value="0" name="r5k1a" />
            <input type="hidden" value="0" name="r5k2a" />
            <input type="hidden" value="0" name="r5k3a" />
          </div>
        </form>
      </div>
      <div class="marco" >
        <div class="refill" >
          <span class="filtro" >Filtrar Resultados:</span>
          <select  id="search_hotel" multiple="multiple" data-placeholder="Buscar por Hotel" name="search_hotel" >
            @foreach($rooms as $room)
              <option value="{{$room['id']}}">{{$room['name']}}</option>
            @endforeach
          </select>
          <button id="verTodos" class="btn" type="button">Ver todo los hoteles</button>
        </div>
        <div class="refill starts">
          <span class="filtro" >Categor&iacute;a del hotel</span>
          <div class="categoria" >
            <!--<label id="all_hotel" ></label>-->
            <label id="ch_start5" ></label>
            <label id="ch_start4" ></label>
            <label id="ch_start3" ></label>
            <label id="ch_start2" ></label>
            <label id="ch_start1" ></label>
          </div>
        </div>
        
        <div class="refill  precio"  >
          <span class="filtro" >Precio</span>
          <div class="mont" >
              <span class="amount" ><label id="amount">Todos</label></span> 
              <div id="slider-range-min"></div>
          </div> 
        </div>

      </div>
    </div>
    <div class="col-md-9 search-content">
      <h1 class="titulo-listado-hoteles"><?php echo count($rooms) ?> Hoteles que concuerdan con tu búsqueda</h1>
      @isset ($rooms)
        @foreach($rooms as $room)
          <a class="result star_{{$room['stars']}} {{$room['pricerange']}}" id="hotel-{{$room['id']}}" href="{{Request::root()}}/details/{{$room['id']}}/{{$room['url']}}?d={{$room['id']}}{{$url}}" >
            <div class="img" >
              <label><img src="{{$room['image']}}" alt="{{$room['name']}}" title="{{$room['name']}}" /></label>
            </div>
            <div class="details">
              <div class="bloques" >
                <label class="blh"><h2 class="title" >{{$room['name']}}</h2></label>
                <img class="star" src="https://www.kooningtravel.com/intranet/images/star4.5.png" alt="{{$room['name']}}" title="{{$room['name']}}" />
                <label class="city" >{{$room['city_name']}}<i class="fa fa-map-marker" aria-hidden="true" ></i></label>
                <span class="include" >Tipo: {{$room['room_name']}}, Plan: {{$room['meal_plan']}}</span>
              </div>
              <div class="line" ></div>
              <div class="bloques bloques2" >
                <label class="info">Total de noches: {{$room['total_noches']}}<br>Personas: {{$room['adultos']}}<br> Impuestos incluidos </label>
                <label class="descuento"></label>
              </div>
              <div class="line" ></div>
              <div class="bloques bloque3" >
                <span class="logosn" >
                  
                </span>
                <label class="precio">${{$room['price']}}</label>
                <label class="search" >Reservar</label>
              </div>
            </div>
          </a>
        @endforeach
      @else
        @isset ($errores)
            @foreach ($errores as $error)

              <b>{{$error}}</b><br>
            @endforeach
        @endisset
        @isset ($erroresquery)
          <b>{{$erroresquery}}</b><br>
        @endisset
      @endisset
    </div>
  </div>
</div>

<!--Begin MENSAJES-->
<div class="alert alert-primary messaje" role="alert">
  <span class="glyphicon glyphicon-time" aria-hidden="true" ></span>Hay <?php echo rand(12,30); ?> personas más viendo este destino en este momento.
</div>
<!--End MENSAJES-->

<script type="text/javascript"> 
  
  /*Slider rango de precios*/

$( function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: {{$max}},
      min:  {{$min}},
      max: {{$max}},
      slide: function( event, ui ) {
        

       if (  ui.value <= 1000){
            $('.btw0k-1k, .btw1k-3k, .btw3k-5k, .btw5k-8k, .more8k').hide();
            $('.btw0k-1k').show(); 
            $( "#amount" ).text("Menor a 1,000");
         } 
          else if (ui.value <= 3000 ){
            $('.btw0k-1k, .btw1k-3k, .btw3k-5k, .btw5k-8k, .more8k').hide();
            $('.btw1k-3k ').show();  
            $( "#amount" ).text("Entre $1,001 a $3,000");
          } 
          else if (ui.value <= 5000 ){
            $('.btw0k-1k, .btw1k-3k, .btw3k-5k, .btw5k-8k, .more8k').hide();
            $('.btw3k-5k ').show();  
            $( "#amount" ).text("Entre $3,001 a $5,000");
          } 
          else if ( ui.value <= 8000 ){
            $('.btw0k-1k, .btw1k-3k, .btw3k-5k, .btw5k-8k, .more8k').hide();
            $('.btw5k-8k').show();   
            $( "#amount" ).text("Entre $5,001 a $8,000");
          }
           else if ( ui.value >= 8000  ){
             $('.btw0k-1k, .btw1k-3k, .btw3k-5k, .btw5k-8k, .more8k').hide();
            $('.more8k').show();  
            $( "#amount" ).text("Mayor a  $8,000");
       }
      }
    });
  } ); 

</script>


@stop