@extends('layouts/structure')

@section('content')

  




<style type="text/css">

   body {background-color: #FFF;}
  .header .menu2 .tel{ border-radius: 6px; height: 62px; background:#00000030; margin-top: 1px; }
  .header .menu2 .product .bg-home{border-radius: 6px;  background:#00000030;width: 82%;height:97%;}



</style>




<div class="head home" > 
  <!--Comienza Header -->
  <?php include ( ROOT."/application/views/home/header.php"); ?>
  <!--Termina Header-->
  
  <div class="bgv">
    <video preload="auto" poster="" autoplay loop muted playsinline >
      <source src="https://www.kooningtravel.com/img/Home/fondos/video2.mp4" type="video/mp4" />
    </video>
  </div>
  <span class="h2">Descansa en tu hotel ideal</span>
  <div class="box" >
      <!--Caja Home-Begin-->
      <?php //include( ROOT."/application/views/home/box.php"); ?>
      <!--Caja Home End-->
    <a class="headf" href="/Contacto"></a> 
  </div>
  <a class="explor" href="https://www.kooningtravel.com/Explora" >Explora tu próximo viaje</a> </div>
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
<a class="azull" href="hotels/381/azul-beach-resort-riviera-maya-hotel-by-karisma?d=381&sd=<?php //// echo $entrada; ?>&ed=<?php // echo $salida ?>&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><img src="https://www.kooningtravel.com/img/Home/azul.png" alt="Hotel Azul" ></a>
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
            <a href="<?php // echo $cancun;?>">
              <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/cancun.png" />
            </a> 
        </div>

        <div  class="banerh2">
              <a href="<?php // echo $Acapulco ?>"> 
                <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/Acapulco.jpg" >
              </a>
               <a class="mar" href="<?php // echo $PuertoVallarta;?>">
                <img class="imgs sombraPromociones2"  src="https://www.kooningtravel.com/img/playas/PuertoVallarta.jpg" />
              </a>              
         </div>


      </div>
     

      <div class="bloqueh"> 

          <div style="float:left;" class="banerh2">
            <a href="<?php // echo $Rivieranaya ?>"> 
              <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/RivieraNayarit.jpg" >
            </a>
            <a class="mar" href="<?php // echo $Mazatlan ?>"> 
              <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/Mazatlan.jpg" >
            </a>            
          </div>

          <div style="float:right;" class="banerh">
            <a href="<?php // echo $PlayadelCarmen ?>"> 
              <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/playadc.png" />
            </a>
          </div>

      </div>



      <div class="bloqueh"> 


          <div class="banerh">
                 <a href="<?php // echo $RivieraMaya;?>">
                    <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/rivieramaya.png"  />
                  </a>
           </div> 

          <div class="banerh2">
               <a href="<?php // echo $ixtapa ?>">
                <img class="imgs sombraPromociones2" src="https://www.kooningtravel.com/img/playas/ixtapa.png" >
              </a> 

               <a class="mar" href="<?php // echo $Veracruz; ?>">
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
              <a href="<?php // echo $Isla ?>"><img src="https://www.kooningtravel.com/img/Home/IslaMujeres1.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." /></a>
            </div>
            <div class="item">
              <a href="<?php // echo $Isla ?>"><img src="https://www.kooningtravel.com/img/Home/IslaMujeres2.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." /></a>
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

            <a href="<?php // echo $CiudaddeMexico ?>"> 
              <img src="https://www.kooningtravel.com/img/ciudades/cdmx.png" class="sombraPromociones2 imgs" >
            </a> 
        </div>


 <div class="banerh2">
             <a  href="<?php // echo $Puebla ?>">
               <img src="https://www.kooningtravel.com/img/ciudades/Puebla.jpg" class="sombraPromociones2 imgs" >
             </a>
             <a class="mar" href="<?php // echo $Queretaro ?>">
              <img src="https://www.kooningtravel.com/img/ciudades/Queretaro.jpg" class="sombraPromociones2 imgs" >
            </a> 
 </div>


  </div>


      <div class="bloqueh"> 
         <div style="float:left;" class="banerh2">

              <a href="<?php // echo $Merida ?>"> 
                <img src="https://www.kooningtravel.com/img/ciudades/Merida.jpg" class="sombraPromociones2 imgs" >
              </a>            
              <a class="mar" href="<?php // echo $Guanajuato ?>"> 
                <img src="https://www.kooningtravel.com/img/ciudades/Guanajuato.jpg" class="sombraPromociones2 imgs" >
              </a>
          </div>


          <div style="float:right;" class="banerh">
            <a href="<?php // echo $Guadalajara ?>"> 
              <img src="https://www.kooningtravel.com/img/ciudades/guadalajara.png" class="sombraPromociones2 imgs" >
            </a> 
          </div>          

        </div>



      <div class="bloqueh"> 

          <div class="banerh">
                <a href="<?php // echo $Monterrey ?>">
                 <img src="https://www.kooningtravel.com/img/ciudades/monterrey.png" class="sombraPromociones2 imgs" >
               </a>
           </div> 

          <div class="banerh2">
              <a href="<?php // echo $Oaxaca ?>">
               <img src="https://www.kooningtravel.com/img/ciudades/Oaxaca.jpg" class="sombraPromociones2 imgs" >
             </a>
             <a class="mar" href="<?php // echo $Morelia ?>">
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
            <a href="<?php // echo $SanCristobal ?>">
              <img src="https://www.kooningtravel.com/img/Home/SanCristobaldelasCasas1.png" alt="Isla Mujeres, Quintana Roo, M&eacute;xico." />
            </a>
          </div>
          <div class="item">
            <a href="<?php  //echo $SanCristobal ?>">
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


