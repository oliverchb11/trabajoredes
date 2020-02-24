<html>
<head>
<title>XOR</title>
<link rel="stylesheet" type="text/css" href="css/stylexor.css">    
</head>
<body>
<input type="submit" name="voler" value="volver" OnClick="location.href='conexion.php'">
<table>
<h1>Tabla de verdad XOR</h1>

   <tr>
   <h2 id="salida">salida</h2>
       <td>X1</td>
       <td>X2</td>
       <td>D</td>
      <!-- <td>Envio</td>-->
   </tr>
   <h2>Entrada</h2>
   <tr>
       <td>0</td>
       <td>0</td>
       <td>1</td>
       <!--  <td><input type="submit" value=">>" onclick="enviodatos1()"></input></td>-->
   </tr>
   <tr>
       <td>0</td>
       <td>1</td>
       <td>0</td>
      <!--   <td><input type="submit" value=">>"   onclick="enviodatos2()"></input></td>-->
   </tr>
   <tr>
       <td>1</td>
       <td>0</td>
       <td>0</td>
       
      <!--    <td><input type="submit" value=">>"  onclick="enviodatos3()"></input></td>-->
   </tr>
   <tr>
       <td>1</td>
       <td>1</td>
       <td>1</td>
      <!--   <td><input type="submit" value=">>"  onclick="enviodatos4()"></input></td>-->
   </tr>
</table>
<table class="pi">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Seleccione los pesos Pesos Iniciales</h1>
   <tr>
       <td>W1</td>
       <td>W2</td>
       <td>wb</td>
       <td>umbral</td>
   </tr>
   <tr>
       <td class="pesotd1"><input type="text"  id="peso1"></p></td>
       <td class="pesotd2"><input type="text" class="peso2" id="peso2"></p></td>
       <td class="pesotd3"><input type="text" class="peso3" id="peso3"></p></td>
       <td class="umbraltd"><input type="text" class="valordeagregado" id="valordeagregado"></p></td>
   </tr>
 
</table>
<input type="submit" name="Guardar pesos" value="Guardar pesos" class="gp" onclick="validarcampos()" > 

<!--<h2>Valor de Σ</h2>
<a>Σ=<h3 id="prueba"></h3></a>
<h2>Rsultados</h2>
<a>Salida=<h3 id="prueba2"></h3></a>
<a>Salida 2=<h3 id="d"></h3></a>
<a>Resultado esperado=<h3 id="resultado"></h3></a>-->
<div>
    <p>W1 = <h4 id="pesos1"></h4></p>
    <p>W2 =  <h4 id="pesos2"></h4></p>
    <p>W3 =  <h4 id="pesos3"></h4></p>
    <p>Umbral =  <h4 id="valordeagregados"></h4></p>
</div>
<div class="and">
<table>
<h1>Tabla de verdad AND</h1>

   <tr>
   <h2 id="salida">salida</h2>
       <td>X1</td>
       <td>X2</td>
       <td>D</td>
       <td>Envio</td>
   </tr>
   <h2>Entrada</h2>
   <tr>
       <td>0</td>
       <td>0</td>
       <td>0</td>
       <td><input type="submit" value=">>" onclick="enviodatosand1()"></input></td>
   </tr>
   <tr>
       <td>0</td>
       <td>1</td>
       <td>0</td>
       <td><input type="submit" value=">>"   onclick="enviodatosand2()"></input></td>
   </tr>
   <tr>
       <td>1</td>
       <td>0</td>
       <td>0</td>
       
       <td><input type="submit" value=">>"  onclick="enviodatosand3()"></input></td>
   </tr>
   <tr>
       <td>1</td>
       <td>1</td>
       <td>1</td>
       <td><input type="submit" value=">>"  onclick="enviodatosand4()"></input></td>
   </tr>
