<?php
require_once("../../includes/core.php");
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ../error.php");
}
}}

{
	$query = mysql_query("DELETE FROM cms_news WHERE id = '".$core->EscapeString($_GET['id'])."'");
}
?>