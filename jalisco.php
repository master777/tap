<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>	</title>

<style>
.municipios{
      font-size:12px;
      font-family: 'raleway';
      padding:1em 1em;
      background-color:#2C85AF;
      color:#FFFFFF;
}
.direccion{
      font-size:12px;
      font-family: 'raleway';
      padding:1em 4em;
      background-color:#2C85AF;
      color:#FFFFFF;
}
.rellenotabla{
      font-size: 10px;
      padding:1em 1em;
      font-family: 'raleway';
}
.rellenotabla2{
      font-size: 10px;
      padding:1em 3em;
      font-family: 'raleway';
}
.textocolspan{
      font-size:10px;
      font-family: 'raleway';
      background-color:#5AAED0;
      color:#FFFFFF;
      text-align:left;
      padding: 0.5em 1em;
      text-shadow: 1px 1px #000000;
}
body { 
SCROLLBAR-FACE-COLOR:#6699CC; 
SCROLLBAR-HIGHLIGHT-COLOR: #6699CC; 
SCROLLBAR-SHADOW-COLOR: #6699CC; 
SCROLLBAR-3DLIGHT-COLOR: #FFFFFF; 
SCROLLBAR-ARROW-COLOR: #FFFFFF; 
SCROLLBAR-TRACK-COLOR: #E3E3E3; 
SCROLLBAR-DARKSHADOW-COLOR: #000000; 
} 
div.boton_ubicacion{
background-color: #035A9F;
color: #FFFFFF;
}

div.boton_ubicacion:hover{
background-color: #E4E5E6;
color: #035A9F;
}
div#terminales{
display:inline-block;
background-color:#2C85AF;
color:#FFFFFF;
font-family: 'raleway';
font-size:14px;padding:5px 15px;
cursor:pointer; 
cursor: hand;
margin-right:-4px;
}
div#terminales:hover{
background-color: #E4E5E6;
color: #035A9F;   
}
div#centros{
display:inline-block;
background-color:#2C85AF;
color:#FFFFFF;
font-family: 'raleway';
font-size:14px;
padding:5px 15px;
cursor:pointer; 
cursor: hand;
margin-right:-4px;
}
div#centros:hover{
background-color: #E4E5E6;
color: #035A9F;   
}
div#agencias{
display:inline-block;
background-color:#2C85AF;
color:#FFFFFF;
font-family: 'raleway';
font-size:14px;
padding:5px 15px;
cursor:pointer; 
cursor: hand;
margin-right:-4px;
}
div#agencias:hover{
background-color: #E4E5E6;
color: #035A9F;   
}
div#oxxo{
display:inline-block;
background-color:#2C85AF;
color:#FFFFFF;
font-family: 'raleway';
font-size:14px;
padding:5px 15px;
cursor:pointer; 
cursor: hand;
margin-right:-4px;
}
div#oxxo:hover{
background-color: #E4E5E6;
color: #035A9F;   
}

</style>

</head>
<body>
<div style="width:100%;border:1px solid #BDBDBD;text-align:center;overflow:hidden;float:right">


 <div id="terminales" >Terminales y Centrales</div> 

 <div id="centros" >Centros Comerciales</div> 

 <div id="agencias" >Agencias de Viajes</div> 

 <div id="oxxo" >Oxxo</div>



<!-- ===========================================TERMINALES Y CENTRALES================================================================= -->

<div id="mostrartermi" style="display:block">
        
        <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/terminales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">TERMINALES Y CENTRALES</p>
                <p style="color:#1959A0;font-weight:bold">JALISCO</p></div>
            </div>

      <div style="display:inline-block;width:100%;font-family: 'raleway';">
            
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Guadalajara</p>
                  <p>Carretera Libre a Zaplotlanejo <br>
                        y entronque a carretera Tonalá <br>
                        en el módulo 1 1/2 <br>
                        Tel: 01(33) 36 68 59 00 Ext. 2200</p>
            </div>
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Terminal Milenio Zapopan</p>
                  <p>Carretera a Nogales #1110 <br>
                       Colonia San Juan de Ocotán<br>
                        Tel: 01(33) 31 10 14 86</p>
            </div>
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Puerto Vallarta</p>
                  <p>Carretera Puerto Vallarta-Tepic <br>
                       Km 9 Col. Las Mojoneras<br>
                        Tel: 01(322) 290 01 19</p>
            </div>
      </div>