</table>
<h2>Valor de Σ</h2>
<a>Σ=<h3 id="pruebaand"></h3></a>
<h2>Rsultados</h2>
<a>Salida=<h3 id="pruebaand2"></h3></a>
<a>Salida Esperada=<h3 id="esperadaand" ></h3></a>
<a>Resultado esperado=<h3 id="resultadoand" ></h3></a>
</div>
<div class="nor">
<table>
<h1>Tabla de verdad NAND</h1>

   <tr>
   <h2 id="salida">salida</h2>
       <td>X1</td>
       <td>X2</td>
       <td>D</td>
       <td>Envio</td>
   </tr>
   <h2>Entrada</h2>
   <tr>
       <td>0</td>
       <td>0</td>
       <td>1</td>
       <td><input type="submit" value=">>" onclick="enviodatosnand1()"></input></td>
   </tr>
   <tr>
       <td>0</td>
       <td>1</td>
       <td>1</td>
       <td><input type="submit" value=">>"   onclick="enviodatosnand2()"></input></td>
   </tr>
   <tr>
       <td>1</td>
       <td>0</td>
       <td>1</td>
       
       <td><input type="submit" value=">>"  onclick="enviodatosnand3()"></input></td>
   </tr>
   <tr>
       <td>1</td>
       <td>1</td>
       <td>0</td>
       <td><input type="submit" value=">>"  onclick="enviodatosnand4()"></input></td>
   </tr>
</table>
<h2>Valor de Σ</h2>
<a>Σ=<h3 id="pruebanor"></h3></a>
<h2>Rsultados</h2>
<a>Salida=<h3 id="pruebanor2"></h3></a>
<a>Salida Esperada=<h3 id="esperadanor" ></h3></a>
<a>Resultado esperado=<h3 id="resultadonor" ></h3></a>
</div>
<br>
<table>
<h1>Tabla de verdad OR</h1>

   <tr>
   <h2 id="salida">salida</h2>
       <td>X1</td>
       <td>X2</td>
       <td>D</td>
       <td>Envio</td>
   </tr>
   <h2>Entrada</h2>
   <tr>
       <td>0</td>
       <td>0</td>
       <td>0</td>
       <td><input type="submit" value=">>" onclick="enviodatosor1()"></input></td>
   </tr>
   <tr>
       <td>0</td>
       <td>1</td>
       <td>1</td>
       <td><input type="submit" value=">>"   onclick="enviodatosor2()"></input></td>
   </tr>
   <tr>
       <td>1</td>
       <td>0</td>
       <td>1</td>
       
       <td><input type="submit" value=">>"  onclick="enviodatosor3()"></input></td>
   </tr>
   <tr>
       <td>1</td>
       <td>1</td>
       <td>1</td>
       <td><input type="submit" value=">>"  onclick="enviodatosor4()"></input></td>
   </tr>
</table>
<h2>Valor de Σ</h2>
<a>Σ=<h3 id="pruebaor"></h3></a>
<h2>Rsultados</h2>
<a>Salida=<h3 id="pruebaor2"></h3></a>
<a>Salida Esperada=<h3 id="esperadaor" ></h3></a>
<a>Resultado esperado=<h3 id="resultadoor" ></h3></a>
<!--<div class="orl">
<img src="compuertas/XNOR.png" alt="XNOR">
</div>
<div class="or">
    <img src="compuertas/xnor1 (1).png" alt="XNOR">
