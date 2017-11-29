<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Entrevista_Tuaplicacion</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<section id="formulario">
		<form action="buscar.php" method="post">
			<h1>TU APLICACIÓN</h1>
			<a class="botones" href="muestra.php">VER USUARIOS</a></br></br>

			<input type="text" id="nombres" name="nombres" placeholder="Nombres" required>
			<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
			<input type="number" id="telefono" name="telefono" placeholder="Teléfono" required>
			<input type="email" id="email" name="email" placeholder="Correo electrónico" required>
			<input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
			<tr>
				<th colspan="2"><select name="preferencias">
  					<option value="arte">Arte</option>
  					<option value="cine">Cine</option>
  					<option value="musica">Música</option>
					</select></th> 
			</tr>
			<input type="submit" value="Enviar" id="boton">
		</form>
	</section>	
</body>
</html> 