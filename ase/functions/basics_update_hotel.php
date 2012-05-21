<?php
require_once("../../includes/core.php");
<<<<<<< HEAD
if(isset($_SESSION['id'])){
if(get_userinfo("rank")>=5){
=======
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
>>>>>>> 7c839e39a7ac190e70d09de82cf03f573169b867
header("Location: ../error.php");
}
}
if(isset($_POST['timer']) && isset($_POST['pixels']) && isset($_POST['credits']) && isset($_POST['motd']))
{
	$query = mysql_query("UPDATE server_settings SET timer = '".$core->EscapeString($_POST['timer'])."', pixels = '".$core->EscapeString($_POST['pixels'])."', credits = '".$core->EscapeString($_POST['credits'])."', motd = '".$core->EscapeString($_POST['motd'])."'");
}
?>