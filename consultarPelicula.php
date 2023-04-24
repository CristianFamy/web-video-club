<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Consultar película</title>
</head>
<body>
	<h1>PELICULAS</h1>
	<table class="letra">
		<!--consultandoPelicula.php, actualizandoPelicula.php-->
		<form action="consultandoPelicula.php" method="post">
			<tr>
				<td>Pelicula</td>
				<td>
					<select name="filtro">
						<option value="0">Seleccione una opcion</option>
						<option value="5">Pelicula</option>
						<option value="6">Actor principal</option>
						<optgroup label="Genero" name="genero">	
								<option value="1">Acci&oacuten</option>
								<option value="2">Ciencia ficci&oacuteon</option>
								<option value="3">Comedia</option>
								<option value="4">Terror</option>
						</optgroup>
					</select>
				</td>
				<td> <input type="text" name="ingreso"> </td>
			</tr>
			<tr>
				<td> <input type="submit" value="Consultar"> </td>
				<td></td>
				<td> <input type="submit" value="Actualizar"> </td>
			</tr>
		</form>
	</table>	
	<br>
<br>	
<div class="containerUno">
		<div class="div-menu"><a class="a-menu" href="registrarPelicula.php">REGISTRAR PELICULA</a></div>
		<div class="div-menu"><a class="a-menu" href="registrarSocio.php">REGISTRAR SOCIO</a></div>
		<div class="div-menu"><a class="a-menu" href="consultarSocio.php">CONSULTAR SOCIO</a></div>
		<div class="div-menu"><a class="a-menu" href="actualizarSocio.php">ACTUALIZAR SOCIO</a></div>
</div>
	<?php
		$cad = $_GET['msj'];
				
		$separador = ",";
		$separada = explode($separador, $cad);
		$j=1;
		echo "<table>";
			echo "<tr>";
				echo "<th>Nro</th>";
				echo "<th>Nombre</th>";
				echo "<th>Genero</th>";
				echo "<th>Duración</th>";
				echo "<th>Actor Principal</th>";
			echo "</tr>";
			foreach ($separada as $registro) { //matrix-accion-2:00-kenu reavs
				$separador2 = "-";
				$campos = explode($separador2, $registro);
				echo "<tr>";
				echo "<td>$j</td>";
				$j=$j+1;	
				$cont=0;
				foreach ($campos as $campo) {
					if ($cont==1) {
						switch ($campo) {
							case 1:
								$campo="acción";
								break;
							case 2:
								$campo="ciencia ficción";
								break;
							case 3:
								$campo="comedia";
								break;
							case 4:
								$campo="terror";
								break;
						}
					}
					echo "<td>$campo</td>";
					$cont=$cont+1;
				}
				echo "</tr>";
			}
		echo "</table>";

	?>
	
	
</body>
</html>