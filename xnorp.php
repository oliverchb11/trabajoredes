<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="css/stylexnor.css"> 
    <script src="js/xnorp.js"></script>   
    <title>XNOR</title>
    </head>
<body>
<input type="submit" name="voler" value="volver" OnClick="location.href='conexion.php'">
<div id="p1">
<table id="tablaxnor" class="table table-dark col-md-" >
<h1 id="titulox">Tabla de verdad XNOR</h1>

   <tr>
   <h2 id="salida">salida</h2>
       <th scope="col">X1</td>
       <th scope="col">X2</td>
       <th scope="col">D</td>
      <!-- <td>Envio</td>-->
   </tr>
   <h2 id="entrada">Entrada</h2>
   <tr>
       <th scope="col">0</td>
       <th scope="col">0</td>
       <th scope="col">1</td>
       <!--  <td><input type="submit" value=">>" onclick="enviodatos1()"></input></td>-->
   </tr>
   <tr>
       <th scope="col">0</td>
       <th scope="col">1</td>
       <th scope="col">0</td>
      <!--   <td><input type="submit" value=">>"   onclick="enviodatos2()"></input></td>-->
   </tr>
   <tr>
       <th scope="col">1</td>
       <th scope="col">0</td>
       <th scope="col">0</td>
       
      <!--    <td><input type="submit" value=">>"  onclick="enviodatos3()"></input></td>-->
   </tr>
   <tr>
       <th scope="col">1</td>
       <th scope="col">1</td>
       <th scope="col">1</td>
      <!--   <td><input type="submit" value=">>"  onclick="enviodatos4()"></input></td>-->
   </tr>
</table>
</div>
<div id="pesosumbral">
<table class="table table-dark" id="tablap1">
    <h1>Seleccione los pesos Pesos Iniciales</h1>
   <tr>
       <td>W1</td>
       <td>W2</td>
       <td>Wb</td>
       <td>umbral</td>
   </tr>
   <tr>
       <td class="pesotd1" id="p1"><input type="text" class="peso1"  id="peso1"></p></td>
       <td class="pesotd2" id="p2"><input type="text" class="peso2" id="peso2"></p></td>
       <td class="pesotd3" id="p3"><input type="text" class="peso3" id="peso3"></p></td>
       <td class="umbraltd" id="p4"><input type="text" class="valordeagregado" id="valordeagregado"></p></td>
   </tr>
 
</table>
<input type="submit" name="Guardar pesos" value="Guardar pesos" id="btn" class="gp btn btn-success"  onclick="validarcampos()" > 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="pesosdiv">
    <p>W1 = <h4 id="pesos1"></h4></p>
    <p>W2 =  <h4 id="pesos2"></h4></p>
    <p>Wb =  <h4 id="pesos3"></h4></p>
    <p>Umbral =  <h4 id="valordeagregados"></h4></p>
</div>
<div class="and" id="and">
<table class="table table-dark" id="tablaand">
<h1>Tabla de verdad AND</h1>

   <tr>
   <h2 id="salida">salida</h2>
       <th scope="col">X1</th>
       <th scope="col">X2</th>
       <th scope="col">D</th>
       <th scope="col">Envio</th>
   </tr>
   <h2 id="entradaand">Entrada</h2>
   <tr>
       <th scope="col">0</th>
       <th scope="col">0</th>
       <th scope="col">0</th>
       <th scope="col"><input type="submit" value=">>" onclick="enviodatosand1()" class="btn btn-success"></input></th>
   </tr>
   <tr>
       <th scope="col">0</th>
       <th scope="col">1</th>
       <th scope="col">0</th>
       <th scope="col"><input type="submit" value=">>"   onclick="enviodatosand2()" class="btn btn-success"></input></th>
   </tr>
   <tr>
       <th scope="col">1</th>
       <th scope="col">0</th>
       <th scope="col">0</th>
       
       <th scope="col"><input type="submit" value=">>"  onclick="enviodatosand3()" class="btn btn-success"></input></th>
   </tr>
   <tr>
       <th scope="col">1</th>
       <th scope="col">1</th>
       <th scope="col">1</th>
       <th scope="col"><input type="submit" value=">>"  onclick="enviodatosand4()" class="btn btn-success"></input></th>
   </tr>