</div>

<!-- =================================================CENTROS COMERCIALES=================================================================== -->

<div id="mostrarcentros" style="display:none">
            
            <div style="display:block;text-align:center;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/comerciales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">CENTROS COMERCIALES</p>
                <p style="color:#1959A0;font-weight:bold">JALISCO</p></div>
            </div>

            <div style="display:inline-block;font-family: 'raleway';width:100%;text-align:center">
                  
                  <div style="display:inline-block;font-size:15px;text-align:left;padding:10px">
                        <img style="width:100px" src="img/bodega_aurrera.png" alt="">
                        <p style="font-weight:bold;">•Belisario Domínguez</p>
                        <p>Belizario Domínguez 1651 <br>
                              Col. Monumental C.P 44381 <br>
                              Tel. 01 (33) 36 38 34 01</p>
                  </div>
                  <div style="display:inline-block;font-size:15px;text-align:left;padding:10px">
                        <img style="width:100px" src="img/walmart.png" alt="">
                        <p style="font-weight:bold;"> •Ávila Camacho</p>
                        <p>Av. Manuel Ávila Camacho <br>
                              No 2770 Fracc. Seatle C.P 2800 <br>
                              Tel. 01(33) 31 11 04 79</p>
                  </div>
                  <div style="display:inline-block;font-size:15px;text-align:left;padding:10px">
                        <img style="width:100px" src="img/walmart.png" alt="">
                        <p style="font-weight:bold;">•Niño Obrero</p>
                        <p>Av. Niño Obrero No 1551 <br>
                              Col. Chapalita C.P 45050 <br>
                              Tel. 01(33) 31 23 29 21</p>
                  </div>
                  <div style="display:inline-block;font-size:15px;text-align:left;padding:10px">
                        <img style="width:100px" src="img/walmart.png" alt="">
                        <p style="font-weight:bold;">•La Cima</p>
                        <p>Juan Gil Preciado No. 1544 <br>
                              Entre Las Calles A La Cima Y <br> Arcos Escocés, <br>
                              Fracc. La Cima <br>
                              C.P 45130, Zapopan, Jalisco <br>
                              Tel. 01(33) 33 64 16 73</p>
                  </div>
                  <div style="display:inline-block;font-size:15px;text-align:left;padding:10px">
                        <img style="width:100px" src="img/walmart.png" alt="">
                        <p style="font-weight:bold;">•16 de Septiembre</p>
                        <p>Czda. Independencia Sur No.916 <br>
                              Col. Barragán y Hernández <br>
                              Tel. 01(33) 36 14 54 87</p>
                  </div>
                  <div style="display:inline-block;font-size:15px;text-align:left;padding:10px">
                        <img style="width:100px" src="img/walmart.png" alt="">
                        <p style="font-weight:bold;">•Puerto Vallarta: Pitallal</p>
                        <p>Blvd. Francisco Medina Ascencio 2900 <br>
                              Col. Zona Hotelera Norte C.P 48290 <br>
                              Tel.01(33) 22 21 16 02</p>
                  </div>
                  <div style="display:inline-block;font-size:15px;text-align:left;padding:10px">
                        <img style="width:100px" src="img/walmart.png" alt="">
                        <p style="font-weight:bold;">•Galerías</p>
                        <p>Av. Vallarta No. 5455 <br>
                              Fracc. La Estancia <br>
                              Tel. 01(33) 31 10 67 83</p>
                  </div>

            </div>

</div>

<!-- =================================================AGENCIAS DE VIAJES=============================================================== -->

