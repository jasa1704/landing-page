<!DOCTYPE html>
<?php require_once("coneccion.php");
	$result = mysqli_query($link,"SELECT * FROM usuario");		
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Entrevista_Tuaplicacion</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<section id="formulario2">
		<?php
		if ($result){
			$row = mysqli_fetch_array($result);
			echo "<table border = '2' \n";
			echo "<tr><td>ID</td><td>Nombres</td><td>Apellidos</td><td>Teléfono</td><td>Email</td><td>Direccion</td><td>Preferencias</td><td>Latitud</td><td>Longitud</td></tr>";
			do{
				echo "<tr><td>".$row["id_usuario"]."</td><td>".$row["nombres"]."</td><td>".$row["apellidos"]."</td><td>".$row["telefono"]."</td><td>".$row["email"]."</td><td>".$row["direccion"]."</td><td>".$row["preferencias"]."</td><td>".$row["latitud"]."</td><td>".$row["longitud"]."</td><tr>";
			}while ($row = mysqli_fetch_array($result));
			echo "</table> \n";
		}else{
			echo "<hr></br></br><p align='center'>¡SIN REGISTROS!</p></br></br>";
		}	
	?>	
	<br><br><a class="botones" href="index.php">VOLVER A REGISTRAR USUARIOS</a>
	</section>	
</body>
</html>