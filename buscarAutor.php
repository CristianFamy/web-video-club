<?php
	include("conexion.php");
	$seleccionPeli=$_POST['seleccionPeli'];
	$peli=$_POST['peli'];
	$actor=$_POST['actor'];

	switch ($seleccionPeli) {
    case 1:
        $sql="SELECT nombre FROM pelicula WHERE nombre LIKE '%$peli%'"; //nombre pelicula
        break;
    case 2:
        $sql="SELECT actor_principal FROM pelicula WHERE actor_principal LIKE '%$actor%'"; //actor ppal
        break;
   }

	
	$consulta=mysqli_query($conexion,$sql);
 	 
 	 //$cuantos_registros=mysqli_num_rows($consulta);
	// mysqli_fetch_row: devuelve un array de cadenas que se corresponde con la fila obtenida o null si no hay más filas en el conjunto de resultados.
	
	if($registro=mysqli_fetch_row($consulta)){
		$concateno=$registro['0'];
	}
	while($registro=mysqli_fetch_row($consulta)){
		$concateno=$concateno.",".$registro['0'];
			
	}
	$ingreso="";
	header("location:registrarPelicula.php?msj=$concateno");
	
?>