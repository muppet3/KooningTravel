<!doctype html>
<html lang="{{ app()->getLocale() }}">

  <head>

        <!--Meta tags-->
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1" /> 
      <meta name="google-site-verification" content="JsJB8p487oyOxvtEpsDjpuQZJ7GeOMe22sQr39OBTQ0" >
      <meta name="description" content="Hoteles, traslados y tours en Cancún, y la Riviera Maya. Elige tus vacaciones entre miles de hoteles y destinos.">
      <meta name="author" content="Ing. Jonas Santiz L., Lic. Alan E. Gonzalez, Ing. Fernando Morales R. || Kooning Travel 2018 ">
      <link rel="shortcut icon" href="https://kooningtravel.com/images/favicon.png" type="image/png">
      <title>Hoteles, traslados y tours - Kooning Travel - 01 800 890 8974</title>
      
       <!--Recursos JS -->
      <script language="javascript" type="text/javascript" src="/js/jquery-3.3.1.js"></script> 
      <script language="javascript" type="text/javascript" src="/js/bootstrap.min.js" ></script>      
      <script language="javascript" type="text/javascript" src="/js/config-box.js" ></script> 
      <script language="javascript" type="text/javascript" src="/js/general.js" ></script> 
      <script language="javascript" type="text/javascript" src="/js/jquery.fancybox.min.js" ></script> 

      <!--Recursos CSS -->
      <link type="text/css" rel="stylesheet" media="screen" href="/css/kooningtravel.css">
      <link type="text/css" rel="stylesheet" media="screen" href="/css/select2.min.css" />
      <link type="text/css" rel="stylesheet" media="screen" href="/css/font-awesome.min.css" />
      <link type="text/css" rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Oswald:300,700">
      <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css" /> 
      <link rel="stylesheet" type="text/css" media="screen" href="/css/jquery.fancybox.min.css" /> 


      <?php $path = $_SERVER['REQUEST_URI']; ?>

      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-92499808-1', 'auto');
          ga('send', 'pageview');
      </script>

      <!-- Facebook Pixel Code -->
      <script>
          !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
          n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
          document,'script','https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '695241874015412'); // Insert your pixel ID here.
          fbq('track', 'PageView');
      </script>


    <!-- Hotjar Tracking Code for https://kooningtravel.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:913728,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

      <!--Redireccion-->
      <script type="text/javascript">
            if (screen.width < 1200) {  window.location = "http://192.168.10.10/"; } 
      </script>

      <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-T47XGRM');
        </script>
      <!-- End Google Tag Manager -->

        <noscript>
          <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=695241874015412&ev=PageView&noscript=1" alt="">
        </noscript>


      <!-- DO NOT MODIFY -->
      <!-- End Facebook Pixel Code -->
      <!-- Google Code para etiquetas de remarketing -->
      <!--
      Es posible que las etiquetas de remarketing todavía no estén asociadas a la información de identificación personal o que estén en páginas relacionadas con las categorías delicadas. Para obtener más información e instrucciones sobre cómo configurar la etiqueta, consulte https://google.com/ads/remarketingsetup.
      -->
      <script type="text/javascript">
          var google_tag_params = {
              travel_destid: 'REPLACE_WITH_VALUE',
              travel_originid: 'REPLACE_WITH_VALUE',
              travel_startdate: 'REPLACE_WITH_VALUE',
              travel_enddate: 'REPLACE_WITH_VALUE',
              travel_pagetype: 'REPLACE_WITH_VALUE',
              travel_totalvalue: 'REPLACE_WITH_VALUE',
          };

          /* <![CDATA[ */
          var google_conversion_id = 856961916;
          var google_custom_params = window.google_tag_params;
          var google_remarketing_only = true;
          /* ]]> */

      </script>

    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt=" " src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/856961916/?guid=ON&amp;script=0">
        </div>
    </noscript>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T47XGRM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->


    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
    <script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"982e50e16feb60f810399c614","lid":"fc48ed2a08"}) })</script>

  </head>

  <body>





      <div class="head other" style="">
        <div class="header" >
  <div class="logo" > <a href="/" ></a> </div>
  <div class="menu2" >
    <ul class="product">

      
      <div class="bg-home" >
          <li><a class="hotel <?php //// echo  $Mhoteles; ?>" href="/">HOTELES</a></li>
          <li><a class="park <?php //// echo  $park; ?>" href="/Parques">PARQUES</a></li>
          <li><a class="tour tour2 <?php // echo  $Mtours; ?>" href="/Tours">TOURS</a></li>
          <li><a class="trasl <?php // echo  $Mtraslados; ?>" href="/Traslado">TRASLADOS</a></li>
          <li class="fancyb" ><a class="auto <?php // echo  $Mautos; ?>" href="/Autos">AUTOS</a></li>
          <li><a class="ofer <?php // echo  $Mofertas; ?>" href="/Promociones">OFERTAS</a></li>
          <li><a class="blogh noselect" href="/Blog">BLOG</a></li>
       </div>


      <li class="month" ><a class="meses" data-fancybox data-src="#cboxLoadedContent" href="javascript:void(0);" ></a></li>
    </ul>

    <!--Parques-->
    <ul style="display: none;" class="sub-nav nav1">
      <li class="item2 xperiencia"> <a href="/Parques">Experiencias</a>
        <ol style="display: none;" class="sublist" >
            <li><a href="/Parques/Xcaret">Xcaret</a></li>
            <li><a href="/Parques/Xel-ha">Xel-ha</a></li>
            <li><a href="/Parques/Xplor">Xplor</a></li>
            <li><a href="/Parques/Xplor-Fuego">Xplor Fuego</a></li>
            <li><a href="/Parques/Xichen">Xichen</a></li>
            <li><a href="/Parques/Xenotes">Xenotes</a></li>
            <li><a href="/Parques/Xoximilco">Xoximilco</a></li>
            <li><a href="/Parques/Xenses">Xenses</a></li>
        </ol>
       </li>
      <li class="item2 dophin"><a href="/Parques">Dolphin Discovery</a> 
        <ol style="display: none;" class="sublist">
            <li><a href="/Parques/Royal-Garrafon">Royal Garraf&oacute;n</a></li>
            <li><a href="/Parques/Royal-Swim">Dolphin Swim Adventure</a></li>
            <li><a href="/Parques/Dolphin-Encounter">Dolphin Encounter</a></li>
            <li><a href="/Parques/Columbus">Columbus</a></li>
        </ol>
      </li>
      <li class="item2 riosecreto"> <a href="/Parques">Rio Secreto</a> 
        <ol style="display: none;" class="sublist">
            <li><a href="/Parques/Rio-Secreto">Solo entrada, Riviera Maya</a></li>
            <li><a href="/Parques/Rio-Secreto-">Entrada + Transportaci&oacute;n, Riviera Maya</a></li>
        </ol>
      </li>
      <li class="item2 cirque"> <a href="/Parques">Cirque Du Soleil</a> 
        <ol style="display: none;" class="sublist">
            <li><a href="/Parques/Cirque-Soleil">Solo entrada, Riviera Maya</a></li>
            <li><a href="/Parques/Cirque-Soleil-">Entrada + Transportaci&oacute;n, Canc&uacute;n</a></li>
            <li><a href="/Parques/Cirque-Du-Soleil">Entrada + Transportaci&oacute;n, Playa del Carmen</a></li>
        </ol>
      </li>
    </ul>

    <!--Tours-->
    <ul style="display: none;" class="sub-nav nav2">
      <li class="item2 mayalandt"><a href="/Tours/Chichen-Itza">Mayaland</a>
        <ol style="display: none;" class="sublist">
            <li><a href="/Tours/Chichen-Itza">Chichén Itz&aacute; Yucat&aacute;n, M&eacute;xico.</a></li>
            <li><a href="/Tours/Uxmal">¡Uxmal, Yucat&aacute;n, M&eacute;xico.</a></li>
            <li><a href="/Tours/Celestun">Celestun, Yucat&aacute;n, M&eacute;xico.</a></li>
            <li><a href="/Tours/Parque-Ecologico">Sitios Arqueológicos Tulum y Parque Ecológico Tankah.</a></li>
        </ol>
      </li>
      <li class="item2"><a href="/Tours/Catamaran">Catamaran</a> </li>
      <li class="item2"><a href="/Tours/Holbox">Tours Holbox</a></li>      
    </ul>

    <div class="tel">
      <div class="contact" >
        <a href="skype:018008908974?call" class="mx"><span class="flag" ></span> México - 01 800 890 8974
      </a>
        <a href="mailto:reservaciones@kooningtravel.com" class="email"><i class="fa fa-envelope" aria-hidden="true"></i>reservaciones@kooningtravel.com</a></span>
      </div>

      <div class="zone">
        <span class="top" ></span>
        
          <ul id="country">
            <span class="title">N&uacute;meros desde M&eacute;xico</span>
            <li><a href="skype:018008908974?call"><span class="st-NHTxt"><p class="sprite"></p>01 (800) 890-8974</span></a></li>
            <li><a href="skype:5219988989954?call"><span class="st-NHTxt"><p class="sprite"></p>+521 (998) 898 9954</span></a></li>
            <li><a href="skype:5219989148398?call"><span class="st-NHTxt"><p class="sprite"></p>+521 (998) 914 8398</span></a></li>
          </ul>

      </div>
    </div>
    <div id="shopcart" >
      <a href="/Carrito"> <span id="cost" ><srong>0</srong></span></a>
