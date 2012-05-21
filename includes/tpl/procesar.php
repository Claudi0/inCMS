
                               
            <?php 
			
					
			include("datos.php");		
			$ip =  $_SERVER['REMOTE_ADDR'];
		    $con = mysql_connect($host,$user,$pw);
			mysql_select_db($db,$con);
 			
			$query = mysql_query("SELECT credits FROM users where username= '$_POST[username]'       ",$con) or die(mysql_error());
			$data = mysql_fetch_array($query);
			
			
			$creditosganados = $premio;
			$credits = $data['credits'];
			
			
			$query = mysql_query("SELECT RESPUESTA FROM preguntas WHERE ID=$id"); 
			$respuesta = mysql_fetch_array($query);
			
				
			if ($respuesta['RESPUESTA'] == "$_POST[respuesta]") {
				setcookie("pagina", "true", time()+3600*24);
				if(isset($_COOKIE['pagina']) && $_COOKIE['pagina'] == true)
				{
				?>
				
				<html>
				<head>
				<title>Error</title>
				<link rel="stylesheet" type="text/css" href="index.css">
				
				<link href="../../../../index.css" rel="stylesheet" type="text/css" />
				</head>
				<body>
			
				<header>
				Pregunta del dia
				</header>
				<br />
				<div id="contenido">
		
				<div class="titulo">
				Error
				</div><p><br />
                
                <b>Solo puedes responder la misma pregunta correctamente una vez, regresa manana que habra una nueva pregunta</b>
                
                <br>

                <img src="http://www.foroswebgratis.com/imagenes_foros/5/1/8/6/7/533093frank_stop_001.gif" /><br />
				</div><footer>
				Add-on desarrollado por <a href="mailto:francopoka@live.com"><strong>FrancoPoka</strong> en colaboracion de Rami</a>
				</footer>
				
				
				
				<?php
				
				
				
				
				
				
				
		 		exit();
				}	
				?>			
				<html>
				<head>
				<title>Respuesta Incorrecta</title>
				<link rel="stylesheet" type="text/css" href="index.css">
				
				<link href="../../../../index.css" rel="stylesheet" type="text/css" />
				</head>
				<body>
			
				<header>
				Pregunta del dia
				</header>
				<br />
				<div id="contenido">
		
				<div class="titulo">
				Respuesta Correcta
				</div><p><br />
                
                <b>Felicidades se te acreditara el premio de <?php echo $creditosganados;?> creditos <br />
                <?php $credits = $credits + $creditosganados;
                mysql_query("UPDATE users SET credits = $credits where username  ='$_POST[username]'     ",$con);
				?>
                <br />Ahora tienes <?php echo $credits. " Creditos</b>";?><br /><br />
                
                

                <img src="http://www.heyhabbo.net/pixelarchive/images/coins/stephcoinswave.gif" /><br />
				</div><footer>
				Add-on desarrollado por <a href="mailto:francopoka@live.com"><strong>FrancoPoka</strong> en colaboracion de Rami</a>
				</footer><?php
				}
			
			else {
				 ?>
				
				<html>
				<head>
				<title>Respuesta Incorrecta</title>
								
				<link href="../../../../index.css" rel="stylesheet" type="text/css" />
				</head>
				<body>
			
				<header>
				Pregunta del dia
				</header>
				<br />
				<div id="contenido">
		
				<div class="titulo">
				Respuesta incorrecta
				</div><p><b><br />
           		Vuelve a intentarlo, suerte la proxima!</b></p><br />
				</div>		
            	<footer>
				Add-on desarrollado por <a href="mailto:francopoka@live.com"><strong>FrancoPoka</strong></a>
				</footer>			
	        	</body>
           		</html>
				
				<?php 
			}?>
			