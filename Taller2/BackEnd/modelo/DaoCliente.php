<?php
require 'C:\xampp\htdocs\Taller2\BackEnd\control\Conexion.php';

class DaoCliente
{
  function __construct(){}

  public function InsertarUsuario($Nombre,$Apellido,$Email,$Targeta,$Titular,$Numero,$CVV2,$Fecha,$Direccion,$Ciudad,$CodigoPostal,$Pais,$Celular,$CodigoSeguridad)
  {
   $conexion = new Conexion(); //estable el objeto conexion
   $connection = $conexion -> conectar(); //guarda la conexion para realizar las consultas
   $insertar = "INSERT INTO Clientes(Nombre,Apellido,Email,Targeta,Titular,NumeroTargeta,CVV2,Fecha,Direccion,Ciudad,CodigoPostal,Pais,Celular,CodigoSeguridad)
   VALUES('$Nombre','$Apellido','$Email','$Targeta','$Titular','$Numero','$CVV2','$Fecha','$Direccion','$Ciudad','$CodigoPostal','$Pais','$Celular','$CodigoSeguridad')";
   $resultado = mysqli_query($connection, $insertar);
   mysqli_close($connection);
  }
  public function ActualizarUsuario($Nombre,$Apellido,$Email,$Targeta,$Titular,$Numero,$CVV2,$Fecha,$Direccion,$Ciudad,$CodigoPostal,$Pais,$Celular,$CodigoSeguridad)
  {
   $conexion = new Conexion(); //estable el objeto conexion
   $connection = $conexion -> conectar(); //guarda la conexion para realizar las consultas
   $actualizar= "UPDATE Clientes SET Nombre='$Nombre', Apellido='$Apellido', Email='$Email', Targeta='$Targeta',Titular='$Titular',NumeroTargeta='$Numero',CVV2='$CVV2',
   Fecha='$Fecha',Direccion='$Direccion',Ciudad='$Ciudad',CodigoPostal='$CodigoPostal',Pais='$Pais',Celular='$Celular',CodigoSeguridad='$CodigoSeguridad'
   WHERE NumeroTargeta=$Numero";
   $resultado = mysqli_query($connection, $actualizar);
   mysqli_close($connection);
  }
  public function EliminarUsuario($Numero)
  {
   $conexion = new Conexion(); //estable el objeto conexion
   $connection = $conexion -> conectar();
   $eliminar = "DELETE FROM Clientes WHERE NumeroTargeta=$Numero";
   $resultado = mysqli_query($connection, $eliminar);
   mysqli_close($connection);
  }

}

 ?>
