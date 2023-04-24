<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Consultar socios</title>
</head>
<body>
	<h1>SOCIOS</h1>
	<table cellspacing="0", cellpadding="0" align="center" class="letra">
	<form action="consultandoSocio.php", method="post">
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
			<td rowspan="3">Sexo</td>
			<td>Masculino<input type="radio" name="sexo" value="M"></td>	
		</tr>
		<tr>
			<td>Femenino <input type="radio" name="sexo" value="F"></td>	
		</tr>
		<tr>
			<td>Quitar seleccion <input type="radio" name="sexo" value="Z" checked></td>	
		</tr>
		<tr>
			<td><input type="submit" value="Calcular" ></td>
			<td><input type="submit" value="Actualizar" ></td>	
		</tr>
	</form>
</table>
<br>
<br>

		<div class="div-menu"><a href="registrarPelicula.php" class="a-menu">REGISTRAR PELICULA</a></div>	
		<div class="div-menu"><a href="registrarSocio.php" class="a-menu">CONSULTAR PELICULA</a></div>
		<div class="div-menu"><a class="a-menu" href="consultarPelicula.php">REGISTRAR SOCIO</a></div>
		<div class="div-menu"><a class="a-menu" href="actualizarSocio.php">ACTUALIZAR SOCIO</a></div>
<br>
<br>
	<?php
		$cad = $_GET['msj'];
				
		$separador = ",";
		$separada = explode($separador, $cad);
		echo "<table>";
			echo "<tr>";
				echo "<th>DNI</th>";
				echo "<th>Nombre</th>";
				echo "<th>Apellido</th>";
				echo "<th>Sexo</th>";
			echo "</tr>";
			foreach ($separada as $registro) { 
				$separador2 = "-";
				$campos = explode($separador2, $registro);
				echo "<tr>";
				$cont=0;
				foreach ($campos as $campo) {
					if ($cont==3) {
						switch ($campo) {
							case 'M':
								$campo="Masculino";
								break;
							case 'F':
								$campo="Femenino";
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