@extends('layouts/structure')
@section('head')

	<span class='h2'>Hoteles en Holbox, México</span>
  <p class='fechas-info'>El día Sábado 11 de Agosto al Miércoles 15 de Agosto</p>
@stop

@section('content')


  <div class="serach-body" >

    <div class="container" >

        <div class="bread-crub">
           <i class="fa fa-home" aria-hidden="true"></i>
           <a class="icon-home" href="/" >&nbsp;Inicio</a> >
           <b>Hoteles</b>
       </div>

       <div class="col-md-3 main-box" >
          <div class="caja-search" >   
              <form id="contactform" class="head" action="<?php //echo PATH.'/hotels/search'; ?>" method="GET" > 

                 <div class="hidden"> 
                    <input type="hidden" name="type" id="type" value="1">
                    <input type="hidden" value="<?php //echo $urls; ?>"  id="destino">
                    <input type='hidden' value="<?php //echo $_GET['d']; ?>" name="d" >
                 </div>

              <span class="label1">Destino / Hotel:</span>
              <hr>
              <div class="inline-search">           
              <select id="d" data-placeholder="<?php //echo $desti; ?>"  class="destination" name="d" <?php //echo $disable ?> style="width:100%;"  multiple="multiple" ></select>
              </div>
              <?php //if (!empty($disable) or is_null($disable)) {?>
              <input value=<?php //echo $_GET['d']; ?> name="d" id="d" type='hidden'/>
              <?php// } ?>
              <div class="inline-search date fech">
                <div class="input-style date-from noselect">
                  <div class="date-wrapper from_datepicker-wrapper">
                    <span class="aa a1"><?php //echo $diaa ; ?></span>
                    <span class="ee">
                      <span class="ii"><?php //echo $mes; ?></span>
                      <span class="uu"><?php //echo $semana; ?></span>
                    </span>
                  </div>
                       <input type="text" name="sd" id="from_hotel_search" class="datepicker from_datepicker" value="<?php //echo $_GET['sd']; ?>" placeholder="Del día ..." readonly  autocomplete="off" />                 
                </div>
                <div class="text date-nights noselect">
                  <span class="number-nights"></span>                 
                </div>
                <div class="input-style date-to noselect">
                  <div class="date-wrapper to_datepicker-wrapper" id="to_datepicker-wrapper">
                    <span class="aa a2"><?php //echo $diaa2; ?></span>
                    <span class="ee">
                      <span class="ii"><?php //echo $mes2; ?></span>
                      <span class="uu"><?php //echo $semana2; ?></span>
                    </span>
                  </div>
                  <input type="text" name="ed" id="to_hotel_search" class="datepicker to_datepicker" value="<?php //echo $_GET['ed']; ?>" placeholder="al día ..." readonly autocomplete="off" />
                </div>
              </div>
              <div class="inline-search inline-block fech">
                <div id="shn" class="inline-search passengers noselect" >
                 
                 <!-- imprime variables -->
                  <div class="input-style jonas2" id="show-passengers-panel">
                    <span class="rooms-icon" data-title="Habitaciones"><?php //echo $r; ?></span>
                    <span class="sep"></span>
                    <span class="r1a-icon" data-title="Adultos"><?php //echo $ta; ?></span>
                    <span class="childs-icon none" data-title="Niños"><?php //echo $tn; ?></span>
                    <input class="pax rooms form-control" name="r" id="habita" value="<?php //echo $r; ?>" type="hidden" />
                  </div>

                  <div id="passengers-panel" class="noselect simple" style="display: none;">
                    <span class="panel-arrow"></span>
                    <div class="panel-content">
                      <ul class="rooms-list">
                        <li class="item room-1 clear visible" data-room="1">
                          <div class="room-name inline">Hab 1</div>
                          <div class="room-r1a inline center">
                            <label class="sup-label">Adultos</label>
                            <input class="spinner r1a-spin" name="r1a" id="adulto1"  value="<?php //echo $r1a; ?>" readonly />
                          </div>
                          <div class="room-childs inline center"><label class="sup-label">Niños</label>
                            <input class="spinner childs-spin" name="r1k" id="Nino1" value="<?php //echo $r1k; ?>" readonly />
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
                            <input class="spinner r1a-spin" name="r2a" id="adulto2" value="<?php //echo $r2a; ?>" readonly />
                          </div>
                          <div class="room-childs inline center">
                            <label class="sup-label">Niños</label>
                            <input class="spinner childs-spin" name="r2k" id="Nino2" value="<?php //echo $r2k; ?>" readonly />
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
                            <input class="spinner r1a-spin" name="r3a" id="adulto3" value="<?php //echo $r3a; ?>" readonly />
                          </div>
                          <div class="room-childs inline center">
                            <label class="sup-label">Niños</label>
                            <input class="spinner childs-spin" name="r3k" id="Nino3" value="<?php //echo $r3k; ?>" readonly />
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
              <button class="inline-button" id="enviar1" ></button>
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


       </div>

       <div class="col-md-9 main-search">
         

      


      @foreach($rooms as $room)



      <a class="star_{{$room['stars']}} {{$room['pricerange']}}" href="{{Request::root()}}/details/{{$room['id']}}/{{$room['url']}}?d={{$room['id']}}{{$url}}" >
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




      @endforeach 

      </div>

    </div>

</div>


@stop