</div>-->
<script>
    // validacio de campos de pesos y umbrar
    function validarcampos(){
        miCampoTexto = document.getElementById("peso1").value;
        miCampoTexto2 = document.getElementById("peso2").value;
        miCampoTexto3 = document.getElementById("peso3").value;
        valordeagregados = document.getElementById("valordeagregado").value;
        document.getElementById("valordeagregados").innerHTML = valordeagregados ;
        if(miCampoTexto == "" || miCampoTexto2 == "" || miCampoTexto3 == "" ){
            alert("los pesos estan vacios");
        }
        if(miCampoTexto <=(-1,1)){
            
            document.getElementById("pesos1").innerHTML = miCampoTexto ;
        }else{
            alert("Uno de los campos esta incorrecto valores de -1 a 1");
        }
        if(miCampoTexto2 <=(-1,1)){
            document.getElementById("pesos2").innerHTML = miCampoTexto2 ;
        }else{
            alert("Uno de los campos esta incorrecto valores de -1 a 1");
        }
        if(miCampoTexto3 <=(-1,1)){
            document.getElementById("pesos3").innerHTML = miCampoTexto3 ;
        }else{
            alert("Uno de los campos esta incorrecto valores de -1 a 1");
        }
        if(valordeagregados== ""){
            alert("Umbral vacio");
        }else if(valordeagregados != 1 && valordeagregados != -1 ){
            alert("El umbrar debe ser de 1 o -1");
            document.getElementById("valordeagregados").innerHTML = "" ;
        }else{
            
        }
        
    }   

    // fin validacion de campos y umbral
    
    // validacion de compuerta and 0 0 0
   
        function enviodatosand1(){
       // var valordeagregados;
        var variabledesalida = 0; // esperado
        document.getElementById("esperadaand").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 0 , x2 = 0;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(miCampoTexto)) + (parseInt(x2) * parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) * parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebaand").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebaand2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleand = document.getElementById("resultadoand").innerHTML = "no cumple" ;
            }
            else {
                document.getElementById("pruebaand2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleand =  document.getElementById("resultadoand").innerHTML = "cumple" ;
            }
            if(cumpleand == "cumple" && cumplenor == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
        }
        }
        // validacion de compuerta nand 0 0 1
        function enviodatosnand1(){
        //var valordeagregados;
        var variabledesalida = 1; // esperado
        document.getElementById("esperadanor").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 0 , x2 = 0;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(miCampoTexto)) + (parseInt(x2) * parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) * parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebanor").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebanor2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumplenand = document.getElementById("resultadonor").innerHTML = "cumple" ;
            }
            else {
                document.getElementById("pruebanor2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumplenand = document.getElementById("resultadonor").innerHTML = "No cumple" ;
            }
            if(cumpleand == "cumple" && cumpleand == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
        }
        }
         // validacion de compuerta or 0 0 0
        function enviodatosor1(){
        //var valordeagregados;
        var variabledesalida = 0; // esperado
        document.getElementById("esperadaor").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 0 , x2 = 0;
           var sumatoriapesos =  (parseInt(x1) + parseFloat(miCampoTexto)) + (parseInt(x2) + parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) + parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebaor").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebaor2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleor = document.getElementById("resultadoor").innerHTML = "no cumple" ;
            }
            else {
                document.getElementById("pruebaor2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleor = document.getElementById("resultadoor").innerHTML = "cumple" ;
            }
            if(cumpleand == "cumple" && cumplenor == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
        }
        }
        // validacion de compuerta and 0 1 0
       function enviodatosand2(){
        //var valordeagregados;
        var variabledesalida = 0; // esperado
        document.getElementById("esperadaand").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 0 , x2 = 1;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(miCampoTexto)) + (parseInt(x2) * parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) * parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebaand").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebaand2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleand = document.getElementById("resultadoand").innerHTML = "no cumple" ;
            }
            else {
                document.getElementById("pruebaand2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleand =  document.getElementById("resultadoand").innerHTML = "cumple" ;
            }
            if(cumpleand == "cumple" && cumpleand == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
        }
        }
         // validacion de compuerta nand 0 1 1
        function enviodatosnand2(){
        //var valordeagregados;
        var variabledesalida = 1; // esperado
        document.getElementById("esperadanor").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 0 , x2 = 1;
           var sumatoriapesos =  (parseInt(x1) + parseFloat(miCampoTexto)) + (parseInt(x2) + parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) + parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebanor").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebanor2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumplenand = document.getElementById("resultadonor").innerHTML = "cumple" ;
            }
            else {
                document.getElementById("pruebanor2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumplenand = document.getElementById("resultadonor").innerHTML = "no cumple" ;
                if(cumpleand == "cumple" && cumpleand == "cumple" && cumpleor == "cumple"){
                    alert("todo cumplio felicitaciones :)");
            }
        }
        }
         // validacion de compuerta or 0 1 1
        function enviodatosor2(){
        //var valordeagregados;
        var variabledesalida = 1; // esperado
        document.getElementById("esperadaor").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 0 , x2 = 1;
           var sumatoriapesos =  (parseInt(x1) + parseFloat(miCampoTexto)) + (parseInt(x2) + parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) + parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebaor").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebaor2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleor = document.getElementById("resultadoor").innerHTML = "cumple" ;
            }
            else {
                document.getElementById("pruebaor2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleor = document.getElementById("resultadoor").innerHTML = "no cumple" ;
            }
            if(cumpleand == "cumple" && cumplenor == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
        }
        }
        // validacion de compuerta and 1 0 0
       function enviodatosand3(){
       // var valordeagregados;
        var variabledesalida = 0; // esperado
        document.getElementById("esperadaand").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 1 , x2 = 0;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(miCampoTexto)) + (parseInt(x2) * parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) * parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebaand").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebaand2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleand = document.getElementById("resultadoand").innerHTML = "no cumple" ;
            }
            else {
                document.getElementById("pruebaand2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleand = document.getElementById("resultadoand").innerHTML = "cumple" ;
            }
            if(cumpleand == "cumple" && cumpleand == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
        }
        }
         // validacion de compuerta nand 1 0 1
        function enviodatosnand3(){
        //var valordeagregados;
        var variabledesalida = 1; // esperado
        document.getElementById("esperadanor").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 1 , x2 = 0;
           var sumatoriapesos =  (parseInt(x1) + parseFloat(miCampoTexto)) + (parseInt(x2) + parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) + parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebanor").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebanor2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumplenand = document.getElementById("resultadonor").innerHTML = "cumple" ;
            }
            else {
                document.getElementById("pruebanor2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumplenand =  document.getElementById("resultadonor").innerHTML = "no cumple" ;
                if(cumpleand == "cumple" && cumpleand == "cumple" && cumpleor == "cumple"){
                    alert("todo cumplio felicitaciones :)");
            }
        }
        }
        // validacion de compuerta or 1 0 1
        function enviodatosor3(){
        //var valordeagregados;
        var variabledesalida = 1; // esperado
        document.getElementById("esperadaor").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 1 , x2 = 0;
           var sumatoriapesos =  (parseInt(x1) + parseFloat(miCampoTexto)) + (parseInt(x2) + parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) + parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebaor").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebaor2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleor = document.getElementById("resultadoor").innerHTML = "cumple" ;
            }
            else {
                document.getElementById("pruebaor2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleor = document.getElementById("resultadoor").innerHTML = "no cumple" ;
            }
            if(cumpleand == "cumple" && cumplenor == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
        }
        }
       // validacion de compuerta and 1 1 1
       function enviodatosand4(){
        //var valordeagregados;
        var variabledesalida = 1; // esperado
        document.getElementById("esperadaand").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 1 , x2 = 1;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(miCampoTexto)) + (parseInt(x2) * parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) * parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebaand").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebaand2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleand = document.getElementById("resultadoand").innerHTML = "cumple" ;
            }
            else {
                document.getElementById("pruebaand2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleand = document.getElementById("resultadoand").innerHTML = "NO cumple" ;
            }
            if(cumpleand == "cumple" && cumpleand == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
            }
        }
        // validacion de compuerta nand 1 1 0
        function enviodatosnand4(){
        //var valordeagregados;
        var variabledesalida = 0; // esperado
        document.getElementById("esperadanor").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 1 , x2 = 1;
           var sumatoriapesos =  (parseInt(x1) + parseFloat(miCampoTexto)) + (parseInt(x2) + parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) + parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebanor").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebanor2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumplenand = document.getElementById("resultadonor").innerHTML = "no cumple" ;
            }
            else {
                document.getElementById("pruebanor2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
              cumplenand =  document.getElementById("resultadonor").innerHTML = "cumple" ;
              if(cumpleand == "cumple" && cumpleand == "cumple" && cumpleor == "cumple"){
                alert("todo cumplio felicitaciones :)");
            }
        }
        }
        // validacion de compuerta or 1 1 1
        function enviodatosor4(){
        //var valordeagregados;
        var variabledesalida = 1; // esperado
        document.getElementById("esperadaor").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 1 , x2 = 1;
           var sumatoriapesos =  (parseInt(x1) + parseFloat(miCampoTexto)) + (parseInt(x2) + parseFloat(miCampoTexto2)) + (parseInt(valordeagregados) + parseFloat(miCampoTexto3)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("pruebaor").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("pruebaor2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleor = document.getElementById("resultadoor").innerHTML = "cumple" ;
            }
            else {
                document.getElementById("pruebaor2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                cumpleor = document.getElementById("resultadoor").innerHTML = "no cumple" ;
            }
            if(cumpleand == "cumple" && cumplenor == "cumple" && cumpleor == "cumple"){
            alert("El puto amo");
        }
        }

    

       
</script>
<br>
<br>
<input type="submit" name="voler" value="volver" OnClick="location.href='conexion.php'" class="volver">
</body>
</html>