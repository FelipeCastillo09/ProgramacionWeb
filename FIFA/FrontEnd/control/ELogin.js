function ELogin() {

  var xhttp = new XMLHttpRequest();
  var usuario = document.getElementById('usuario').value;
  var contraseña = document.getElementById('contraseña').value;


  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("login").innerHTML = this.responseText;
      }
  };

  if (usuario==19 && contraseña=="fifa")
  {
    window.alert("INGRESO CORRECTO");
    var url = "../../FrontEnd/vista/Menu.php";
    $(location).attr('href',url);
  }
  else
  {
    window.alert("ERROR DE INGRESO");
    var url = "../../FrontEnd/vista/logeo.php";
    $(location).attr('href',url);

  }

}
