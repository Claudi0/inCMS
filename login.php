<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="login";
$page['redirect']="0";
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/core.php");
if(isset($_POST['username'])){
if(isset($_POST['password'])){
$email = mysql_real_escape_string($_POST['username']);
$password = md5($_POST['password']);
$find_user = mysql_query("SELECT * FROM `users` WHERE `mail` = '".$email."' AND `default` = '1'");
$user_info = mysql_fetch_array($find_user);
mysql_free_result($find_user);
if($user_info['password'] == $password){
$_SESSION['id'] = $user_info['id'];
header("location: ../me");
mysql_query("UPDATE `users` SET `lastaccess` = '".time()."', `ip` = '".$_SERVER['REMOTE_ADDR']."' WHERE `users`.`id` = ".$user_info['id'].";");
if($_SESSION['login_try']>0){
$_SESSION['login_try']=0;
}
exit;
}else{
$_SESSION['login_try']=($_SESSION['login_try']+1);
header("location: ../?username=".$_POST['username']."&rememberme=false&focus=login-password");
exit;
}
}else{
$_SESSION['login_try']=($_SESSION['login_try']+1);
header("location: ../?username=".$_POST['username']."&rememberme=false&focus=login-password");
exit;
}
}else{
$_SESSION['login_try']=($_SESSION['login_try']+1);
header("location: ../?username=".$_POST['username']."&rememberme=false&focus=login-username");
exit;
}
?>