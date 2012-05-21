<!DOCTYPE html>

<html>
	<head>
		<title>Agrega tu pregunta!</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	</head>
	<body>
		
		<header>
			Pregunta del dia
		</header>
		<br>
		<div id="contenido">
		<form action="nuevapregunta.php" method="post">
			<div class="titulo">
				Agregar pregunta
			</div>
			<p>Pregunta:</p>
			<p><input type="text" name="preguntanueva"></p>
			<p>Respuesta:</p>
			<p><input type="text" name="respuestanueva"></p>
			<p><input type="submit" value="Crear" class="boton"></p>
		</div>
		</form>
		
		<footer>
			Add-on desarrollado por <a href="mailto:francopoka@live.com"><strong>FrancoPoka</strong></a>. Diseñado por <a href="mailto:rami_fenili@hotmail.com"><strong>Rami</strong></a>.
		</footer>
		
	</body>
</html>