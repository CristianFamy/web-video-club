<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Actualizar socios</title>
</head>
<body>
	<h1>SOCIOS</h1>
	<table cellspacing="0", cellpadding="0"  class="letra">
	<form action="actualizandoSocio.php", method="post">
		<tr>
			<td>DNI</td><td><input type="number" name="dni"></td>	
		</tr>
		<tr>
			<td>Nombre</td><td><input type="text" name="nombre"></td>	
		</tr>
		<tr>
			<td>Apellido</td><td><input type="text" name="apellido"></td>	
		</tr>
		<tr>
			<td><input type="submit" value="Modificar" ></td>
			<td></td>	
		</tr>
	</form>
</table>
<br>
<br>

		<div class="div-menu"><a href="registrarPelicula.php" class="a-menu">REGISTRAR PELICULA</a></div>	
		<div class="div-menu"><a href="registrarSocio.php" class="a-menu">REGISTRAR SOCIO</a></div>
		<div class="div-menu"><a class="a-menu" href="consultarPelicula.php">CONSULTAR PELICULA</a></div>
		<div class="div-menu"><a class="a-menu" href="consultarSocio.php">CONSULTAR SOCIO</a></div>	
<br>
<br>
	<?php
		$cad = $_GET['msj'];
		echo $cad; 
	?>
</body>
</html>