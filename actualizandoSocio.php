<?php
	include("conexion.php");
	$dni=$_POST['dni'];
	$nombre=$_POST['nombre']; 
	$apellido=$_POST['apellido']; 
	//$sexo=$_POST['sexo'];
	
	//$sql = "UPDATE dueño SET nombre = '$nombre'  WHERE dni = '$dni'"; 
	  // $sql = "UPDATE division  SET nombre = '$nombre' WHERE dni = '$dni'"; 
		if (!empty($dni) && !empty($nombre) && empty($apellido)){
		$sql = "UPDATE dueño SET nombre = '$nombre'  WHERE dni = '$dni'"; 
		}
		if (!empty($dni) && empty($nombre) && !empty($apellido)){
		$sql = "UPDATE dueño SET apellido = '$apellido'  WHERE dni = '$dni'"; 
		}
		if (!empty($dni) && !empty($nombre) && !empty($apellido)){
		$sql = "UPDATE dueño SET nombre = '$nombre', apellido = '$apellido'  WHERE dni = '$dni'"; 
		}

	$nombre="";
	$apellido="";
	$dni="";
	$mensaje="los datos se actualizaron correctamente";
	
		
		if (mysqli_query($conexion,$sql)) {
		header("location:actualizarSocio.php?msj=$mensaje");
	}

		//CASO 1
		/*if (!empty($nombre) && empty($apellido) && $sexo == 'Z') {
			$sql = "UPDATE dueño SET nombre = '$nombre'  WHERE dni = '$dni'"; 
		}*/
		/*
		if (!empty($apellido) && empty($nombre) && $sexo == 'Z') {
			$sql="UPDATE dueño SET apellido = '$apellido' WHERE dni = '$dni'";
		}	

		if ( ($sexo == 'M' || $sexo == 'F') && empty($nombre) && empty($apellido)) {
			$sql="UPDATE dueño SET sexo = '$sexo' WHERE dni = '$dni'";
		}
		/////////////////////////////////////////////////////////////////////////////
	   	//CASO 2*********************************************************************
	   	/////////////////////////////////////////////////////////////////////////////
		if (!empty($nombre) && !empty($apellido) && $sexo == 'Z') {
			$sql="UPDATE dueño SET nombre = '$nombre' WHERE dni = '$dni'"; 
		}
		if (!empty($apellido) && empty($nombre) && $sexo != 'Z') {
			$sql="UPDATE dueño SET nombre = '$nombre' WHERE dni = '$dni'";
		}	

		if (empty($apellido) && !empty($nombre) && $sexo != 'Z') {
			$sql="UPDATE dueño SET nombre = '$nombre' WHERE dni = '$dni'";
		}
		/////////////////////////////////////////////////////////////////////////////
	   	//CASO 3*********************************************************************
	   	/////////////////////////////////////////////////////////////////////////////
		if (!empty($nombre) && !empty($apellido) && $sexo != 'Z') {
			$sql="UPDATE dueño SET nombre = '$nombre' WHERE dni = '$dni'"; 
		}
		*/
	

?>