<aside style="display: none;"  class="contt" >
  <label class="arr" ></label>
  <div class="listcart" > 
    <div class="headt" >
      <span>Nombre</span>
      <span>Precio</span>   
    </div>
    <hr>

    <!--  -->
   
    <!--  --> 
    <div class="tott" >
      <span class="totat" >
        <strong>Total </strong>
      </span>
      <span class="cantt" >
        <strong>MXN $<?php //echo number_format($total,2); ?> </strong>
      </span>
    </div>

    <div class="subt" >
        <a class="btnt" href="/Carrito"></a>
    </div>

      <a class="teltt fa fa-phone" href="tel:018008908974">(01) 800 890 8974</a>
  </div>

</aside>
        
    </div>
  </div>
</div>
      </div>
      @yield('head')
      @yield('content')



<!-- genericos y modales -->
  <div id="cboxLoadedContent">
    <h3>Pago con tarjeta de crédito</h3>
    <div id="methodOptions">
      <table id="ccDetail" cellspacing="0" cellpadding="0">
        <tbody>
          <tr class="title">
            <th>Emisor</th>
            <th>Planes de pago disponibles</th>
          </tr>
          <tr>
            <td class="issuer">
              <img src="/img/bancos/paypal.png" alt="" class="bank2 spriteBank" title="Paypal" align="left">
              <div>Paypal</div>
            </td>            
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6, 9 y 12 </span><br> meses sin intereses*</li>
              </ul>
            </td>
          </tr>
          <tr class="odd">
            <td class="issuer"><img src="/img/bancos/Banorte.png" alt="" class="bank2 spriteBank" title="Banorte" align="left">
              <div>Banorte</div></td>            
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr>
            <td class="issuer"><img src="/img/bancos/Hsbc.png" alt="" class="bank3 spriteBank" title="HSBC" align="left">
              <div>HSBC</div></td>
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr class="odd">
            <td class="issuer"><img src="/img/bancos/Afirme.png" alt="" class="bank8 spriteBank" title="Afirme" align="left">
              <div>Afirme</div></td>
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr>
            <td class="issuer"><img src="/img/bancos/BanBajio.png" alt="" class="bank6 spriteBank" title="BanBajio" align="left">
              <div>BanBajio</div></td>
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr class="odd">
            <td class="issuer"><img src="/img/bancos/Banjercito.png" alt="" class="bank42 spriteBank" title="Banjercito" align="left">
              <div>Banjercito</div></td>
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr>
            <td class="issuer"><img src="/img/bancos/Banrejio.png" alt="" class="bank5 spriteBank" title="BanRegio" align="left">
              <div>BanRegio</div></td>
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr class="odd">
            <td class="issuer"><img src="/img/bancos/Santander.png" alt="" class="bank9 spriteBank" title="Santander" align="left">
              <div>Santander</div></td>
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr>
            <td class="issuer"><img src="/img/bancos/Famsa.png" alt="" class="bank4 spriteBank" title="Famsa" align="left">
              <div>Famsa</div></td>
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr class="odd">
            <td class="issuer"><img src="/img/bancos/Inbursa.png" alt="" class="bank7 spriteBank" title="Inbursa" align="left">
              <div>Inbursa</div></td>
            <td class="plans"><ul class="fl">
                <li class="msi"><span>3, 6 y 9</span><br>
                  meses sin intereses*</li>
              </ul></td>
          </tr>
          <tr>
            <td class="issuer"><img src="/img/bancos/Invex.png" alt="" class="bank14 spriteBank" title="InvexBanco" align="left">
              <div>InvexBanco</div></td>
            <td class="plans"><ul class="fl">
                <li class="pagosFijos"><span>3, 6 y 9</span><br>
                  pagos fijos mensuales</li>
              </ul></td>
          </tr>
          <tr class="odd">
            <td class="issuer"><img src="/img/bancos/Itau.png" alt="" class="bank24 spriteBank" title="Itaucard" align="left">
              <div>Itaucard</div></td>
            <td class="plans"><ul class="fl">
                <li class="pagosFijos"><span>3, 6 y 9</span><br>
                  pagos fijos mensuales</li>
              </ul></td>
          </tr>
          <tr>
            <td class="issuer"><img src="/img/bancos/Ixe.png" alt="" class="bank22 spriteBank" title="Ixe" align="left">
              <div>Ixe</div></td>
            <td class="plans"><ul class="fl">
                <li class="pagosFijos"><span>3, 6 y 9</span><br>
                  pagos fijos mensuales</li>
              </ul></td>
          </tr>
          <tr class="odd">
            <td class="issuer"><img src="/img/bancos/Liverpool.png" alt="" class="bank11 spriteBank" title="Premium Card Liverpool" align="left">
              <div>Premium Card Liverpool</div>
            </td>
            <td class="plans"><ul class="fl">
                <li class="pagosFijos"><span>3, 6 y 9</span><br>
                  pagos fijos mensuales</li>
              </ul></td>
          </tr>
          <tr>
            <td class="issuer"><img src="/img/bancos/Mifel.png" alt="" class="bank25 spriteBank" title="Banca Mifel" align="left">
              <div>Banca Mifel</div></td>
            <td class="plans"><ul class="fl">
                <li class="pagosFijos"><span>3, 6 y 9</span><br>
                  pagos fijos mensuales</li>
              </ul></td>
          </tr>
          <tr class="odd">
            <td class="issuer"><img src="/img/bancos/Scotia.png" alt="" class="bank21 spriteBank" title="ScotiaBank" align="left">
              <div>ScotiaBank</div></td>
            <td class="plans"><ul class="fl">
                <li class="pagosFijos"><span>3, 6 y 9</span><br>
                  pagos fijos mensuales</li>
              </ul></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div style="display: none;" class='wait'>
    <div class='loader'>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--text'></div>
    </div>
  </div>

  <?php //include(ROOT.'/application/views/commons/footer.php'); ?>