</table>
<h2>Valor de Σ</h2>
<br>
<a>Σ=<h3 id="pruebaand"></h3></a>
<br>
<h2>Rsultados</h2>
<br>
<a>Salida=<h3 id="pruebaand2"></h3></a>
<br>
<a>Salida Esperada=<h3 id="esperadaand" ></h3></a>
<br>
<a>Resultado esperado=<h3 id="resultadoand" ></h3></a>
</div>
<div class="nor" id="nor">
<table id="tablanor" class="table table-dark">
<h1>Tabla de verdad NOR</h1>

   <tr>
   <h2 id="salida">salida</h2>
       <th scope="col">X1</th>
       <th scope="col">X2</th>
       <th scope="col">D</th>
       <th scope="col">Envio</th>
   </tr>
   <h2 id="entradanor">Entrada</h2>
   <tr>
       <th scope="col">0</th>
       <th scope="col">0</th>
       <th scope="col">1</th>
       <th scope="col"><input type="submit" value=">>" onclick="enviodatosnor1()" class="btn btn-success" ></input></th>
   </tr>
   <tr>
       <th scope="col">0</th>
       <th scope="col">1</th>
       <th scope="col">0</th>
       <th scope="col"><input type="submit" value=">>"   onclick="enviodatosnor2()" class="btn btn-success"></input></th>
   </tr>
   <tr>
       <th scope="col">1</th>
       <th scope="col">0</th>
       <th scope="col">0</th>
       <th scope="col"><input type="submit" value=">>"  onclick="enviodatosnor3()" class="btn btn-success"></input></th>
   </tr>
   <tr>
       <th scope="col">1</th>
       <th scope="col">1</th>
       <th scope="col">0</th>
       <th scope="col"><input type="submit" value=">>"  onclick="enviodatosnor4()" class="btn btn-success" ></input></th>
   </tr>
</table>
<h2>Valor de Σ</h2>
<br>
<a>Σ=<h3 id="pruebanor"></h3></a>
<br>
<h2>Rsultados</h2>
<br>
<a>Salida=<h3 id="pruebanor2"></h3></a>
<br>
<a>Salida Esperada=<h3 id="esperadanor" ></h3></a>
<br>
<a>Resultado esperado=<h3 id="resultadonor" ></h3></a>
</div>

<div id="or" class="or"> 
<table class="table table-dark" id="tablaor">
<h1>Tabla de verdad OR</h1>
    <tr>
   <h2 id="salida">salida</h2>
       <th scope="col">X1</th>
       <th scope="col">X2</th>
       <th scope="col">D</th>
       <th scope="col">Envio</th>
   </tr>
   <h2 id="entradaor">Entrada</h2>
   <tr>
       <th scope="col">0</th>
       <th scope="col">0</th>
       <th scope="col">0</th>
       <th scope="col"><input type="submit" value=">>" onclick="enviodatosor1()" class="btn btn-success" ></input></th>
   </tr>
   <tr>
       <th scope="col">0</th>
       <th scope="col">1</th>
       <th scope="col">1</th>
       <th scope="col"><input type="submit" value=">>"   onclick="enviodatosor2()" class="btn btn-success" ></input></th>
   </tr>
   <tr>
       <th scope="col">1</th>
       <th scope="col">0</th>
       <th scope="col">1</th>
       <th scope="col"><input type="submit" value=">>"  onclick="enviodatosor3()" class="btn btn-success" ></input></th>
   </tr>
   <tr>
       <th scope="col">1</th>
       <th scope="col">1</th>
       <th scope="col">1</th>
       <th scope="col"><input type="submit" value=">>"  onclick="enviodatosor4()" class="btn btn-success" ></input></th>
   </tr>
</table>

<h2>Valor de Σ</h2>
<br>
<a>Σ=<h3 id="pruebaor"></h3></a>
<br>
<h2>Rsultados</h2>
<br>
<a>Salida=<h3 id="pruebaor2"></h3></a>
<br>
<a>Salida Esperada=<h3 id="esperadaor" ></h3></a>
<br>
<a>Resultado esperado=<h3 id="resultadoor" ></h3></a>
</div>
<!--<div class="orl">
<img src="compuertas/XNOR.png" alt="XNOR">
</div>
<div class="or">
    <img src="compuertas/xnor1 (1).png" alt="XNOR">
</div>-->
<input type="submit" name="voler" value="volver" OnClick="location.href='conexion.php'" class="volver">
</body>
</html>