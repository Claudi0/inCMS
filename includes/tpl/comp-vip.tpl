<div class="habblet-container ">
<div class="cbb clearfix gray ">
<h2 class="title">Usuarios VIP</h2>
<div class="box-content">
<table>
<?php
$datosTop = mysql_query("SELECT * FROM users WHERE vip = '1' ORDER BY vip DESC LIMIT 20");

while($datosTop10 = mysql_fetch_array($datosTop)){
echo '
<tr><td width="5px"></td>
<td width="20px">';

echo '<img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=' . $datosTop10['look'] . '&direction=3&head_direction=3&gesture=sml&action=crr=2&size=s" align="left"></td> <td width="195px"><a href="%www%/home/'.$datosTop10['username'].'">'.$datosTop10['username'].'</a><br />';

echo '</td>
           
          ';
}
?>
</table>

</div>

</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>