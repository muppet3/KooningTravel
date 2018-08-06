$(document).ready(function(){

  $("#d").select2({
    placeholder: "Buscar...",
    allowClear: true,
    minimumInputLength: 3,
    ajax: {
      url: "/hotels/searchbyname",
      dataType: 'json',
      //delay: 1,
      data: function (params) {
        return {
          term: params.term // search term
        };
      },
      processResults: function (data) {
        result_set=data;
        return {
          results: data              
        };
      }, 
      cache: true
    },
  }); 

  var result_set;
  
  $("#d").on("select2:select", function (e) {
    var datagood1 = $.grep(result_set[0].children, function (item) {
      return item.selected == true;
    });
    var datagood2 = $.grep(result_set[1].children, function (item) {
      return item.selected == true;
    });
    var recuest_type=typeof(datagood2[0])=='undefined'?datagood1[0].metadata:datagood2[0].metadata;

    $("#type").val(recuest_type);

  }); 

  $( "#contactform" ).on( "submit", function( event ) {

    event.preventDefault();
    var destino = $("#d option:selected").text();  
    destino=destino.replace(/\s/g,"-");
    destino=destino.replace(/\&/g,"");
    destino=destino.replace(/amp;/g,"");

  var url =  window.location.pathname;

    switch (url) { 
    case '/fiestas': 
      var $txt = "/hotels/search/"+destino+"?"+$( this ).serialize();
      $("#liga").text($txt);
      $("#ver").attr("href",$txt);
      event.preventDefault();
      break;
    default:
      $(".wait").show();
      window.location = "/hotels/search/"+destino+"?"+$( this ).serialize();
    }; 


  }); 
     
  $("#enviar1").click(function()  {

     var  destino = $("#d option:selected").text();  
     var sd = $("input[name='sd']").val();  
     var ed = $("input[name='ed']").val(); 

  if(destino == ""){   

       alert('Favor de seleccionar un destino');

     return false;

     } else if ( sd == ""){   

       alert('Favor de Seleccionar Fecha de Entrada');

       $("input[name='sd']").focus();

     return false;

     } else if ( ed == ""){   

        alert('Favor de Seleccionar Fecha de Salida');
        $("input[name='ed']").focus();

     return false;

     } else  {
     $(".wait").show(); 
     $("#contactform").submit();

     }
   });


 });