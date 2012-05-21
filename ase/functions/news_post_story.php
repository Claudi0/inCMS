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
if(isset($_POST['shortstory']) && isset($_POST['longstory']) && isset($_POST['image']) && isset($_POST['title']) && isset($_POST['campaign']) && isset($_POST['super_fader']))
{
	$query = mysql_query("INSERT INTO cms_news (id, title, shortstory, longstory, author, published, image, campaign, super_fader, campaignimg, super_fader_image) VALUES
(NULL, '".$core->EscapeStringHK($_POST['title'])."', '".$core->EscapeStringHK(urldecode($_POST['shortstory']))."', '".$core->EscapeStringHK(urldecode($_POST['longstory']))."', 'Admin', ".time().", '".$core->EscapeStringHK($_POST['image'])."', ".$core->EscapeStringHK($_POST['campaign']).", ".$core->EscapeStringHK($_POST['super_fader']).", '".$core->EscapeStringHK($_POST['campaignimage'])."', '".$core->EscapeStringHK($_POST['super_fader_image'])."')");
}
?>

