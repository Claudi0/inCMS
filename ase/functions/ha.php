<?php
define('USERNAME_REQUIRED', TRUE);
define('ACCOUNT_REQUIRED', TRUE);
include('../../SYSTEM/CP.Global.php');
$username = $core->EscapeString($_SESSION['username']);
if(!$users->UserPermission('hk_ha', $username))
{
header("Location: ../nopermission.php");
die;
}
if(isset($_POST['ha']))
{
	$ha = ereg_replace( "\n", "\r", $_POST['ha']);
	$ha = $ha.'\r\r\r -'.$username;
	$core->MUS('ha', $ha);
}
?>