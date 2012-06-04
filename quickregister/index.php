<?php
require_once('../includes/config1.php');
if ($betais==1) {
header("Location: beta1.php");
}
else {
if ($betais=="0") {
header("location: start");
}
}
?>