<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="register_age_gate_submit";
$page['redirect']="0";
require_once("../includes/core.php");
if(isset($_SESSION['step'])){
if($_SESSION['step']==3){
header("location: captcha");
exit;
}elseif($_SESSION['step']==1){
header("location: age_gate/e/05x");
exit;
}
}else{
$_SESSION['step']=1;
header("location: age_gate/e/05x");
exit;
}
if(isset($_POST['bean_email'])){
if(!$_POST['bean_email']==""){
if(filter_var(mysql_real_escape_string($_POST['bean_email']), FILTER_VALIDATE_EMAIL) == true){
if(isset($_POST['bean_retypedEmail'])){
if(!$_POST['bean_retypedEmail']==""){
if($_POST['bean_retypedEmail']==$_POST['bean_email']){
if(isset($_POST['bean_password'])){
if(!$_POST['bean_password']==""){
if(strlen($_POST['bean_password']) > 5) { 
if(preg_match('`[a-z]`',$_POST['bean_password'])){
if(preg_match('`[0-9]`',$_POST['bean_password'])){
if($_POST['bean_termsOfServiceSelection']=="true"){
$_SESSION['bean_email']=$_POST['bean_email'];
$bean_email=mysql_real_escape_string($_POST['bean_email']);
$query=mysql_query("SELECT `id` FROM `users` WHERE `mail` = '".$bean_email."'");
$result=mysql_num_rows($query);
if($result==0){
$_SESSION['bean_password']=$_POST['bean_password'];
if($_POST['bean_marketing']=="true"){
$_SESSION['bean_marketing']=true;
}else{
$_SESSION['bean_marketing']=false;
}
$_SESSION['step']=3;
header("location: captcha");
exit;
}else{
header("location: duplicateEmailLogin?next=/identity/add_avatar");
exit;
}	
}else{
header("location: email_password/e/09x");
exit;
}	
}else{
$_SESSION['bean_error']=3;
header("location: email_password/e/03x");
exit;
}	
}else{
$_SESSION['bean_error']=2;
header("location: email_password/e/03x");
exit;
}
}else{
$_SESSION['bean_error']=1;
header("location: email_password/e/03x");
exit;
}
}else{
$_SESSION['bean_error']=0;
header("location: email_password/e/03x");
exit;
}
}else{
$_SESSION['bean_error']=0;
header("location: email_password/e/03x");
exit;
}
}else{
header("location: email_password/e/07x");
exit;
}
}else{
header("location: email_password/e/07x");
exit;
}
}else{
header("location: email_password/e/07x");
exit;
}
}else{
header("location: email_password/e/06x");
exit;
}
}else{
header("location: email_password/e/06x");
exit;
}
}else{
header("location: email_password/e/06x");
exit;
}
?>