<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/config1.php");
//MySQL Configuration
$mysql['host'] = $MyHost;
$mysql['user'] = $MyUser;
$mysql['password'] = $MyPass;
$mysql['database'] = $MyDB;
//MySQL Functions
function mysql_start(){
global $mysql;
if(!isset($mysql['connect'])){
$mysql['connect'] = mysql_connect($mysql['host'], $mysql['user'], $mysql['password']);
if(!isset($mysql['select_db'])){
$mysql['select_db'] = mysql_select_db($mysql['database'], $mysql['connect']);
}else{
echo "<br><b>MySQL ERROR:</b> <i>database</i> is already selected.<br>";
}
}else{
echo "<br><b>MySQL ERROR:</b> <i>server</i> is already connected.<br>";
}
}
function mysql_stop(){
global $mysql;
if(isset($mysql['connect'])){
mysql_close($mysql['connect']);
$mysql = NULL;
}else{
echo "<br><b>MySQL ERROR:</b> <i>server connection</i> is already closed or not started.<br>";
}
}
function mysql_optimize($table){
global $mysql;
if(isset($mysql['connect'])){
mysql_query("OPTIMIZE TABLE `".$table."`");
mysql_query("REPAIR TABLE `".$table."`");
}else{
echo "<br><b>MySQL ERROR:</b> could not find <i>server connection</i>.<br>";
}
}
?>