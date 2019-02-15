function EnviarDatos() {

  var xhttp = new XMLHttpRequest();

  var numero = document.getElementById('NumeroT').value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("enviar").innerHTML = this.responseText;
      }
  };
  xhttp.open("GET", "../../BackEnd/control/cEliminar.php?NumeroT=" +numero, true);

  xhttp.send();

  window.alert("REALIZADO CORRECTAMENTE");
  var url = "../../FrontEnd/vista/Mensaje.php";
  $(location).attr('href',url);
}
