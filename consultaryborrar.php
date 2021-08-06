<?php
$con=mysqli_connect('localhost','root','','empresa');
?>
<!DOCTIPE hmtl>
<html>
<head>
<title> consultar y borrar datos</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
    
  
</head>

<body style="background-color:#DFB37C;">
<h2>Registros existentes en la base de datos:</h2><br>
<div class="row">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
 <tr>
 <th  align="center">~ID</th>
 <th  align="center">~Nombre</th>
 <th  align="center">~Apellido</th>
 <th  align="center">~Nombre de Usuario</th>
 <th  align="center">~Correo</th>
 </tr>
 </thead>
 <?php
 $sql="SELECT * from usuarios";
 $result=mysqli_query($con,$sql);
 while($mostrar=mysqli_fetch_array($result)){
 ?>
 <tr>
 <td align="center"><?php echo $mostrar['ID'] ?></td>
 <td align="center"><?php echo $mostrar['Nombre'] ?></td>
 <td align="center"><?php echo $mostrar['Apellido'] ?></td>
 <td align="center"><?php echo $mostrar['Usuario'] ?></td>
 <td align="center"><?php echo $mostrar['Correo'] ?></td>
 </tr>
 <?php
 }
 ?>
 </table>
 
 ~NOMBRE DE USUARIO que deseas borrar
 <form action="delete.php" method="post" name="form">
	<input type="text" name="nom"/>
	<input type="submit" target="_blank" value="borrar" />
	</form><br>
	

	
	<form class="" action="modificar.php" method="post">
	<h2>¿Desea modificar algún registro existente?</h2>
	<input type="text" name="ID" placeholder="Ingresa ID a modificar ">
	<input type="text" name="Nombre" placeholder="Ingresa nuevo Nombre(s)">
	<input type="text" name="Apellido" placeholder="Ingresa nuevo Apellido(s)">
	<input type="text" name="Usuario" placeholder="Ingresa nuevo usuario">
	<input type="text" name="Correo" placeholder="Ingresa nuevo correo">
	<input type="submit" target="_blank" name="name" value="modificar">
	</form>
	
 </body>
 </html>