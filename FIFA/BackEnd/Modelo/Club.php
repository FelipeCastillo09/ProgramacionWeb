<?php

class Club
{
  private $Id_Club;
  private $Nombre_Club;
  private $Id_Liga;
  private $Titulos_Liga;
  private $Titulos_ChampionsLeague;
  private $Titulos_EuropaLeague;
  private $Titulos_SuperCopaEuropa;

  function __construct($Id_Club, $Nombre_Club, $Id_Liga, $Titulos_Liga, $Titulos_ChampionsLeague, $Titulos_EuropaLeague, $Titulos_SuperCopaEuropa)
  {
   $this->Id_Club = $Id_Club;
   $this->Nombre_Club = $Nombre_Club;
   $this->Id_Liga = $Id_Liga;
   $this->Titulos_Liga = $Titulos_Liga;
   $this->Titulos_ChampionsLeague = $Titulos_ChampionsLeague;
   $this->Titulos_EuropaLeague = $Titulos_EuropaLeague;
   $this->Titulos_SuperCopaEuropa = $Titulos_SuperCopaEuropa;
  }

  function getId_Club() {
      return $this->Id_Club;
  }

  function getNombre_Club() {
      return $this->Nombre_Club;
  }

  function getId_Liga() {
      return $this->Id_Liga;
  }

  function getTitulos_Liga() {
      return $this->Titulos_Liga;
  }

  function getTitulos_ChampionsLeague() {
      return $this->Titulos_ChampionsLeague;
  }

  function getTitulos_EuropaLeague() {
      return $this->Titulos_EuropaLeague;
  }

  function getTitulos_SuperCopaEuropa() {
      return $this->Titulos_SuperCopaEuropa;
  }

  function setId_Club($Id_Club) {
      $this->Id_Club = $Id_Club;
  }

  function setNombre_Club($Nombre_Club) {
      $this->Nombre_Club = $Nombre_Club;
  }

  function setId_Liga($Id_Liga) {
      $this->Id_Liga = $Id_Liga;
  }

  function setTitulos_Liga($Titulos_Liga) {
      $this->Titulos_Liga = $Titulos_Liga;
  }

  function setTitulos_ChampionsLeague($Titulos_ChampionsLeague) {
      $this->Titulos_ChampionsLeague = $Titulos_ChampionsLeague;
  }

  function setTitulos_EuropaLeague($Titulos_EuropaLeague) {
      $this->Titulos_EuropaLeague = $Titulos_EuropaLeague;
  }

  function setTitulos_SuperCopaEuropa($Titulos_SuperCopaEuropa) {
      $this->Titulos_SuperCopaEuropa = $Titulos_SuperCopaEuropa;
  }

}

 ?>
