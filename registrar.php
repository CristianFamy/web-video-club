<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Registrar</title>
</head>
<body>
<h1 class="titulo-chico">REGISRTARSE</h1>
<table cellspacing="0", cellpadding="0" class="letra" style="margin-top: 10%">
	<form action="dueño.php", method="post">
		<tr>
			<td>DNI</td><td><input type="number" name="dni"></td>	
		</tr>
		<tr>
			<td>Contrase&ntildea &nbsp</td><td><input type="password" name="psw"></td>	
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
	<a href="inicio.html">PAGINA PRINCIPAL</a>		
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