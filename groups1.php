<? include("./includes/core.php"); 
// Esta página esta oculta Si/No: Si //
// Fin de la comprovación //
$username = $sys->EscapeString($_SESSION['username']);
$pageid = "me";
if(isset($_GET['gname'])){
$short = mysql_query("Select * from `groups_links` where short = '".mysql_real_escape_string($_GET['gname'])."' ");
if(mysql_num_rows($short)){ $rw = mysql_fetch_array($short); $_GET['id'] = $rw['groupid']; } 
}
if(is_numeric($_GET['id'])){
$is_exist = mysql_query("Select * from `groups_details` where id = '".mysql_real_escape_string($_GET['id'])."' ");
if(mysql_num_rows($is_exist)){
$groupn = mysql_fetch_array($is_exist);
$groupname = $groupn['name'];
}else{
$groupname = "Grupo no encontrado"; }
}else{ $groupname = "Grupo no encontrado"; }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?=$config['cms_base'];?>" />
<link href="images/css/header.css" rel="stylesheet" type="text/css" />
<link href="images/css/me.css" rel="stylesheet" type="text/css" />
<title><?=$config['cms_name'];?> - <?=$groupname;?></title>
<style type="text/css">
td,th {
	font-family: verdana;
	font-size: 11px;
}
.title_menu {
	color: #FFF;
	
}
 
