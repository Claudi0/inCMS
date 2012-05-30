<?php
include("../core.php");
$username = $core->EscapeString($_GET['habbo_name']);
if($users->ValidName($username) && !$users->NameTaken($username))
echo 1;
else
echo 0;
?>
