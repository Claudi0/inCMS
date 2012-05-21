<?php
require_once("../../includes/core.php");
<<<<<<< HEAD
if(isset($_SESSION['id'])){
if(get_userinfo("rank")>=5){
header("Location: ../error.php");
}
}
=======
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ../error.php");
}
}}

>>>>>>> 7c839e39a7ac190e70d09de82cf03f573169b867
{
	$query = mysql_query("DELETE FROM cms_news WHERE id = '".$core->EscapeString($_GET['id'])."'");
}
?>