<div class="generic-fotter">

          <div class="menus-fotter" >
              <ul class="sub-fotter">

            <div class="logo-fott">
               <img src="/img/logo.png" class="logo-kooning" />
            </div>


               
                <li><a href="/" >Página de Inicio</a></li>
                <li><a href="/Nosotros" >Nosotros</a></li>
                <li><a href="/Blog" >Blog</a></li>
                <li><a href="/Seguridad" >Seguridad</a></li>
                <li><a href="/Terminos" >Términos y condiciones</a></li>
                <li><a href="/Privacidad" >Aviso de Privacidad</a></li>
                <li><a href="/Site-Map" >Mapa del Sitio</a></li>
                <div class="img-trip">
                   <img src="https://kooningtravel.com/img/home/TripAdvisor.png" class="tripadvisor" alt="trip advisor">
                </div>                
              </ul>

          
              <ul class="sub-fotter" >            
                 <h3>NUESTRAS REDES</h3>
                  <li>
                      <a href="https://www.facebook.com/kooningtraveloficial/" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>Facebook
                      </a>
                  </li>
                  <li>
                      <a href="https://twitter.com/kooningtravel"  target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>Twitter
                    </a>
                  </li>
                  <li>
                      <a href="https://www.instagram.com/kooningtraveloficial/" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>Instagram
                      </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/channel/UClqrsSutkuFFdWIJTSDG1pw" target="_blank">
                      <i class="fa fa-youtube" aria-hidden="true"></i>Youtube
                    </a>
                  </li>
                  <div class="img-trip">
                     <img src="https://kooningtravel.com/img/home/HechoEnMexico.png" class="made-in" alt="echo  en M&eacute;xico" />
                  </div> 
              </ul>

              <ul class="sub-fotter" >
                <h3>FORMAS DE PAGO</h3>
                <li><i class="fa fa-cc-visa" aria-hidden="true" ></i>Visa</li>
                <li><i class="fa fa-cc-mastercard" aria-hidden="true" ></i>Mastercard</li>
                <li><i class="fa fa-paypal" aria-hidden="true" ></i>Paypal</li>
              </ul>

              <ul class="sub-fotter" >
                <h3>CONTÁCTANOS</h3>
                <a class="kooning-contact" href="/Contacto">
                     <img src="https://kooningtravel.com/img/Home/Audifonos.png" alt="Llamanos">
                </a>
                <li><a href="/Contacto">¿Necesitas que te llamemos?</a></li>
                <li><a href="skype:018008908974?call" ><i class="fa fa-phone" aria-hidden="true"></i>01 800 890 8974</a></li>
                <li><a href="mailto:reservaciones@kooningtravel.com" >reservaciones@kooningtravel.com</a></li>
              </ul>

             <di class="info-fotter" ><p>© 2018. Todos los Der// echo s Reservados <strong>Kooning Travel.</strong></p></di>      
         
    </div>

</div>        

 





  </body>
</html>