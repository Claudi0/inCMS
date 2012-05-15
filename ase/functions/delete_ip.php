<?php
define('USERNAME_REQUIRED', TRUE);
define('ACCOUNT_REQUIRED', TRUE);
include('../../SYSTEM/CP.Global.php');
$username = $core->EscapeString($_SESSION['username']);
if(!$users->UserPermission('hk_delete', $username))
{
header("Location: ../nopermission.php");
die;
}
if(isset($_POST['ip']))
{
	$query = mysql_query("DELETE FROM users WHERE ip_last = '".$core->EscapeString($_POST['ip'])."'");
}
?>