body {
	margin-top: 0px;
	background-image: url(images/backgrounds/bg_fi_vw.png);

	background-position:top;
	background-color: #A8E3F9;
	background-repeat:repeat-x;
}
.submenu {
	color: #FFF;
}
.submenu_on {
	color: #000;
}
.rellall {	color: #F00;
}
.nick_pltb {
	font-size: 9px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
</style>


<script type="text/javascript" src="js/rotator.js"></script>
<link rel="stylesheet"  href="gallery/slideshow1.css" type="text/css" />

<style type="text/css">
.rule1 {}
</style>
</head>
<body>
<? 
include("top.php");
echo"<br><br>";
if(isset($_GET['gname'])){
$short = mysql_query("Select * from `groups_links` where short = '".mysql_real_escape_string($_GET['gname'])."' ");
if(mysql_num_rows($short)){ $rw = mysql_fetch_array($short); $_GET['id'] = $rw['groupid']; } 
}
 ?>
<? $is_exist = mysql_query("Select * from `groups_details` where id = '".mysql_real_escape_string($_GET['id'])."' ");
if(mysql_num_rows($is_exist) && is_numeric($_GET['id'])){  ?>
<table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="929" height="0" align="center" style="border:1px solid #000; border-radius:3px 3px 3px 3px; background-color:#FFF;"><table width="928" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="0"><table width="0" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td background="gallery/box/homes.png"><table width="9" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="10"><table width="0"  height="18" border="0" align="center" cellpadding="0" cellspacing="0" >
                  <tr>
                      <td width="0" height="0"><?php
$allow_guests = true;
$is_group = true;
require_once('includes/core.php');


if(isset($_GET['url'])){
$check = mysql_query("SELECT * FROM groups_url WHERE url = '".$_GET['url']."' LIMIT 1");
if(mysql_num_rows($check)){	
$check = mysql_fetch_array($check);	
header("Location: groups/".$check['groupid']."/id"); exit;
} }

// Search function
if(isset($_POST['searchString'])){
	$searchString = addslashes($_POST['searchString']);
	$check = mysql_query("SELECT id FROM groups_details WHERE name LIKE '".$searchString."' LIMIT 1") or die(mysql_error());
	$found = mysql_num_rows($check);
	if($found > 0){
		$tmp = mysql_fetch_assoc($check);
		header("Location: groups/" . $tmp['id'] ."/id");
		exit;
	}
}

if(isset($_GET['id']) && is_numeric($_GET['id'])){

	$check = mysql_query("SELECT * FROM groups_details WHERE id = '".$_GET['id']."' LIMIT 1");
	$exists = mysql_num_rows($check);

	if($exists > 0){

		$groupid = $_GET['id'];

		$error = false;
		$groupdata = mysql_fetch_assoc($check);

		$pagename = $groupdata['name'];
		$ownerid = $groupdata['ownerid'];

		$members = mysql_evaluate("SELECT COUNT(*) FROM groups_memberships WHERE groupid = '".$groupid."' AND is_pending = '0'");

		$check = mysql_query("SELECT * FROM groups_memberships WHERE userid = '".$my_id."' AND groupid = '".$groupid."' AND is_pending = '0' LIMIT 1");
		$is_member = mysql_num_rows($check);

		if($is_member > 0 && $logged_in){

			$is_member = true;
			$my_membership = mysql_fetch_assoc($check);
			$member_rank = $my_membership['member_rank'];

		} else {

			$is_member = false;

		}

	} else {

		$error = true;
$error_type = "group_fail";
	}

} else {

	$error = true;
$error_type = "group_fail";
}


if(isset($_GET['do']) && $_GET['do'] == "edit" && $logged_in){

	if($is_member && $member_rank > 1){

		$edit_mode = true;

		$check = mysql_query("SELECT * FROM cms_homes_group_linker WHERE userid = '".$my_id."' LIMIT 1") or die(mysql_error());
		$linkers = mysql_num_rows($check);

		if($linkers > 0){

			mysql_query("UPDATE cms_homes_group_linker SET active = '1', groupid = '".$groupid."' WHERE userid = '".$my_id."' LIMIT 1") or die(mysql_error());

		} else {

			mysql_query("INSERT INTO cms_homes_group_linker (userid,groupid,active) VALUES ('".$my_id."','".$groupid."','1')") or die(mysql_error());

		}

	} else {

		header("location:groups/".$groupid."/id");
		$edit_mode = false;

	}

} else {

	$edit_mode = false;

}

if(!$error){

	$body_id = "viewmode";

	if($edit_mode){

		$body_id = "editmode";

	}

} else {

	$body_id = "home";

}

$pageid = "profile";

if($groupdata['type'] !== "1" && $is_member !== true){
	// If the group type is NOT exclusive/moderated, we have to delete any pending requests
	// this user has, simply because there's no longer need to put the user in the waiting list.
	$remove_pending = mysql_query("DELETE FROM groups_memberships WHERE is_pending = '1' AND userid = '".$my_id."' AND groupid = '".$groupid."' LIMIT 1") or die(mysql_error());
}

$viewtools = "	<div class=\"myhabbo-view-tools\">\n";

if($logged_in && !$is_member && $groupdata['type'] !== "2" && $my_membership['is_pending'] !== "1"){ $viewtools = $viewtools . "<a href=\"joingroup.php?groupId=".$groupid."\" id=\"join-group-button\">"; if($groupdata['type'] == "0" || $groupdata['type'] == "3"){ $viewtools = $viewtools . "Unirse!"; } else { $viewtools = $viewtools . "Pedir peticion"; } $viewtools = $viewtools . "</a>"; }
if($logged_in && $my_membership['is_current'] !== "1" && $is_member){ $viewtools = $viewtools . "<a href=\"#\" id=\"select-favorite-button\">Hazerte favorito</a>\n"; }
if($logged_in && $my_membership['is_current'] == "1" && $is_member){ $viewtools = $viewtools . "<a href=\"#\" id=\"deselect-favorite-button\">Quitar de favorito</a>"; }
if($logged_in && $is_member && $my_id !== $ownerid){ $viewtools = $viewtools . "<a href=\"leavegroup.php?groupId=".$groupid."\" id=\"leave-group-button\">Dejar el grupo</a>\n"; }

$viewtools = $viewtools . "	</div>\n";


$bg_fetch = mysql_query("SELECT data FROM cms_homes_stickers WHERE type = '4' AND groupid = '".$groupid."' LIMIT 1");
$bg_exists = mysql_num_rows($bg_fetch);

	if($bg_exists < 1){ // if there's no background override for this user set it to the standard
		$bg = "b_bg_pattern_abstract2";
	} else {
		$bg = mysql_fetch_array($bg_fetch);
		$bg = "b_" . $bg[0];
	}

if(!$error){

include('templates/community/hsubheader.php');
include('templates/community/header.php');

mysql_query("UPDATE groups_details SET views = views+'1' WHERE id='".$groupid."' LIMIT 1");
?>
                          <table width="898"  height="59"border="0" align="center" cellpadding="0" cellspacing="0" >
                            <tr>
                              <td width="0"><div class="box-tabs-container box-tabs-left clearfix">
                                <?php if($member_rank > 1 && !$edit_mode){ ?>
                                <a href="#" id="myhabbo-group-tools-button" class="new-button dark-button edit-icon" style="float:left"><b><span></span>Editar Grupo</b><i></i></a> <?php } ?>
                              
                               
                                <?php if(!$edit_mode){ echo $viewtools; } ?>
                                <h2 class="page-owner"> <font color="#000000"><?php echo stripslashes($groupdata['name']); ?></font>&nbsp;
                                  <?php if($groupdata['type'] == "2"){ ?>
                                  <img src='./web-gallery/images/status_closed_big.gif' alt='Closed Group' title='Closed Group' />
                                  <?php } ?>
                                  <?php if($groupdata['type'] == "1"){ ?>
                                  <img src='./web-gallery/images/status_exclusive_big.gif' alt='Moderated Group' title='Moderated Group' />
                                  <?php } ?>
                                </h2>
                                </h2>
                                
                              </div>
                                <div id="mypage-content">
                                  <?php if($edit_mode == true){ ?>
                                  <div id="top-toolbar" class="clearfix">
                                    <ul>
                                      <li> <a href="#" id="inventory-button">Tu inventario</a> </li>
                                      <li><a href="#" id="webstore-button">Catalogo</a></li>
                                    </ul>
                                    <form action="#" method="get" style="width: 50%;">
                                      <a id="cancel-button" class="new-button red-button cancel-icon" href="#"><b><span></span>Cancelar Edici&oacute;n</b><i></i></a> <a id="save-button" class="new-button green-button save-icon" href="#"><b><span></span>Guardar Cambios</b><i></i></a>
                                    </form>
                                  </div>
                                </div>
                                <?php } ?></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table>
              <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div id="mypage-bg" class="<?php echo $bg; ?>">
			<div id="playground-outer">
				<div id="playground">

<?php
$get_em = mysql_query("SELECT id,type,x,y,z,data,skin,subtype,var FROM cms_homes_stickers WHERE groupid = '".$groupid."' and type < 4 LIMIT 200") or die(mysql_error());

while ($row = mysql_fetch_array($get_em, MYSQL_NUM)) {

	switch($row[1]){
	case 1: $type = "sticker"; break;
	case 2: $type = "widget"; break;
	case 3: $type = "stickie"; break;
	case 4: $type = "ignore"; break;
	}

if($edit_mode == true){
	$edit = "\n<img src=\"./web-gallery/images/myhabbo/icon_edit.gif\" width=\"19\" height=\"18\" class=\"edit-button\" id=\"" . $type . "-" . $row[0] . "-edit\" />
<script language=\"JavaScript\" type=\"text/javascript\">
Event.observe(\"".$type."-".$row[0]."-edit\", \"click\", function(e) { openEditmenu(e, ".$row[0].", \"".$type."\", \"".$type."-".$row[0]."-edit\"); }, false);
</script>\n";
	} else {
	$edit = " ";
	}


	
	if($user_row['rank'] > 5){
		$content = bbcode_format(nl2br(HoloText($row[5])));
	} else {
		$content = bbcode_format(nl2br(HoloText($row[5])));
	}
	
	if($type == "stickie"){
	printf("<div class=\"movable stickie n_skin_%s-c\" style=\" left: %spx; top: %spx; z-index: %s;\" id=\"stickie-%s\">
	<div class=\"n_skin_%s\" >
		<div class=\"stickie-header\">
			<h3>%s</h3>
			<div class=\"clear\"></div>
		</div>
		<div class=\"stickie-body\">
			<div class=\"stickie-content\">
				<div class=\"stickie-markup\">%s</div>
				<div class=\"stickie-footer\">
				</div>
			</div>
		</div>
	</div>
</div>",$row[6],$row[2],$row[3],$row[4],$row[0],$row[6],$edit,$content); } elseif($type == "sticker"){ ?>
	<div class="movable sticker s_<?php echo $row[5]; ?>" style="left: <?php echo $row[2]; ?>px; top: <?php echo $row[3]; ?>px; z-index: <?php echo $row[4]; ?>" id="sticker-<?php echo $row[0]; ?>"><?php echo $edit; ?></div>
	
	<?php } elseif($type == "widget"){

		switch($row[7]){
		case "1": $subtype = "Profilewidget"; break;
		case "3": $subtype = "memberWidget"; break;
		case "4": $subtype = "GuestbookWidget"; break;
		case "5": $subtype = "TraxPlayerWidget";
		}

		if($subtype == "Profilewidget"){

		$found_profile = true; ?>

		<div class="movable widget GroupInfoWidget" id="widget-<?php echo $row[0]; ?>" style=" left: <?php echo $row[2]; ?>px; top: <?php echo $row[3]; ?>px; z-index: <?php echo $row[4]; ?>;">
<div class="w_skin_<?php echo $row[6]; ?>">
	<div class="widget-corner" id="widget-<?php echo $row[0]; ?>-handle">
		<div class="widget-headline"><h3><span class="header-left">&nbsp;</span><span class="header-middle">Info del Grupo</span><span class="header-right"><?php echo $edit; ?></span></h3>
		</div>
	</div>
	<div class="widget-body">
		<div class="widget-content">

	<div class="group-info-icon"><img src='./habbo-imaging/badge?badge=<?php echo $groupdata['badge']; ?>' /></div>
	<h4><?php echo HoloText($groupdata['name']); ?></h4>
<p>
Grupo creado:<br /><strong><?php echo date("d/m/Y",$groupdata['created']); ?></strong>
</p>

<p>
<?php echo $members; ?> miembros
</p>
<?php if($groupdata['roomid'] != "0") {
$sql = mysql_query("SELECT caption FROM rooms WHERE id = '".$groupdata['roomid']."' LIMIT 1");
$roominfo = mysql_fetch_assoc($sql); ?>
<p><a href="./client?forwardId=2&roomId=<?php echo $groupdata['roomid']; ?>" onClick="HabboClient.roomForward(this, '<?php echo $groupdata['roomid']; ?>', 'private'); return false;" target="<?php echo $myrow['client_token']; ?>" class="group-info-room"><?php echo HoloText($roominfo['name']); ?></a></p>
<?php } ?>

<div class="group-info-description"><?php echo HoloText($groupdata['description']); ?></div>

<div id="profile-tags-panel">
    <div id="profile-tag-list">
	<div id="profile-tags-container">

<?php
$get_tags = mysql_query("SELECT * FROM user_tags WHERE user_id = '".$groupdata['owner_id']."' ORDER BY id LIMIT 20") or die(mysql_error());
$rows = mysql_num_rows($get_tags);

	$num = mysql_num_rows($get_tags);
	if($num > 0){

		if($is_member == true && $member_rank > 1 && LOGGED_IN == TRUE){
			while ($row1 = mysql_fetch_assoc($get_tags)){ ?>
			<span class="tag-search-rowholder">
        <a href="./tag/<?php echo $row1['tag']; ?>" class="tag-search-link tag-search-link-<?php echo $row1['tag']; ?>"><?php echo $row1['tag']; ?></a><img border="0" class="tag-delete-link tag-delete-link-<?php echo $row1['tag']; ?>" onMouseOver="this.src='./web-gallery/images/buttons/tags/tag_button_delete_hi.gif'" onMouseOut="this.src='./web-gallery/images/buttons/tags/tag_button_delete.gif'" src="./web-gallery/images/buttons/tags/tag_button_delete.gif"/></span>
		<?php } } elseif(LOGGED_IN == TRUE){
			while ($row1 = mysql_fetch_assoc($get_tags)){ ?>
			<span class="tag-search-rowholder">
        <a href="./tag/<?php echo $row1['tag']; ?>" class="tag-search-link tag-search-link-<?php echo $row1['tag']; ?>"><?php echo $row1['tag']; ?></a><img border="0" class="tag-add-link tag-add-link-<?php echo $row1['tag']; ?>" onMouseOver="this.src='./web-gallery/images/buttons/tags/tag_button_add_hi.gif'" onMouseOut="this.src='./web-gallery/images/buttons/tags/tag_button_add.gif'" src="./web-gallery/images/buttons/tags/tag_button_add.gif"/></span>
		
		<?php } } else {
			while ($row1 = mysql_fetch_assoc($get_tags)){ ?>
		<span class="tag-search-rowholder">
        <a href="./tag/<?php echo $row1['tag']; ?>" class="tag-search-link tag-search-link-<?php echo $row1['tag']; ?>"><?php echo $row1['tag']; ?></a></span>
		<?php } } } else { echo "No hay ningún 'YoSoy' ";	} ?>
		<img id="tag-img-added" border="0" src="./web-gallery/images/buttons/tags/tag_button_added.gif" style="display:none"/>
		</div>

<script type="text/javascript">
    document.observe("dom:loaded", function() {
        TagHelper.setTexts({
            buttonText: "OK",
            tagLimitText: "¡Has alcanzado el límite de \'YoSoys\'! Elimina uno antes si quieres añadir otro nuevo."
        });
    });
</script>
    </div>
	
<div id="profile-tags-status-field">
 <div style="display: block;">
  <div class="content-red">
   <div class="content-red-body">
    <span id="tag-limit-message"><img src="./web-gallery/images/register/icon_error.gif"/>¡Has alcanzado el límite de 'YoSoys'! Elimina uno antes si quieres añadir otro nuevo.</span>
    <span id="tag-invalid-message"><img src="./web-gallery/images/register/icon_error.gif"/>YoSoy Inválido</span>
   </div>
  </div>
 <div class="content-red-bottom">
  <div class="content-red-bottom-body"></div>
 </div>
 </div>
</div>

<?php if($is_member == true && $member_rank > 1){ ?>
        <div class="profile-add-tag">
            <input type="text" id="profile-add-tag-input" maxlength="30"/><br clear="all"/>
            <a href="#" class="new-button" style="float:left;margin:5px 0 0 0;" id="profile-add-tag"><b>Agregar 'YoSoy'</b><i></i></a>
        </div>
<?php } ?>
    </div>
<script type="text/javascript">
    document.observe("dom:loaded", function() {
        new GroupInfoWidget('<?php echo $groupid; ?>', '<?php echo $row[0]; ?>');
    });
</script>

		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
    
<?php } elseif($subtype == "memberWidget"){ ?>
	<div class="movable widget memberWidget" id="widget-<?php echo $row[0]; ?>" style="left: <?php echo $row[2]; ?>px; top: <?php echo $row[3]; ?>px; z-index: <?php echo $row[4]; ?>;">
<div class="w_skin_<?php echo $row[6]; ?>">
	<div class="widget-corner" id="widget-<?php echo $row[0]; ?>-handle">
		<div class="widget-headline"><h3><span class="header-left">&nbsp;</span><span class="header-middle">Miembros del Grupo (<span id="avatar-list-size"><?php echo $members; ?></span>)</span><span class=\"header-right\"><?php echo $edit; ?></span></h3>
		</div>
	</div>
	<div class="widget-body">
		<div class="widget-content">

<div id="avatar-list-search">
<input type="text" style="float:left;" id="avatarlist-search-string"/>
<a class="new-button" style="float:left;" id="avatarlist-search-button"><b>Buscar</b><i></i></a>
</div>
<br clear="all"/>

<div id="avatarlist-content">

<?php 
$bypass = true;
$widgetid = $row['0'];
include ('./myhabbo/avatarlist_membersearchpaging.php'); ?>

<script type="text/javascript">
document.observe("dom:loaded", function() {
	window.widget<?php echo $row[0]; ?> = new memberWidget('<?php echo $groupid; ?>', '<?php echo $row[0]; ?>');
});
</script>

</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<?php
	} elseif($subtype == "GuestbookWidget"){
	$sql = mysql_query("SELECT * FROM cms_guestbook WHERE widget_id = '".$row['0']."' ORDER BY id DESC");
	$count = mysql_num_rows($sql);
	
	if($row['var'] == "0"){;
		$status = "public";
	}else{
		$status = "private";
	}
	?>
	<div class="movable widget GuestbookWidget" id="widget-<?php echo $row['0']; ?>" style=" left: <?php echo $row['2']; ?>px; top: <?php echo $row['3']; ?>px; z-index: <?php echo $row['4']; ?>;">
<div class="w_skin_<?php echo $row['6']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['0']; ?>-handle">
		<div class="widget-headline"><h3>
		<?php echo $edit; ?>
		<span class="header-left">&nbsp;</span><span class="header-middle">Mi Libro de invitados (<span id="guestbook-size"><?php echo $count; ?></span>) <span id="guestbook-type" class="<?php echo $status; ?>"><?php if($status == "private"){ ?><img src="./web-gallery/images/groups/status_exclusive.gif" title="Solo amigos" alt="Solo amigos"/><?php } ?></span></span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
<div id="guestbook-wrapper" class="gb-public">
<ul class="guestbook-entries" id="guestbook-entry-container">
	<?php if($count == 0){ ?>
	<div id="guestbook-empty-notes">Este Libro está vac&iacute;o.</div>
	<?php } else {
			$sql123 = mysql_query("SELECT * FROM groups_details WHERE id = '".$_GET['id']."' LIMIT 1");
			$grouprrow = mysql_fetch_assoc($sql123);
			$i = 0;
			while ($row1 = mysql_fetch_assoc($sql)) {
				$i++;
				$userrow = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$row1['userid']."' LIMIT 1"));
				if($my_id == $row1['userid']){
					$owneronly = "<img src=\"./web-gallery/images/myhabbo/buttons/delete_entry_button.gif\" id=\"gbentry-delete-".$row1['id']."\" class=\"gbentry-delete\" style=\"cursor:pointer\" alt=\"\"/><br/>";
				} elseif($grouprrow['ownerid'] == $my_id) {
					$owneronly = "<img src=\"./web-gallery/images/myhabbo/buttons/delete_entry_button.gif\" id=\"gbentry-delete-".$row1['id']."\" class=\"gbentry-delete\" style=\"cursor:pointer\" alt=\"\"/><br/>";
				} else {
					$owneronly = "";
				}
				if(IsUserOnline($row1['userid'])){ $useronline = "online"; } else { $useronline = "offline"; } ?>
				<li id="guestbook-entry-<?php echo $row1['id']; ?>" class="guestbook-entry">
		<div class="guestbook-author">
			<img src="http://www.habbo.es/habbo-imaging/avatarimage?figure=<?php echo $userrow['look']; ?>&direction=2&head_direction=2&gesture=sml&size=s" alt="<?php echo $userrow['username']; ?>" title="<?php echo $userrow['username']; ?>"/>
		</div>
			<div class="guestbook-actions">
					<?php echo $owneronly; ?>
			</div>
		<div class="guestbook-message">
			<div class="<?php echo $useronline; ?>">
			<strong>	<a href="./profile/<?php echo $userrow['username']; ?>"><?php echo $userrow['username']; ?></a></strong>
			</div>
			<p><?php echo HoloText($row1['message'],false ,true); ?></p>
		</div>
		<div class="guestbook-cleaner">&nbsp;</div>
		<div class="guestbook-entry-footer metadata"><?php echo $row1['time']; ?></div>
	</li>
	<?php }	} ?>
</ul></div>

<?php if($edit_mode == false){ ?>
	<? if(LOGGED_IN){ ?><div class="guestbook-toolbar clearfix">
	<a href="#" class="new-button envelope-icon" id="guestbook-open-dialog">
	<b><span></span>Publicar un nuevo mensaje</b><i></i>
	</a>
	</div><? } ?>
<?php } ?>
<script type="text/javascript">	
	document.observe("dom:loaded", function() {
		var gb<?php echo $row['0']; ?> = new GuestbookWidget('<?php echo time(); ?>', '<?php echo $row['0']; ?>', 500);
		var editmenuSection = $('guestbook-privacy-options');
		if (editmenuSection) {
			gb<?php echo $row['0']; ?>.updateOptionsList('<?php echo $status; ?>');
		}
	});
</script>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<?php } elseif($subtype == "TraxPlayerWidget"){ 
		$sql123 = mysql_query("SELECT * FROM groups_details WHERE id = '".$_GET['id']."' LIMIT 1");
		$grouprrow = mysql_fetch_assoc($sql123);?>
		<div class="movable widget TraxPlayerWidget" id="widget-<?php echo $row['0']; ?>" style=" left: <?php echo $row['2']; ?>px; top: <?php echo $row['3']; ?>px; z-index: <?php echo $row['4']; ?>;">
<div class="w_skin_<?php echo $row['6']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['0']; ?>-handle">
		<div class="widget-headline"><h3><?php echo $edit; ?><span class="header-left">&nbsp;</span><span class="header-middle">REPRODUCTOR</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
<?php 
if($row['8'] == ""){ $songselected = false; }else{ $songselected = true; }
if($edit_mode == true){ ?>
<div id="traxplayer-content" style="text-align: center;">
	<img src="./web-gallery/images/traxplayer/player.png"/>
</div>

<div id="edit-menu-trax-select-temp" style="display:none">
    <select id="trax-select-options-temp">
    <option value="">- Selecciona canci&oacute;n -</option>
	<?php
	$mysql = mysql_query("SELECT * FROM furniture WHERE ownerid = '".$grouprrow['ownerid']."'");
	$i = 0;
	while($machinerow = mysql_fetch_assoc($mysql)){
		$i++;
		$sql = mysql_query("SELECT * FROM soundmachine_songs WHERE machineid = '".$machinerow['id']."'");
		$n = 0;
		while($songrow = mysql_fetch_assoc($sql)){
			$n++;
			if($songrow['id'] <> ""){ echo "<option value=\"".$songrow['id']."\">".HoloText($songrow['title'])."</option>\n"; }
		}
	} ?>
    </select>

</div>
<?php }elseif($songselected == false){ ?>
No se ha seleccionado una cancion.
<?php }else{
$sql1 = mysql_query("SELECT * FROM soundmachine_songs WHERE id = '".$row['8']."' LIMIT 1");
$songrow1 = mysql_fetch_assoc($sql); ?>
<div id="traxplayer-content" style="text-align:center;"></div>
<embed type="application/x-shockwave-flash" src="./web-gallery/flash/traxplayer/traxplayer.swf" name="traxplayer" quality="high"
base="./web-gallery/flash/traxplayer/" allowscriptaccess="always" menu="false"
wmode="transparent" flashvars="songUrl=./habblet/myhabbo_trax_song.php?songId=<?php echo $row['8']; ?>&amp;sampleUrl=http://images.habbohotel.com/dcr/hof_furni/mp3/" height="66" width="210" />
<?php } ?>

		<div class="clear"></div>
		</div>
	</div>
</div>
</div><?php } } } ?>

				</div>
			</div>
			<div id="mypage-ad">
    <div class="habblet ">
<div class="ad-container">
&nbsp;
</div>
    </div>
			</div>

		</div>
	</div>
</div>
<div id="group-tools" class="bottom-bubble">
	<div class="bottom-bubble-t"><div></div></div>
	<div class="bottom-bubble-c">
<h3>Editar Grupo</h3>

<ul>
	<li><a href="./groups/<?php echo $groupid; ?>/id/edit" id="group-tools-style">Modificar p&aacute;gina</a></li>
	<?php if($ownerid == $my_id){ ?><li><a href="#" id="group-tools-settings">Ajustes</a></li><?php } ?>
	<li><a href="#" id="group-tools-badge">Placa</a></li>
	<li><a href="#" id="group-tools-members">Miembros</a></li>
</ul>

	</div>
	<div class="bottom-bubble-b"><div></div></div>
</div>

<div class="cbb topdialog black" id="dialog-group-settings">



	<a class="topdialog-exit" href="#" id="dialog-group-settings-exit">X</a>
	<div class="topdialog-body" id="dialog-group-settings-body">
<p style="text-align:center"><img src="./web-gallery/images/progress_bubbles.gif" alt="" width="29" height="6" /></p>
	</div>
</div>

<script language="JavaScript" type="text/javascript">
Event.observe("dialog-group-settings-exit", "click", function(e) {
    Event.stop(e);
    closeGroupSettings();
}, false);
</script><div class="cbb topdialog black" id="group-memberlist">

	<div class="box-tabs-container">
<ul class="box-tabs">
	<li class="selected" id="group-memberlist-link-members"><a href="#">Miembros</a><span class="tab-spacer"></span></li>
	<li id="group-memberlist-link-pending"><a href="#">Miembros pendientes</a><span class="tab-spacer"></span></li>
</ul>
</div>

	<a class="topdialog-exit" href="#" id="group-memberlist-exit">X</a>
	<div class="topdialog-body" id="group-memberlist-body">
<div id="group-memberlist-members-search" class="clearfix" style="display:none">

    <a id="group-memberlist-members-search-button" href="#" class="new-button"><b>Buscar</b><i></i></a>
    <input type="text" id="group-memberlist-members-search-string"/>
</div>
<div id="group-memberlist-members" style="clear: both"></div>
<div id="group-memberlist-members-buttons" class="clearfix">
	<a href="#" class="new-button group-memberlist-button-disabled" id="group-memberlist-button-give-rights"><b>Dar Derechos</b><i></i></a>
	<a href="#" class="new-button group-memberlist-button-disabled" id="group-memberlist-button-revoke-rights"><b>Remover Derechos</b><i></i></a>
	<a href="#" class="new-button group-memberlist-button-disabled" id="group-memberlist-button-remove"><b>Remover</b><i></i></a>
	<a href="#" class="new-button group-memberlist-button" id="group-memberlist-button-close"><b>Cerrar</b><i></i></a>
</div>
<div id="group-memberlist-pending" style="clear: both"></div>
<div id="group-memberlist-pending-buttons" class="clearfix">
	<a href="#" class="new-button group-memberlist-button-disabled" id="group-memberlist-button-accept"><b>Aceptar</b><i></i></a>
	<a href="#" class="new-button group-memberlist-button-disabled" id="group-memberlist-button-decline"><b>Rechazar</b><i></i></a>
	<a href="#" class="new-button group-memberlist-button" id="group-memberlist-button-close2"><b>Cerrar</b><i></i></a>
</div>
	</div>
</div>
<script language="JavaScript" type="text/javascript">
initEditToolbar();
initMovableItems();
document.observe("dom:loaded", initDraggableDialogs);
</script>


<div id="edit-save" style="display:none;"></div>
    </div>
</div>

</div>

<div id="edit-menu" class="menu">
	<div class="menu-header">
		<div class="menu-exit" id="edit-menu-exit"><img src="./web-gallery/images/dialogs/menu-exit.gif" alt="" width="11" height="11" /></div>
		<h3>Cambiar</h3>
	</div>
	<div class="menu-body">
		<div class="menu-content">
			<form action="#" onSubmit="return false;">
				<div id="edit-menu-skins">
	<select id="edit-menu-skins-select">
			<option value="1" id="edit-menu-skins-select-defaultskin">Por defecto</option>
			<option value="6" id="edit-menu-skins-select-goldenskin">Dorado</option>
			<option value="3" id="edit-menu-skins-select-metalskin">Metal</option>
			<option value="5" id="edit-menu-skins-select-notepadskin">Libreta</option>
			<option value="2" id="edit-menu-skins-select-speechbubbleskin">Blocadillo de di&aacute;logo</option>
			<option value="4" id="edit-menu-skins-select-noteitskin">Nota</option>
<?php if($user_rank >= 6){ ?>
			<option value="9" id="edit-menu-skins-select-nakedskin">Transparente</option>
<?php } ?>
	</select>
				</div>
				<div id="edit-menu-stickie">
					<p>Si borras esta nota no podr&aacute;s volver a ponerla.</p>
				</div>
				<div id="rating-edit-menu">
					<input type="button" id="ratings-reset-link"
						value="Reset rating" />
				</div>
				<div id="highscorelist-edit-menu" style="display:none">
					<select id="highscorelist-game">
						<option value="">Select game</option>
						<option value="1">Battle Ball: Rebound!</option>
						<option value="2">SnowStorm</option>
						<option value="0">Wobble Squabble</option>
					</select>
				</div>
				<div id="edit-menu-remove-group-warning">
					<p>Esta etiqueta es de otro usurio. Si lo borras, aparecerá en su inventario.</p>
				</div>
				<!--<div id="edit-menu-gb-availability">
					<select id="guestbook-privacy-options">
						<option value="private">Alleen vrienden kunnen posten</option>
						<option value="public">Iedereen kan posten</option>
					</select>
				</div>-->
				<div id="edit-menu-trax-select">
					<select id="trax-select-options"></select>
				</div>
				<div id="edit-menu-remove">
					<input type="button" id="edit-menu-remove-button" value="Eliminar" />
				</div>
			</form>
			<div class="clear"></div>
		</div>
	</div>
	<div class="menu-bottom"></div>
</div>

<script language="JavaScript" type="text/javascript">
Event.observe(window, "resize", function() { if (editmenuOpen) closeEditmenu(); }, false);
Event.observe(document, "click", function() { if (editmenuOpen) closeEditmenu(); }, false);
Event.observe("edit-menu", "click", Event.stop, false);
Event.observe("edit-menu-exit", "click", function() { closeEditmenu(); }, false);
Event.observe("edit-menu-remove-button", "click", handleEditRemove, false);
Event.observe("edit-menu-skins-select", "click", Event.stop, false);
Event.observe("edit-menu-skins-select", "change", handleEditSkinChange, false);
Event.observe("guestbook-privacy-options", "click", Event.stop, false);
Event.observe("guestbook-privacy-options", "change", handleGuestbookPrivacySettings, false);
Event.observe("trax-select-options", "click", Event.stop, false);
Event.observe("trax-select-options", "change", handleTraxplayerTrackChange, false);
</script>

<div class="cbb topdialog" id="guestbook-form-dialog">
	<h2 class="title dialog-handle">Escribir un mensaje</h2>
	
	<a class="topdialog-exit" href="#" id="guestbook-form-dialog-exit">X</a>
	<div class="topdialog-body" id="guestbook-form-dialog-body">
<div id="guestbook-form-tab">
<form method="post" id="guestbook-form">
    <p>
        El mensaje puede tener un m&aacute;ximo de 200 car&aacute;cteres
        <input type="hidden" name="ownerId" value="<?php echo $user_row['id']; ?>" />
	</p>
	<div>
	    <textarea cols="15" rows="5" name="message" id="guestbook-message"></textarea>
    <script type="text/javascript">
        bbcodeToolbar = new Control.TextArea.ToolBar.BBCode("guestbook-message");
        bbcodeToolbar.toolbar.toolbar.id = "bbcode_toolbar";
        var colors = { "red" : ["#d80000", "Rojo"],
            "orange" : ["#fe6301", "Naranja"],
            "yellow" : ["#ffce00", "Amarillo"],
            "green" : ["#6cc800", "Verde"],
            "cyan" : ["#00c6c4", "Cyan"],
            "blue" : ["#0070d7", "Azul"],
            "gray" : ["#828282", "Gris"],
            "black" : ["#000000", "Negro"]
        };
        bbcodeToolbar.addColorSelect("Color", colors, true);
    </script>

    </div>

	<div class="guestbook-toolbar clearfix">
		<a href="#" class="new-button" id="guestbook-form-cancel"><b>Publicar</b><i></i></a>
		<a href="#" class="new-button" id="guestbook-form-preview"><b>Previa</b><i></i></a>	
	</div>
</form>
</div>
<div id="guestbook-preview-tab">&nbsp;</div>
	</div>
</div>	
<div class="cbb topdialog" id="guestbook-delete-dialog">
	<h2 class="title dialog-handle">Eliminar mensaje</h2>
	
	<a class="topdialog-exit" href="#" id="guestbook-delete-dialog-exit">X</a>
	<div class="topdialog-body" id="guestbook-delete-dialog-body">
<form method="post" id="guestbook-delete-form">
	<input type="hidden" name="entryId" id="guestbook-delete-id" value="" />
	<p>&iquest;Estas seguro que deseas eliminar este mensaje?</p>
	<p>
		<a href="#" id="guestbook-delete-cancel" class="new-button"><b>Cancelar</b><i></i></a>
		<a href="#" id="guestbook-delete" class="new-button"><b>Borrar</b><i></i></a>
	</p>
</form>
	</div>
</div>	
			
<script type="text/javascript">
HabboView.run();
</script>


</body>
</html>

<?php
} 
?></td>
                    </tr>
              </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table><? }else{ ?>
<table width="930" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="267" height="317" valign="top"><table background="images/boxes/green.png" width="256" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="256" height="35" align="center"><strong><font color="#FFFFFF">Grupos</font></strong></td>
      </tr>
    </table>
      <table width="256" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="253" height="56" align="center" valign="top" style="border-left:1px solid #666;  border-right:1px solid #666; border-bottom:1px solid #666; -moz-border-radius:0px 0px 4px 4px; border-radius:0px 0px 4px 4px; background-color:#FFF;"><br>
            <table width="231" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="231" class="rule1"><strong>&iexcl;Importante!<br>
                  <img src="images/extra/frs_sc.png" width="74" height="96" align="right"><br>
                  </strong>Si te sale esta p&aacute;gina, significa que el grupo no existe<br />
                  <br>
                  <br>
                  Si quieres, puedes visitar otros grupos, de tus amigos, o gente que conozcas.</td>
              </tr>
            </table>
            <br></td>
        </tr>
      </table>
      <br></td>
    <td width="536" valign="top"><table width="467" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="467" height="15" align="center" valign="middle" style="border:1px solid #666; border-radius:4; -moz-border-radius:4; background-color:#FFF;"><table width="446" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="446" height="152" align="left" valign="top"><br>
              <table width="100" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="43"><table width="447" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="447" height="34" align="center" bgcolor="#F7F7F7" style="border:1px solid #000; border-radius:3px 3px 3px 3px; "><table width="419" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="419"><strong>&iquest;Que es esta p&aacute;gina?</strong></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
              -Esta pagina, te indica que el grupo que est&aacute;s intentando acceder, no se encuentra disponible temporalmente.
              </p>
              <p><strong>¡Si quieres crear el grupo ahora, dirigete a &quot;Mis grupos&quot;!</strong></td>
          </tr>
        </table>
          <br></td>
      </tr>
    </table></td>
    <td width="187" valign="top"><div id="web-ads"><div id="web-ads-face"><a href="<?=$config['url_face'];?>" target="_blank"><img src="images/icos/facebook.jpg" width="34"  border="0"  height="34"></a></div><div id="web-ads-twt"><a href="<?=$config['url_twitter'];?>" target="_blank"><img  border="0" src="images/icos/twitter.png" width="32" height="32"></a></div><div id="web-ads-youtb"><a href="<?=$config['url_youtube'];?>" target="_blank"><img src="images/icos/youtub.png" width="32" border="0" height="32"></a></div></div>
<div id="web-ads"><?=$config['adversiment'];?></div></td>
  </tr>
</table>
<? } ?>
<div id="center-copy"><div id="copyright"><font face="<?=$copy['font'];?>" style="font-size:<?=$copy['size'];?>"><strong>
  <?=$copy['message'];?>
</strong></font></div></div>
</body>
</html>