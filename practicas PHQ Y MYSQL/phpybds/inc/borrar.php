<?php 
require('conexion.php');
$id = $_GET['id'];

$consulta = "DELETE from trabajos where id = '$id'";
$resultado =$mysqli->query($consulta);
header('location:../publicar.php');
exit();

 ?>