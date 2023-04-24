<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Registrar película</title>
</head>
<body>
	<h1>REGISTRAR PELÍCULA</h1>
	<table cellspacing="0", cellpadding="0"  class="letra">
	<form action="pelicula.php", method="post">
		<tr>
			<td>Pel&iacutecula</td><td><input type="text" name="nombre" required></td>	
		</tr>
		<tr>
			<td>Elige un g&eacutenero &nbsp</td>
			<td>
				<select	name="genero">
					<option value="0">G&eacuteneros</option>
					<option value="1">Acci&oacuten</option>
					<option value="2">Ciencia ficci&oacuteon</option>
					<option value="3">Comedia</option>
					<option value="4">Terror</option>
				</select>
			</td>	
		</tr>
		
		<tr>
			<td>Duraci&oacuten</td><td><input type="time" name="duracion" required></td>	
		</tr>
		<tr>
			<td>Actor principal</td><td><input type="text" name="actor" required></td>	
		</tr>
		<tr>
			<td><input type="submit" value="Registrar" align="center"></td>
			<td></td>	
		</tr>
	</form>
</table>

<div class="vinculo">
	<a href="inicio.html">PAGINA PRINCIPAL</a>		
</div>
	
<br>
<br>	
<div class="containerUno">
		<div class="div-menu"><a class="a-menu" href="consultarPelicula.php">CONSULTAR PELICULA</a></div>
		<div class="div-menu"><a class="a-menu" href="registrarSocio.php">REGISTRAR SOCIO</a></div>
		<div class="div-menu"><a class="a-menu" href="consultarSocio.php">CONSULTAR SOCIO</a></div>
		<div class="div-menu"><a class="a-menu" href="actualizarSocio.php">ACTUALIZAR SOCIO</a></div>
</div>
<br>
<br>
<div>
	<table class="letra">
		<form action="buscarAutor.php" method="post">
			<!--Actor <input type="text" name="actor" required> <input type="submit" value="Buscar" class="boton">-->
			<tr>
				<td><input type="radio" name="seleccionPeli" value="1"></td>
				<td>Pelicula</td>
				<td><input type="text" name="peli" required></td>
			</tr>	
			<tr>
				<td><input type="radio" name="seleccionPeli" value="2"></td>
				<td>Actor Principal</td>
				<td><input type="text" name="actor" required></td>
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Consultar"></td>
				<td></td>
			</tr>
		</form>
	</table>
</div>
<font face="Arial" size="3"  color="blue" class="formato-php">	
		<?php
				/*
					 "la var error de abbajo no tiene valor, por ende me va tirar un error diciendo q ta vacia.";
				 "pa evitar q tire error entonces pngo error_reporting(0) pa decir q ignore el error de la var error";
				 "si la var se llamara pepe en vez de error, entonces pongo pepe_reporting(0)";

				*/
				
				
				$cad = $_GET['msj'];
				
				$separador = ",";
				$separada = explode($separador, $cad);

				echo "<table>";
				echo "<tr><th>Actor</th></tr>";
				foreach ($separada as $info) {
					echo "<tr><td>$info</td></tr>";
				}
				echo "</table>";
				
		?>
	</font>
</body>
</html>