<!-- / Table left - Cr&eacute;ditos -->
<div id="content" style="position: relative" class="clearfix">
<div id="column" class="column">
<div class="habblet-container ">
<div class="cbb clearfix orange ">  
<h2 class="title"><span style="float: left;">Cr&eacute;ditos</span> </h2>
<div align="left"> 
<table width="100%">
<tr>
	
<?php

$row = mysql_query("SELECT * FROM users WHERE rank < 5 ORDER BY credits DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){

?>

<tr><td width="5px"></td>
<td width="20px">
<img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
<td width="195px"><a href="/home/<?php echo $sql['username']; ?>"><b><?php echo $sql['username']; ?></b></a><br /><?php echo $sql['credits']; ?> Cr&eacute;ditos</td>
	  <?php } ?>
</tr>
</table>
</div> </div>

</div> 

<!-- / Table center - Online -->
<div id="column" class="column"><div class="habblet-container ">
<div class="cbb clearfix orange ">  
<h2 class="title"><span style="float: left;">Online</span> </h2> 
<div align="left"> 
<table width="100%">

<tr>	
<?php

$userstats_a = mysql_query("SELECT * FROM user_stats ORDER BY OnlineTime DESC LIMIT 5");
while($userstats = mysql_fetch_assoc($userstats_a)){
$row = mysql_fetch_assoc($row = mysql_query("SELECT * FROM users WHERE id = '".$userstats['id']."' LIMIT 5"));

$time = 3600*24; // 60*60*24

?>

<tr><td width="5px"> </td>
<td width="20px"><img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
<td width="195px"><a href="/home/<?php echo $row['username']; ?>"><b><?php echo $row['username']; ?></b></a><br />
<?php echo round($userstats['OnlineTime'] / $time); ?> Días Online</td>
</tr>

<?php } ?>
</table>
</div> </div>

</div> 
</div> </div> 

<!-- / Table center - P&iacute;xeles -->
<div id="column" class="column"><div class="habblet-container ">
<div class="cbb clearfix blue ">  
<h2 class="title"><span style="float: left;">P&iacute;xeles</span> </h2> 
<div align="left"> 
<table width="100%">
<tr>
	
<?php

$row = mysql_query("SELECT * FROM users WHERE rank < 5 ORDER BY activity_points DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){

?>
	  <tr><td width="5px"> </td>
            <td width="20px"><img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td> <td width="195px"><a href="/home/<?php echo $sql['username']; ?>"><b><?php echo $sql['username']; ?></b></a><br /><?php echo $sql['activity_points']; ?> P&iacute;xeles</td>
	  <?php } ?>
</tr>
</table>
</div> </div>

</div> 

<!-- / Table center - Regalos Enviados-->
<div id="column" class="column"><div class="habblet-container ">
<div class="cbb clearfix blue ">  
<h2 class="title"><span style="float: left;">Regalos Enviados</span> </h2> 
<div align="left"> 
<table width="100%">

<tr>	
<?php

$userstats_a = mysql_query("SELECT * FROM user_stats ORDER BY GiftsGiven DESC LIMIT 5");
while($userstats = mysql_fetch_assoc($userstats_a)){
$row = mysql_fetch_assoc($row = mysql_query("SELECT * FROM users WHERE id = '".$userstats['id']."' LIMIT 5"));

?>

<tr><td width="5px"> </td>
<td width="20px"><img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
<td width="195px"><a href="/home/<?php echo $row['username']; ?>"><b><?php echo $row['username']; ?></b></a><br />
<?php echo $userstats['GiftsGiven']; ?> Regalos Enviados</td>
</tr>

<?php } ?>
</table>
</div> </div>

</div> 
</div> </div> 



<!-- / Table right - Respetados -->
<div id="column" class="column"><div class="habblet-container ">
<div class="cbb clearfix green ">  
<h2 class="title"><span style="float: left;">Respetos</span> </h2> 
<div align="left"> 
<table width="100%">

<tr>	
<?php

$userstats_a = mysql_query("SELECT * FROM user_stats ORDER BY Respect DESC LIMIT 5");
while($userstats = mysql_fetch_assoc($userstats_a)){
$row = mysql_fetch_assoc($row = mysql_query("SELECT * FROM users WHERE id = '".$userstats['id']."' LIMIT 5"));

?>

<tr><td width="5px"> </td>
<td width="20px"><img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
<td width="195px"><a href="/home/<?php echo $row['username']; ?>"><b><?php echo $row['username']; ?></b></a><br />
<?php echo $userstats['Respect']; ?> Respetos</td>
</tr>

<?php } ?>
</table>
</div> </div>

</div> 

<!-- / Table right - Regalos Recibidos -->
<div id="column" class="column"><div class="habblet-container ">
<div class="cbb clearfix green ">  
<h2 class="title"><span style="float: left;">Regalos Recibidos</span> </h2> 
<div align="left"> 
<table width="100%">

<tr>	
<?php

$i = 0;
$userstats_a = mysql_query("SELECT * FROM user_stats ORDER BY GiftsReceived DESC LIMIT 5");
while($userstats = mysql_fetch_assoc($userstats_a)){

$row = mysql_fetch_assoc($row = mysql_query("SELECT * FROM users WHERE id = '".$userstats['id']."' LIMIT 5"));

$i  ;

?>

<tr><td width="5px"> </td>
<td width="20px"><img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
<td width="195px"><a href="../home/<?php echo $row['username']; ?>"><b><?php echo $row['username']; ?></b></a><br />
<?php echo $userstats['GiftsReceived']; ?> Regalos Recibidos</td>
</tr>

<?php } ?>
</table>
</div> </div>

</div> 
</div> </div> 

<script type="text/javascript">
		HabboView.run();
	</script>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>


</div>
