<?php
require 'C:\xampp\htdocs\Taller2\BackEnd\modelo\Cliente.php';
require 'C:\xampp\htdocs\Taller2\BackEnd\modelo\DaoCliente.php';


$cliente = new Cliente();
$daoCliente = new DaoCliente();

$numero = $_GET["NumeroT"];

$cliente-> setNumero($numero);

$conexion = $daoCliente-> EliminarUsuario($cliente-> getNumero());
echo $conexion;

 ?>
