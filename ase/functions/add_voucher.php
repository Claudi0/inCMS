<?php
require_once("../../includes/core.php");
<<<<<<< HEAD
if(isset($_SESSION['id'])){
if(get_userinfo("rank")>=5){
header("Location: ../error.php");
}
}
if(!get_userinfo("username") < 6)
{
header("Location: .../error.php");
die;
}
=======
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ../error.php");
}
}
>>>>>>> 7c839e39a7ac190e70d09de82cf03f573169b867
if(isset($_POST['code']) && isset($_POST['value']) && is_numeric($_POST['value']))
{
	$query = mysql_query("INSERT INTO credit_vouchers (code, value) VALUES ('".$core->EscapeString($_POST['code'])."', '".$core->EscapeString($_POST['value'])."');");
}
?>