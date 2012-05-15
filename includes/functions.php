<?php
function get_settings($var){
$var2=mysql_real_escape_string($var);
$sql=mysql_query("SELECT value FROM `cms_settings` WHERE `variable` LIKE '$var2'");
$return=mysql_fetch_array($sql);
return $return['value'];
}
function get_footer(){
global $language;
echo "<p class=\"footer-links\"><a href=\"".get_settings("hotel_url")."help\" target=\"_new\">".$language['customer_support']."</a> | <a href=\"".get_settings("hotel_url")."terms\" target=\"_new\">".$language['terms_of_use']."</a> | <a href=\"".get_settings("hotel_url")."privacy\" target=\"_new\">".$language['privacy_policy']."</a>  | <a href=\"".get_settings("hotel_url")."groups/id/1\" target=\"_new\">".$language['parents']."</a>  | <a href=\"".get_settings("hotel_url")."gropus/id/2\" target=\"_new\">".$language['the_habbo_way']."</a>  | <a href=\"".get_settings("hotel_url")."groups/id/3\" target=\"_new\">".$language['safety']."</a>  | <a href=\"mailto:".get_settings("hotel_mail")."\" target=\"_new\">".$language['advertise']."</a></p>";
echo "<p class=\"copyright\">© 2010 - 2011 inCMS - All Rights Reserved</p>";
}
function get_login_footer(){
global $language;
echo "<p class=\"footer-links\"><a href=\"".get_settings("hotel_url")."help\" target=\"_new\">".$language['customer_support']."</a> | <a href=\"".get_settings("hotel_url")."terms\" target=\"_new\">".$language['terms_of_use']."</a> | <a href=\"".get_settings("hotel_url")."privacy\" target=\"_new\">".$language['privacy_policy']."</a>  | <a href=\"".get_settings("hotel_url")."groups/id/1\" target=\"_new\">".$language['parents']."</a>  | <a href=\"".get_settings("hotel_url")."gropus/id/2\" target=\"_new\">".$language['the_habbo_way']."</a>  | <a href=\"".get_settings("hotel_url")."groups/id/3\" target=\"_new\">".$language['safety']."</a>  | <a href=\"mailto:".get_settings("hotel_mail")."\" target=\"_new\">".$language['advertise']."</a></p>";
echo "<div id=\"age-recommendation\"></div>";
echo "<div id=\"sulake-logo\"><a href=\"http://www.Claudi0.com.nu\"></a></div>";
echo "<p class=\"copyright\">© 2010 - 2011 inCMS - All Rights Reserved</p>";
}
function get_template($template){
global $language;
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/templates/".$template.".php");
}
function get_users_online(){
$sql=mysql_query("SELECT id FROM `users` WHERE `isonline` = '1'");
$return=mysql_num_rows($sql);
return $return;
}
function get_title(){
global $language;
global $page;
global $_GET;
if(isset($page['name'])){
if($page['name']=="index"){
$return=get_settings("hotel_name").$language['separator'].$language['title_index'];
}elseif($page['name']=="logout_ok"){
$return=get_settings("hotel_name").$language['separator'].$language['title_logout'];
}elseif($page['name']=="me"){
$return=get_settings("hotel_name").$language['separator'].$language['title_me'];
}elseif($page['name']=="articles"){

if(isset($_GET['id'])){
if(!$_GET['id']==""){
$id = mysql_real_escape_string($_GET['id']);
$newshow_query = mysql_query("SELECT title FROM `cms_news` WHERE `id`='".$id."' LIMIT 1");
}else{
$newshow_query = mysql_query("SELECT title FROM `cms_news` ORDER BY `id` DESC LIMIT 1");	
}
}else{
$newshow_query = mysql_query("SELECT title FROM `cms_news` ORDER BY `id` DESC LIMIT 1");	
}
$newshow_found = mysql_fetch_array($newshow_query);
$return=get_settings("hotel_name").$language['separator'].$language['title_articles'].$newshow_found['title'];
}else{
$return=get_settings("hotel_name").$language['separator'];
}
return $return;
}else{
$return=get_settings("hotel_name").$language['separator'];
return $return;
}
}
function get_social($network){
$network2=mysql_real_escape_string($network);
$sql=mysql_query("SELECT code FROM `cms_social` WHERE `name` LIKE '$network2'");
$return=mysql_fetch_array($sql);
return $return['code'];
}
function get_userinfo($get){
$id2=mysql_real_escape_string($_SESSION['id']);
$sql=mysql_query("SELECT * FROM `users` WHERE `id` LIKE '$id2'");
$return=mysql_fetch_array($sql);
return $return[$get];
}
function get_ads($var){
$var2=mysql_real_escape_string($var);
$sql=mysql_query("SELECT content FROM `cms_adtech` WHERE `size` LIKE '$var2'");
$return=mysql_fetch_array($sql);
return $return['content'];
}
?>