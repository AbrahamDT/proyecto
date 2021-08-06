<?php
include ("conexion.php");

$con=mysql_connect($host,$user,$clave) or die ("problemas en server");
mysql_select_db($bd,$con) or die ("problemas en DB");
$reg=mysql_query("SELECT ID FROM usuarios WHERE Usuario = '$_POST[nom]'",$con);

if($re=mysql_fetch_array($reg)){
	mysql_query("DELETE FROM usuarios WHERE Usuario = '$_POST[nom]'",$con);
	echo "datos eliminados";
}else{
echo "datos no han sido eliminados";
}
?>