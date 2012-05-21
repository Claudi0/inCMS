
<?php
include("datos.php");

$con = mysql_connect($host,$user,$pw) or die ("problemas al conectar con el host");
mysql_select_db($db,$con) or die ("problemas al conectar con la db seleccionada");
$pregunta = "$_POST[preguntanueva]";
$respuesta = "$_POST[respuestanueva]";

mysql_query("INSERT INTO preguntas(PREGUNTA,RESPUESTA) VALUES ('$pregunta','$respuesta')",$con);
?>

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
		<br />
		<div id="contenido">
		
			<div class="titulo">
				La pregunta fue agregada!
			</div>
			<p><b>Pregunta:</b></p>
			<p><span class="agregado"><?php echo "<b> Pregunta = </b>".$pregunta?></span></p>
			<p><b>Respuesta:</b></p>
			<p><span class="agregado"><?php echo "<b> Respuesta = </b>".$respuesta?></span></p>
		</div>
		
		
		<footer>
			Add-on desarrollado por <a href="mailto:francopoka@live.com"><strong>FrancoPoka</strong></a>. Diseñado por <a href="mailto:rami_fenili@hotmail.com"><strong>Rami</strong></a>.
		</footer>
		
	</body>
</html>