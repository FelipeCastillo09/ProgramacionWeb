<?php

class Liga
{
  private $Id_Liga;
  private $Nombre_Liga;



  function getId_Liga() {
      return $this->Id_Liga;
  }

  function getNombre_Liga() {
      return $this->Nombre_Liga;
  }

  function setId_Liga($Id_Liga) {
      $this->Id_Liga = $Id_Liga;
  }

  function setNombre_Liga($Nombre_Liga) {
      $this->Nombre_Liga = $Nombre_Liga;
  }



}

 ?>
