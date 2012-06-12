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
$users = new Users();
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
class Users
{
public function AddUserP($username = '', $password = '', $mail = '', $figure = '', $motto = '')
	{
		mysql_query("INSERT INTO users (username, password, mail, look, motto, account_created, last_online, ip_last, ip_reg, auth_ticket) VALUES ('".$username."', '".$password."', '".$mail."', '".$figure."', '".$motto."', UNIX_TIMESTAMP(), UNIX_TIMESTAMP(), '".$_SERVER['REMOTE_ADDR']."', '".$_SERVER['REMOTE_ADDR']."', '')");
		$user_id = mysql_insert_id();
		mysql_query("INSERT INTO user_stats (id, RoomVisits, OnlineTime, Respect, RespectGiven, GiftsGiven, GiftsReceived, DailyRespectPoints, DailyPetRespectPoints) VALUES ('".$user_id."', 0, 0, 0, 0, 0, 0, 3, 3)");
		mysql_query("INSERT INTO user_info (user_id, bans, cautions, reg_timestamp, login_timestamp, cfhs, cfhs_abusive) VALUES ('".$user_id."', '0', '0', UNIX_TIMESTAMP(), '0', '0', '0')");
	}
public function AddUserA($username = '', $password = '', $mail = '', $figure = '', $motto = '')
	{
		mysql_query("INSERT INTO `users` (`username`, `password`, `mail`, `rank`, `credits`, `pixels`, `look`, `gender`, `isonline`, `ip`, `lastaccess`, `default`) VALUES ('".$username."', '".$password."', '".$mail."', '1', '".get_settings("initial_credits")."', '".get_settings("initial_pixels")."', '".$figure."', '".$_SESSION['bean_gender']."', '0', '".$_SERVER['REMOTE_ADDR']."', '0', '1');") or die (mysql_error());
	}
public function ValidName($u_name = '')
	{
		if(preg_match('/^[a-zA-Z0-9._:,-]+$/i', $u_name) && !preg_match('/mod-/i', $u_name))
		return true;
		else
		return false;
	}
	
	public function NameTaken($u_name = '')
	{
		return (mysql_num_rows(mysql_query("SELECT * FROM users WHERE username = '".$u_name."'")) > 0  ? true : false);
	}
	
	public function ValidMail($mail = '')
	{
		return preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $mail);
	}
	
	public function MailTaken($mail = '')
	{
		return (mysql_num_rows(mysql_query("SELECT * FROM users WHERE mail = '".$mail."' LIMIT 1")) > 0  ? true : false);
	}
	public function UserInfo($u_name = '', $row = '')
	{
		$user = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '".$u_name."' LIMIT 1"));
		return $user[$row];
	}
}
?>