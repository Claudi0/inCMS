<?php
$page['id']="1";
$page['sub_id']="1";
$page['name']="me";
$page['redirect']="1";
$pagena = "Homes";
require_once("./includes/core.php");
require_once('./includes/templates/'.$template.'/header.php');
if(isset($_GET['u']))
{
$username = $core->EscapeString($_GET['u']);
}
else
{
$username = $core->EscapeString($_SESSION['id']);
}
require_once('./includes/templates/'.$template.'/home.php');
?>
