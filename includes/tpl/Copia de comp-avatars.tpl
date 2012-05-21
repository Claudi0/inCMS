<div class="habblet-container">        
<div class="cbb clearfix blue">
<h2 class="title">Usuarios Aleatorios</h2>
<div class="habblet box-content">
<img src="/img/tv_habbo.png">

<?php
$registrados = @mysql_query("SELECT * FROM users ORDER BY RAND() LIMIT 1") or die(mysql_error());
$usuarios= @mysql_fetch_assoc($registrados);
echo "";
$query = @mysql_fetch_assoc($query = @mysql_query("SELECT * FROM rooms "));

?>






<div id="shape6" style="position:absolute; overflow:hidden; left:194px; top:79px;  z-index:0" class="shape6">
<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $usuarios['look']; ?>&size=l&direction=4&head_direction=4&size=l" >
</div>


<div id="shape6" style="position:absolute; overflow:hidden; left:70px; top:75px;  z-index:0" class="shape6">
<marquee>Usuario Aleatorio :<?php echo $usuarios['username']; ?> </marquee>
</div>




<br>


<br>




<br />

<div id="shape6" style="position:absolute; overflow:hidden; left:80px; top:130px;  z-index:0" class="shape6">
Cr&eacute;ditos <?php echo $usuarios['credits']; ?></td>
</div>
<div id="shape6" style="position:absolute; overflow:hidden; left:60px; top:130px;  z-index:0" class="shape6">
<a href="/credits.php"><img src="/img/cat_6.gif"></a>
</div>

<div id="shape6" style="position:absolute; overflow:hidden; left:80px; top:150px;  z-index:0" class="shape6">
Pixeles <?php echo $usuarios['activity_points']; ?></td>
</div>
<div id="shape6" style="position:absolute; overflow:hidden; left:60px; top:150px;  z-index:0" class="shape6">
<a href="/credits/pixels"><img src="/img/cat_1.gif"></a>
</div>
<div id="shape6" style="position:absolute; overflow:hidden; left:80px; top:170px;  z-index:0" class="shape6">
Estado: <?php echo $usuarios['online']; ?></td>
</div>
<div id="shape6" style="position:absolute; overflow:hidden; left:60px; top:170px;  z-index:0" class="shape6">
<a href="/client"><img src="/img/cat_7.gif"></a>
</div>
<div id="shape6" style="position:absolute; overflow:hidden; left:60px; top:190px;  z-index:0" class="shape6">
Home: </td>
</div>
<div id="shape6" style="position:absolute; overflow:hidden; left:120px; top:190px;  z-index:0" class="shape6">
<a href="/home/"><img src="/img/mini_user.png" border="0" 
onMouseOver="this.src='/img/mini_user_over.png';" onMouseOut="this.src='/img/mini_user.png';" /></a>
</div>




<script type="text/javascript">
    var activeHabbosHabblet = new ActiveHabbosHabblet();
    document.observe("dom:loaded", function() { activeHabbosHabblet.generateRandomImages(); });
</script>




</div>
</div>
</div>


<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>