<div id="mostraragencias" style="display:none">
            
            <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/agencias.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">AGENCIAS DE VIAJES</p>
                <p style="color:#1959A0;font-weight:bold">JALISCO</p></div>
            </div>

            <table>
                  <tr>
                        <td class="municipios">MUNICIPIO</td>
                        <td class="municipios">COLONIA</td>
                        <td class="direccion">DIRECCIÓN</td>
                        <td class="municipios">TELÉFONO 1</td>
                        <td class="municipios">TELÉFONO 2</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:VIAJES AMECATL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">AMECA</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">J. GUALDALUPE VAZQUEZ N 8</td>
                        <td class="rellenotabla">3757580951</td>
                        <td class="rellenotabla">3757581204</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:MONARA VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">AMECA</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">PORTAL GUERRERO N 9</td>
                        <td class="rellenotabla">3757580175</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:AZTECA REAL TRAVEL SUC 2</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ARANDAS</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">MEDINA ASCENCIO N 471 LOC 25</td>
                        <td class="rellenotabla">3487830001</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:VIAJES LUCERO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">GUADALAJARA</td>
                        <td class="rellenotabla">OBLATOS</td>
                        <td class="rellenotabla2">CASILIO BADILLO 423</td>
                        <td class="rellenotabla">3336498945</td>
                        <td class="rellenotabla">3336446754</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:TURISMO OBLATOS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">GUADALAJARA</td>
                        <td class="rellenotabla">OBLATOS</td>
                        <td class="rellenotabla2">AV CIRCUNVALACION 2700-3</td>
                        <td class="rellenotabla">3336492826</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:TITI AGENCIA DE VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">GUADALAJARA</td>
                        <td class="rellenotabla">OBLATOS</td>
                        <td class="rellenotabla2">ESTEBAN DE LOERA 185</td>
                        <td class="rellenotabla">3336174009</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:VIAJES FORUM</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">GUADALAJARA</td>
                        <td class="rellenotabla">OBLATOS</td>
                        <td class="rellenotabla2">HACIENDA DE SANTIAGO N 2308</td>
                        <td class="rellenotabla">3336379636</td>
                        <td class="rellenotabla">3336385764</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:VIAJES LUCERO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">GUADALAJARA</td>
                        <td class="rellenotabla">OBLATOS</td>
                        <td class="rellenotabla2">CASILIO BADILLO 423</td>
                        <td class="rellenotabla">3336498945</td>
                        <td class="rellenotabla">3336446754</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia:TURISMO OBLATOS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">GUADALAJARA</td>
                        <td class="rellenotabla">OBLATOS</td>
                        <td class="rellenotabla2">AV CIRCUNVALACION 2700-3</td>
                        <td class="rellenotabla">3336492826</td>
                        <td class="rellenotabla"></td>
                  </tr>

            </table>

</div>

<!-- =================================================OXXO======================================================================== -->

<div id="mostraroxxo" style="display:none">
      
            <p style="font-family:'helvetica','raleway'">Adquiere tus boletos de autobus TAP en las tiendas Oxxo.</p>

</div>


</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
	
	$(function(){
       $('#oxxo').on('click', mostraroxo);

       function mostraroxo(){
       	$('#mostraroxxo').css('display', 'block');
       	$('#mostrartermi').css('display', 'none');
       	$('#mostraragencias').css('display', 'none');
       	$('#mostrarcentros').css('display', 'none');
       } ;
      
      $('#agencias').on('click',mostraragen);

      	function mostraragen(){
       	$('#mostraragencias').css('display', 'block');
       	$('#mostraroxxo').css('display', 'none');
       	$('#mostrartermi').css('display', 'none');
       	$('#mostrarcentros').css('display', 'none');
       } ;

       $('#centros').on('click',mostrarcen);

      	function mostrarcen(){
       	$('#mostrarcentros').css('display', 'block');
       	$('#mostraroxxo').css('display', 'none');
       	$('#mostrartermi').css('display', 'none');
       	$('#mostraragencias').css('display', 'none');
       } ;

       $('#terminales').on('click',mostrarter);

       function mostrarter (){
       	$('#mostrartermi').css('display', 'block');
       	$('#mostraroxxo').css('display', 'none');
       	$('#mostraragencias').css('display', 'none');
       	$('#mostrarcentros').css('display', 'none');
       	

       }
      

	});


</script>
</body>
</html>