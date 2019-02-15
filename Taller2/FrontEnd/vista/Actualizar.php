<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
       <link rel="stylesheet" href="normalizar.css" />
      <link rel="stylesheet" href="Crear.css" />
    <title>ACTUALIZAR</title>
  </head>
  <body>

    <form class="Formulario">
       <h1>Informacion Personal</h1>
       <h2>Informacion Targeta de credito</h2>
       <h3>Direccion de Envio</h3>
    </form>

  <div id="enviar">
    <div class="Personal">
      <h1>Nombre:</h1>
      <input type="text" id="Nombre"name="Nombre" value=""><br> <br>
      <h2>Apellido:</h2>
      <input type="text" id="Apellido" name="Apellido" value=""><br> <br>
      <h3>Email:</h3>
      <input type="text" id="Email" name="Email" value=""><br> <br>
    </div>

    <div class="Targeta">
      <h1>Tipo Targeta:</h1>
    <select name="Targeta" id="TipoTargeta">
		  <option value="Bancolombia">Bancolombia</option>
		  <option value="BBVA">BBVA</option>
	    <option value="Colpatria">Colpatria</option>
		  <option value="Davivienda">Davivienda</option>
	  </select> <br> <br>
      <h2>Titular:</h2>
      <input type="text" id="Titular" name="Titular" value=""><br> <br>
      <h3>Numero:</h3>
      <input type="text" id="Numero" name="Numero" value=""><br> <br>
      <h4>CVV2:</h4>
      <input type="text" id="CVV2" name="CVV2" value=""><br> <br>
	  <h5>Fecha:</h5>
      <input type="date" id="Fecha" name="Fecha" min="1940-01-01" max="2019-02-30"><br> <br>
    </div>

	<div class="Direccion">
	  <h1>Direccion:</h1>
      <input type="text" id="Direccion" name="Direccion" value=""><br> <br>
      <h2>Ciudad:</h2>
      <input type="text" id="Ciudad" name="Ciudad" value=""><br> <br>
	  <h3>Codigo Postal:</h3>
      <input type="text"id="CodigoPostal" name="Codigo" value=""><br> <br>
	  <h4>Pais:</h4>
    <select name="Pais" id="Pais">
	  	<option value="Argentina">Argentina</option>
	 	  <option value="Bolivia">Bolivia</option>
	    <option value="Brazil">Brazil</option>
		  <option value="Colombia">Colombia</option>
		  <option value="Chile">Chile</option>
		  <option value="Ecuador">Ecuador</option>
	    <option value="EE.UU">EE.UU</option>
		  <option value="Mexico">Mexico</option>
		  <option value="Peru">Peru</option>
		  <option value="Paraguay">Paraguay</option>
	    <option value="Uruguay">Uruguay</option>
		  <option value="Venezuela">Venezuela</option>
	  </select> <br> <br>
	  <h5>Celular:</h5>
      <input type="text" id="Celular" name="Celular" value=""><br> <br>
      <h6>Ingrese Codigo:</h6>
      <input type="text" id="CodigoSeguridad" name="CodigoS" value=""><br> <br>
	  <img id="imagen" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/EAN13.svg/1200px-EAN13.svg.png" border="1" width="160" height="80"/> <br> <br>
</div>

    <input type="button" name="Enviar" value="Enviar" onclick="EnviarDatos()">
  </div>


<script src="../control/cActualizar.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
</html>
