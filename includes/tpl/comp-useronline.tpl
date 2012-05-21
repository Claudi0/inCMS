<div class="habblet-container ">
<div class="cbb clearfix red ">

<h2 class="title">Usuarios Conectados</h2>

<div id="hotcampaigns-habblet-list-container">
<?php

require_once "global.php";

if (!LOGGED_IN)
{
	header("Location: ./index.html");
	exit;
}

$getUsers = dbquery("SELECT id FROM users WHERE online = '1' ORDER BY ID");

if (mysql_num_rows($getUsers) > 0)
{
	echo '<ul style="margin: 0;">';

	while ($u = mysql_fetch_assoc($getUsers))
	{
		echo '<li style="margin-left: 20px;">';
		echo $users->formatUsername($u['id']);
		echo '</li>';
	}

	echo '</ul>';
}
else
{
	echo '<br /><br /><i><center>Não há Only's Onlines</center></i>';
}

?>


</div>
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>