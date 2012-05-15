<?php
require_once("../../includes/core.php");
if(!get_userinfo("username") < 6)
{
header("Location: ../error");
die;
}
if(isset($_POST['code']) && isset($_POST['value']) && is_numeric($_POST['value']))
{
	$query = mysql_query("INSERT INTO credit_vouchers (code, value) VALUES ('".$core->EscapeString($_POST['code'])."', '".$core->EscapeString($_POST['value'])."');");
}
?>