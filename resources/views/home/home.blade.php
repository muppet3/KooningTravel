@extends('layouts/structure')
@section('head')
<style type="text/css">

   body {background-color: #FFF;}
  .header .menu2 .tel{ border-radius: 6px; height: 62px; background:#00000030; margin-top: 1px; }
  .header .menu2 .product .bg-home{border-radius: 6px;  background:#00000030;width: 82%;height:97%;}
  body .home { height:360px; }
</style>
<div class="head home" > 
  
  <div class="bgv">
    <video preload="auto" poster="" autoplay loop muted playsinline >
      <source src="https://www.kooningtravel.com/img/Home/fondos/video1.webm" type="video/webm" />
    </video>
  </div>
  <span class="h2">Descansa en tu hotel ideal</span>
  <div class="box" >
      <!--Caja Home-Begin-->
      <form id="contactform" action="https://kooningtravel.com/hotels/search" class="box-home" method="GET" >
        <div class="hidden">
          <input type="hidden" name="type" id="type" value="1" />
          <input type="hidden" value="<?php // echo o $urls; ?>"  id="destino" />
          <input type="hidden" data-placeholder="<?php // echo o $desti; ?>"   value="2" id="ds" name="ds" />
        </div>

          <div class="inline-block">
            <select style="display:none;" autofocus="autofocus" required="true" data-placeholder="Destino..." class="destination form-control" id="d" name="d" multiple="multiple" >
            </select>
          </div>
          <div class="inline-search">
            <div class="input-style date-from noselect">
              <div class="date-wrapper from_datepicker-wrapper"> 
                <span class="aa"><?php // echo o $dia1; ?></span> 
                  <span class="ee">
                    <span class="ii"><?php // echo o $mes; ?></span> 
                     <span class="uu"><?php // echo o $semana; ?></span> 
                  </span>
                </div>
              <input type="text" name="sd" id="from_hotel_search" class="datepicker from_datepicker" value="<?php // echo o $entrada; ?>" placeholder="Del día ..." readonly  autocomplete="off" />
            </div>
            <div class="text date-nights noselect">
             <span class="number-nights">4</span>
            </div>
            <div class="input-style date-to noselect">
             
              <div class="date-wrapper to_datepicker-wrapper" id="to_datepicker-wrapper">
                <span class="aa"><?php // echo o $dia2; ?></span> 
                 <span class="ee"> 
                    <span class="ii"><?php // echo o $mes2; ?></span> 
                    <span class="uu"><?php // echo o $semana2; ?></span> 
                 </span> 
             </div>

              <input type="text" name="ed" id="to_hotel_search" class="datepicker to_datepicker" value="<?php // echo o $salida; ?>" placeholder="al día ..." readonly autocomplete="off" />
            </div>
          </div>
          <div class="inline-block">
            <div class="inline-search passengers noselect">
              <div class="input-style" id="show-passengers-panel"> <span class="rooms-icon" data-title="Habitaciones">1</span><span class="sep"></span><span class="r1a-icon" data-title="Adultos">2</span> <span class="childs-icon none" data-title="Niños">0</span>
                <input class="pax rooms" name="r" id="habita" value="1" type="hidden" />
              </div>
              <div id="passengers-panel" class="noselect simple" style="display: none;"> <span class="panel-arrow"></span>
                <div class="panel-content">
                  <ul class="rooms-list">
                    <li class="item room-1 clear visible" data-room="1">
                      <div class="room-name inline">Hab 1</div>
                      <div class="room-r1a inline center">
                        <label class="sup-label">Adultos</label>
                        <input class="spinner r1a-spin" name="r1a" id="adulto1"  value="2" readonly />
                      </div>
                      <div class="room-childs inline center">
                        <label class="sup-label">Niños</label>
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
                    <li class="item room-2 clear hidden" data-room="2"> <a class="del-room" href="#"> <span class="del-icon"/> </a>
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
                    <li class="item room-3 clear hidden" data-room="3"> <a class="del-room" href="#"> <span class="del-icon"/> </a>
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
                  <a class="add-room" href="#"><span class="add-icon"></span> Añadir Habitación</a> </div>
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

      <!--Caja Home End-->
    <a class="headf" href="/Contacto"></a> 
  </div>
  <a class="explor" href="https://www.kooningtravel.com/Explora" >Explora tu próximo viaje</a> 
</div>
@stop

@section('content')

<div class="pannel"> 

<a class="lereve" href="/hotels/1630/le-reve-hotel-and-spa?d=1630&sd=2018-05-24&ed=2018-05-28&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><img src="https://www.kooningtravel.com/img/Home/lereve.png" alt="Hotel Lereve" ></a>
 
  
  <!-- Slider -->
  <div class="sliderh" >
    <div class="carousel slide auto" data-ride="carousel" > 
      <!-- Carousel items -->
      <div class="carousel-inner" >        

        <div class="item active" >             
             <img src="https://www.kooningtravel.com/img/Home/ofer1.png"  usemap="#Map1" alt="Verano" />
             <map name="Map1">
              <area shape="rect" target="_blank" coords="2,1,361,268" href="/ofertas/10/Preventa-Verano">
              <area class="fives1" shape="rect" target="_blank" coords="368,1,726,136" href="/ofertas/6/Viaja-En-Mexico-Y-Por-Mexico">
              <area class="fives1 fives2" shape="rect" target="_blank" coords="367,136,724,268" href="/ofertas/4/Birthday">
            </map>         
        </div>      

        <div class="item" >             
             <img src="https://www.kooningtravel.com/img/Home/ofer2.png"  usemap="#Map" alt="Verano" />
             <map name="Map">
              <area shape="rect" target="_blank" coords="2,1,361,268" href="https://www.kooningtravel.com/ofertas/9/Vive-Disfruta-Viaja">
              <area class="fives1" shape="rect" target="_blank" coords="368,1,726,136" href="https://www.kooningtravel.com/ofertas/5/Disfruta-Mexico">
              <area class="fives1 fives2" shape="rect" target="_blank" coords="367,136,724,268" href="https://www.kooningtravel.com/ofertas/7/Goza-tus-viajes-de-negocios">
            </map>         
        </div>


      </div>    
      </div>   
    </div>
   <!-- Slider -->
<a class="azull" href="hotels/381/azul-beach-resort-riviera-maya-hotel-by-karisma?d=381&sd=<?php //// // echo o $entrada; ?>&ed=<?php // // echo o $salida ?>&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><img src="https://www.kooningtravel.com/img/Home/azul.png" alt="Hotel Azul" ></a>
  </div>

</div>
<div class="centerh" >
  <div class="bloque gray">
    <div class="playash" >Playas de México</div>


     <!-- CARRUSEL VERTICAL-->
    <div id="anuncio"> 
       <!-- Carousel items -->
        <a href="https://www.kooningtravel.com/hotels/371/krystal-cancun?d=2&sd=2018-02-14&ed=2018-02-16&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><img src="https://www.kooningtravel.com/img/search/publicidad/Krystal.png" alt="Temptation" /></a>
      <!-- Carousel nav --> 
    </div>


    <div class="hint" >
      <div class="bloqueh"> 

        <div class="banerh" >
            <a href="<?php // // echo o $cancun;?>">
              <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/cancun.png" />
            </a> 
        </div>

        <div  class="banerh2">
              <a href="<?php // // echo o $Acapulco ?>"> 
                <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/Acapulco.jpg" >
              </a>
               <a class="mar" href="<?php // // echo o $PuertoVallarta;?>">
                <img class="imgs sombraPromociones2"  src="https://www.kooningtravel.com/img/playas/PuertoVallarta.jpg" />
              </a>              
         </div>


      </div>
     

      <div class="bloqueh"> 

          <div style="float:left;" class="banerh2">
            <a href="<?php // // echo o $Rivieranaya ?>"> 
              <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/RivieraNayarit.jpg" >
            </a>
            <a class="mar" href="<?php // // echo o $Mazatlan ?>"> 
              <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/Mazatlan.jpg" >
            </a>            
          </div>

          <div style="float:right;" class="banerh">
            <a href="<?php // // echo o $PlayadelCarmen ?>"> 
              <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/playadc.png" />
            </a>
          </div>

      </div>



      <div class="bloqueh"> 


          <div class="banerh">
                 <a href="<?php // // echo o $RivieraMaya;?>">
                    <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/rivieramaya.png"  />
                  </a>
           </div> 

          <div class="banerh2">
               <a href="<?php // // echo o $ixtapa ?>">
                <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/ixtapa.png" >
              </a> 

               <a class="mar" href="<?php // // echo o $Veracruz; ?>">
                <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/Veracruz.jpg" >
              </a> 
          </div>

      

      </div>






    </div>


    <div class="hintr" >



      <div id="anuncio2" class="posh" > 
        <!-- Carousel items -->

              <a href="https://www.kooningtravel.com/hotels/1346/nina-hotel---beach-club-by-tukan?d=1346&sd=2018-02-23&ed=2018-02-26&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><img src="https://www.kooningtravel.com/img/search/publicidad/Nina.png" alt="Tucan Nina" /></a>
 
        <!-- Carousel nav --> 
      </div>


      <div id="anuncio4" class="carousel slide"  data-ride="carousel"> 
        <!-- Carousel items -->
        <div class="carousel-inner" >
            <div class="item active">
              <a href="<?php // // echo o $Isla ?>"><img src="https://www.kooningtravel.com/img/Home/IslaMujeres1.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." /></a>
            </div>
            <div class="item">
              <a href="<?php // // echo o $Isla ?>"><img src="https://www.kooningtravel.com/img/Home/IslaMujeres2.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." /></a>
            </div>
        </div>
        <!-- Carousel nav --> 
      </div>



    </div>



  </div>
  




  <!-- Termina Gris--> 
  <!-- Inicia HFFF -->
  
  <div class="bloque">
    <div class="playash white" >Ciudades de México</div>
    <div id="comodin" ></div>
    <div class="hint" >

      <div class="bloqueh"> 



       <div class="banerh">

            <a href="<?php // // echo o $CiudaddeMexico ?>"> 
              <img src="https://www.kooningtravel.com/img/ciudades/cdmx.png" class="sombraPromociones2 imgs" >
            </a> 
        </div>


 <div class="banerh2">
             <a  href="<?php // // echo o $Puebla ?>">
               <img src="https://www.kooningtravel.com/img/ciudades/Puebla.jpg" class="sombraPromociones2 imgs" >
             </a>
             <a class="mar" href="<?php // // echo o $Queretaro ?>">
              <img src="https://www.kooningtravel.com/img/ciudades/Queretaro.jpg" class="sombraPromociones2 imgs" >
            </a> 
 </div>


  </div>


      <div class="bloqueh"> 
         <div style="float:left;" class="banerh2">

              <a href="<?php // // echo o $Merida ?>"> 
                <img src="https://www.kooningtravel.com/img/ciudades/Merida.jpg" class="sombraPromociones2 imgs" >
              </a>            
              <a class="mar" href="<?php // // echo o $Guanajuato ?>"> 
                <img src="https://www.kooningtravel.com/img/ciudades/Guanajuato.jpg" class="sombraPromociones2 imgs" >
              </a>
          </div>


          <div style="float:right;" class="banerh">
            <a href="<?php // // echo o $Guadalajara ?>"> 
              <img src="https://www.kooningtravel.com/img/ciudades/guadalajara.png" class="sombraPromociones2 imgs" >
            </a> 
          </div>          

        </div>



      <div class="bloqueh"> 

          <div class="banerh">
                <a href="<?php // // echo o $Monterrey ?>">
                 <img src="https://www.kooningtravel.com/img/ciudades/monterrey.png" class="sombraPromociones2 imgs" >
               </a>
           </div> 

          <div class="banerh2">
              <a href="<?php // // echo o $Oaxaca ?>">
               <img src="https://www.kooningtravel.com/img/ciudades/Oaxaca.jpg" class="sombraPromociones2 imgs" >
             </a>
             <a class="mar" href="<?php // // echo o $Morelia ?>">
              <img src="https://www.kooningtravel.com/img/ciudades/Morelia.jpg" class="sombraPromociones2 imgs" >
            </a> 

          </div>

          </div>
    </div>




    <div class="hintr" >

          <div class="banner-puebla  posh">
              <a href="https://www.kooningtravel.com/hotels/4635/xoxula-by-inmense?d=39&sd=2018-02-23&ed=2018-02-26&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0">
                <img src="https://www.kooningtravel.com/img/search/publicidad/Xolula.png" alt="Cholula, Puebla. M&eacute;xico." />
              </a>
          </div>

      <div id="anuncio3" class="carousel slide" data-ride="carousel"> 
       
       <div class="carousel-inner" >
          <div class="item active">
            <a href="<?php // // echo o $SanCristobal ?>">
              <img src="https://www.kooningtravel.com/img/Home/SanCristobaldelasCasas1.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." />
            </a>
          </div>
          <div class="item">
            <a href="<?php  //// echo o $SanCristobal ?>">
              <img src="https://www.kooningtravel.com/img/Home/SanCristobaldelasCasas2.png" alt="San Cristobal de las Casas, Chiapas, M&eacute;xico." />
            </a>
          </div>       
      </div>


    </div>



  </div>
  
  <!--Inicia Gris -->
  
  <div class="bloque gray">
    <div class="playash" >Complementa tu viaje</div>
    <div class="colh" > 
      <a class="gal" href="https://www.kooningtravel.com/promociones" >
      <div class="sombraPromociones2" > <img class="imgh" src="https://www.kooningtravel.com/img/Home/SliderOfertas.png" />
        <div class="caption">
          <h4>DESCUENTOS</h4>
          <span>¡Descuentos imperdibles!</span> </div>
      </div>
      </a>





      <div class="gal gal2">
        <div class="sombraPromociones2" >          
          <div class="carousel slide" data-ride="carousel" > 
            <!-- Carousel items --> 
            <div class="carousel-inner" >
              <div class="item active"><a  href="/Parques/Xcaret"><img class="imgh" src="https://www.kooningtravel.com/img/Home/publicidadtours/Xcaret.png" alt="Xcaret" /></a> </div>
              <div class="item"><a href="/Parques/Royal-Garrafon"><img class="imgh" src="https://www.kooningtravel.com/img/Home/publicidadtours/Dolphin.png" alt="Dolphin" /></a> </div>
              <div class="item"><a href="/Parques/Rio-Secreto"><img class="imgh" src="https://www.kooningtravel.com/img/Home/publicidadtours/RioSecreto.png" alt="Holbox" /></a> </div>
            </div>
            <!-- Carousel nav --> 
          </div>
          <div class="caption">
            <h4>Parques</h4>
            <span>¡Diviértete en grande!</span> </div>
        </div>
      </div>




      <div class="gal ">
        <div class="sombraPromociones2" >


          <div class="carousel slide" data-ride="carousel" > 
            <!-- Carousel items -->
            <div class="carousel-inner" >
              <div class="item active"><a  href="/Tours/Chichen-Itza"><img class="imgh" src="https://www.kooningtravel.com/img/Home/publicidadtour/Mayaland.png" alt="Xcaret" /></a> </div>
              <div class="item"><a href="/Tours/Holbox"><img class="imgh" src="https://www.kooningtravel.com/img/Home/publicidadtour/Holbox.png" alt="Dolphin" /></a> </div>
            </div>
            <!-- Carousel nav --> 
          </div>



          <div class="caption">
            <h4>Tours</h4>
            <span>¡Explora y descubre!</span> 
          </div>
        </div>
      </div> 
    </div>
  </div>
  <div class="bloque fott" > <img src="https://www.kooningtravel.com/images/logo-vive-mexico.png" > <img class="mar" src="https://www.kooningtravel.com/images/logo-sectur.png" > <img src="https://www.kooningtravel.com/images/logo-banorte.png" > <img class="mar" src="https://www.kooningtravel.com/images/logo-paypal.png" > <img src="https://www.kooningtravel.com/images/logo-sitio-seguro.png" > </div>
</div>


@stop


