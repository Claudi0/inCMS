

<div class="habblet-container ">
<div class="cbb clearfix blue ">
<h2 class="title"><span style="float: left;">Only's Online:</span> </h2>
<div align="left">
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
	echo '<br><ul style="margin: 0;">';

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
	echo '<br /><br /><i><center>N�o a Only's Conectados</center></i>';
}

?>

	</div>
</div>
	</div>



