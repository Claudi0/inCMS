<!--
/*=======================================================================
| Agradecimiento a Juli0san por hacer SOLO ESTA P�GINA, lo dem�s hecho por masacre10 
| Aporte para kekomundo ~ Gracias por no hacerme querer dar m�s aportes km!
| masacre_11@hotmail.com
\======================================================================*/
-->
<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">Contador de Referidos</h2>

<div class="box-content">

	<img src="http://images.wikia.com/habboworldteam/es/images/9/9e/Frank_welcome1.gif" style="float: left;">
	
	<p>
		Quando voc� traz um relato substancial (<b> 15 + </ b>) de refer�ncias. Comunique-se com
alguns funcion�rios, de prefer�ncia com <b>o DONO</b> ou <b>Algum Outro Staff</b>.<br><br>

Voc� tem sido um total de:


<b><?php if(!isset($_GET['n'])){$usuario = $_SESSION['UBER_USER_N'];}else{$usuario = mysql_real_escape_string($_GET['n']);}$query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users_referidos WHERE usuario ='". $usuario ."' ORDER BY ID") or die(mysql_error());         $data = mysql_fetch_assoc($query); echo $data['aantalleden']; ?></b>	</p>

</div>
	
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>