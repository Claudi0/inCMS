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
if(isset($_POST['id']) && isset($_POST['username']) && isset($_POST['oldusername']) && isset($_POST['mail']) && isset($_POST['rank']) && isset($_POST['credits']) && isset($_POST['activity_points']) && isset($_POST['vip']))
{
	$query = mysql_query("UPDATE users SET username = '".$core->EscapeStringHK($_POST['username'])."', real_name = '".$core->EscapeStringHK($_POST['real_name'])."', mail = '".$core->EscapeStringHK($_POST['mail'])."', motto = '".$core->EscapeStringHK($_POST['motto'])."', rank = ".$core->EscapeStringHK($_POST['rank']).", credits = '".$core->EscapeStringHK($_POST['credits'])."', activity_points = '".$core->EscapeStringHK($_POST['activity_points'])."', vip = '".$core->EscapeStringHK($_POST['vip'])."' WHERE id ='".$core->EscapeStringHK($_POST['id'])."'");
	$query = mysql_query("UPDATE rooms SET owner = '".$core->EscapeStringHK($_POST['username'])."' WHERE owner ='".$core->EscapeStringHK($_POST['oldusername'])."'");
	$core->MUS("updatemotto", $core->EscapeStringHK($_POST['id']));
	$core->MUS("updatecredits", $core->EscapeStringHK($_POST['id']));
}
?>