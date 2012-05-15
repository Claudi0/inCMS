<?php
define('USERNAME_REQUIRED', TRUE);
define('ACCOUNT_REQUIRED', TRUE);
include('../../SYSTEM/CP.Global.php');
$username = $core->EscapeString($_SESSION['username']);
if(!$users->UserPermission('hk_ban', $username))
{
header("Location: ../nopermission.php");
die;
}
if(isset($_POST['value']) && isset($_POST['reason']) && isset($_POST['length']) && isset($_POST['type']))
{
	$core->AddBan($core->EscapeString($_POST['type']), $core->EscapeString($_POST['value']), $core->EscapeString($_POST['reason']), time() + $core->EscapeString($_POST['length']), $username);
	$core->MUS("reloadbans");
}
?>