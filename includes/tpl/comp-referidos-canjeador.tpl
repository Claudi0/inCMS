<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">Canjeador de referidos</h2>

<div class="box-content">
	
	<p>
		Cuando lleves una cuenta considerable (<b>30+</b>) de referidos. Podras canjear tus referidos por: <b>VIP</b><br><br>

Llevas un total de:

<b><?php 

if(!isset($_GET['n']))
{
$usuario = $_SESSION['UBER_USER_N'];
}
else
{
$usuario = mysql_real_escape_string($_GET['n']);
}

$query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users_referidos WHERE usuario ='". $usuario ."' ORDER BY ID") or die(mysql_error()); 
        $data = mysql_fetch_assoc($query); echo $data['aantalleden'];?></b>
		
		<center>
		<?php if($data['aantalleden'] >= 50) { ?>
		<a href="referidos.php?page=canjear"><input type="submit" name="button" value="Canjear"></a>
		<?php } else { ?>
		<b>Aun no tienes los referidos necesarios</b></center>
		
		<?php } if($_GET['page'] == 'canjear') {
       	$contadorsql = mysql_query("SELECT * FROM users_referidos WHERE usuario = '$usuario'"); 
		$userCanjear = mysql_query("SELECT * FROM users WHERE username = 'usuario'");
		$Ucontador = mysql_fetch_array($userCanjear);
		if(mysql_num_rows($contadorsql) >= 50) {
		if($Ucontador['vip'] == 0) {
		mysql_query("UPDATE users SET vip= '1' WHERE username = '$usuario'");
		mysql_query("DELETE FROM users_referidos WHERE usuario = '$usuario' LIMIT 50");
		echo '<br><font color="green"<b>Haz canjeado tus referidos<b></font>';
		} else {
		echo '<br><font color="red"><b>No se pudieron cambiar poque ya eres VIP</b></font>';
		} } 
        echo '<br><font color="red"><b>No tienes los referidos necesarios</b></font>';
		} ?>
	</p>

<br> Si te sale error estás usando Xampp, no podrás usar este sistema de referidos. Para eliminar el complemento simplemente elimina vip-referidos.php de htdocs. Si no te sale error borra este mensaje en comp-referidos-canjeador.tpl</br>

</div>	
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>