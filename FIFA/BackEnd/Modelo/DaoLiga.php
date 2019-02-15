<?php
require 'C:\xampp\htdocs\FIFA\BackEnd\Conexion.php';

class DaoLiga
{
  function __construct(){}

  public function CrearLiga($Id,$Nombre)
  {
   $conexion = new Conexion(); //estable el objeto conexion
   $connection = $conexion -> conectar(); //guarda la conexion para realizar las consultas
   $insertar = "INSERT INTO ligas(Id_Liga, Nombre_Liga) VALUES('$Id','$Nombre')";
   $resultado = mysqli_query($connection, $insertar);
   mysqli_close($connection);
  }
}

 ?>
