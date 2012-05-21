<style type="text/css">
<!--
.buttonv4 {BORDER-RIGHT: #CCCCCC 1px solid; BORDER-TOP: #CCCCCC 1px solid; width:80px; FONT-WEIGHT: normal; FONT-SIZE: 10px; BORDER-LEFT: #CCCCCC 1px solid; CURSOR: pointer; COLOR: #000000; BORDER-BOTTOM: #CCCCCC 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #f5f5f5; border-radius: 1px; moz-border-radius: 1px; height:20px;
}
-->
</style>
<div class="habblet-container ">
<div class="cbb clearfix blue ">

<h2 class="title">Transferir Vip Coins </h2>

<div id="hotcampaigns-habblet-list-container">
<?php
if(isset($_POST['tousgive']) && USER_NAME != $_POST['tousgive']){
$getCoins = dbquery("SELECT * FROM users WHERE username = '".USER_NAME."'");
					$b = mysql_fetch_assoc($getCoins);
					$coins1 = $b['VIP_Coins'];
					$user2 = addslashes(trim($_POST['tousgive']));
					$getCoins2 = dbquery("SELECT * FROM users WHERE username = '" . $user2 . "'");
					$b2 = mysql_fetch_assoc($getCoins2);
					$coins2 = $b2['VIP_Coins'];

					$amount = preg_replace("/[^0-9]/", "", addslashes(trim(abs($_POST['amount']))));
					if($coins1 && $coins2 >= "0" && isset($amount)){
								
					if($coins1 >= $amount){
						$final = $coins1-$amount;
						$finalnew = $coins2+$amount;
						dbquery("UPDATE users SET VIP_Coins='".$final."' WHERE username = '" .USER_NAME. "'");
						dbquery("UPDATE users SET VIP_Coins='".$finalnew."' WHERE username = '" . $user2 . "'");
						$error = "<center>Transferencia realizada con éxito.</center>";
						}else{$error = "No Tienes Suficientes VIP Coins";};						
					
					
						
					}else{$error = "Ha ocurrido algún error, asegurate de haber llenado correctamente los dos campos.";};
echo $error;

	}else{
		echo 'Hola '.USER_NAME.', Con Esta Herramientas Puedes Transferir VIP Coins a Otros Usuarios.<br><br><form action="" method="post" name="tranfer">
<center>Para: <input name="tousgive" type="text"><br></center>
<center>Cantidad: <input name="amount" type="text"><input name="me" type="hidden" value="%habboname%" /></center>
<br><center><input name="enviar" class="buttonv4" value="Enviar" type="submit"></center><br/>
</form>';};
					
?></div>
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>