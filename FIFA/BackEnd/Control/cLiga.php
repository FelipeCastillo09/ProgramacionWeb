<?php

    require 'C:\xampp\htdocs\FIFA\BackEnd\Modelo\DaoLiga.php';
    require 'C:\xampp\htdocs\FIFA\BackEnd\Modelo\Liga.php';

    $liga = new Liga();
    $daoliga = new DaoLiga();

    $id = $_GET["Id"];
    $nombre = $_GET["Nombre"];

    $liga-> setId_Liga($id);
    $liga-> setNombre_Liga($nombre);

    $conexion = $daoliga-> CrearLiga($liga-> getId_Liga(), $liga-> getNombre_Liga());

    echo $conexion;
    echo "COMPLETADO";



 ?>
