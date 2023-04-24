<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Registrar socios</title>
</head>
<body>
	<h1>REGISTRAR SOCIOS</h1>
	<table cellspacing="0", cellpadding="0" align="center" class="letra">
	<form action="socio.php", method="post">
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
			<td rowspan="2">Sexo</td>
			<td>Masculino<input type="radio" name="sexo" value="M"></td>	
		</tr>
		<tr>
			<td>Femenino <input type="radio" name="sexo" value="F"></td>	
		</tr>
		<tr>
			<td><input type="submit" value="Registrar" align="center"></td>
			<td></td>	
		</tr>
	</form>
</table>
<div class="vinculo">
	<a href="index.html">PAGINA PRINCIPAL</a>		
</div>
<br>
<br>	
<div class="containerUno">
		<div class="div-menu"><a class="a-menu" href="registrarPelicula.php">REGISTRAR PELICULA</a></div>	
		<div class="div-menu"><a class="a-menu" href="consultarPelicula.php">CONSULTAR PELICULA</a></div>
		<div class="div-menu"><a class="a-menu" href="consultarSocio.php">CONSULTAR SOCIO</a></div>
		<div class="div-menu"><a class="a-menu" href="actualizarSocio.php">ACTUALIZAR SOCIO</a></div>
</div>
<font face="Arial" size="3"  color="blue" class="formato-php">	
		<?php
				/*
					 "la var error de abbajo no tiene valor, por ende me va tirar un error diciendo q ta vacia.";
				 "pa evitar q tire error entonces pngo error_reporting(0) pa decir q ignore el error de la var error";
				 "si la var se llamara pepe en vez de error, entonces pongo pepe_reporting(0)";

				*/
				echo $_GET['mensaje'];
		?>
</font>

</body>
</html>