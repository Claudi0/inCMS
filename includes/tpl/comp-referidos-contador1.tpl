<!--
/*=======================================================================
| Agradecimiento a Juli0san por hacer SOLO ESTA P�GINA, lo dem�s hecho por masacre10 
| Aporte para kekomundo ~ Gracias por no hacerme querer dar m�s aportes km!
| masacre_11@hotmail.com
\======================================================================*/
-->
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>

<div class="habblet-container ">		
<div class="cbb clearfix orange "> 

<h2 class="title">Contador de Referidos</h2>

<div class="box-content">

	<div align="center">
	<img src="http://images.wikia.com/habboworldteam/es/images/9/9e/Frank_welcome1.gif" style="float: left;"> Cuando</span> lleves una cuenta considerable (30+) de referidos podr�s canjearlos con el bot�n de abajo. <br />
	  <br />
	%habboname%, has invitado a 
	<h1  style="color: #000">
<?php 

					$query = mysql_query("SELECT COUNT(id) AS aantalleden FROM users_referidos WHERE usuario ='". mysql_real_escape_string($_GET["n"]) ."' ORDER BY ID") or die(mysql_error()); 
        				$data = mysql_fetch_assoc($query); echo $data['aantalleden']; 
					?></h1> de tus amig@s a <b>Pixeled</b><br />
	  <br />
	%status%
	<br />
	<form method="post" action="">
	<center><?php if(isset($_SESSION['UBER_USER_N'])) { echo '<input type="image" src="http://pixeled.mx/images/Botones/Canjear_Hecho_Por_Zebelck.png" value="Canjear" name="canjear" />'; } ?></center>
	</form>
	  </div>
</div>
	
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>