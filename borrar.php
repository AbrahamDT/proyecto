<?php 
include("conexion.php");
$id = $_GET['ID'];
delete('usuarios','ID',$ID);
header("location:eliminar.php");
?>