jQuery(document).ready(function(){
	
	/*primer flip*/
	$( ".package-item-holder .row .four:nth-child(1) .package-media-wrapper" ).addClass( "flip" );
	
	$( ".package-item-holder .row .four:nth-child(1) .package-media-wrapper a:nth-child(1) img" ).addClass( "flip-1" );
	$( ".package-item-holder .row .four:nth-child(1) .package-media-wrapper a:nth-child(2) img" ).addClass( "flip-2" );
	
	
	$('.package-item-holder .row .four:nth-child(1) .package-content-wrapper .package-media-wrapper').append("<a href='http://sipyme.mx/tap/package/comodidad-y-seguridad-con-tap/'><img src='http://sipyme.mx/tap/wp-content/uploads/2015/02/comodidad22.jpg' class='flip-2'></a>");
	
	/*primer flip*/
	
	/*segundo flip*/
	$( ".package-item-holder .row .four:nth-child(2) .package-media-wrapper" ).addClass( "flip" );
	
	$( ".package-item-holder .row .four:nth-child(2) .package-media-wrapper a:nth-child(1) img" ).addClass( "flip-1" );
	$( ".package-item-holder .row .four:nth-child(2) .package-media-wrapper a:nth-child(2) img" ).addClass( "flip-2" );
	
	
	$('.package-item-holder .row .four:nth-child(2) .package-content-wrapper .package-media-wrapper').append("<a href='http://sipyme.mx/tap/package/viaja-a-eua-en-el-mejor-transporte/'><img src='http://sipyme.mx/tap/wp-content/uploads/2015/02/viaja2.jpg' class='flip-2'></a>");
	
	/*segundo flip*/
	
	/*tercero flip*/
	$( ".package-item-holder .row .four:nth-child(3) .package-media-wrapper" ).addClass( "flip" );
	
	$( ".package-item-holder .row .four:nth-child(3) .package-media-wrapper a:nth-child(1) img" ).addClass( "flip-1" );
	$( ".package-item-holder .row .four:nth-child(3) .package-media-wrapper a:nth-child(2) img" ).addClass( "flip-2" );
	
	
	$('.package-item-holder .row .four:nth-child(3) .package-content-wrapper .package-media-wrapper').append("<a href='http://sipyme.mx/tap/package/nuestro-programa-de-lealtad/'><img src='http://sipyme.mx/tap/wp-content/uploads/2015/02/beta.jpg' class='flip-2'></a><div class='clearfix'></div>");
	
	/*tercero flip*/
	
	
	/*TABS*/
	$('#post-3896 div.gdl-page-item .container:nth-child(2)').prepend("<div class='adquiere'><div class='container'>ADQUIERE TUS BOLETOS AQUÍ</div></div>");
	
	//$('#post-3896 div.gdl-tab ul.gdl-tab-title li a.active').prepend("<img class='tri' src='wp-content/themes/tourpackage-v2-00/images/triangulo-azul.png'>");
	
	$( "#post-3896 div.gdl-tab ul.gdl-tab-title li a" ).addClass( "ocultar" );
		
	$('#post-3896 div.gdl-tab ul.gdl-tab-title li a').prepend("<img class='tri' src='wp-content/themes/tourpackage-v2-00/images/triangulo.png'><img class='tri' src='wp-content/themes/tourpackage-v2-00/images/triangulo-azul.png'>");
	
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(1)').hide();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(2)').show();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(2)').hide();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(2)').hide();
	  	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(2)').hide();
		
	$( "#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(1)" ).click(function() {
		//alert()
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(1)').hide();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(2)').show();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(2)').hide();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(2)').hide();
	  	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(2)').hide();
	});
	
	$( "#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2)" ).click(function() {
		//alert()
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(2)').hide();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(1)').hide();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(2)').show();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(2)').hide();
	  	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(2)').hide();
	});
	
	$( "#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3)" ).click(function() {
		//alert()
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(2)').hide();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(2)').hide();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(1)').hide();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(2)').show();
	  	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(2)').hide();
	});
	
	$( "#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4)" ).click(function() {
		//alert()
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:first-child a.ocultar img:nth-child(2)').hide();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(2) a.ocultar img:nth-child(2)').hide();
	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(1)').show();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(3) a.ocultar img:nth-child(2)').hide();
	  	  
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(1)').hide();
	  $('#post-3896 div.gdl-tab ul.gdl-tab-title li:nth-child(4) a.ocultar img:nth-child(2)').show();
	});
	
	
	
	$( "#fecha-salida" ).click(function() {
		datepicker()
	});	
	/*TABS*/
	
/*actualizar al carro*/
function agregar_carro_carro_tienda(cod_producto, cod_categoria, accion) {
	
	var cantidad=$("#cantidad_nueva_"+cod_producto).val();;
	
	var parametros = {
				"cod_producto" : cod_producto,
				"accion" : accion,
				"cantidad" : cantidad
				};
				
	$.ajax({
		data:  parametros,
		url:   'ajax/agregar-carro.php',
		type:  'post',
		beforeSend: function () {
			$('#loading').show();
			$('#side-izquierda').hide();		
		},
		success:  function (response) {	
			$('#loading').hide();
			//$('#side-izquierda').show();
			//$('#side-izquierda').html(response);
			carro_tienda()
				
		}
	});
	/*ajax*/
									
};
/*actualizar al carro*/



	

});