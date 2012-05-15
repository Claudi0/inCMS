<?php
require_once("../../includes/core.php");
if(!get_userinfo("username") < 6)
{
header("Location: ../error");
die;
}
if(isset($_POST['hotel_url']) && isset($_POST['hotel_name']) && isset($_POST['maintenance']))
{
	mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['hotel_url'])."' WHERE variable = 'hotel_url'");
	mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['hotel_name'])."' WHERE variable = 'hotel_name'");
	mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['maintenance'])."' WHERE variable = 'maintenance'");
}
?>