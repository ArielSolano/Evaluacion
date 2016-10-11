<?php
  require('conexion.php');

  $nombre=$_POST['nombre'];
  $titulo=$_POST['titulo'];

  $consulta="INSERT INTO trabajos(nombre,titulo) VALUES ('$nombre','$titulo')";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php"); 
  exit(); 
?>