<?php
require_once("../../includes/core.php");
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ../error.php");
}
}
if(isset($_POST['host']) && isset($_POST['port']) && isset($_POST['port']) && isset($_POST['client_texts']) && isset($_POST['client_vars']) && isset($_POST['client_base']) && isset($_POST['client_base']))
{
	$query = mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['host'])."' WHERE variable = 'host'");
	$query = mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['port'])."' WHERE variable = 'port'");
	$query = mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['port'])."' WHERE variable = 'port'");
	$query = mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['client_texts'])."' WHERE variable = 'client_texts'");
	$query = mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['client_vars'])."' WHERE variable = 'client_vars'");
	$query = mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['client_base'])."' WHERE variable = 'client_base'");
	$query = mysql_query("UPDATE cms_settings SET value = '".$core->EscapeStringHK($_POST['client_base'])."' WHERE variable = 'client_base'");
}
?>