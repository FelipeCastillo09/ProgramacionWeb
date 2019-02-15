<?php
require 'C:\xampp\htdocs\Taller2\BackEnd\modelo\Cliente.php';
require 'C:\xampp\htdocs\Taller2\BackEnd\modelo\DaoCliente.php';


$cliente = new Cliente();
$daoCliente = new DaoCliente();

$nombre = $_GET["Nombre"];
$apellido = $_GET["Apellido"];
$email = $_GET["Email"];
$targeta = $_GET["TipoTargeta"];
$titular = $_GET["Titular"];
$numero = $_GET["Numero"];
$cvv2 = $_GET["CVV2"];
$fecha = $_GET["Fecha"];
$direccion = $_GET["Direccion"];
$ciudad = $_GET["Ciudad"];
$codigopostal = $_GET["CodigoPostal"];
$pais = $_GET["Pais"];
$celular = $_GET["Celular"];
$codigoseguridad = $_GET["CodigoSeguridad"];

$cliente-> setNombre($nombre);
$cliente-> setApellido($apellido);
$cliente-> setEmail($email);
$cliente-> setTipo($targeta);
$cliente-> setTitular($titular);
$cliente-> setNumero($numero);
$cliente-> setCVV2($cvv2);
$cliente-> setFechaExpedicion($fecha);
$cliente-> setDireccion($direccion);
$cliente-> setCiudad($ciudad);
$cliente-> setCodigoPostal($codigopostal);
$cliente-> setPais($pais);
$cliente-> setTelefono($celular);
$cliente-> setCodigoSeguridad($codigoseguridad);


$conexion = $daoCliente-> InsertarUsuario($cliente-> getNombre(), $cliente-> getApellido(), $cliente-> getEmail(), $cliente-> getTipo(), $cliente-> getTitular(), $cliente-> getNumero(),
  $cliente-> getCVV2(), $cliente-> getFechaExpedicion(), $cliente-> getDireccion(), $cliente-> getCiudad(), $cliente-> getCodigoPostal(), $cliente-> getPais(), $cliente-> getTelefono(),
  $cliente-> getCodigoSeguridad());

echo $conexion;



 ?>
