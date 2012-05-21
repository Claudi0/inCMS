<? include("includes/n3hcms.core.php"); 
// Esta página esta oculta Si/No: Si //
if(!LOGGED_IN){  header("Location: ./"); } 
// Fin de la comprovación //
$username = $sys->EscapeString($_SESSION['username']);
$_GET['id'] = mysql_real_escape_string($_GET['id']);
$check = mysql_query("Select * from `groups_memberships` where groupid = '".$_GET['id']."' and userid = '".$sys->UserInfo($username,"id")."'");
$rw = mysql_fetch_array($check);
if(!mysql_num_rows($check)){ exit; }
if($rw['member_rank'] <= 1){ exit; }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: verdana;
	font-size: 11px;
}
.info {
	color: #C2C2C2;
}
.infor2 {
	color: #6C6C6C;
}
.titlred {
	color: #F00;
}
.link23 {
	color: #F60;
}
</style>
</head>

<body>
<? 
if(isset($_POST['delete'])){

$check = mysql_query("Select * from `groups_memberships` where groupid = '".$_GET['id']."' and userid = '".$sys->UserInfo($username,"id")."'");
$rw = mysql_fetch_array($check);
if(!mysql_num_rows($check)){ exit; }
if($rw['member_rank'] != "3"){  exit; }	 
mysql_query("Delete from `groups_memberships` where groupid = '".$_GET['id']."' ");
mysql_query("Delete from `groups_links` where 	groupid =  '".$_GET['id']."' ");
mysql_query("Delete from `groups_details` where id = '".$_GET['id']."' ");
mysql_query("Delete from `cms_homes_stickers` groupid = '".$_GET['id']."' ");
echo'<script>window.top.location.href="./mygroups"</script>';
}


