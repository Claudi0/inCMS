<?php
require_once("../../includes/core.php");
<<<<<<< HEAD
if(isset($_SESSION['id'])){
if(get_userinfo("rank")>=5){
header("Location: ../error.php.php");
=======
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ../error.php");
>>>>>>> 7c839e39a7ac190e70d09de82cf03f573169b867
}
}
if(isset($_POST['shortstory']) && isset($_POST['longstory']) && isset($_POST['image']) && isset($_POST['title']) && isset($_POST['campaign']) && isset($_POST['super_fader']) && isset($_POST['id']))
{
	$query = mysql_query("UPDATE cms_news SET title = '".$core->EscapeStringHK($_POST['title'])."', shortstory = '".$core->EscapeStringHK(urldecode($_POST['shortstory']))."', longstory = '".$core->EscapeStringHK(urldecode($_POST['longstory']))."', image = '".$core->EscapeStringHK($_POST['image'])."', campaign = ".$core->EscapeStringHK($_POST['campaign']).", super_fader = ".$core->EscapeStringHK($_POST['super_fader']).", campaignimg = '".$core->EscapeStringHK($_POST['campaignimage'])."', super_fader_image = '".$core->EscapeStringHK($_POST['super_fader_image'])."' WHERE id ='".$core->EscapeStringHK($_POST['id'])."'");
}
?>