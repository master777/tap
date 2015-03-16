<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>	</title>

<style>
.municipios{
      font-size:12px;
      font-family: 'helvetica','raleway';
      padding:1em 1em;
      background-color:#2C85AF;
      color:#FFFFFF;
}
.direccion{
      font-size:12px;
      font-family: 'helvetica','raleway';
      padding:1em 4em;
      background-color:#2C85AF;
      color:#FFFFFF;
}
.rellenotabla{
      font-size: 10px;
      padding:1em 1em;
      font-family: 'helvetica','raleway';
}
.rellenotabla2{
      font-size: 10px;
      padding:1em 3em;
      font-family: 'helvetica','raleway';
}
.textocolspan{
      font-size:10px;
      font-family: 'helvetica','raleway';
      background-color:#5AAED0;
      color:#FFFFFF;
      text-align:left;
      padding: 0.5em 1em;
      text-shadow: 1px 1px #000000;
}
@font-face {
font-family: 'helvetica';
src: url('fonts/helvetica-b.eot'); /* IE9 Compat Modes */
src: url('fonts/helvetica-b.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
url('fonts/helveticaneue-webfont.woff') format('woff'), /* Modern Browsers */
url('fonts/HELVE6.ttf')  format('truetype'), /* Safari, Android, iOS */
url('fonts/Helvetica_Neue_typeface_weights.svg#svgFontName') format('svg'); /* Legacy iOS */
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

<h2 style="font-family:'raleway'">UBICACIÓN</h2>
<hr style="background-color:#005DAB; height: 2px; width:250px;float:left;font-family: 'raleway', 'Times New Roman', serif;">
<div style="display:inline-block;width:100%">

<div style="width:250px;display:inline-block;float:left;font-family: 'raleway';font-size:13px;font-weight:bold">
      <div id="bajacalifornia"  class="boton_ubicacion" style="margin: 1px 0 1px 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:bottom;margin-left:2em;cursor:pointer">Baja California</label> </div>
      <div id="sonora" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Sonora</label> </div>
      <div id="sinaloa" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Sinaloa</label> </div>
      <div id="nayarit" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Nayarit</label> </div>
      <div id="jalisco2" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Jalisco</label> </div>
      <div id="michoacan" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Michoacán</label> </div>
      <div id="estadomexico" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Estado de México</label> </div>
      <div id="df" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Distrito Federal</label> </div>
      <div id="aguascalientes" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Aguascalientes</label> </div>
      <div id="colima" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Colima</label> </div>
      <div id="guanajuato" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Guanajuato</label> </div>
      <div id="hidalgo" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Hidalgo</label> </div>
      <div id="queretaro" class="boton_ubicacion" style="margin:2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Querétaro</label> </div>
      <div id="potosi"class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em">San Luis Potosí</label> </div>
      <div id="zacatecas" class="boton_ubicacion" style="margin: 2px 0 0 0;height:2em;padding-top:0.8em;cursor:pointer; cursor: hand"> <label style="text-decoration:none;vertical-align:middle;margin-left:2em;cursor:pointer">Zacatecas</label> </div>
      
</div>

<!-- ===========================================CONTENIDO IZQUIERDO================================================================= -->
<div id="jalisco" style="width:640px;display:inline-block;float:right">

<div style="width:100%;border:1px solid #BDBDBD;text-align:center;overflow:hidden">


 <div id="terminales">Terminales y Centrales</div> 

 <div id="centros">Centros Comerciales</div> 

 <div id="agencias">Agencias de Viajes</div> 

 <div id="oxxo">Oxxo</div> 



<!-- ===========================================TERMINALES Y CENTRALES================================================================= -->

<div id="mostrartermi" style="display:block">

      <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/terminales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">TERMINALES Y CENTRALES</p>
                <p style="color:#1959A0;font-weight:bold">JALISCO</p></div>
            </div>

      <div style="display:inline-block;width:100%;font-family: 'helvetica','raleway';">
            
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

            <div style="display:inline-block;font-family: 'helvetica',raleway';width:100%;text-align:center">
                  
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
<!-- =================================================inludes======================================================================== -->

</div>

<div id="muestrabajacalifornia" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/bajacalifornia.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestrasonora" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/sonora.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestrasinaloa" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/sinaloa.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestranayarit" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/nayarit.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestrajalisco2" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/jalisco.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestramichoacan" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/michoacan.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestraestadomexico" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/estadomexico.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestradf" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/df.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestra_aguascalientes" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/aguascalientes.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestracolima" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/colima.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestraguanajuato" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/guanajuato.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestrahidalgo" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/hidalgo.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestraqueretano" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/queretano.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestrapotosi" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/potosi.php" width="600px" height="600px"  frameborder="0"></iframe></div>
<div id="muestrazacatecas" style="display:none;float:right;width:600px"><iframe src="http://sipyme.mx/tap/zacatecas.php" width="600px" height="600px"  frameborder="0"></iframe></div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>

      $(function(){
            $('#bajacalifornia').on('click', mostrarbajacalifornia);

            function mostrarbajacalifornia (){
                  $('#muestrabajacalifornia').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');
            }

            
            $('#sonora').on('click', mostrarsonora);

            function mostrarsonora (){
                  $('#muestrasonora').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');
            }

            $('#sinaloa').on('click', mostrarsinaloa);

            function mostrarsinaloa (){
                  $('#muestrasinaloa').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');
            }

            $('#nayarit').on('click', mostrarnayarit);

            function mostrarnayarit (){
                  $('#muestranayarit').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }

            $('#jalisco2').on('click', mostrarjalisco);

            function mostrarjalisco (){
                  $('#muestrajalisco2').css('display','inline-block');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#jalisco').css('display', 'none');
            }

            $('#michoacan').on('click', mostrarmichoacan);

            function mostrarmichoacan (){
                  $('#muestramichoacan').css('display','inline-block');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#jalisco').css('display', 'none');
            }

            $('#estadomexico').on('click', mostrarestadomexico);

            function mostrarestadomexico (){
                  $('#muestraestadomexico').css('display','inline-block');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#jalisco').css('display', 'none');
            }


            $('#df').on('click', mostrardf);
            function mostrardf (){
                  $('#muestradf').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }

            $('#aguascalientes').on('click', mostraraguascalientes);
            function mostraraguascalientes (){
                  $('#muestra_aguascalientes').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }

            $('#colima').on('click', mostrarcolima);
            function mostrarcolima (){
                  $('#muestracolima').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }

            $('#guanajuato').on('click', mostrarguanajuato);
            function mostrarguanajuato (){
                  $('#muestraguanajuato').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }

            $('#hidalgo').on('click', mostrarhidalgo);
            function mostrarhidalgo (){
                  $('#muestrahidalgo').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }

            $('#queretaro').on('click', mostrarqueretaro);
            function mostrarqueretaro (){
                  $('#muestraqueretano').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }

            $('#potosi').on('click', mostrarpotosi);
            function mostrarpotosi (){
                  $('#muestrapotosi').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrazacatecas').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }

            $('#zacatecas').on('click', mostrarzacatecas);
            function mostrarzacatecas (){
                  $('#muestrazacatecas').css('display','inline-block');
                  $('#jalisco').css('display', 'none');
                  $('#muestrabajacalifornia').css('display', 'none');
                  $('#muestrapotosi').css('display', 'none');
                  $('#muestraqueretano').css('display', 'none');
                  $('#muestrahidalgo').css('display', 'none');
                  $('#muestracolima').css('display', 'none');
                  $('#muestraguanajuato').css('display', 'none');
                  $('#muestra_aguascalientes').css('display', 'none');
                  $('#muestraestadomexico').css('display', 'none');
                  $('#muestramichoacan').css('display', 'none');
                  $('#muestradf').css('display', 'none');
                  $('#muestrasonora').css('display', 'none');
                  $('#muestrasinaloa').css('display', 'none');
                  $('#muestranayarit').css('display', 'none');
                  $('#muestrajalisco2').css('display', 'none');

            }
      });
	
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