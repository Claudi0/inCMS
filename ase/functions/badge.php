<?php
require_once("../../includes/core.php");
if(!get_userinfo("username") < 6)
{
header("Location: ../error");
die;
}

if(isset($_POST['method']) && isset($_POST['username']) && isset($_POST['badge']) && $_POST['method'] == 'add')
{
	$query = mysql_query("INSERT INTO user_badges (user_id, badge_id, badge_slot) VALUES ('".$users->UserID($core->EscapeStringHK($_POST['username']))."', '".$core->EscapeStringHK($_POST['badge'])."', 0)");
}
if(isset($_POST['method']) && isset($_POST['user']) && isset($_POST['badge']) && $_POST['method'] == 'remove')
{
	$query = mysql_query("DELETE FROM user_badges WHERE user_id = '".$core->EscapeStringHK($_POST['user'])."' AND badge_id = '".$core->EscapeStringHK($_POST['badge'])."'");
}
?>