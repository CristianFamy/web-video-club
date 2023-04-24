<?php
	include("conexion.php");
	$nombre=$_POST['nombre'];
	$genero=$_POST['genero'];
	$duracion=$_POST['duracion'];
	$actor=$_POST['actor'];

	$_POST['nombre']="";
	$_POST['genero']="";
	$_POST['actor']="";

	$sql="INSERT INTO pelicula  VALUES ('','$nombre','$genero','$duracion','$actor')";
	$consulta=mysqli_query($conexion,$sql);
	if($consulta){
		$msj="Se registró la película correctamente";
		header("location:registrarPelicula.php?mensaje=$msj");
	} else{
		echo "error al cargar los datos";
	}
?>