<?php
include ("conexion.php");
$I=$_POST['ID'];
$nom=$_POST['Nombre'];
$ape=$_POST['Apellido'];
$usu=$_POST['Usuario'];
$cor=$_POST['Correo'];
$con=mysql_connect($host,$user,$clave) or die ("problemas en server");
mysql_select_db($bd,$con) or die ("problemas en DB");
mysql_query("UPDATE usuarios SET Nombre = '$nom', Apellido = '$ape', Usuario = '$usu', Correo = '$cor'
WHERE ID = '$I'",$con);
echo "Modificado Correctamente";
?>