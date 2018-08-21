
@extends('layouts/structure')
@section('content')

	<div class="body-cart" >
		  <!-- You can use Open Graph tags to customize link previews.
	    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
	  <meta property="og:url"           content="https://www.kooningtravel.com" />
	  <meta property="og:type"          content="website" />
	  <meta property="og:title"         content="Hoteles, traslados y tours - Kooning Travel - 01 800 890 8974" />
	  <meta property="og:description"   content="Hoteles, traslados y tours en Cancún, y la Riviera Maya. Elige tus vacaciones entre miles de hoteles y destinos." />
	  <meta property="og:image"         content="https://kooningtravel.com/img/Home/logos/kooning.png" />

	<style type="text/css">
	  .container{ margin:0px; padding:0px; display:inline-block; width:100%; float:left; }
	  #show-passengers-panela span b, .col-md-3 div .ancla{ color:#FFF!important; }
	</style>

	<!-- Thank you new -->
	<div class="great"> 
	    <div class="left">
	      <h1 class="tig" >Comparte con tus amigos tu experiencia Kooning Travel!</h1>
	       <div class="fb-share-button" data-href="https://www.kooningtravel.com" data-layout="button" data-size="large" data-mobile-iframe="true">
	        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.kooningtravel.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"></a>
	      </div>
	        <a href="https://www.kooningtravel.com" class="mas" >Seguir comprando</a>   
	    </div>
	    <div class="right">      
	      <img src="/img/woman.png">
	    </div>
	    <div class="redes">
	     <a href="javascript:void(0);"  class="ti" >Siguenos en nuestras redes sociales</a>
	        <ul>
	            <li><a class="fb" target="_blank" href="https://www.facebook.com/kooningtraveloficial"><img src="/img/fb.png" alt="Facebook"></a></li>
	            <li><a class="tw" target="_blank" href="https://twitter.com/kooningtravel"><img src="/img/inst.png" alt="Tweeter"></a></li>
	            <li><a class="ins" target="_blank" href="https://www.instagram.com/kooningtraveloficial"><img src="/img/tw.png" alt="Instagram"></a></li>
	        </ul>
	    </div>  
	</div>

	  <!-- Load Facebook SDK for JavaScript -->
	  <div id="fb-root"></div>




	</div>

  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


@stop
