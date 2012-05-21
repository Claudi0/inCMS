<?php
/*=========================================================+
|| # HabboCMS - Sistema de administración de contenido Habbo.
|+=========================================================+
|| # Copyright © 2010 Kolesias123. All rights reserved.
|| # http://www.infosmart.com.mx
|| # Partes Copyright © 2009 Yifan Lu. All rights reserved.
|| # http://www.yifanlu.com
|| # Base Copyright © 2007-2008 Meth0d. All rights reserved.
|| # http://www.meth0d.org
|+=========================================================+
|| # InfoSmart 2010. The power of Proyects.
|| # Este es un Software de código libre, libre edición.
|+=========================================================+
|| # Todas las imagenes, scripts y temas
|| # Copyright (C) 2010 Sulake Ltd. All rights reserved.
|+=========================================================*/

require_once('../global.php');

$security_time = '1';
$name = $users->GetUserVar(USER_ID, 'username');
$topicTitle = addslashes(SwitchWordFilter(textInJS($_POST['topicName'])));
$message = addslashes(SwitchWordFilter(textInJS($_POST['message'])));


if(empty($topicTitle)){ echo "<center>El titulo del Asunto no puede estar vacío.</center>"; exit; }

if($security_time < time()){
if($security_time < 3){
mysql_query("INSERT INTO cms_forum_threads (forumid,type,title,author,date,lastpost_author,lastpost_date,views,posts,unix) VALUES ('".$_POST['groupId']."','1','".$topicTitle."','".$name."','".$date_name."','".$name."','".$date_name."','0','0','".strtotime('now')."')") or die(mysql_error());
mysql_query("UPDATE users SET postcount = postcount + 1 WHERE id = '".USER_ID."' LIMIT 1");

$check = mysql_query("SELECT id FROM cms_forum_threads WHERE forumid = '".$_POST['groupId']."' ORDER BY id DESC LIMIT 1") or die(mysql_error());
$row = mysql_fetch_assoc($check);

$threadid = $row['id'];

mysql_query("INSERT INTO cms_forum_posts (forumid,threadid,message,author,date) VALUES ('".$_POST['groupId']."','".$threadid."','".$message."','".$name."','".$date_name."')");
$_SESSION['savetopic'] = time();

echo "<center>El Asunto ha sido publicado con éxito. <a href=\"/groups/".FilterText($_POST['groupId'])."/id/discussions/".$threadid."/id/page/1\">OK</a></center>";
$_SESSION['savetimesincorrect'] = 0;
} else {
echo "<center>Has sido bloqueado del foro. Por favor intentalo nuevamente más tarde.</center>";
}
} else {

if(empty($_SESSION['savetimesincorrect'])){
$_SESSION['savetimesincorrect'] = 0;
}

echo "<center>Has grabado tus datos demasiado rápido. Por favor, tómate un minuto antes de volver a la acción.</center>";
$_SESSION['savetimesincorrect']++;
}
?>