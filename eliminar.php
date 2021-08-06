<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registros </title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #DFB37C}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Eliminar Registros con Función PHP </h1>
<br><br>

<?php
	include("conexion.php");
?>
<table border="1" width="50%">
	<tr>
	<th width="41%">ID</th>
		<th width="41%">Nombre</th>
		<th width="41%">Apellido</th>
		<th width="41%">Usuario</th>
		<th width="50%">Correo</th>
		<th width="9%">Opcion</th>
	</tr>
<?php 
	$sql = "select * usuario";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->ID;?></td>
		<td><?php echo $row->Nombre;?></td>
		<td><?php echo $row->Apellido;?></td>
		<td><?php echo $row->Usuario;?></td>
		<td><?php echo $row->Correo;?></td>
		<td>
   <a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>