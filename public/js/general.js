/*														^^^	   	  ___	   ---
	***** Autores ******							   {"_"}  	 {^_^}    {º_º}
	-> Ing. Jonas Santiz L. 			| UTC		    --    	  -- 	   --
	-> Ing. Fernando Morales Robles.	| UPQROO	   <(Ø)>;	 <(^)>;	  <(/)>;
	-> Lic. Alan E. Gonzalez.			| UVM		   _| |_ 	  | |     _| |_
													   .js		  .php     Adobe
					
												<---https://www.kooningtravel.com 2018--->
																¯\_(ツ)_/¯

										************ Reestructuración - 01/08/2018 - *************
*/


 setRandomClass(); setInterval(function () { setRandomClass(); }, 2000); function setRandomClass() {var list = $(".ve-destinos-list");var items = list.find("a");var number = items.length;var random = Math.floor((Math.random() * number));items.removeClass("active");items.eq(random).addClass("active");}

$(document).ready(function () {	



 if ( screen.width < 1200 )  {  window.location = "https://m.kooningtravel.com/";  }




function disableSelection(target){
    $(function() {
         $(this).bind("contextmenu", function(e) {
             e.preventDefault();
         });
     }); 
     if (typeof target.onselectstart!="undefined") //For IE 
          target.onselectstart=function(){return false}
     else if (typeof target.style.MozUserSelect!="undefined") //For Firefox
          target.style.MozUserSelect="none"
     else //All other route (For Opera)
          target.onmousedown=function(){return false}
     target.style.cursor = "default";
}

/*
disableSelection(document.body);

	$(document).on({
    "contextmenu": function(e) {
      //  console.log("ctx menu button:", e.which); 

        // Stop the context menu
        e.preventDefault();
    },
    "mousedown": function(e) { 
       // console.log("normal mouse down:", e.which); 
    },
    "mouseup": function(e) { 
       // console.log("normal mouse up:", e.which); 
    }
});
*/

	// Begin Temporales 
	var url =  window.location.pathname;	

	switch (url) { 		
		case '/tours': 
				$("#btour").show();
				break;	
			case '/Contacto': 
					$(".container").eq(1).css({'margin':'0px','padding':'0px','width':'100%'});
					$("#imgt").attr("src", "https://www.kooningtravel.com/img/contactanos.jpg");
					break;	
			case '/contacto': 
					$(".container").eq(1).css({'margin':'0px','padding':'0px','width':'100%'});
					$("#imgt").attr("src", "https://www.kooningtravel.com/img/contactanos.jpg");
					break;						
			case '/Traslado': 
					$(".template").css("background-image", "none");
					break;
			case '/traslado': 
					$(".template").css("background-image", "none");
					break;					
			case '/mapa': 
					$(".template").css("background-image", "none");					
					break;	
			case '/Mapa': 
					$(".template").css("background-image", "none");
					break;
			case '/Gracias': 
					$(".template").css("background-image", "none");
					$(".col-md-3 .logo img").attr("src", "https://kooningtravel.com/img/Home/logos/kooning.png");
					$(".template").css("background", "#1d262c");
					break;
			case '/gracias': 
					$(".template").css("background-image", "none");
					$(".col-md-3 .logo img").attr("src", "https://kooningtravel.com/img/Home/logos/kooning.png");
					$(".template").css("background", "#1d262c");
					break;	
			case '/Blog': 			
					$(".hid").hide();
					$(".container").addClass("blogg");
					$("body").addClass("inpuMotor");
					$(".ocultame-movil .caja").addClass("blogk");		
					$(".ocultame-movil footer .container, .barra-superior").removeClass("blogg");
					break;
			case '/site-map': 
						$(".container").eq(1).css({'background':' url("/img/mapa.jpg") no-repeat 0px 0px transparent/100%','margin':'0px','display':'inline-block','padding':'0px','width':'100%','text-align':'center', 'height':'auto'});					
					break;
			case '/Site-Map': 
						$(".container").eq(1).css({'background':' url("/img/mapa.jpg") no-repeat 0px 0px transparent/100%','margin':'0px','display':'inline-block','padding':'0px','width':'100%','text-align':'center', 'height':'auto'});						
					break;					
			default:
			$("#btour").hide();
}; 

		$("#shopcart").hover(function(){
				$(".contt").fadeIn("slow");
		}, function(){ $(".contt").fadeOut("slow");		
	});

	$("#fakeInput").click(function(){ 	$("#banco-select").toggle(); });		

	// CONFIG DE https://www.kooningtravel.com/Reservacion
	$("#AMEX12").click(function(){

		var amex = "/img/complements/extras/bancos/1pago_m.png";

		$("#banco-select .hidde").hide();
		$("#fakeInput .selectedBank strong").text("American Express");
		$("#banco-select .otherBank strong").text("American Express");
		$("#fakeInput .selectedBank .logoBank img").attr('src',amex);
		$("#banco-select").css("height","auto");
		$("#first-fop .ts").hide();
		
	});
	$("#BC7, #SANTM24").click(function(){
		$("#banco-select .hidde").show();
		$("#fakeInput .selectedBank strong").text("Todo los Bancos");
		$("#banco-select .otherBank strong").text("Todo los Bancos");
		$("#banco-select").css("height","250px");
		$("#first-fop .ts").show();
	});

	$("#banco-select li").click(function(){

		var img = $(this).find('img').get(0).src;
		var txt = $(this).text();	

		$("#fakeInput .selectedBank strong").text(txt);
		$("#fakeInput .selectedBank .logoBank img").attr('src',img);
		$("#banco-select").hide();
	});


	$("#rad-payment-form li").click(function(){

		$("#rad-payment-form li").removeClass("selected");
		$(this,"#rad-payment-form li").addClass("selected");

	});

	$(".amer").click(function(){
		$(".ame").hide();
	});

	$(".allc").click(function(){
		$(".ame").show();
		$("#first-fop .ts").show();
	});	

	$("#credit2").click(function(){

		$( "#BC7" ).prop("checked", true).trigger("click");
		$("#banco-select").css("height","250px");
		$("#first-fop .ts").hide();

	});


	//MAYALAND
 	$("#id74").click(function(event) { 
		 $("tbody tr td:nth-child(1), tbody tr td:nth-child(3),tbody tr td:nth-child(5),tbody tr td:nth-child(7) ").addClass('ui-datepicker-unselectable ui-state-disabled').html('<span class="ui-state-default">X</span>');
	}); 
			


	$("#id75").click(function(event) {
		$("tbody tr td:nth-child(1), tbody tr td:nth-child(2),tbody tr td:nth-child(3),tbody tr td:nth-child(5),tbody tr td:nth-child(6),tbody tr td:nth-child(7)").addClass('ui-datepicker-unselectable ui-state-disabled').html('<span class="ui-state-default">X</span>');	
	});


	$("#id76").click(function(event) {
		$("tbody tr td:nth-child(2), tbody tr td:nth-child(3),tbody tr td:nth-child(4),tbody tr td:nth-child(5),tbody tr td:nth-child(6)").addClass('ui-datepicker-unselectable ui-state-disabled').html('<span class="ui-state-default">X</span>');	
	});


	$(".contact .mx, .tel .zone" ).hover(function() { 

	 $(".tel .zone").toggle();

	  }); 

	

	//Parques
	$(".park, .nav1").hover(function(){ $(".nav1").toggle(); });

	//Sub Parques	
	$(".xperiencia").hover(function(){
			$(".xperiencia .sublist").show();
		}, function(){
			$(".xperiencia .sublist").hide();
	});
	
	$(".dophin").hover(function(){
			$(".dophin .sublist").show();
		}, function(){
			$(".dophin .sublist").hide();
	});

	$(".riosecreto").hover(function(){
			$(".riosecreto .sublist").show();
		}, function(){
			$(".riosecreto .sublist").hide();
	});

	$(".cirque").hover(function(){
			$(".cirque .sublist").show();
		}, function(){
			$(".cirque .sublist").hide();
	});


	//Tours
	$(".tour2, .nav2").hover(function(){ $(".nav2").toggle(); });

	$(".mayalandt").hover(function(){
			$(".mayalandt .sublist").show();
		}, function(){
			$(".mayalandt .sublist").hide();
	});

	$(".ctag").hover(function(){
		 $(this).parent().toggleClass('active');
		}, function(){
		 $(this).parent().toggleClass('active');
	});


//Explora 

	$(".nav li a .aca, .ve-destinos-list .acapulco").hover(function(){
			$(".ve-destinos-list .acapulco").css({ "background-image": "url(/img/explora/acapulco.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .acapulco").css({ "background": "transparent", "width": "9px","height": "9px", "margin-top": "-4px", "margin-left": "-4px", "border": "2px solid #4C698F" });
	});

	$(".nav li a .can, .ve-destinos-list .cancun").hover(function(){
			$(".ve-destinos-list .cancun").css({ "background-image": "url(/img/explora/cancun.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .cancun").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #2dcef6" });
	});

	$(".nav li a .cdmx, .ve-destinos-list .cdmx").hover(function(){
			$(".ve-destinos-list .cdmx").css({ "background-image": "url(/img/explora/cdmx.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .cdmx").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #2dcef6" });
	});

	$(".nav li a .guad, .ve-destinos-list .guadalajara").hover(function(){
			$(".ve-destinos-list .guadalajara").css({ "background-image": "url(/img/explora/guadalajara.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .guadalajara").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #eb1c74" });
	});
	 
	$(".nav li a .guan, .ve-destinos-list .guanajuato").hover(function(){
			$(".ve-destinos-list .guanajuato").css({ "background-image": "url(/img/explora/guanajuato.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .guanajuato").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #eb1c74" });
	});	

	$(".nav li a .holb, .ve-destinos-list .holbox").hover(function(){
			$(".ve-destinos-list .holbox").css({ "background-image": "url(/img/explora/holbox.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .holbox").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #0d72ff" });
	});		

	$(".nav li a .huat, .ve-destinos-list .huatulco").hover(function(){
			$(".ve-destinos-list .huatulco").css({ "background-image": "url(/img/explora/huatulco.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .huatulco").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #0d72ff" });
	});	

	$(".nav li a .isla, .ve-destinos-list .isla").hover(function(){
			$(".ve-destinos-list .isla").css({ "background-image": "url(/img/explora/islamujeres.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .isla").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #fd4f00" });
	});

	$(".nav li a .lore, .ve-destinos-list .loreto").hover(function(){
			$(".ve-destinos-list .loreto").css({ "background-image": "url(/img/explora/loretobc.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .loreto").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #2dcef6" });
	});

	$(".nav li a .lcab, .ve-destinos-list .lcabos").hover(function(){
			$(".ve-destinos-list .lcabos").css({ "background-image": "url(/img/explora/loscabos.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .lcabos").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #fd4f00" });
	});

	$(".nav li a .maza, .ve-destinos-list .mazatlan").hover(function(){
			$(".ve-destinos-list .mazatlan").css({ "background-image": "url(/img/explora/mazatlan.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .mazatlan").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #2dcef6" });
	});

	$(".nav li a .meri, .ve-destinos-list .merida").hover(function(){
			$(".ve-destinos-list .merida").css({ "background-image": "url(/img/explora/merida.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .merida").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #eb1c74" });
	});

	$(".nav li a .mont, .ve-destinos-list .monterrey").hover(function(){
			$(".ve-destinos-list .monterrey").css({ "background-image": "url(/img/explora/monterrey.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .monterrey").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #4C698F" });
	});

	$(".nav li a .more, .ve-destinos-list .morelia").hover(function(){
			$(".ve-destinos-list .morelia").css({ "background-image": "url(/img/explora/morelia.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .morelia").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #2dcef6" });
	});

	$(".nav li a .oaxa, .ve-destinos-list .oaxaca").hover(function(){
			$(".ve-destinos-list .oaxaca").css({ "background-image": "url(/img/explora/oaxaca.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .oaxaca").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #2dcef6" });
	});

	$(".nav li a .play, .ve-destinos-list .pcarmen").hover(function(){
			$(".ve-destinos-list .pcarmen").css({ "background-image": "url(/img/explora/playacarmen.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .pcarmen").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #eb1c74" });
	});

	$(".nav li a .pueb, .ve-destinos-list .puebla").hover(function(){
			$(".ve-destinos-list .puebla").css({ "background-image": "url(/img/explora/puebla.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .puebla").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #eb1c74" });
	});

	$(".nav li a .puer, .ve-destinos-list .pvallarta").hover(function(){
			$(".ve-destinos-list .pvallarta").css({ "background-image": "url(/img/explora/puertovallarta.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .pvallarta").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #0d72ff" });
	});

	$(".nav li a .quer, .ve-destinos-list .queretaro").hover(function(){
			$(".ve-destinos-list .queretaro").css({ "background-image": "url(/img/explora/queretaro.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .queretaro").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #0d72ff" });
	});

	$(".nav li a .rina, .ve-destinos-list .rnayarit").hover(function(){
			$(".ve-destinos-list .rnayarit").css({ "background-image": "url(/img/explora/rivieranayarit.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .rnayarit").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #2dcef6" });
	});

	$(".nav li a .sanm, .ve-destinos-list .smiguel").hover(function(){
			$(".ve-destinos-list .smiguel").css({ "background-image": "url(/img/explora/sanmiguelallende.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .smiguel").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #fd4f00" });
	});

	$(".nav li a .taxc, .ve-destinos-list .taxco").hover(function(){
			$(".ve-destinos-list .taxco").css({ "background-image": "url(/img/explora/taxco.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .taxco").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #2dcef6" });
	});
	 
	$(".nav li a .valle, .ve-destinos-list .vbravo").hover(function(){
			$(".ve-destinos-list .vbravo").css({ "background-image": "url(/img/explora/vallebravo.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .vbravo").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #eb1c74" });
	});

	$(".nav li a .vera, .ve-destinos-list .veracruz").hover(function(){
			$(".ve-destinos-list .veracruz").css({ "background-image": "url(/img/explora/veracruz.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .veracruz").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #4C698F" });
	});

	$(".nav li a .rima, .ve-destinos-list .rmaya").hover(function(){
			$(".ve-destinos-list .rmaya").css({ "background-image": "url(/img/explora/rivieramaya.jpg)", "width": "50px", "height": "50px", "margin-top": "-25px", "margin-left": "-25px", "box-shadow": "0 1px 15px rgba(0, 0, 0, 0.15)", "border": "2px solid #fff", "background-color": "#fff", "background-position": "0 0", "background-repeat": "no-repeat", "z-index": "0" });
		}, function(){
			$(".ve-destinos-list .rmaya").css({ "background": "transparent", "width": "9px", "height": "9px", "margin-top": "-9px", "margin-left": "-9px", "border": "2px solid #4C698F" });
	});


	$(".bloqueh a").click(function(){ $(".wait").show(); });

	$(".bg-home li a").click(function(){
		$(".espere").show();
	});

	function isValidEmail(mail) { 
	  return /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail); 
	}


	$("#enviac").click(function(){

			var Nombre = $("input[name='Nombre']").val();
			var Correo = $("input[name='Correo']").val();
			var Telefono = $("input[name='Telefono']").val();
			var Mensaje = $("#conatcton textarea").val();

			var fill = isValidEmail(Correo);

				if ( Nombre == "" ){
					alert("¡Favor de escribir su nombre!");
					$("input[name='Nombre']").focus();
					return false;

				} else if ( fill =="" ){
					alert("¡Formao de correo no valido!!");
					$("input[name='Correo']").focus();
					return false;

				} else if( isNaN($("input[name='Telefono']").val() ) || Telefono =="" || $("input[name='Telefono']").val().length < 10)	{
					alert("¡Ingrese un numero de teléfono valido!");
					$("input[name='Telefono']").focus();
					return false;

				}else{
					
					 
				}

		});


	$(".centt .close").click(function(){$(".bagro").hide();});

	$("input[name='enviar']").click(function(){ 	});


function closeMe(){
	var win=window.open("https://www.google.com","_self");
	win.close();
}

	$("#nthank").click(function(){

		closeMe();

	});

	$('#telefono, .imput input').on('input', function () { 
	    this.value = this.value.replace(/[^0-9]/g,'');
	});


		$("#btn_pagar").click(function(){

			var correo = $("#correo").val();
			var telefono = $("input[name='telefono']").val();
			var fil = isValidEmail(correo);

		 if ( fil =="" ){
				alert("¡Formato de correo no valido!");
				$("input[name='correo']").focus();
				return false;

			} else 
			 if( isNaN($("input[name='telefono']").val() ) || telefono =="" || $("input[name='telefono']").val().length < 10) {
				alert("¡Ingrese un numero de teléfono valido!");
				$("input[name='telefono']").focus();
				return false;

			}else{

				$("#step-1").hide();
				$("#step1").removeClass("active")
				$("#step-2").show();
				$("#step1").addClass("active")


				return true;
			}
	});	



		


});



