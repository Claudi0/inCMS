<?php
require_once("../../includes/core.php");
if(!get_userinfo("username") < 6)
{
header("Location: ../error");
die;
}

{
	$query = mysql_query("DELETE FROM cms_news WHERE id = '".$core->EscapeString($_GET['id'])."'");
}
?>