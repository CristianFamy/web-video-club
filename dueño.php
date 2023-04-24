<?php
	include("conexion.php");
	$dni=$_POST['dni'];
	$psw=$_POST['psw'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$sexo=$_POST['sexo'];
	$sql="INSERT INTO dueño  VALUES ('$dni','$psw','$nombre','$apellido','$sexo')";
	$consulta=mysqli_query($conexion,$sql);
	if($consulta){
		$msj="Ud se registró correctamente";
		header("location:registrar.php?mensaje=$msj");
	} else{
		echo "error al cargar los datos";
	}
?>