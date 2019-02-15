<?php

class Conexion
{
  private $usuario = "root";
  private $host = "localhost";
  private $password = "";
  private $DB = "taller";
  private $conexion;

  function __construct(){}

  public function conectar()
  {
      $this -> conexion = mysqli_connect($this -> host, $this -> usuario, $this -> password, $this -> DB);
      return $this -> conexion;
  }
}
