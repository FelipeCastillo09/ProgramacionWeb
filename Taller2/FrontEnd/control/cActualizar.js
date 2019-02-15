function EnviarDatos() {

  var xhttp = new XMLHttpRequest();
  var nombre = document.getElementById('Nombre').value;
  var apellido = document.getElementById('Apellido').value;
  var email = document.getElementById('Email').value;
  var targeta = document.getElementById('TipoTargeta').value;
  var titular = document.getElementById('Titular').value;
  var numero = document.getElementById('Numero').value;
  var cvv2 = document.getElementById('CVV2').value;
  var fecha = document.getElementById('Fecha').value;
  var direccion = document.getElementById('Direccion').value;
  var ciudad = document.getElementById('Ciudad').value;
  var codigopostal = document.getElementById('CodigoPostal').value;
  var pais = document.getElementById('Pais').value;
  var celular = document.getElementById('Celular').value;
  var codigoseguridad = document.getElementById('CodigoSeguridad').value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("enviar").innerHTML = this.responseText;
      }
  };
  xhttp.open("GET", "../../BackEnd/control/cActualizar.php?Nombre=" +nombre+ "&Apellido=" +apellido+ "&Email=" +email+ "&TipoTargeta=" +targeta+ "&Titular=" +titular+ "&Numero=" +numero+
  "&CVV2=" +cvv2+ "&Fecha=" +fecha+ "&Direccion=" +direccion+ "&Ciudad=" +ciudad+ "&CodigoPostal=" +codigopostal+ "&Pais=" +pais+ "&Celular=" +celular+ "&CodigoSeguridad=" +codigoseguridad, true);

  xhttp.send();

  window.alert("REALIZADO CORRECTAMENTE");
  var url = "../../FrontEnd/vista/Mensaje.php";
  $(location).attr('href',url);
}
