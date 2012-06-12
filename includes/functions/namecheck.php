<?php
$username = $core->EscapeString($_POST['husername']);
if($users->ValidName($username) && !$users->NameTaken($username))
header("Location: includes/functions/complete.php");
else
header("Location: add_avatar.php?error=usrname");
?>
