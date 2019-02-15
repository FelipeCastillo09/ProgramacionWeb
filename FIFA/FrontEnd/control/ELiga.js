function ELiga() {

  var xhttp = new XMLHttpRequest();
  var id = document.getElementById('Id').value;
  var nombre = document.getElementById('Nombre').value;


  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("liga").innerHTML = this.responseText;
      }
  };
  xhttp.open("GET", "../../BackEnd/Control/cLiga.php?Id=" + id + "&Nombre=" + nombre, true);

  xhttp.send();
}
