<?php
include("../core.php");
$password = md5($_POST['password']);
$username = $core->EscapeString($_POST['habbo_name']);
$mail = $core->EscapeString($_POST['email']);
if($users->NameTaken($username))
{
header("Location: ../../avatar.php?error=username");
exit;
}

if(!$users->ValidName($username))
{
header("Location: ../../avatar.php?error=username");
exit;
}

if($emulator=="phoenix") {
$users->AddUserP($username, $password, $mail, $core->EscapeString($_POST['figure']), 'Welcome!'); }
if($emulator=="azure") {
$users->AddUserA($username, $password, $mail, $core->EscapeString($_POST['figure']), 'Welcome!'); }

$_SESSION['account'] = $mail;
header("Location: ../../avatar.php");
?>




