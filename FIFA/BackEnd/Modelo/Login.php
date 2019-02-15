<?php

class Login
{
  private $Usuario;
  private $Contraseña;

  function getUsuario() {
      return $this->Usuario;
  }

  function getContraseña() {
      return $this->Contraseña;
  }

  function setUsuario($Usuario) {
      $this->Usuario = $Usuario;
  }

  function setContraseña($Contraseña) {
      $this->Contraseña = $Contraseña;
  }
}

 ?>
