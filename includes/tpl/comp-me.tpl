<link href="estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/tooltip.css" /> 
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/ajax2.js"></script>
<script type="text/javascript" src="js/tooltip.js"></script>
<script type="text/javascript" src="js/no.js"></script>
<script type="text/javascript" src="js/gradualfader.js"></script>
<script type="text/javascript" src="js/iframe.js"></script>
<script src="http://habboraze.es/js/unittest.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="css/tooltip.css" /> 
</script>
<script type="text/javascript" src="js/tooltip.js"></script>
</script>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #999999;
}
a:visited {
	text-decoration: none;
	color: #999999;
}
a:hover {
	text-decoration: none;
	color: #666666;
}
a:active {
	text-decoration: none;
	color: #666666;
}
a {
	font-weight: bold;
}
-->
</style><style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #999999;
}
a:visited {
	text-decoration: none;
	color: #999999;
}
a:hover {
	text-decoration: none;
	color: #666666;
}
a:active {
	text-decoration: none;
	color: #666666;
}
a {
	font-weight: bold;
}
-->
</style>

<style type="text/css"> 
#badge-back { position: absolute; left: 120px; top: 85px; }
#new-personal-info .enter-hotel-btn { position: absolute; top: -10px; right: 20px; padding: 28px 0; background: transparent url(); !important;  }
</style> 

				<div class="habblet-container ">		
	
						<div id="new-personal-info" style="background-image:url(%www%/web-gallery/v2/images/personal_info/hotel_views/htlview_es2.png)"> 

<div id="badge-back">
        <img src="./images/fondo-placa.png">
        <img src="./images/fondo-placa.png">
        <img src="./images/fondo-placa.png">
        <img src="./images/fondo-placa.png">
        <img src="./images/fondo-placa.png">
</div>
<?php

    $getBadges = dbquery("SELECT * FROM user_badges WHERE user_id = '" . USER_ID . "' AND badge_slot >= 1 ORDER BY badge_slot DESC LIMIT 5");
		
?>

<div id="badge-back">
    <ul class="badge-back"><br>
<?php
    while($b = mysql_fetch_assoc($getBadges)){
                echo '&nbsp;&nbsp;<img src="http://images.habbogroup.com/c_images/album1584/' . $b['badge_id'] . '.gif"> &nbsp; &nbsp;';
}
    ?>

    </div> 
  
  <div class="enter-hotel-btn"> 
        <div class="open enter-btn"> 
                <a href="%www%/client" target="uberClientWnd" onclick="HabboClient.openOrFocus(this); return false;" onmouseover="tooltip.show('&iexcl;Entra Ya!');" onmouseout="tooltip.hide();">Entra a habbo rank<i></i></a> 
            <b></b> 
        </div> 
    </div> 
    
 
	<div id="habbo-plate"> 
		<a href="%www%/profile"> 
				<img alt="%habboName%" src="http://www.habbo.es/habbo-imaging/avatarimage?figure=%look%&direction=2&head_direction=3&gesture=spk&action=wav" /> 
		</a> 
	</div> 
 
	<div id="habbo-info"> 
		<div id="motto-container" class="clearfix">			
			<strong>%habboName%:</strong> 
			<div>
			<?php

			if (strlen($motto) == 0)
			{
				$motto = "Que piensas hoy?";
			}

			echo '<span title="' . $motto . '">' . $motto . '</span>';
			echo '<p style="display: none"><input type="text" maxlength="40" name="motto" value="' . $motto . '"/></p>';

			?>


			</div>
		</div>
		<div id="motto-links" style="display: none"><a href="#" id="motto-cancel">Cancelar</a></div>
	</div>

	<ul id="link-bar" class="clearfix">
	
			<li class="change-looks"><a href="%www%/profile">Cambiar Look</a></li>		
		<li class="credits"> 
			<a href="%www%/credits">%creditsBalance% Cr&eacute;ditos	</a>	</li>	


<li class="vip_coins">
<a href="%www%/credits">%vipbalance% VIP Coins</a></li>
			
			

		<li class="club"> 
            <span id="clubdaysleft" style="display:none"> 
                <a href="%www%/credits/uberclub">0</a> 
                Tus dias club a la izquierda
            </span> 
            <span id="&uacute;nete al club"> 
                %clubStatus%
            </span> 
		</li> 
		    <li class="activitypoints"> 
			    <a href="%www%/credits/pixels">%pixelsBalance% P&iacute;xeles</a>		    </li> 
</ul> 


<div id="habbo-feed"> 

	
	
		<ul id="feed-items">
		<?php	
$sql2 = dbquery("SELECT * FROM cms_alerts Where user_id='".USER_ID."' ");
if (mysql_num_rows($sql2) > 0)
{
	$tagsArray = Array();

	while ($row_alert = @mysql_fetch_array($sql2))
	{
                $alert = $row_alert['alert'];
                $alertid = $row_alert['user_id'];
?>
<li id="<?php echo $row_alert['type']; ?>" class="contributed">
<a href="hablet/ajax/#" name="feedItemIndex" class="remove-feed-item"  id="<?php echo $row_alert['id']; ?>" title="Remove notification">Remover notificación</a>
<div><?php echo $alert; ?></div>
</li>
<?php }} ?>

<?php if($users->GetFriendCount(USER_ID, true) != "0"){ ?>
<li id="feed-friends">
<strong><?php echo $users->GetFriendCount(USER_ID, true); ?></strong> de tus amigos están conectados
<span>
<?php
$result = dbquery("SELECT `user_two_id` FROM `messenger_friendships` WHERE `user_one_id` = '".USER_ID."'");
$num = mysql_num_rows($result);
if ($num == 0)
{

}
else
{
	$friends = array("online" => array(), "offline" => array());
	while ($row = mysql_fetch_array($result, MYSQL_NUM))
	{
		if ($users->Is_Online($row[0]))
		{
			$friends['online'][] = $users->Id2Name($row[0]);
		}
		else
		{
			$friends['offline'][] = $users->Id2Name($row[0]);
		}
	}


	if($friends['online'])
	{
		echo "";
		echo "<span>";

		$oddeven = "even";

		foreach($friends['online'] as $friend)
		{
			if ($oddeven == "even")
			{
				$oddeven = "odd";
			}
			else if ($oddeven == "odd")
			{
				$oddeven = "even";
			}
			echo "<a href='/home/".$friend."'>".$friend."</a> ";
		}

		echo "</span>";
	}


}

?>
</span>         </li>
<?php }; ?>
<?php
	$freq = $users->GetFriendRequests(USER_ID);

	if($freq){
?>
<li id="feed-notification">  Tienes <a href="%www%/client" target="uberClientWnd" onClick="HabboClient.openOrFocus(this); return false;"><?php echo $freq;
 ?> peticiones de Amigos</a> en espera  </li>
<?php
	}
?>
<li class="small" id="feed-trading-enabled">Los tradeos están activados. </li>
<li class="small" id="">
			<?php include ("permanent.php"); ?></li>
		</ul> 
	</div> 

	<p class="last"></p> 
</div> 
 
<script type="text/javascript"> 
	HabboView.add(function() {
		L10N.put("personal_info.motto_editor.spamming", "¡No spamees!");
		PersonalInfo.init("");
	});
</script> 
	
						
							
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>

