<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/mysql.php");
mysql_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/functions.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/languages/".get_settings("language").".lang");
if(get_settings("maintenance")=="1"){
if($page['name'] !="maintenance"){
header("location: ".get_settings("hotel_url")."maintenance");
exit;
}
}
date_default_timezone_set(get_settings("timezone"));
if(!isset($_SESSION['id'])){
if($page['redirect']=="1"){
header("location: ".get_settings("hotel_url"));
exit;
}
}else{
if($page['redirect']=="0"){
header("location: ".get_settings("hotel_url")."me");
exit;
}
}
$core = new Core();
class Core
{
public static function EscapeStringHK($string = '')
	{
		return mysql_real_escape_string(stripslashes(trim($string)));
	}
	
public static function EscapeString($string = '')
	{
		return mysql_real_escape_string(stripslashes(trim(htmlspecialchars($string))));
	}
	
public function MUS($command, $data = '')
	{
		$MUSdata = $command . chr(1) . $data;
		$socket = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		@socket_connect($socket, $this->CMSConfigs('client_ip'), $this->CMSConfigs('client_mus'));
		@socket_send($socket, $MUSdata, strlen($MUSdata), MSG_DONTROUTE);	
		@socket_close($socket);
	}
public function UserInfo($u_name = '', $row = '')
	{
		$user = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '".$u_name."' LIMIT 1"));
		return $user[$row];
	}
public function get_userinfo($get){
$id2=mysql_real_escape_string($_SESSION['id']);
$sql=mysql_query("SELECT * FROM `users` WHERE `id` LIKE '$id2'");
$return=mysql_fetch_array($sql);
return $return[$get];
}	
}
?>