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
                <p style="color:#1959A0;font-weight:bold">NAYARIT</p></div>
            </div>
      <div style="display:inline-block;width:100%;font-family: 'helvetica','raleway';">
            
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Mezcales</p>
                  <p>Carretera Vallarta-Tepic # 210 <br>
Colonia Ica <br>
Tel: 01 (329) 296 59 80</p>
            </div>
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Peñas</p>
                  <p>Carretera Internacional # 975 <br>
Tel: 01 (319) 23 23 814</p>
            </div>
            <div style="display:inline-block;padding:10px;text-align:left">
                  <p style="font-weight:bold">•Tepic</p>
                  <p >Av. Insurgentes # 492 Oriente <br>
Col. Jose Maria Menchaca <br>
Tel: 01 (311) 214 85 88</p>
            </div>
                        
      </div>

</div>

<!-- ====================================CENTROS COMERCIALES============================================================ -->

<div id="mostrarcentros" style="display:none">
            
            <div style="display:block;text-align:center;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/comerciales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">CENTROS COMERCIALES</p>
                <p style="color:#1959A0;font-weight:bold">NAYARIT</p></div>
            </div>
            <div style="display:inline-block;font-family: 'helvetica',raleway';width:100%;text-align:center">
                  
                  
                  <div style="display:inline-block;font-size:15px;text-align:left;padding:10px">
                        <img style="width:100px" src="img/walmart.png" alt="">
                        <p>Avenida Tepic 430 Valle Dorado, <br>
                              Bahia de Banderas, C.P. 63732 <br>
                              Entre Av. Rincon del cielo <br>
                              y Valle de México.  <br>
                              Bahia de Banderas, Nayarit <br>
                              Tel. 01-322-187-0275</p>
                  </div>
                                                    

            </div>

</div>

<!-- ======================================AGENCIAS DE VIAJES==================================================== -->

<div id="mostraragencias" style="display:none">

            <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/agencias.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">AGENCIAS DE VIAJES</p>
                <p style="color:#1959A0;font-weight:bold">NAYARIT</p></div>
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
                        <td class="textocolspan" colspan="5">Agencia: VIAJES CORA TOURS</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">COMPOSTELA</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">AV HIDALGO 130</td>
                        <td class="rellenotabla">3272772349</td>
                        <td class="rellenotabla">3272771544</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA DE VIAJES IXTLAN</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">IXTLAN DEL RIO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">ALLENDE 51 NTE</td>
                        <td class="rellenotabla">3242432113</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA DE VIAJES CAREMY</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">AHUACATLAN</td>
                        <td class="rellenotabla">AHUACATLAN</td>
                        <td class="rellenotabla2">ALDAMA PTE 6</td>
                        <td class="rellenotabla">3242410926</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: AGENCIA DE VIAJES CORAL</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">SANTIAGO IXCUINTLA</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">20 DE NOVIEMBRE N.- 243 PTE</td>
                        <td class="rellenotabla">3232350050</td>
                        <td class="rellenotabla">3232350056</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES ATZIMBA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEPIC</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">DURANGO NORTE N.-113-A</td>
                        <td class="rellenotabla">3112171370</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: EURO TURISMO ARCA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">AV IGNACIO ALLENDE PTE N 94-A PISO1</td>
                        <td class="rellenotabla">3112580800</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES TEPIC MATRIZ</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEPIC</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">LERDO 180 PTE</td>
                        <td class="rellenotabla">3112127078</td>
                        <td class="rellenotabla"></td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES ARGON</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEPIC</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">ALLENDE 80-A PTE</td>
                        <td class="rellenotabla">3112121519</td>
                        <td class="rellenotabla">3112124303</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: EXCURSIONES AZTLAN</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEPIC</td>
                        <td class="rellenotabla">CENTRO</td>
                        <td class="rellenotabla2">PRISCILIANO SANCHEZ N 45</td>
                        <td class="rellenotabla">3112142666</td>
                        <td class="rellenotabla">3112144004</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES TEPIC SUC PLAZA ALICA</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEPIC</td>
                        <td class="rellenotabla">DEL VALLE</td>
                        <td class="rellenotabla2">AV UNIVERSIDAD LOC 10-A</td>
                        <td class="rellenotabla">3112137730</td>
                        <td class="rellenotabla">3112143477</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: VIAJES CORA TOURS MATRIZ</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEPIC</td>
                        <td class="rellenotabla">MANCHACA</td>
                        <td class="rellenotabla2">INSURFGENTES 34 OTE</td>
                        <td class="rellenotabla">3112140925</td>
                        <td class="rellenotabla">3112144570</td>
                  </tr>
                  <tr>
                        <td class="textocolspan" colspan="5">Agencia: RENTA DE AUTOBUSES RAMIREZ</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">TEPIC</td>
                        <td class="rellenotabla">VILLAS DE LA CANTERA</td>
                        <td class="rellenotabla2">AMBAR N 16</td>
                        <td class="rellenotabla">3112115046</td>
                        <td class="rellenotabla"></td>
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