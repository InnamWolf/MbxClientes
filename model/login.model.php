<?php

require_once "conexion.php";

class ModeloUsuarios{

  //* ===============================================
  //* MOSTRAR USUARIOS
  //* ===============================================

  static public function mdlMostrarUsuarios($tabla, $datos){

      $stmt = Conexion::conectar()->prepare("SELECT Tipo, nombre, Usuario FROM $tabla where username='". $datos["usuario"] ."' and password='". $datos["contrasenia"] ."' and username<>'s005610' and username<>'s001640'");      
  var_dump($stmt);
      $stmt -> execute();
      return $stmt -> fetchAll(); 
      $stmt -> close();
      $stmt = null; 


$stmt = mb_query("SELECT Tipo, nombre, Usuario FROM s20v2log where username='". $HlpDskCveUsu ."' and password='". $HlpDskNipUsu ."' and username<>'s005610' and username<>'s001640'");

  }

}
