<?php
	include("conexion.php");
	$dni=$_POST['dni'];
	$psw="000";
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$sexo=$_POST['sexo'];
	$sql="INSERT INTO dueño  VALUES ('$dni','$psw','$nombre','$apellido','$sexo')";
	$consulta=mysqli_query($conexion,$sql);
	if($consulta){
		$msj="El socio se registró correctamente";
		header("location:registrarSocio.php?mensaje=$msj");
	} else{
		echo "error al cargar los datos";
	}
?>