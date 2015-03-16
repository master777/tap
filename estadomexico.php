<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> </title>

<style>
.municipios{
      font-size:11px;
      font-family: 'helvetica','raleway';
      padding:1em 4px;
      background-color:#2C85AF;
      color:#FFFFFF;
}
.direccion{
      font-size:11px;
      font-family: 'helvetica','raleway';
      padding:1em 3em;
      background-color:#2C85AF;
      color:#FFFFFF;
}
.rellenotabla{
      font-size: 10px;
      padding:1em 4px;
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



<!-- ============================TERMINALES Y CENTRALES================================================================= -->

<div id="mostrartermi" style="display:block">

      <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/terminales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">TERMINALES Y CENTRALES</p>
                <p style="color:#1959A0;font-weight:bold">ESTADO DE MÉXICO</p></div>
            </div>
      <div style="display:inline-block;width:100%;font-family: 'helvetica','raleway';">
            
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Tepotzotlán </p>
                  <p>Carretera México-Querétaro Km 42.5 <br>
                  Col. Parque Insdustrial Los Cedros <br>
                  Tel: 01 (55) 58 76 10 91.</p>
            </div>
           
                        
      </div>

</div>

<!-- ====================================CENTROS COMERCIALES============================================================ -->

<div id="mostrarcentros" style="display:none">
            
            <div style="display:block;text-align:center;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/comerciales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">CENTROS COMERCIALES</p>
                <p style="color:#1959A0;font-weight:bold">ESTADO DE MÉXICO</p></div>
            </div>
            <div style="display:inline-block;font-family: 'helvetica',raleway';width:100%;text-align:center">
                  
                  
                                                                    

            </div>

</div>

<!-- ======================================AGENCIAS DE VIAJES==================================================== -->

<div id="mostraragencias" style="display:none">

            <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/agencias.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">AGENCIAS DE VIAJES</p>
                <p style="color:#1959A0;font-weight:bold">ESTADO DE MÉXICO</p></div>
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
                        <td class="textocolspan" colspan="5">Agencia: GRAND MAJESTIC</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ATIZAPAN DE ZARAGOZA</td>
                        <td class="rellenotabla">JARDINES DE ATIZAPAN</td>
                        <td class="rellenotabla2">GENERAL CASILLAS N.-1 -10B</td>
                        <td class="rellenotabla">5555101969</td>
                        <td class="rellenotabla">55218600 EXT84</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES ANDRAX TRAVEL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CHIMALHUACAN</td>
                        <td class="rellenotabla">TLATELXOCHITENCO</td>
                        <td class="rellenotabla2">AV. BORDO NO. 17 LOCAL C</td>
                        <td class="rellenotabla"></td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA DE VIAJES ADRAX TRAVEL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CHIMALHUACAN</td>
                        <td class="rellenotabla">TLATELXOCHITENCO</td>
                        <td class="rellenotabla2">AV. BORDO NO. 17 LOC. C</td>
                        <td class="rellenotabla">55 26 33 64 33</td>
                        <td class="rellenotabla">55 26 33 64 33</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: ANDREA VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">COACALCO</td>
                        <td class="rellenotabla">BENITO JUAREZ</td>
                        <td class="rellenotabla2">AV SALVADOR SANCHEZ COLIN LT6 MZ 13A</td>
                        <td class="rellenotabla">35526002710</td>
                        <td class="rellenotabla">5526002710</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES LENIR</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">COACALCO</td>
                        <td class="rellenotabla">SAN LORENZO TETIXTLAC</td>
                        <td class="rellenotabla2">JOSE LOPEZ PORTILLO 220 LOC 51</td>
                        <td class="rellenotabla">5558653555</td>
                        <td class="rellenotabla">5558653556</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: MEXICO TOURS AGENCIA DE VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">COACALCO</td>
                        <td class="rellenotabla">VILLA DE LAS FLORES</td>
                        <td class="rellenotabla2">BLVD COACALCO 327</td>
                        <td class="rellenotabla">5558799821</td>
                        <td class="rellenotabla">5558796377</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES NAVARRA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CUAUTITLAN IZCALLI</td>
                        <td class="rellenotabla">COFRADIA II</td>
                        <td class="rellenotabla2">CIRCUITO LAGO DE AYARZA 21B MANZ 3</td>
                        <td class="rellenotabla">5555985899</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: REPRESENTACIONES DE HOTELES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla">DOCTORES</td>
                        <td class="rellenotabla2">RAFAEL LUCIO N 102 LOC 5 Y 6</td>
                        <td class="rellenotabla">5555887223</td>
                        <td class="rellenotabla">10541375</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: A-TRAVEL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla">GUADALUPE VICTORIA</td>
                        <td class="rellenotabla2">JOSE LOPEZ PORTILLO 431EDI SORIANA LOC9</td>
                        <td class="rellenotabla">5558822533</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES LIBERACION JARDINES DE SANTA CLARA / STAR</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla">JARDINES DE SANTA CLARA</td>
                        <td class="rellenotabla2">AV CIRCUNVALACION PTE 186 P ALTA -B</td>
                        <td class="rellenotabla">5557750775</td>
                        <td class="rellenotabla">5557754512</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES CAROLINA SA DE CV</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla">LOS LAURELES</td>
                        <td class="rellenotabla2">VIA MORELOS 172 LOC 8-B PZA ECATEPEC</td>
                        <td class="rellenotabla">5557878706</td>
                        <td class="rellenotabla">5557704266</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: MULTITURISMO DE MEXICO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla">RINCONADA DE ARAGON</td>
                        <td class="rellenotabla2">AV CARLOS HANK GONZALEZ PLZA ARAGON LOC 47</td>
                        <td class="rellenotabla">5567792004</td>
                        <td class="rellenotabla">5557792005</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: ELITUR VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla">SAN CRISTOBAL</td>
                        <td class="rellenotabla2">BLVD INSURGENTES SN</td>
                        <td class="rellenotabla">5557870785</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: ECATUR</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla2">AV ADOLFO MATEOS 24 INT P8</td>
                        <td class="rellenotabla">5558385999</td>
                        <td class="rellenotabla">5557878040</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES BOJORQUEZ VIA MORELOS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla">ECATEPEC</td>
                        <td class="rellenotabla2">VIA MORELOS No. 222-9</td>
                        <td class="rellenotabla">5551162100</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: GOLD TRAVEL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">NAUCALPAN</td>
                        <td class="rellenotabla">CIUDAD SATELITE</td>
                        <td class="rellenotabla2">CIRCUITO INGENIEROS N 39 C 6B</td>
                        <td class="rellenotabla">5555726011</td>
                        <td class="rellenotabla">5726520</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA DE VIAJES REDES TURISTICAS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">NEZAHUALCOYOTL</td>
                        <td class="rellenotabla">REFORMA</td>
                        <td class="rellenotabla2">ORIENTE 7 N 307</td>
                        <td class="rellenotabla">5511082437</td>
                        <td class="rellenotabla">5558559159</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES EDIS PLAZA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TECAMAC</td>
                        <td class="rellenotabla">HDA OJO DE AGUA</td>
                        <td class="rellenotabla2">PASEO DE LA CANDELARIA NO M67 L6</td>
                        <td class="rellenotabla">5559321033</td>
                        <td class="rellenotabla">5559382564</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: XUL-KIN VIAJES</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TECAMAC</td>
                        <td class="rellenotabla">JARDINES OJO DE AGUA</td>
                        <td class="rellenotabla2">BLVD OJO DE AGUA MZ 171 LT 30</td>
                        <td class="rellenotabla">5552076787</td>
                        <td class="rellenotabla">5552075223</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES Y AUTOS MARBAR</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEXCOCO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">ALLENDE 100</td>
                        <td class="rellenotabla">5959540779</td>
                        <td class="rellenotabla">5959540095</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: GO TRAVEL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEXCOCO</td>
                        <td class="rellenotabla">SALITRERIA</td>
                        <td class="rellenotabla2">AV. URSULO GALVAN NO. 33 INT. 2</td>
                        <td class="rellenotabla">(595) 9555912</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES SITKA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEXCOCO</td>
                        <td class="rellenotabla">TEXCOCO</td>
                        <td class="rellenotabla2">NETZAHUALCOYOTL 214</td>
                        <td class="rellenotabla">5959549731</td>
                        <td class="rellenotabla">5959549730</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA DE VIAJES UNIVERSO PLUS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TLALNEPANTLA</td>
                        <td class="rellenotabla">PRENSA NACIONAL</td>
                        <td class="rellenotabla2">SOL DE MEXICO 1426</td>
                        <td class="rellenotabla">5522292157</td>
                        <td class="rellenotabla">5553687398</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: SERVICIOS TURISTICOS SIGLO XXI</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TULTITLAN</td>
                        <td class="rellenotabla">BARRIO DE REYES</td>
                        <td class="rellenotabla2">BLVD TULTITLAN OTE N 92</td>
                        <td class="rellenotabla">5558884040</td>
                        <td class="rellenotabla">5558992727</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES LIBERACION TULTITLAN</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TULTITLAN</td>
                        <td class="rellenotabla">SAN PABLO DE LAS SALINAS</td>
                        <td class="rellenotabla2">AV PRADOS LOT 100 G 12</td>
                        <td class="rellenotabla">5558792050</td>
                        <td class="rellenotabla">5558792055</td>
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