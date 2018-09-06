

  		var lati=21.0403825;
  		var longi = -86.8730981;
  		var latid= 21.08971600000000000000;
  		var longid= -86.77087900000000000000;

      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 20,
          center: {lat: lati, lng: longi}
        });
        directionsDisplay.setMap(map);        
          var waypts = [];
        directionsService.route({
         // origin: 'Aeropuerto Internacional de Cancún',
         origin:{lat: lati, lng: longi},
          destination: {lat: parseFloat(latid), lng: parseFloat(longid)},
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

$(document).ready(function(){


//funcion calcular precio traslado
function precio(){

	var tipoentrada= "_token="+$('input[name=_token]').val()+"&ciudad=" + $('input[name=destino]').val()  +"&tipo="+$('select[name=clase]').val()+"&cantidad="+$('select[name=cantidad]').val()+"&servicio="+$('select[name=servicio]').val();
		 
		 $.ajax ( {
				url: '/traslado/price',
				type: 'POST',
				data: tipoentrada,
				success: function (response) {
       				$(".money").text("$ "+response);
					$("#total").val(response);
    			},
    			error: function (data, textStatus, errorThrown) {
        			console.log(data);
    			},
    		});
}

$('select[name=entrada]').change(function(){

	var tipoentrada= "_token="+$('input[name=_token]').val()+"&entrada=" + $('select[name=entrada]').val();
		 
		 $.ajax ( {
				url: '/activity/price',
				type: 'POST',
				data: tipoentrada,
				success: function (response) {
					console.log(response);
					var response =JSON.parse(response);
       				$("#adulto").text(response.Adult);
					$("#menor").text(response.Child);
    			},
    			error: function (data, textStatus, errorThrown) {
        			console.log(data);
    			},
    		});
	});



function initMap2() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 20,
          center: {lat: lati, lng: longi}
        });
        directionsDisplay.setMap(map);   
        calculateAndDisplayRoute(directionsService,directionsDisplay);
          
      }
      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
      
        var waypts = [];
        directionsService.route({
         // origin: 'Aeropuerto Internacional de Cancún',
         origin:{lat: lati, lng: longi},
          destination: {lat: parseFloat(latid), lng: parseFloat(longid)},
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

	$("#result").hide();

 $.ajaxSetup({ cache: false });

	 $('#hotel').keyup(function(){
	 $("#result").show();
	  $('#result').html('');
	  //$('#state').val('');
	  var searchField = $('#hotel').val();
	  var expression = new RegExp(searchField, "i");
		  $.getJSON('/js/Hoteles/HotelesTraslado.json', function(data) {
		   $.each(data, function(key, value){

		   	var hotel = $('#hotel').val();
		 	
				   	if ( hotel != "" ) {

				    if (value.Nombre.search(expression) != -1 || value.Destino.search(expression) != -1)
				    {
						
						$('#result').append('<li class="list-group" > ' + value.Nombre + ' | '+ value.Destino+' </li> <p id="lat" style="display:none;" >' + value.Latitude + '</p>' + '<p id="lon" style="display:none;" >' + value.Longitude + '</p>' + '<p id="dest" style="display:none;" >' + value.Destino + '</p>');
				    }

					}else{

						  $('#result').hide();
						  $('#hotel, #latitud, #longitud, #destino').val("");						 
					}
		  	 });   
		  }); 
	 });
  
	 $('#result').on('click', 'li', function() {

		  var text = $(this).text();
		  latid = $(this).next().text();
		  longid = $(this).next().next().text();
		  var dest = $(this).next().next().next().text();
		  initMap2();
		  $('#hotel').val(text);
		  $('#latitud').val(latid);
		  $('#longitud').val(longid);		
 		  $('#destino').val(dest);			

		  $("#result").hide();
		  $("#result").html('');
		  precio();
	 });


	$('.carousel').jcarousel({ wrap: 'circular' });
	$('.carousel-prev').jcarouselControl({ target: '-=1' });
	$('.carousel-next').jcarouselControl({ target: '+=1' });
	$('.carousel-prev, .carousel-next').click(function() {
		$(this).parent().children('.carousel-prev').removeClass('disabled');
	});
	// Small Set
	$('.carousel ul').each(function( index ) {
		if ( $(this).children().length < 5 ) {
			$(this).parent().parent().addClass('small-set').children('a').remove();
		}
	});


	var url =  window.location.pathname.substr(9);	

	var cont = "<div class='sliderp'><div class='center'><span class='prevControl'>...</span><span class='nextControl'>..</span></div><div class='cycle-slideshow' data-cycle-fx=scrollHorz data-cycle-timeout=0 data-cycle-prev='.prevControl'data-cycle-next='.nextControl'><img src='https://kooningtravel.com/img/tour/parques/Circus-Soleil/cal2.png'><img src='https://kooningtravel.com/img/tour/parques/Circus-Soleil/cal3.png'><img src='https://kooningtravel.com/img/tour/parques/Circus-Soleil/cal4.png'></div></div>";	

	switch (url) { 		
		case 'Cirque-Soleil-': 
				$("#header").append(cont);
				break;	
		case 'Cirque-Soleil': 
				$("#header").append(cont);
				break;	
		case 'Cirque-Du-Soleil': 
				$("#header").append(cont);
				break;	
}; 

	
  $("#servicio").change(function () {
			precio();
	        $txt = $(this).find(":selected").text();

	        var simple1 = "/img/Traslados/simple1.png"; // hotel - aeropuerto
	        var simple2 = "/img/Traslados/simple2.png"; // aeropuerto - hotel
	        var round = "/img/Traslados/round2.png"; 	// Redondo

	        if ($txt =="Sencillo" ){  

	        	$(".roundt").hide();
	 			$(".change").attr("src",simple1);
	 			$(".img2t").attr("src",simple2);
	        }

			if ($txt =="Redondo" ){
	        		$(".right .change").attr("src",round);
	        		$(".roundt").show();	        		
	        }
	});


 $("select[name='clase'], select[name='cantidad']").change(function () {	 	

	 	precio();

	 	txt = $(this).find(":selected").text(); 

			if( txt == "Van" ){

					$("#tsm").text("10");

				} else if ( txt == "Escalade" ){

					$("#tsm").text("7");

				} else if( txt == "Suburban" ){

					$("#tsm").text("8");

				} else if( txt == "Sprinter" ){

					$("#tsm").text("19");
			 
				}
	});


//Validar envio de Traslados 

	$("#traslados").click(function(){

			var hotel = $("#hotel").val();
			var sd = $("input[name='sd']").val();
			//var ed = $("input[name='ed']").val();
			var clase = $("select[name='clase']").find(":selected").val();

		if( hotel == "" ){

			alert("Favor de buscar su hotel");

			$("#hotel").focus();
			return false;

			} else if( sd == "" ){

				$("input[name='sd']").focus();
				return false;
		 
			}  else if( clase == 0 ){

				alert("Favor de selecionar el tipo de camioneta");
				return false;

			} else{

			$("body").append('<div class="alert alert-success"><strong>Producto Agregado al Carrito!</strong></div>');
			var div = $(".alert");
	        div.animate({top: '20px'}, "slow");
	        div.animate({right: '40px'}, "slow");
			$(".alert").delay(100).fadeOut("slow");	

			alert("Producto agregado al Carrito!");

			$(".roundt").show();
				
			}
	});


$("#addcart").click(function(){

	if( $("#cal").val() == "" ){

		$("#cal").focus();
		return false;

	}else{

		alert("Producto agregado al Carrito!");

		$("body").append('<div class="alert alert-success"><strong>Producto Agregado al Carrito!</strong></div>');
		var div = $(".alert");
        div.animate({top: '20px'}, "slow");
        div.animate({right: '40px'}, "slow");
		$(".alert").delay(100).fadeOut("slow");	
	}	

});



});