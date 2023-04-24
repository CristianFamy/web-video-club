<?php
	include("conexion.php");
	$nombre=$_POST['nombre']; 
	$apellido=$_POST['apellido']; 
	$sexo=$_POST['sexo'];
	$dni=$_POST['dni'];
	
	//CASO 0
	if (!empty($dni) ){
		$sql="SELECT * FROM dueño WHERE dni = '$dni'"; 
	}
	else{
		//CASO 1
		if (!empty($nombre) && empty($apellido) && $sexo == 'Z') {
			$sql="SELECT * FROM dueño WHERE nombre LIKE '%$nombre%'"; 
		}
		if (!empty($apellido) && empty($nombre) && $sexo == 'Z') {
			$sql="SELECT * FROM dueño WHERE apellido LIKE '%$apellido%'";
		}	

		if ( ($sexo == 'M' || $sexo == 'F') && empty($nombre) && empty($apellido)) {
			$sql="SELECT * FROM dueño WHERE sexo = '$sexo'";
		}
		/////////////////////////////////////////////////////////////////////////////
	   	//CASO 2*********************************************************************
	   	/////////////////////////////////////////////////////////////////////////////
		if (!empty($nombre) && !empty($apellido) && $sexo == 'Z') {
			$sql="SELECT * FROM dueño WHERE nombre LIKE '%$nombre%' AND apellido LIKE '%$apellido%'"; 
		}
		if (!empty($apellido) && empty($nombre) && $sexo != 'Z') {
			$sql="SELECT * FROM dueño WHERE apellido LIKE '%$apellido%' AND sexo = '$sexo'";
		}	

		if (empty($apellido) && !empty($nombre) && $sexo != 'Z') {
			$sql="SELECT * FROM dueño WHERE sexo = '$sexo' AND nombre LIKE '%$nombre%'";
		}
		/////////////////////////////////////////////////////////////////////////////
	   	//CASO 3*********************************************************************
	   	/////////////////////////////////////////////////////////////////////////////
		if (!empty($nombre) && !empty($apellido) && $sexo != 'Z') {
			$sql="SELECT * FROM dueño WHERE nombre LIKE '%$nombre%' AND apellido LIKE '%$apellido%' AND sexo = '$sexo'"; 
		}
	}
	

	$consulta=mysqli_query($conexion,$sql);
 	 
 	 //$cuantos_registros=mysqli_num_rows($consulta);
	// mysqli_fetch_row: devuelve un array de cadenas que se corresponde con la fila obtenida o null si no hay más filas en el conjunto de resultados.
	
	if($registro=mysqli_fetch_row($consulta)){
		$concateno=$registro['0'];
		$concateno=$concateno."-".$registro['2'];
		$concateno=$concateno."-".$registro['3'];
		$concateno=$concateno."-".$registro['4'];
	}
	while($registro=mysqli_fetch_row($consulta)){
		$concateno=$concateno.",".$registro['0'];
		$concateno=$concateno."-".$registro['2'];
		$concateno=$concateno."-".$registro['3'];
		$concateno=$concateno."-".$registro['4'];
	}
	$nombre="";
	$apellido="";
	$dni="";
	header("location:consultarSocio.php?msj=$concateno");
?>