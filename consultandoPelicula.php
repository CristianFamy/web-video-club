<?php
	include("conexion.php");
	$filtro=$_POST['filtro']; //filtros genericos (peliculas, actor pincipal)
	$genero=$_POST['genero']; //filtro por genreo(1-accion, 2-ciencia ficcion, 3-comedia, 4-terror)
	$ingreso=$_POST['ingreso'];

	//SWITCH DE FILTROS GENERICOS
	switch ($filtro) {
    case 5:
        $sql="SELECT * FROM pelicula WHERE nombre LIKE '%$ingreso%'"; //nombre pelicula
        break;
    case 6:
        $sql="SELECT * FROM pelicula WHERE actor_principal LIKE '%$ingreso%'"; //actor ppal
        break;
    default:
        $sql="SELECT * FROM pelicula WHERE genero = '$genero'"; //genero
        break;
   }

   //SWITCH DE FILTRO POR GENERO
	
	$consulta=mysqli_query($conexion,$sql);
 	 
 	 //$cuantos_registros=mysqli_num_rows($consulta);
	// mysqli_fetch_row: devuelve un array de cadenas que se corresponde con la fila obtenida o null si no hay más filas en el conjunto de resultados.
	
	if($registro=mysqli_fetch_row($consulta)){
		$concateno=$registro['1'];
		$concateno=$concateno."-".$registro['2'];
		$concateno=$concateno."-".$registro['3'];
		$concateno=$concateno."-".$registro['4'];
	}
	while($registro=mysqli_fetch_row($consulta)){
		$concateno=$concateno.",".$registro['1'];
		$concateno=$concateno."-".$registro['2'];
		$concateno=$concateno."-".$registro['3'];
		$concateno=$concateno."-".$registro['4'];
	}
	$ingreso="";
	header("location:consultarPelicula.php?msj=$concateno");
?>