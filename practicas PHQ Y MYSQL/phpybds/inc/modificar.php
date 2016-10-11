<?php
  require('conexion.php');
  $id=$_POST['id'];

  $nombre=$_POST['nombre'];
  $titulo=$_POST['titulo'];

  $consulta="UPDATE trabajos SET nombre='$nombre',titulo='$titulo' WHERE id='$id'";
  $resultado=$mysqli->query($consulta);
header('location:../index.php');
  exit(); 
?>

<?php  ?>