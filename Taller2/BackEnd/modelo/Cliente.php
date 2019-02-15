<?php

class Cliente
{
 private $Nombre;
 private $Apellido;
 private $Email;
 private $Tipo;
 private $Titular;
 private $Numero;
 private $CVV2;
 private $FechaExpedicion;
 private $Direccion;
 private $Ciudad;
 private $CodigoPostal;
 private $Pais;
 private $Telefono;
 private $CodigoSeguridad;


 function getNombre() {
     return $this->Nombre;
 }

 function getApellido() {
     return $this->Apellido;
 }

 function getEmail() {
     return $this->Email;
 }

 function getTipo() {
     return $this->Tipo;
 }

 function getTitular() {
     return $this->Titular;
 }

 function getNumero() {
     return $this->Numero;
 }

 function getCVV2() {
     return $this->CVV2;
 }

 function getFechaExpedicion() {
     return $this->FechaExpedicion;
 }

 function getDireccion() {
     return $this->Direccion;
 }

 function getCiudad() {
     return $this->Ciudad;
 }

 function getCodigoPostal() {
     return $this->CodigoPostal;
 }

 function getPais() {
     return $this->Pais;
 }

 function getTelefono() {
     return $this->Telefono;
 }

 function getCodigoSeguridad() {
     return $this->CodigoSeguridad;
 }

 function setNombre($Nombre) {
     $this->Nombre = $Nombre;
 }

 function setApellido($Apellido) {
     $this->Apellido = $Apellido;
 }

 function setEmail($Email) {
     $this->Email = $Email;
 }

 function setTipo($Tipo) {
     $this->Tipo = $Tipo;
 }

 function setTitular($Titular) {
     $this->Titular = $Titular;
 }

 function setNumero($Numero) {
     $this->Numero = $Numero;
 }

 function setCVV2($CVV2) {
     $this->CVV2 = $CVV2;
 }

 function setFechaExpedicion($FechaExpedicion) {
     $this->FechaExpedicion = $FechaExpedicion;
 }

 function setDireccion($Direccion) {
     $this->Direccion = $Direccion;
 }

 function setCiudad($Ciudad) {
     $this->Ciudad = $Ciudad;
 }

 function setCodigoPostal($CodigoPostal) {
     $this->CodigoPostal = $CodigoPostal;
 }

 function setPais($Pais) {
     $this->Pais = $Pais;
 }

 function setTelefono($Telefono) {
     $this->Telefono = $Telefono;
 }

 function setCodigoSeguridad($CodigoSeguridad) {
     $this->CodigoSeguridad = $CodigoSeguridad;
 }


}
