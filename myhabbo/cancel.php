<?php
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
define('Xukys', true);
require_once '../global.php';

if(isset($_GET['id'])) {
	if(is_numeric($_GET['id'])) {
			$startid = $gtfo->cleanWord($_GET['id']);
			if($startid == USER_ID) {
			
			
				unset($_SESSION['startSessionEditHome']);
				header('Location: /home/'.$_SESSION['UBER_USER_N'].'/');

		}
	}
}

?>