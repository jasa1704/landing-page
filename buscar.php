<?php
	require_once("coneccion.php");
	require_once("geolocalizar.php");

	$nomb    = $_POST["nombres"];
	$apell   = $_POST["apellidos"];
	$tel     = $_POST["telefono"]; 
	$emai    = $_POST["email"];
	$direc   = $_POST["direccion"];
	$pref    = $_POST["preferencias"];

	$return    = Maps::buscaLugar($direc);
	$lat   = $return[0];
	$long  = $return[1];
	$sql       = "INSERT INTO usuario (nombres, apellidos, telefono, email, direccion, preferencias, latitud, longitud) VALUES ('$nomb', '$apell', '$tel', '$emai', '$direc', '$pref', '$lat', '$long');";
	$query = mysqli_query($link,$sql);
	if ($query){
		echo "<script>alert(\"Exito al registrar.\"); </script>";
		echo "<script>location.href='index.php'</script>";
	}else{
		echo "<script>alert(\"Error al registrar.\"); </script>";
		echo "<script>location.href='index.php'</script>";
	}

