<?php
 require 'conexion.php';
  
 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
  $usuario = $_POST["usuario"];
 $correo = $_POST["correo"];

$insertar = "INSERT INTO usuarios(nombre, apellido, usuario, correo) VALUES ('$nombre','$apellido','$usuario','$correo')";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "Respuesta enviada con éxito";

}else{
    echo "Error al enviar";
}






?>