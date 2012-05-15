<?php
require_once("../../includes/core.php");
if(!get_userinfo("username") < 6)
{
header("Location: ../error");
die;
}
if(isset($_POST['shortstory']) && isset($_POST['longstory']) && isset($_POST['image']) && isset($_POST['title']) && isset($_POST['campaign']) && isset($_POST['super_fader']) && isset($_POST['id']))
{
	$query = mysql_query("UPDATE cms_news SET title = '".$core->EscapeStringHK($_POST['title'])."', shortstory = '".$core->EscapeStringHK(urldecode($_POST['shortstory']))."', longstory = '".$core->EscapeStringHK(urldecode($_POST['longstory']))."', image = '".$core->EscapeStringHK($_POST['image'])."', campaign = ".$core->EscapeStringHK($_POST['campaign']).", super_fader = ".$core->EscapeStringHK($_POST['super_fader']).", campaignimg = '".$core->EscapeStringHK($_POST['campaignimage'])."', super_fader_image = '".$core->EscapeStringHK($_POST['super_fader_image'])."' WHERE id ='".$core->EscapeStringHK($_POST['id'])."'");
}
?>