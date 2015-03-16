<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> </title>

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



<!-- ============================TERMINALES Y CENTRALES================================================================= -->

<div id="mostrartermi" style="display:block">

      <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/terminales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">TERMINALES Y CENTRALES</p>
                <p style="color:#1959A0;font-weight:bold">MICHOACÁN</p></div>
            </div>
      <div style="display:inline-block;width:100%;font-family: 'helvetica','raleway';">
            
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Puruandiro</p>
                  <p>Calle Guerrero # 66-c <br>
Colonia Centro <br>
Tel: 01 (438) 383 05 94</p>
            </div>
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•La Piedad</p>
                  <p>Blv. Lazaro Cardenas # 555  <br>
Col. Jardines del Carmen  <br>
C.P. 59300  <br>
Tel: 01 (352) 525 57 42</p>
            </div>
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Zamora</p>
                  <p >Carretera Morelia - Zamora Km. 142  <br>
Colonia La Lima  <br>
Tel: 01 (351) 51 56 181</p>
            </div>
                        
      </div>

</div>

<!-- ====================================CENTROS COMERCIALES============================================================ -->

<div id="mostrarcentros" style="display:none">
            
            <div style="display:block;text-align:center;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/comerciales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">CENTROS COMERCIALES</p>
                <p style="color:#1959A0;font-weight:bold">MICHOACÁN</p></div>
            </div>
            <div style="display:inline-block;font-family: 'helvetica',raleway';width:100%;text-align:center">
                  
                  
                                                                    

            </div>

</div>

<!-- ======================================AGENCIAS DE VIAJES==================================================== -->

<div id="mostraragencias" style="display:none">

            <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/agencias.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">AGENCIAS DE VIAJES</p>
                <p style="color:#1959A0;font-weight:bold">MICHOACÁN</p></div>
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
                        <td class="textocolspan" colspan="5">Agencia: VIAJES ANGAMICH</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ANGAMACUTIRO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">ALVARO OBREGON N 6</td>
                        <td class="rellenotabla">4543810117</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: ASES TOURS SUC 1</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TOMATLAN</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">AV 20 DE NOVIEMBRE 4</td>
                        <td class="rellenotabla">4265720323</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES PURUMICH HUANDACAREO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">HUANDACAREO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">JOSE MARIA MORELOS SUR N 5</td>
                        <td class="rellenotabla">4553580843</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: INSTANTICKET</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">LOS REYES</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">16 DE SEPTIMBRE 135</td>
                        <td class="rellenotabla">3545424903</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: ASES TOURS MATRIZ</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">LOS REYES</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">ALLENDE NORTE 7</td>
                        <td class="rellenotabla">3545424599</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES JET</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">MORELIA</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">20 DE NOVIEMBRE N 121</td>
                        <td class="rellenotabla">4433121188</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: TREVITOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">MORELIA</td>
                        <td class="rellenotabla">CHAPULTEPEC ORIENTE</td>
                        <td class="rellenotabla2">ALCAZAR DE CHAPULTEPEC 95-B</td>
                        <td class="rellenotabla">4433249245</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: RAM TOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">PATZCUARO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">PEDRO ANTONIO DE IBARRA</td>
                        <td class="rellenotabla">4343424771</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: GLOBO TOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">PURUANDIRO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">CALLE ZENDEJAS NO. 176</td>
                        <td class="rellenotabla">438 383 0679</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES PURUMICH MATRIZ</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">PURUANDIRO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">AV MORELOS N 50-B INT 4</td>
                        <td class="rellenotabla">4383831148</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA DE VIAJES PURUANDIRO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">PURUANDIRO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">EMILIO CARRANZA N 131</td>
                        <td class="rellenotabla">4383831389</td>
                        <td class="rellenotabla">4383832010</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: BOLETOS NAVA CASTRO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">SAHUAYO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">CONSTITUCION N.-210</td>
                        <td class="rellenotabla">3535327600</td>
                        <td class="rellenotabla">3535321666</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: ASES TOURS SUC 2</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TANCITARO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">AV LAZARO CARDENAS 16</td>
                        <td class="rellenotabla">4255915050</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA TINGUINDIN</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TINGUINDIN</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">AV FRANCISCO J MUJICA S/N ALTOS</td>
                        <td class="rellenotabla">3545513519</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES INTERNACIONALES MICHOACANOS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ZACAPU</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">AV. MORELOS 561 B</td>
                        <td class="rellenotabla">(436) 363 47 14</td>
                        <td class="rellenotabla">(436) 363 65 30</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES INTERNACIONALES MICHOACANOS SA DE CV</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">ZACAPU</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">AV. MORELOS 561 B</td>
                        <td class="rellenotabla">(436) 363 47 14</td>
                        <td class="rellenotabla">(436) 363 65 30</td>
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