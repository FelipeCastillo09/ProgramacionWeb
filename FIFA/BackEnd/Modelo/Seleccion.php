<?php

class Seleccion
{
  private $Id_Seleccion;
  private $Nombre_Seleccion;
  private $Id_Liga;
  private $Titulos_Copa;
  private $Titulos_Mundial;
  private $Titulos_Confederaciones;

  function __construct($Id_Seleccion, $Nombre_Seleccion, $Id_Liga, $Titulos_Copa, $Titulos_Mundial, $Titulos_Confederaciones)
  {
   $this->Id_Seleccion = $Id_Seleccion;
   $this->Nombre_Seleccion = $Nombre_Seleccion;
   $this->Id_Liga = $Id_Liga;
   $this->Titulos_Copa = $Titulos_Copa;
   $this->Titulos_Mundial = $Titulos_Mundial;
   $this->Titulos_Confederaciones = $Titulos_Confederaciones;
  }

  function getId_Seleccion() {
      return $this->Id_Seleccion;
  }

  function getNombre_Seleccion() {
      return $this->Nombre_Seleccion;
  }

  function getId_Liga() {
      return $this->Id_Liga;
  }

  function getTitulos_Copa() {
      return $this->Titulos_Copa;
  }

  function getTitulos_Mundial() {
      return $this->Titulos_Mundial;
  }

  function getTitulos_Confederaciones() {
      return $this->Titulos_Confederaciones;
  }

  function setId_Seleccion($Id_Seleccion) {
      $this->Id_Seleccion = $Id_Seleccion;
  }

  function setNombre_Seleccion($Nombre_Seleccion) {
      $this->Nombre_Seleccion = $Nombre_Seleccion;
  }

  function setId_Liga($Id_Liga) {
      $this->Id_Liga = $Id_Liga;
  }

  function setTitulos_Copa($Titulos_Copa) {
      $this->Titulos_Copa = $Titulos_Copa;
  }

  function setTitulos_Mundial($Titulos_Mundial) {
      $this->Titulos_Mundial = $Titulos_Mundial;
  }

  function setTitulos_Confederaciones($Titulos_Confederaciones) {
      $this->Titulos_Confederaciones = $Titulos_Confederaciones;
  }
  
}

 ?>
