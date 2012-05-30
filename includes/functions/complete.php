<?php
include("../core.php");
if(!$_SESSION['register'])
{
header("location: index.php");
exit;
}
$password = md5($_POST['password']);
if(isset($_SESSION["account"]) && $_POST['character'] == '1')
{
	$account = $_SESSION['account'];
	$query = mysql_query("SELECT * FROM users WHERE mail = '".$account."' LIMIT 1");
	$user = mysql_fetch_array($query);
	$password = $user['password'];
	$email = $_SESSION['account'];
}
else
{
	$email = $core->EscapeString($_POST['email']);
	$query = mysql_query("SELECT * FROM users WHERE mail = '".$email."' LIMIT 1");
	if(mysql_num_rows($query) > 0)
	{
	header("Location: ../index.php?error=email");
	exit;
	}
}

$username = $core->EscapeString($_POST['username']);
if($users->NameTaken($username))
{
header("Location: ../index.php?error=username");
exit;
}

if(!$users->ValidName($username))
{
header("Location: ../index.php?error=username");
exit;
}

$users->AddUser($username, $password, $email, $core->EscapeString($_POST['figure']), 'Welcome!');

$_SESSION['account'] = $email;

$_SESSION['register'] = false;
header("Location: ../avatar.php");
?>




