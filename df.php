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
                <p style="color:#1959A0;font-weight:bold">DISTRITO FEDERAL</p></div>
            </div>
      <div style="display:inline-block;width:100%;font-family: 'helvetica','raleway';">
            
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Lamsa</p>
                  <p>Calle Guerrero # 66-c <br>
                        Colonia Centro <br>
                        Tel: 01 (438) 383 05 94</p>
            </div>
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Central del Norte</p>
                  <p>Blv. Lazaro Cardenas # 555 <br>
                       Col. Jardines del Carmen <br>
                        C.P. 59300 <br>
                  Tel: 01 (352) 525 57 42</p>
            </div>
            
      </div>

</div>

<!-- =================================================CENTROS COMERCIALES=================================================================== -->

<div id="mostrarcentros" style="display:none">
            
            <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/comerciales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">CENTROS COMERCIALES</p>
                <p style="color:#1959A0;font-weight:bold">DISTRITO FEDERAL</p></div>
            </div>
            <div style="display:inline-block;font-family: 'helvetica',raleway';width:100%;text-align:center">
                  
                  

            </div>

</div>

<!-- =================================================AGENCIAS DE VIAJES=============================================================== -->

<div id="mostraragencias" style="display:none">
            <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/agencias.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">AGENCIAS DE VIAJES</p>
                <p style="color:#1959A0;font-weight:bold">DISTRITO FEDERAL</p></div>
            </div>
            <center><table>
                  <tr>
                        <td class="municipios">MUNICIPIO</td>
                        <td class="municipios">COLONIA</td>
                        <td class="direccion">DIRECCIÓN</td>
                        <td class="municipios">TELÉFONO 1</td>
                        <td class="municipios">TELÉFONO 2</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: EL GRAN VIAJE</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ALVARO OBREGON</td>
                        <td class="rellenotabla">FLORIDA</td>
                        <td class="rellenotabla2">MARGARITAS 317</td>
                        <td class="rellenotabla">5550256530</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: OPCION MENSAJERIA Y PAQUETERIA SUC 1</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ALVARO OBREGON</td>
                        <td class="rellenotabla">GUADALUPE INN</td>
                        <td class="rellenotabla2">INSURGENTES SUR 1971 NIVEL PASEO LOC.60</td>
                        <td class="rellenotabla">5555559320</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES YESHUA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ALVARO OBREGON</td>
                        <td class="rellenotabla">PROGRESO TIZAPAN</td>
                        <td class="rellenotabla2">BLVD ADOLFO LOPEZ MATEOS 230</td>
                        <td class="rellenotabla">5555306162</td>
                        <td class="rellenotabla">5556797641</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: TAYIRA TRAVEL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ALVARO OBREGON</td>
                        <td class="rellenotabla">SAN ANGEL</td>
                        <td class="rellenotabla2">INSURGENTES SUR N 2388-4</td>
                        <td class="rellenotabla">5959512360</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: KARNAVAL TOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">AZCAPOTZALCO</td>
                        <td class="rellenotabla">LA RAZA</td>
                        <td class="rellenotabla2">QUICHES 88 LOC 1</td>
                        <td class="rellenotabla">5555978435</td>
                        <td class="rellenotabla">5555559768</td>
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
                        <td class="textocolspan" colspan="5">Agencia: SPORT INTERNATIONAL TOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">BENITO JUAREZ</td>
                        <td class="rellenotabla">DEL LAGO</td>
                        <td class="rellenotabla2">CALZ TLALPAN N.- 1091 B</td>
                        <td class="rellenotabla">5556747234</td>
                        <td class="rellenotabla">5512048064</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: BONI VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">BENITO JUAREZ</td>
                        <td class="rellenotabla">DEL VALLE</td>
                        <td class="rellenotabla2">FELIX CUEVAS N 329 BL12</td>
                        <td class="rellenotabla">5555245220</td>
                        <td class="rellenotabla">5555349462</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VALLE VIAJES Y MARATHONES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">BENITO JUAREZ</td>
                        <td class="rellenotabla">DEL VALLE</td>
                        <td class="rellenotabla2">MIGUEL LAURENT 234 B</td>
                        <td class="rellenotabla">5555750023</td>
                        <td class="rellenotabla">5555593363</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: OPCION MENSAJERIA Y PAQUETERIA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">BENITO JUAREZ</td>
                        <td class="rellenotabla">DEL VALLE</td>
                        <td class="rellenotabla2">INSURGENTES 1222 C</td>
                        <td class="rellenotabla">5555593200</td>
                        <td class="rellenotabla">5555758621</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: MORAMEX VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">BENITO JUAREZ</td>
                        <td class="rellenotabla">POSTAL</td>
                        <td class="rellenotabla2">GIROS POSTALES N 1</td>
                        <td class="rellenotabla">5552353231</td>
                        <td class="rellenotabla">5556963448</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: SOCIEDAD INTEGRAL ESPECIALIZADA EN ENVIOS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">BENITO JUAREZ</td>
                        <td class="rellenotabla">SANTA CRUZ DE ATOYAC</td>
                        <td class="rellenotabla2">AV CUAUHTEMOC 1233-1</td>
                        <td class="rellenotabla">5556059653</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: MILEN TOUR & TRAVEL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla">BENITO JUAREZ</td>
                        <td class="rellenotabla2">AV COPENHAGUE 20-101</td>
                        <td class="rellenotabla">5552075517</td>
                        <td class="rellenotabla">5552073921</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES MIN</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">COYOACAN</td>
                        <td class="rellenotabla">BARRIO OXTUPOLCO UNIVERSIDAD</td>
                        <td class="rellenotabla2">AV UNIVERSIDAD 1846 PISO 2</td>
                        <td class="rellenotabla">5553396181</td>
                        <td class="rellenotabla">5555131171</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: BOJORQUEZ COYOACAN</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">COYOACAN</td>
                        <td class="rellenotabla">DEL CARMEN</td>
                        <td class="rellenotabla2">MOCTEZUMA N 97 AREA D Y E</td>
                        <td class="rellenotabla">5555548929</td>
                        <td class="rellenotabla">5556584298</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES MIRAMONTES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">COYOACAN</td>
                        <td class="rellenotabla">LOS CIPRESES</td>
                        <td class="rellenotabla2">AV CANAL DE MIRAMONTES N 2600 LOC 6</td>
                        <td class="rellenotabla">5555498848</td>
                        <td class="rellenotabla">5556796745</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES YESHUA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">COYOACAN</td>
                        <td class="rellenotabla">PRESIDENTE LEJIDAL</td>
                        <td class="rellenotabla2">CALZ DE LA VIRGEN SN</td>
                        <td class="rellenotabla">5555306261</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: INNOVATUR</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CUAUHTEMOC</td>
                        <td class="rellenotabla">HIPODROMO</td>
                        <td class="rellenotabla2">AV BAJA CALIFORNIA 252</td>
                        <td class="rellenotabla">5552734749</td>
                        <td class="rellenotabla">5552731472</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA DE VIAJES TRANSPORTES VELASCO MARTINEZ</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CUAUHTEMOC</td>
                        <td class="rellenotabla">ROMA ORIENTE</td>
                        <td class="rellenotabla2">COZUMEL 61-5</td>
                        <td class="rellenotabla">5552110762</td>
                        <td class="rellenotabla">5551474488</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: DATESIL DIVISION TURISMO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CUAUHTEMOC</td>
                        <td class="rellenotabla">TABACALERA</td>
                        <td class="rellenotabla2">AV INSURGENTES 96 LOC A</td>
                        <td class="rellenotabla">5555668332</td>
                        <td class="rellenotabla">5555278738</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: DATESIL TRAVEL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CUAUHTEMOC</td>
                        <td class="rellenotabla">TABACALERA</td>
                        <td class="rellenotabla2">INSURGENTES CENTRO NO. 96-A</td>
                        <td class="rellenotabla">55 66 83 32</td>
                        <td class="rellenotabla">55 66 90 63</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES CAROLINA SUCURSAL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">DF</td>
                        <td class="rellenotabla">BOSQUES DE SAN CRISTOBAL</td>
                        <td class="rellenotabla2">FRESNOS N 39</td>
                        <td class="rellenotabla">5557878706</td>
                        <td class="rellenotabla">5557704266</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: TRAVELEANDO TOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">DF</td>
                        <td class="rellenotabla">COYOACAN</td>
                        <td class="rellenotabla2">AV BORDO N 18</td>
                        <td class="rellenotabla">5524576600</td>
                        <td class="rellenotabla">5524570444</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES BOJORQUEZ VIA MORELOS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ESTADO DE MEXICO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">MEXICO TACUBA NO. 1025</td>
                        <td class="rellenotabla">555 1162100</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES BOJORQUEZ ACUEDUCTO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">GUSTAVO A. MADERO</td>
                        <td class="rellenotabla">ZONA ESCOLAR</td>
                        <td class="rellenotabla2">MAESTRO LARROYO M12 L42</td>
                        <td class="rellenotabla">5553696964</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: TAJIN VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">IZTACALCO</td>
                        <td class="rellenotabla">EL RODEO</td>
                        <td class="rellenotabla2">CALLE 26 N 43</td>
                        <td class="rellenotabla">5555588440</td>
                        <td class="rellenotabla">5553388939</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES LM</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">MIGUEL HIDALGO</td>
                        <td class="rellenotabla">ANAHUAC</td>
                        <td class="rellenotabla2">LAGUNA DE MAYRAN 411 N BIS</td>
                        <td class="rellenotabla">5557522422</td>
                        <td class="rellenotabla">5589959698</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES BOJORQUEZ VIA MORELOS SUC. CENTRO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">MIGUEL HIDALGO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">MEXICO TACUBA NO. 1025</td>
                        <td class="rellenotabla">55 51 16 21 00</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES Y SERVICIOS TOURS JCL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">MIGUEL HIDALGO</td>
                        <td class="rellenotabla">TACUBA</td>
                        <td class="rellenotabla2">GOLFO 18-C</td>
                        <td class="rellenotabla"></td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: ALMEIDA VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">DF</td>
                        <td class="rellenotabla">NARVARTE</td>
                        <td class="rellenotabla2">EJE CENTRAL LAZARO CARDENAS N.-545</td>
                        <td class="rellenotabla">
                        </td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA HUIPULCO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TLALPAN</td>
                        <td class="rellenotabla">ISIDRO FABELA</td>
                        <td class="rellenotabla2">AV BENITO JUAREZ 95</td>
                        <td class="rellenotabla">5551712017</td>
                        <td class="rellenotabla">5556064174</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: IVORY TOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TLALPAN</td>
                        <td class="rellenotabla">RESIDENCIAL COAPA</td>
                        <td class="rellenotabla2">CALZADA DEL HUESO N 519 LOC 153</td>
                        <td class="rellenotabla">5557859969</td>
                        <td class="rellenotabla">5557853393</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: LOREIN TOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">VENUSTIANO CARRANZA</td>
                        <td class="rellenotabla">ROMERO RUBIO</td>
                        <td class="rellenotabla2">GUINEA N 75 LOC A</td>
                        <td class="rellenotabla">5526163933</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: MENSAJERIA PAQUETERIA Y VTA DE BOLETOS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">XOCHIMILCO</td>
                        <td class="rellenotabla">BARRIO SAN MARCOS</td>
                        <td class="rellenotabla2">GUADALUPE I RAMIREZ N 6314</td>
                        <td class="rellenotabla">5555559528</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES BOJORJEZ XOCHMILCO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">XOCHIMILCO</td>
                        <td class="rellenotabla">TIERRA NUEVA</td>
                        <td class="rellenotabla2">PROL. DIVISION DEL NTE 5399</td>
                        <td class="rellenotabla">5556534242</td>
                        <td class="rellenotabla">5556534451</td>
                  </tr>
                  
            </table></center>

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