$select = mysql_query("Select * from `groups_details` where id = '".$_GET['id']."' ");
$groupdata = mysql_fetch_array($select);
function check_name($nombre_usuario){ 
 if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>15){ 
      return false; 
   }
   //compruebo que los caracteres sean los permitidos 
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
   for ($i=0; $i<strlen($nombre_usuario); $i++){ 
      if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){ 
  
         return false; 
      } 
   } 
   return true; 
}
?>
<? if(isset($_POST['send'])){  
if($_POST['type'] == "0"){ $type = "0"; }elseif($_POST['type'] == "1"){ $type = "1"; }elseif($_POST['type'] == "2"){ $type = "2"; }elseif($_POST['type'] == "3"){
$type = "3"; }else{ $type = "0"; }
$select = mysql_query("Select * from `groups_details` where id = '".$_GET['id']."' ");
$groupdata = mysql_fetch_array($select);
if($groupdata['type'] != "3"){ mysql_query("Update `groups_details` SET type = '".$type."' where id = '".$groupdata['id']."' "); }
$short = mysql_query("Select * from `groups_links` where groupid = '".$_GET['id']."' ");
if(!mysql_num_rows($short)){
if($_POST['url'] != ""){
$short2 = mysql_query("Select * from `groups_links` where short = '".$_POST['url']."' ");
if(!mysql_num_rows($short2)){
if(check_name($_POST['url']) && stristr($_POST['url'], ' ') == FALSE){
mysql_query("Insert into `groups_links` (groupid, short) VALUES ('".$_GET['id']."', '".mysql_real_escape_string($_POST['url'])."') ");

} } } }
if($_POST['name'] != ""){ mysql_query("Update `groups_details` SET name = '".htmlspecialchars($_POST['name'])."' where id = '".$groupdata['id']."' "); }
mysql_query("Update `groups_details` SET description = '".htmlspecialchars($_POST['desc'])."' where id = '".$groupdata['id']."' ");
echo'<script>window.top.location.href="./groups/'.$_GET['id'].'/id"</script>';
} ?>
<form name="form1" method="post" action="">
  <table width="447" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="244" height="305" valign="top"><table width="239" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="71" height="45" rowspan="2" align="center"><span class="group-info-icon"><img src='./habbo-imaging/badge?badge=<?php echo $groupdata['badge']; ?>' /></span></td>
          <td width="168" height="19"><strong>Nombre del grupo:</strong></td>
        </tr>
        <tr>
          <td height="40"><input name="name" type="text" id="name" value="<?=$groupdata['name'];?>" size="20" /></td>
        </tr>
      </table>
        <table width="240" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="240" height="19"><strong>Editar URL:</strong></td>
          </tr>
          <tr>
            <td height="32"><? $short = mysql_query("Select * from `groups_links` where groupid = '".$_GET['id']."' ");
		  if(!mysql_num_rows($short)){ ?>
              <input name="url" type="text" id="url" size="31" />
              <? }else{  $row = mysql_fetch_array($short); ?>
              <strong class="link23">groups/<?=$row['short'];?> 
              </strong>
              <? } ?></td>
          </tr>
          <tr>
            <td height="16"><strong>Editar descripción:</strong></td>
          </tr>
          <tr>
            <td height="65" valign="top"><textarea name="desc" cols="25" rows="9" id="desc"><?=$groupdata['description'];?></textarea></td>
          </tr>
          <tr>
            <td height="32" valign="top"><br />
              <input style=" height:40px; width:225px; font-weight:bold; font-size:14px" type="submit" name="send" id="send" value="Cambiar Ajustes" /></td>
          </tr>
        </table></td>
      <td width="203" valign="top"><table width="199" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="21" colspan="3"><strong>Editar tipo de Grupo</strong></td>
        </tr>
        <tr>
          <td width="21" height="20"><input <? if($groupdata['type'] == "0"){ echo"checked "; } ?>  <? if($groupdata['type'] == "3"){ echo"disabled "; } ?> type="radio" name="type" id="radio" value="0" /></td>
          <td width="57">Abierto</td>
          <td width="121"><img src="images/icos/v22_1.gif" width="13" height="13" /></td>
        </tr>
        <tr>
          <td height="39" colspan="3" class="info"><span class="infor2">Todos pueden unirse. Límite: 500 miembros </span></td>
        </tr>
        <tr>
          <td><input type="radio" name="type" <? if($groupdata['type'] == "1"){ echo"checked "; } ?>  <? if($groupdata['type'] == "3"){ echo"disabled "; } ?>id="radio2" value="1" /></td>
          <td>Exclusivo</td>
          <td><img src="images/icos/new_16.gif" width="16" height="12" /></td>
        </tr>
        <tr>
          <td height="39" colspan="3" class="infor2"> Los Administradores deciden quién puede unirse </td>
        </tr>
        <tr>
          <td><input type="radio" name="type" <? if($groupdata['type'] == "2"){ echo"checked "; } ?>  <? if($groupdata['type'] == "3"){ echo"disabled "; } ?>id="radio3" value="2" /></td>
          <td>Privado</td>
          <td><img src="images/icos/v22_2.gif" width="14" height="5" /></td>
        </tr>
        <tr>
          <td height="24" colspan="3" class="infor2"> Nadie puede unirse </td>
        </tr>
        <tr>
          <td><input type="radio" name="type" <? if($groupdata['type'] == "3"){ echo"checked "; } ?>  <? if($groupdata['type'] == "3"){ echo"disabled "; } ?> id="radio4" value="3" /></td>
          <td>Ilimitado</td>
          <td><img src="images/icos/generador.gif" width="13" height="14" /></td>
        </tr>
        <tr>
          <td height="54" colspan="3" class="infor2"> Todos pueden unirse. No hay límite de miembros. Imposible mostrar los miembros </td>
        </tr>
        <tr>
          <td height="48" colspan="3" class="titlred"> Nota: ¡Si eliges esta opción luego no podrás cambiarla! </td>
        </tr>
      </table>
       <? $check = mysql_query("Select * from `groups_memberships` where groupid = '".$_GET['id']."' and userid = '".$sys->UserInfo($username,"id")."'");
$rw = mysql_fetch_array($check); if($rw['member_rank'] == "3"){ ?> <input style=" height:40px; width:200px; font-weight:bold; font-size:14px; color:#F00" type="submit" name="delete" id="delete" value="Borrar Grupo" /><? } ?></td>
    </tr>
  </table>
</form>
</body>
</html>