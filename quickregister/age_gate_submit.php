<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="register_age_gate_submit";
$page['redirect']="0";
require_once("../includes/core.php");
if(isset($_SESSION['step'])){
if($_SESSION['step']==2){
header("location: ../email_password");
exit;
}
if($_SESSION['step']==3){
header("location: ../captcha");
exit;
}
}else{
$_SESSION['step']=1;
header("location: ../age_gate/e/05x");
exit;
}
if(filter_var($_POST['bean_day'], FILTER_VALIDATE_INT) == true){
if(($_POST['bean_day']>0) && ($_POST['bean_day']<32)){
$_SESSION['bean_day']=$_POST['bean_day'];
}else{
header("location: age_gate/e/05x");
exit;
}
}else{
header("location: age_gate/e/05x");
exit;
}
if(filter_var($_POST['bean_month'], FILTER_VALIDATE_INT) == true){
if(($_POST['bean_month']>0) && ($_POST['bean_month']<13)){
$_SESSION['bean_month']=$_POST['bean_month'];
}else{
header("location: age_gate/e/05x");
exit;
}
}else{
header("location: age_gate/e/05x");
exit;
}
if(filter_var($_POST['bean_year'], FILTER_VALIDATE_INT) == true){
if(($_POST['bean_year']>1899) && ($_POST['bean_year']<2005)){
if($_POST['bean_year']>1998){
header("location: age_limit");
exit;
}else{
$_SESSION['bean_year']=$_POST['bean_year'];
}
}else{
header("location: age_gate/e/05x");
exit;
}
}else{
header("location: age_gate/e/05x");
exit;
}
if(!checkdate($_POST['bean_month'], $_POST['bean_day'], $_POST['bean_year'])==true){
header("location: age_gate/e/05x");
exit;
}
if(isset($_POST['bean_gender'])){
if($_POST['bean_gender']=="male"){
$_SESSION['bean_gender']="M";
}elseif($_POST['bean_gender']=="female"){
$_SESSION['bean_gender']="F";
}else{
$_SESSION['bean_gender']="M";
}
}else{
$_SESSION['bean_gender']="M";
}
$_SESSION['step']=2;
header("location: email_password");
exit;
?>