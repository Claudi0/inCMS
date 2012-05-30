<?php
include('../core.php');
if ($emulator=="azure") {
if(isset($_GET['name']))
{
	$username = $core->EscapeString($_GET['name']);
	$email = $core->EscapeString($_SESSION['account']);
	$userq = mysql_query("SELECT * FROM users WHERE username ='".$username."' LIMIT 1");
	if(mysql_num_rows($userq) > 0)
	{
		
		$userq = mysql_query("SELECT * FROM users WHERE username ='".$username."'");
		$user = mysql_fetch_array($userq);
		if($user['mail'] == $email)
		{
			$_SESSION['username'] = $users->UserInfo($username, 'username');
			$query = mysql_query("UPDATE users SET lastaccess = UNIX_TIMESTAMP(), ip_last = '".$_SERVER['REMOTE_ADDR']."' WHERE username = '".$username."'");
			header("Location: ../me");
		}
		else
		header("Location: ../avatar.php?error=username");
	}
	else
	header("Location: ../avatar.php?error=username");
}
else
header("Location: ../avatar.php?error=username");
}
if ($emulator=="phoenix") {
if(isset($_GET['name']))
{
	$username = $core->EscapeString($_GET['name']);
	$email = $core->EscapeString($_SESSION['account']);
	$userq = mysql_query("SELECT * FROM users WHERE username ='".$username."' LIMIT 1");
	if(mysql_num_rows($userq) > 0)
	{
		
		$userq = mysql_query("SELECT * FROM users WHERE username ='".$username."'");
		$user = mysql_fetch_array($userq);
		if($user['mail'] == $email)
		{
			$_SESSION['username'] = $users->UserInfo($username, 'username');
			$query = mysql_query("UPDATE users SET last_online = UNIX_TIMESTAMP(), ip_last = '".$_SERVER['REMOTE_ADDR']."' WHERE username = '".$username."'");
			header("Location: ../me");
		}
		else
		header("Location: ../avatar.php?error=username");
	}
	else
	header("Location: ../avatar.php?error=username");
}
else
header("Location: ../avatar.php?error=username");
}
?>