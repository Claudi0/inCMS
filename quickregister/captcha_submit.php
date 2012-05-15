<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="register_captcha_submit";
$page['redirect']="0";
require_once("../includes/core.php");
if(isset($_SESSION['step'])){
if($_SESSION['step']==2){
header("location: ../email_password");
exit;
}
if($_SESSION['step']==1){
header("location: ../age_gate");
exit;
}
}else{
$_SESSION['step']=1;
header("location: ../age_gate/e/05x");
exit;
}
if(isset($_SESSION['captcha'])){
if(isset($_POST['captchaResponse'])){
if($_SESSION['captcha']==$_POST['captchaResponse']){
$explode = explode('@',$_SESSION['bean_email']);
$bean_username = mysql_real_escape_string($explode[0].rand(1000,9999));
$bean_email = mysql_real_escape_string($_SESSION['bean_email']);
$bean_password = md5($_SESSION['bean_password']);
$bean_figure = mysql_real_escape_string($_POST['bean_figure']);
mysql_query("INSERT INTO `users` (`username`, `password`, `mail`, `rank`, `credits`, `pixels`, `look`, `gender`, `isonline`, `ip`, `lastaccess`, `default`) VALUES ('".$bean_username."', '".$bean_password."', '".$bean_email."', '1', '".get_settings("initial_credits")."', '".get_settings("initial_pixels")."', '".$bean_figure."', '".$_SESSION['bean_gender']."', '0', '".$_SERVER['REMOTE_ADDR']."', '0', '1');") or die (mysql_error());
$get_id = mysql_query("SELECT id FROM `users` WHERE `username` = '".$bean_username."';");
$get_id_result = mysql_fetch_array($get_id);
$_SESSION['id'] = $get_id_result['id'];
$_SESSION['step'] = 0;
header("location: ../me");
exit;
}else{
header("location: captcha/e/12x");
exit;
}
}else{
header("location: captcha/e/12x");
exit;
}
}else{
header("location: captcha/e/12x");
exit;
}

?>