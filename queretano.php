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
                <p style="color:#1959A0;font-weight:bold">QUERÉTARO</p></div>
            </div>
      <div style="display:inline-block;width:100%;font-family: 'helvetica','raleway';">
            
            
                        
      </div>

</div>

<!-- ====================================CENTROS COMERCIALES============================================================ -->

<div id="mostrarcentros" style="display:none">
            
            <div style="display:block;text-align:center;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/comerciales.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">CENTROS COMERCIALES</p>
                <p style="color:#1959A0;font-weight:bold">QUERÉTARO</p></div>
            </div>
            <div style="display:inline-block;font-family: 'helvetica',raleway';width:100%;text-align:center">
                  
                  
            </div>

</div>

<!-- ======================================AGENCIAS DE VIAJES==================================================== -->

<div id="mostraragencias" style="display:none">

            <div style="display:inline-block;text-align:left;font-family: 'helvetica','raleway'">
               <div style="display:inline-block"><img src="img/agencias.jpg" alt=""> </div>
               <div style="display:inline-block"><p style="font-size:12px">AGENCIAS DE VIAJES</p>
                <p style="color:#1959A0;font-weight:bold">QUERÉTARO</p></div>
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
                        <td class="textocolspan" colspan="5">Agencia: DASER TRAVEL MEXICO</td>
                  </tr>
                  <tr>
                        <td class="rellenotabla">QUERETARO</td>
                        <td class="rellenotabla">VALLE ALAMEDA</td>
                        <td class="rellenotabla2">PALENQUE N 102-27</td>
                        <td class="rellenotabla">4422146128</td>
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