<?php


$getCoins = mysql_query("SELECT * FROM users WHERE username = '".USER_NAME."'");
$b = mysql_fetch_assoc($getCoins);
$my_id = $b['id'];
$name = $b['username'];
$ip = $b['ip_last'];


function FilterText($str, $advanced=false, $bbcode=false) {
	if($advanced == true){ return mysql_real_escape_string($str); }
	$str = mysql_real_escape_string(htmlspecialchars($str));
	return $str;
}



function bbcode_format($str){

        $simple_search = array(
                                '/\[b\](.*?)\[\/b\]/is',
                                '/\[i\](.*?)\[\/i\]/is',
                                '/\[u\](.*?)\[\/u\]/is',
                                '/\[s\](.*?)\[\/s\]/is',
                                '/\[quote\](.*?)\[\/quote\]/is',
                                '/\[link\=(.*?)\](.*?)\[\/link\]/is',
                                '/\[url\=(.*?)\](.*?)\[\/url\]/is',
                                '/\[color\=(.*?)\](.*?)\[\/color\]/is',
                                '/\[size=small\](.*?)\[\/size\]/is',
                                '/\[size=large\](.*?)\[\/size\]/is',
                                '/\[code\](.*?)\[\/code\]/is',
                                '/\[habbo\=(.*?)\](.*?)\[\/habbo\]/is',
                                '/\[room\=(.*?)\](.*?)\[\/room\]/is',
                                '/\[group\=(.*?)\](.*?)\[\/group\]/is'
                                );

        $simple_replace = array(
                                '<strong>$1</strong>',
                                '<em>$1</em>',
                                '<u>$1</u>',
                                '<s>$1</s>',
                                "<div class='bbcode-quote'>$1</div>",
                                "<a href='$1'>$2</a>",
								"<a href='$1'>$2</a>",
                                "<font color='$1'>$2</font>",
                                "<font size='1'>$1</font>",
                                "<font size='3'>$1</font>",
                                '<pre>$1</pre>',
                                "<a href='/home/$1/id'>$2</a>",
                                "<a onclick=\"roomForward(this, '$1', 'private'); return false;\" target=\"client\" href=\"/client?forwardId=2&roomId=$1\">$2</a>",
                                "<a href='/groups/$1/id'>$2</a>"
                                );
								
		$str = preg_replace ($simple_search, $simple_replace, $str);								
		$str = str_replace(":)", " <img src='%www%/web-gallery/smilies/smile.gif' border='0'> ", $str);
		$str = str_replace(";)", " <img src='%www%/web-gallery/smilies/wink.gif' border='0'> ", $str);
		$str = str_replace(":P", " <img src='%www%/web-gallery/smilies/tongue.gif' border='0'> ", $str);
		$str = str_replace(";P", " <img src='%www%/web-gallery/smilies/winktongue.gif' border='0'> ", $str);
		$str = str_replace(":p", " <img src='%www%/web-gallery/smilies/tongue.gif' border='0'> ", $str);
		$str = str_replace(";p", " <img src='%www%/web-gallery/smilies/winktongue.gif' border='0'> ", $str);
		$str = str_replace("(L)", " <img src='%www%/web-gallery/smilies/heart.gif' border='0'> ", $str);
		$str = str_replace("(l)", " <img src='%www%/web-gallery/smilies/heart.gif' border='0'> ", $str);
		$str = str_replace(":o", " <img src='%www%/web-gallery/smilies/shocked.gif' border='0'> ", $str);
		$str = str_replace(":O", " <img src='%www%/web-gallery/smilies/shocked.gif' border='0'> ", $str);       

        return $str;
}



function HoloText($str, $advanced=false, $bbcode=false) {
	if($advanced == true){ return stripslashes($str); }
	$str = stripslashes(nl2br(htmlspecialchars($str)));
	if($bbcode == true){$str = bbcode_format($str); }
	return $str;
}

function IsUserOnline($intUID, $inWeb = false)
{

$result = mysql_query("SELECT online FROM users WHERE id = '".FilterText($intUID)."' OR name = '".FilterText($intUID)."' LIMIT 1") or die(mysql_error());
$row = mysql_fetch_assoc($result);
	if($row['online'] = "1"){ return true; } else { return false; }	
}
function GetUserGroupBadge($my_id){

$check = mysql_query("SELECT groupid FROM groups_memberships WHERE userid = '".$my_id."' AND is_current = '1' LIMIT 1") or die(mysql_error());
$has_badge = mysql_num_rows($check);

	if($has_badge > 0){

		$row = mysql_fetch_assoc($check);
		$groupid = $row['groupid'];

		$check = mysql_query("SELECT badge FROM groups_details WHERE id = '".$groupid."' LIMIT 1") or die(mysql_error());

		$row = mysql_fetch_assoc($check);
		$badge = $row['badge'];

		return $badge;

	} else {

		return false;

	}
}
function IsHCMember($my_id){
   $check = mysql_query("SELECT * FROM user_subscriptions WHERE user_id = '".$my_id."' and subscription_id = 'habbo_club' LIMIT 1");
        $clubrecord = mysql_num_rows($check);
		
        if($clubrecord > 0){
        return false;}
    }
function IsVIPMember($my_id){
  $check = mysql_query("SELECT * FROM user_subscriptions WHERE user_id = '".$my_id."' and subscription_id = 'habbo_vip' LIMIT 1");
        $clubrecord = mysql_num_rows($check);
		
        if($clubrecord > 0){
        return false;}
}





if(isset($_GET['name'])){
	
	$searchname = FilterText($_GET['name']);
	$user_sql = mysql_query("SELECT * FROM users WHERE username = '".$searchname."' LIMIT 1") or die(mysql_error());
	$user_exists = mysql_num_rows($user_sql);
	$user_sql2 = mysql_query("SELECT * FROM users WHERE username LIKE '%".$searchname."%' LIMIT 1") or die(mysql_error());
	$user_exists2 = mysql_num_rows($user_sql2);
	
	if($user_exists == "1"){
	$user_row = mysql_fetch_assoc($user_sql);
	$pagename = $user_row['username'];
	
	} else if($user_exists2 == "1"){
	$user_row = mysql_fetch_assoc($user_sql2);
	$pagename = $user_row['username'];
	
	} else {
	
	$error = 1;
	
	}
	
} elseif(isset($_GET['id'])){
	
	$searchid = FilterText($_GET['id']);
	$user_sql = mysql_query("SELECT * FROM users WHERE id = '".$searchid."' LIMIT 1") or die(mysql_error());
	$user_exists = mysql_num_rows($user_sql);

	if($user_exists == "1"){
	$user_row = mysql_fetch_assoc($user_sql);
	$pagename = $user_row['username'];
		
	} else {
	
	$error = 1;
	
	}

} else {

$error = 1;

}

if(empty($error)){


if($user_row['visibility'] !== "EVERYONE" && $user_row['username'] !== $name){

$error = 2;

}



if($_GET['do'] == "edit" && LOGGED_IN == TRUE){

	if($user_row['username'] == $name){
	
	$_SESSION['home_edit'] = true;
	mysql_query("UPDATE cms_homes_group_linker SET active = '0' WHERE userid = '".$my_id."' LIMIT 1") or die(mysql_error());
	header("location:/"); exit;
	
	} else {
	
	$_SESSION['home_edit'] = false;
	header("location:/"); exit;
	
	}
	
}

if($_GET['do'] == "canceledit" && LOGGED_IN == TRUE){

	unset($_SESSION['home_edit']);
	header("location:/"); exit;
	
}
	
if($_SESSION['home_edit'] == true && $user_row['username'] == $name){
	$edit_mode = true;
	$body_id = "editmode";
} else {
	$edit_mode = false;
	$body_id = "viewmode";
}

if($user_row['name'] == $name && LOGGED_IN == TRUE){
	$pageid = "myprofile";
} else {
	$pageid = "profile";
}
	
}

$bg_fetch = mysql_query("SELECT data FROM cms_homes_stickers WHERE type = '4' AND userid = '".$user_row['id']."' AND groupid = '-1' LIMIT 1");
$bg_exists = mysql_num_rows($bg_fetch);

	if($bg_exists < 1){
		$bg = "b_bg_pattern_abstract2";
	} else {
		$bg = mysql_fetch_array($bg_fetch);
		$bg = "b_".$bg[0];
	}
	
if(empty($error)){
// include ('templates/community_subheader.php');
?>
<style type="text/css">

    #playground, #playground-outer {
	    width: 752px;
	    height: 1360px;
    }

</style>
<div id="container">
	<div id="content" style="position: relative" class="clearfix">
    <div id="mypage-wrapper" class="cbb blue">
<div class="box-tabs-container box-tabs-left clearfix">
	<?php if($user_row['username'] == $name && $edit_mode !== true){ ?>
	<a href="/home/<?php echo FilterText($name); ?>/edit" id="edit-button" class="new-button dark-button edit-icon" style="float:left"><b><span></span>Editar</b><i></i></a>
	<?php } if(LOGGED_IN == TRUE && $user_row['username'] !== $name){ ?>
	<div class="myhabbo-view-tools"> 
			<a href="#" id="reporting-button" style="display: none;">Mostrar la opción de Informar.</a> 
			<a href="#" id="stop-reporting-button" style="display: none;">Ocultar la opción de Informar.</a> 
	</div>
	<?php } ?>
    <h2 class="page-owner"><?php echo $user_row['username']; ?></h2>
    <ul class="box-tabs"></ul>
</div>
	<div id="mypage-content">
<?php if($edit_mode == true){ ?>
<script src="%www%%www%/web-gallery/static/js/homeedit.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">
document.observe("dom:loaded", function() { initView(43466179, 43466179); });
function isElementLimitReached() {
	if (getElementCount() >= 200) {
		showHabboHomeMessageBox("Ya cuentas con el máximo número de elementos para la página. Elimina una etiqueta, una nota o un elemento para dejar espacio a uno nuevo.", "Error", "Cerrar");
		return true;
	}
	return false;
}

function cancelEditing(expired) {
	location.replace("<?php echo $user_row['username']; ?>/canceledit" + (expired ? "?expired=true" : ""));
}

function getSaveEditingActionName(){
	return '<?php echo $user_row['username']; ?>/edit';
}

function showEditErrorDialog() {
	var closeEditErrorDialog = function(e) { if (e) { Event.stop(e); } Element.remove($("myhabbo-error")); Overlay.hide(); };
	var dialog = Dialog.createDialog("myhabbo-error", "", false, false, false, closeEditErrorDialog);
	Dialog.setDialogBody(dialog, '<p>¡Error! Por favor, vuelve a intentarlo en unos minutos.</p><p><a href="#" class="new-button" id="myhabbo-error-close"><b>Cerrar</b><i></i></a></p><div class="clear"></div>');
	Event.observe($("myhabbo-error-close"), "click", closeEditErrorDialog);
	Dialog.moveDialogToCenter(dialog);
	Dialog.makeDialogDraggable(dialog);
}


function showSaveOverlay() {
	var invalidPos = getElementsInInvalidPositions();
	if (invalidPos.length > 0) {
	    $A(invalidPos).each(function(el) { Element.scrollTo(el);  Effect.Pulsate(el); });
	    showHabboHomeMessageBox("¡Ehhh! ¡No puedes hacer eso!", "Lo sentimos, pero no puedes colocar notas, etiquetas o elementos aquí. Cierra la ventana para continuar editando tu página.", "Cerrar");
		return false;
	} else {
		Overlay.show(null,'Guardando');
		return true;
	}
}
</script>
<div id="top-toolbar" class="clearfix">
	<ul>
		<li><a href="#" id="inventory-button">Inventario</a></li>
		<!--<li><a href="#" id="webstore-button">Catálogo</a></li>-->
	</ul>
f
	<form action="#" method="get" style="width: 50%;">
		<a id="cancel-button" class="new-button red-button cancel-icon" href="#"><b><span></span>Cancelar edición</b><i></i></a>
		<a id="save-button" class="new-button green-button save-icon" href="#"><b><span></span>Guardar cambios</b><i></i></a>
	</form>
</div>
<?php } ?>
		<div id="mypage-bg" class="<?php echo $bg; ?>">
			<div id="playground-outer">
				<div id="playground">

<?php
$get_em = mysql_query("SELECT id,type,x,y,z,data,skin,subtype,var FROM cms_homes_stickers WHERE userid = '".$user_row['id']."' AND groupid = '-1' AND type < 4 LIMIT 200") or die(mysql_error());

while ($row = mysql_fetch_array($get_em, MYSQL_NUM)) {

	switch($row[1]){
	default: $type = "sticker"; break;
	case 1: $type = "sticker"; break;
	case 2: $type = "widget"; break;
	case 3: $type = "stickie"; break;
	case 4: $type = "ignore"; break;
	}

	if($edit_mode == true){
	$edit = "\n<img src=\"%www%/web-gallery/images/myhabbo/icon_edit.gif\" width=\"19\" height=\"18\" class=\"edit-button\" id=\"" . $type . "-" . $row[0] . "-edit\" />
<script language=\"JavaScript\" type=\"text/javascript\">
Event.observe(\"".$type."-".$row[0]."-edit\", \"click\", function(e) { openEditMenu(e, ".$row[0].", \"".$type."\", \"".$type."-".$row[0]."-edit\"); }, false);
</script>\n";
	$content = HoloText($row[5], false, true);
	} else {
	$edit = " ";
	$content = nl2br(bbcode_format($row[5]));
	}

	

	if($type == "stickie"){ ?>	
	<div class="movable stickie n_skin_<?php echo $row[6]; ?>-c" style=" left: <?php echo $row[2]; ?>px; top: <?php echo $row[3]; ?>px; z-index: <?php echo $row[4]; ?>;" id="stickie-<?php echo $row[0]; ?>">
	<div class="n_skin_<?php echo $row[6]; ?>">
		<div class="stickie-header">
			<h3><img id="stickie-<?php echo $row[0]; ?>-report" class="report-button report-s"
						alt="report"
						src="%www%/web-gallery/images/myhabbo/buttons/report_button.gif"
						style="display: none" />
<?php echo $edit; ?></h3>
			<div class="clear"></div>
		</div>
		<div class="stickie-body">
			<div class="stickie-content">
				<div class="stickie-markup"><?php echo $content; ?></div>
				<div class="stickie-footer">
				</div>
			</div>
		</div>
	</div>
</div>

	<?php } elseif($type == "sticker"){ ?>
	<div class="movable sticker s_<?php echo $row[5]; ?>" style="left: <?php echo $row[2]; ?>px; top: <?php echo $row[3]; ?>px; z-index: <?php echo $row[4]; ?>" id="sticker-<?php echo $row[0]; ?>"><?php echo $edit; ?></div>
	
	<?php } elseif($type == "widget"){

		switch($row[7]){
		case 1: $subtype = "Profilewidget"; break;
		case 2: $subtype = "GroupsWidget"; break;
		case 3: $subtype = "RoomsWidget"; break;
		case 4: $subtype = "GuestbookWidget"; break;
		case 5: $subtype = "FriendsWidget"; break;
		case 6: $subtype = "TraxPlayerWidget"; break;
		//case 7: $subtype = "HighScoresWidget"; break;
		case 8: $subtype = "BadgesWidget";
		}

		if($subtype == "GroupsWidget"){
		$groups = mysql_evaluate("SELECT COUNT(*) FROM groups_memberships WHERE userid = '".$user_row['id']."' AND is_pending = '0' LIMIT 1"); ?>
		<div class="movable widget GroupsWidget" id="widget-<?php echo $row[0]; ?>" style=" left: <?php echo $row[2]; ?>px; top: <?php echo $row[3]; ?>px; z-index: <?php echo $row[4]; ?>;">
<div class="w_skin_<?php echo $row[6]; ?>">
	<div class="widget-corner" id="widget-<?php echo $row[0]; ?>-handle">
		<div class="widget-headline"><h3><span class="header-left">&nbsp;</span><span class="header-middle">Mis Grupos (<span id="groups-list-size"><?php echo $groups; ?></span>)</span><span class="header-right"><?php echo $edit; ?></span></h3>
		</div>
	</div>
	<div class="widget-body">
		<div class="widget-content">

<div class="groups-list-container">
<ul class="groups-list">
<?php
$get_groups = mysql_query("SELECT * FROM groups_memberships WHERE userid = '".$user_row['id']."' AND is_pending = '0'") or die(mysql_error());
while($membership_row = mysql_fetch_assoc($get_groups)){
	$get_groupdata = mysql_query("SELECT * FROM groups_details WHERE id = '".$membership_row['groupid']."' LIMIT 1") or die(mysql_error());
	$grouprow = mysql_fetch_assoc($get_groupdata); ?>
	<li title="<?php echo $grouprow['name']; ?>" id="groups-list-<?php echo $row[0]; ?>-<?php echo $grouprow['id']; ?>">
		<div class="groups-list-icon"><a href="/groups/<?php echo $grouprow['id']; ?>/id"><img src='/habbo-imaging/badge-fill/<?php echo $grouprow['badge']; ?>.gif'/></a></div>
		<div class="groups-list-open"></div>
		<h4>
		<a href="/groups/<?php echo $membership_row['groupid']; ?>/id"><?php echo $grouprow['name']; ?></a>
		</h4>
		<p>
		Grupo creado:<br />
		<?php if($membership_row['is_current'] == 1){ ?><div class="favourite-group" title="Favorito"></div><?php } ?>
		<?php if($membership_row['member_rank'] > 1 && $grouprow['ownerid'] !== $user_row['id']){ ?><div class="admin-group" title="Admin"></div><?php } ?>
		<?php if($membership_row['member_rank'] > 1 && $grouprow['ownerid'] == $user_row['id']){ ?><div class="owned-group" title="Dueño"></div><?php } ?>
		<b><?php echo $grouprow['created']; ?></b>
		</p>
		<div class="clear"></div>
	</li>
	
	<?php } ?>
	</ul></div>

<div class="groups-list-loading"><div><a href="#" class="groups-loading-close"></a></div><div class="clear"></div><p style="text-align:center"><img src="%www%/web-gallery/images/progress_bubbles.gif" alt="" width="29" height="6" /></p></div>
<div class="groups-list-info"></div>

		<div class="clear"></div>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
document.observe("dom:loaded", function() {
	new GroupsWidget('<?php echo $user_row['id']; ?>', '<?php echo $row[0]; ?>');
});
</script>

<?php } elseif($subtype == "Profilewidget"){ ?>
			<div class="movable widget ProfileWidget" id="widget-<?php echo $row[0]; ?>" style=" left: <?php echo $row[2]; ?>px; top: <?php echo $row[3]; ?>px; z-index: <?php echo $row[4]; ?>;">
<div class="w_skin_<?php echo $row[6]; ?>">
	<div class="widget-corner" id="widget-<?php echo $row[0]; ?>-handle">
		<div class="widget-headline"><h3><?php echo $edit; ?>
<span class="header-left">&nbsp;</span><span class="header-middle">Mi Perfil</span><span class="header-right">&nbsp;</span></h3>
		</div>
	</div>
	<div class="widget-body">
		<div class="widget-content">
	<div class="profile-info">

		<div class="name" style="float: left">
			<span class="name-text"><?php echo $user_row['username']; ?></span>
			<img id="name-<?php echo $user_row['id']; ?>-report" class="report-button report-n"
				alt="report"
				src="%www%/web-gallery/images/myhabbo/buttons/report_button.gif"
				style="display: none;" />

		</div>

		<br class="clear" />

		<?php if(IsUserOnline($user_row['id'])){ ?><img alt="online" src="%www%/web-gallery/images/myhabbo/habbo_online_anim_big.gif" /><?php } else { ?><img alt="offline" src="%www%/web-gallery/images/myhabbo/habbo_offline_big.gif" /><?php } ?>

		<div class="birthday text">
			Creado el:
		</div>
		<div class="birthday date">
			<?php echo $user_row['account_created']; ?>
		</div>
		<div>
		<?php 
		$groupbadge = GetUserGroupBadge($user_row['id']);
		$badge = GetUserBadge($user_row['username']);

		if($groupbadge !== false){
		echo "<a href='/groups/".GetUserGroup($user_row['id'])."/id'><img src='/habbo-imaging/badge-fill/".$groupbadge.".gif'></a>";
		}

		if($badge !== false){
        	echo "<img src=\"".$badge_path.$badge.".gif\" /></a>";
		} ?>
		
        </div>
	</div>
	<div class="profile-figure">
			<img alt="<?php echo $user_row['username']; ?>" src="http://xukys-hotel.com/habbo-imaging/avatar?figure=<?php echo $user_row['look']; ?>&size=b&direction=4&head_direction=4&gesture=sml" />
	</div>
	<?php if(!empty($user_row['motto'])){ ?>
		<div class="profile-motto">
			<?php echo $user_row['motto']; ?>
			<img id="motto-<?php echo $user_row['id']; ?>-report" class="report-button report-m"
				alt="report"
				src="%www%/web-gallery/images/myhabbo/buttons/report_button.gif"
				style="display: none;" />

			<div class="clear"></div>
		</div>
	<?php } if($user_row['id'] !== $my_id && LOGGED_IN == TRUE){ ?>
		<div class="profile-friend-request clearfix">
			<a href="/add/id/<?php echo $user_row['id']; ?>" class="new-button" id="add-friend" style="float: left"><b>Añadir como Amigo</b><i></i></a>
		</div>
		
	<?php } ?>
	<br clear="all" style="display: block; height: 1px"/>
    <div id="profile-tags-panel">
    <div id="profile-tag-list">
	<div id="profile-tags-container">

<?php
$get_tags = mysql_query("SELECT * FROM cms_tags WHERE ownerid = '".$user_row['id']."' ORDER BY id LIMIT 20") or die(mysql_error());
$rows = mysql_num_rows($get_tags);

	$num = mysql_num_rows($get_tags);
	if($num > 0){

		if($user_row['id'] == $my_id && LOGGED_IN == TRUE){
			while ($row1 = mysql_fetch_assoc($get_tags)){ ?>
			<span class="tag-search-rowholder">
        <a href="/tag/<?php echo $row1['tag']; ?>" class="tag-search-link tag-search-link-<?php echo $row1['tag']; ?>"><?php echo $row1['tag']; ?></a><img border="0" class="tag-delete-link tag-delete-link-<?php echo $row1['tag']; ?>" onMouseOver="this.src='%www%/web-gallery/images/buttons/tags/tag_button_delete_hi.gif'" onMouseOut="this.src='%www%/web-gallery/images/buttons/tags/tag_button_delete.gif'" src="%www%/web-gallery/images/buttons/tags/tag_button_delete.gif"/></span>
		<?php } } elseif(LOGGED_IN == TRUE){
			while ($row1 = mysql_fetch_assoc($get_tags)){ ?>
			<span class="tag-search-rowholder">
        <a href="/tag/<?php echo $row1['tag']; ?>" class="tag-search-link tag-search-link-<?php echo $row1['tag']; ?>"><?php echo $row1['tag']; ?></a><img border="0" class="tag-add-link tag-add-link-<?php echo $row1['tag']; ?>" onMouseOver="this.src='%www%/web-gallery/images/buttons/tags/tag_button_add_hi.gif'" onMouseOut="this.src='<?php echo PATH; ?>%www%/web-gallery/images/buttons/tags/tag_button_add.gif'" src="%www%/web-gallery/images/buttons/tags/tag_button_add.gif"/></span>
		
		<?php } } else {
			while ($row1 = mysql_fetch_assoc($get_tags)){ ?>
		<span class="tag-search-rowholder">
        <a href="/tag/<?php echo $row1['tag']; ?>" class="tag-search-link tag-search-link-<?php echo $row1['tag']; ?>"><?php echo $row1['tag']; ?></a></span>
		<?php } } } else { echo "No hay ningún 'YoSoy' ";	} ?>
		<img id="tag-img-added" border="0" src="%www%/web-gallery/images/buttons/tags/tag_button_added.gif" style="display:none"/>
		</div>

<script type=\"text/javascript\">
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
    <span id="tag-limit-message"><img src="%www%/web-gallery/images/register/icon_error.gif"/>¡Has alcanzado el límite de 'YoSoys'! Elimina uno antes si quieres añadir otro nuevo.</span>
    <span id="tag-invalid-message"><img src="%www%/web-gallery/images/register/icon_error.gif"/>YoSoy Inválido</span>
   </div>
  </div>
 <div class="content-red-bottom">
  <div class="content-red-bottom-body"></div>
 </div>
 </div>
</div>

<?php if($user_row['id'] == $my_id){ ?>
        <div class="profile-add-tag">
            <input type="text" id="profile-add-tag-input" maxlength="30"/><br clear="all"/>
            <a href="#" class="new-button" style="float:left;margin:5px 0 0 0;" id="profile-add-tag"><b>Agregar 'YoSoy'</b><i></i></a>
        </div>
<?php } ?>
    </div>
    <script type="text/javascript">
		document.observe("dom:loaded", function() {
			new ProfileWidget('<?php echo $user_row['id']; ?>', '<?php echo $user_row['id']; ?>', {
				headerText: "¿Estás seguro?",
				messageText: "¿Estás seguro de que quieres que <strong\><?php echo $user_row['username']; ?></strong\> sea tu amigo? ¡Piénsatelo dos veces antes de darle al OK!",
				buttonText: "OK",
				cancelButtonText: "Cancelar"
			});
		});
	</script>
		<div class="clear"></div>
		</div>
	</div>
</div></div>

	<?php } elseif($subtype == "RoomsWidget"){ ?>
		<div class="movable widget RoomsWidget" id="widget-<?php echo $row['0']; ?>" style=" left: <?php echo $row['2']; ?>px; top: <?php echo $row['3']; ?>px; z-index: <?php echo $row['4']; ?>;">
<div class="w_skin_<?php echo $row['6']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['0']; ?>-handle">
		<div class="widget-headline"><h3>
<?php echo $edit; ?>
</script>
		<span class="header-left">&nbsp;</span><span class="header-middle">Mis Salas</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
		<?php 			
		$roomsql = mysql_query("SELECT * FROM rooms WHERE owner = '".$user_row['username']."'");
		$count = mysql_num_rows($roomsql);
		if($count > 0){ 
		?>

<div id="room_wrapper">
<table border="0" cellpadding="0" cellspacing="0">

			<?php 
			$i = 0;
			while ($roomrow = mysql_fetch_assoc($roomsql)) {
				$i++;
				if($count == $i){
					$asdf = " ";
				} else {
					$asdf = "class=\"dotted-line\"";
				}
				if($roomrow['state'] == 2){
					$qwer = "password";
					$zxcv = "Contraseña";
				} elseif($roomrow['state'] == 0){
					$qwer = "open";
					$zxcv = "Entrar a la Sala";
				} elseif($roomrow['state'] == 1){
					$qwer = "locked";
					$zxcv = "Timbre";
				} ?>
				<tr>
				<td valign="top" <?php echo $asdf; ?>>
		<div class="room_image">
				<img src="%www%/web-gallery/images/myhabbo/rooms/room_icon_<?php echo $qwer; ?>.gif" alt="" align="middle"/>
		</div>
</td>
<td <?php echo $asdf; ?>>
        	<div class="room_info">
        		<div class="room_name">
        			<?php echo $roomrow['caption']; ?>
        		</div>
					<img id="room-<?php echo $roomrow['id']; ?>-report" class="report-button report-r" alt="report" src="%www%/web-gallery/images/myhabbo/buttons/report_button.gif" style="display: none;" />
				<div class="clear"></div>
        		<div><?php echo HoloText($roomrow['description']); ?>
        		</div>
					<a href="/client?forwardId=2&amp;roomId=<?php echo $roomrow['id']; ?>" target="" id=\"room-navigation-link_<?php echo $roomrow['id']; ?>" onclick="HabboClient.roomForward(this, '<?php echo $roomrow['id']; ?>', 'private', true); return false;">
					 <?php echo $zxcv; ?>
					</a>
        	</div>
		<br class="clear" />

</td>
</tr>
	<?php } ?>
		<br class="clear" />

</td>
</tr>
</table>
</div> 
<?php } else {	echo "No tienes Salas";	} ?>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>

<?php } elseif($subtype == "GuestbookWidget"){
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
		<span class="header-left">&nbsp;</span><span class="header-middle">Mi Libro de invitados (<span id="guestbook-size"><?php echo $count; ?></span>) <span id="guestbook-type" class="<?php echo $status; ?>"><?php if($status == "private"){ ?><img src="%www%/web-gallery/images/groups/status_exclusive.gif" title="Solo amigos" alt="Solo amigos"/><?php } ?></span></span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
<div id="guestbook-wrapper" class="gb-public">
<ul class="guestbook-entries" id="guestbook-entry-container">
	<?php if($count == 0){ ?>
	<div id="guestbook-empty-notes">Este Libro está vacío.</div>
	<?php } else { ?>
			<?php 
			$i = 0;
			while ($row1 = mysql_fetch_assoc($sql)) {
				$i++;
				$userrow = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$row1['userid']."' LIMIT 1"));
				if($my_id == $row1['userid'] || $user_row['id'] == $my_id){
					$owneronly = "<img src=\"%www%/web-gallery/images/myhabbo/buttons/delete_entry_button.gif\" id=\"gbentry-delete-".$row1['id']."\" class=\"gbentry-delete\" style=\"cursor:pointer\" alt=\"\"/><br />";
				} else {
					$owneronly = "";
				}
				
				if(IsUserOnline($row1['userid'])){ $useronline = "online"; } else { $useronline = "offline"; } ?>
				<li id="guestbook-entry-<?php echo $row1['id']; ?>" class="guestbook-entry">
		<div class="guestbook-author">
			<img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=<?php echo $userrow['look']; ?>&direction=2&head_direction=2&gesture=sml&size=s" alt="<?php echo $userrow['username']; ?>" title="<?php echo $userrow['username']; ?>"/>
		</div>
			<div class="guestbook-actions">
					<?php echo $owneronly; ?>
					<img src="%www%/web-gallery/images/myhabbo/buttons/report_button.gif" id="gbentry-report-<?php echo $row1['id']; ?>" class="gbentry-report" style="cursor:pointer" alt=""/>
			</div>
		<div class="guestbook-message">
			<div class="<?php echo $useronline; ?>">
				<a href="/home/<?php echo $userrow['username']; ?>"><?php echo $userrow['username']; ?></a>
			</div>
			<p><?php echo HoloText($row1['message'],false ,true); ?></p>
		</div>
		<div class="guestbook-cleaner">&nbsp;</div>
		<div class="guestbook-entry-footer metadata"></div>
	</li>
	<?php } } ?>
</ul></div>

<?php if($edit_mode == false){ ?>
	<div class="guestbook-toolbar clearfix">
	<a href="#" class="new-button envelope-icon" id="guestbook-open-dialog">
	<b><span></span>Publicar un nuevo mensaje</b><i></i>
	</a>
	</div>
<?php } ?>
<script type="text/javascript">	
	document.observe("dom:loaded", function() {
		var gb<?php echo $row['0']; ?> = new GuestbookWidget('<?php echo time(); ?>', '<?php echo $row['0']; ?>', 500);
		var editMenuSection = $('guestbook-privacy-options');
		if (editMenuSection) {
			gb<?php echo $row['0']; ?>.updateOptionsList('<?php echo $status; ?>');
		}
	});
</script>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>

		<div class="clear"></div>
		</div>
	</div>
</div>
</div>

<?php } elseif($subtype == "FriendsWidget"){ 
	$sql = mysql_query("SELECT * FROM messenger_friendships WHERE user_one_id = '".$user_row['id']."'");
	$count = mysql_num_rows($sql);
	?>
<div class="movable widget FriendsWidget" id="widget-<?php echo $row['0']; ?>" style=" left: <?php echo $row['2']; ?>px; top: <?php echo $row['3']; ?>px; z-index: <?php echo $row['4']; ?>;">
<div class="w_skin_<?php echo $row['6']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['0']; ?>-handle">
		<div class="widget-headline"><h3><?php echo $edit; ?><span class="header-left">&nbsp;</span><span class="header-middle">Mis Amigos (<?php echo $count; ?>)</span><span class="header-right">&nbsp;</span></h3>
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
include('./habblet/myhabbo_avatarlist_friendsearchpaging.php');
?>

<script type="text/javascript">
document.observe("dom:loaded", function() {
	window.widget<?php echo $row['0']; ?> = new FriendsWidget('<?php echo $user_row['id']; ?>', '<?php echo $row['0']; ?>');
});
</script>

</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<?php }  elseif($subtype == "BadgesWidget"){
	$sql = mysql_query("SELECT * FROM users_badges WHERE userid = '".$user_row['id']."' ORDER BY badgeid ASC");
	$count = mysql_num_rows($sql);
	?>
<div class="movable widget BadgesWidget" id="widget-<?php echo $row['0']; ?>" style=" left: <?php echo $row['2']; ?>px; top: <?php echo $row['3']; ?>px; z-index: <?php echo $row['4']; ?>;">
<div class="w_skin_<?php echo $row['6']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['0']; ?>-handle">
		<div class="widget-headline"><h3><?php echo $edit; ?><span class="header-left">&nbsp;</span><span class="header-middle">Placas y Recompensas</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
    <div id="badgelist-content">
	<?php if($count == 0){ echo "No hay placas disponibles."; 
	} else {
	$bypass1 = true;
	$widgetid = $row['0'];
	include('./habblet/myhabbo_badgelist_badgepaging.php');
    } ?>
        <script type="text/javascript">
        document.observe("dom:loaded", function() {
            window.badgesWidget<?php echo $row['0']; ?> = new BadgesWidget('<?php echo $user_row['id']; ?>', '<?php echo $row['0']; ?>');
        });
        </script>
    </div>
		<div class="clear"></div>
		</div>
	</div>

</div>
</div>
	
	<?php } } } ?>
	
				</div>
			</div>
			<div id="mypage-ad">
    <div class="habblet ">
<div class="ad-container">
<?php if(IsHCMember($user_row['id'])){ ?>
&nbsp;
<?php } else { ?>

<?php } ?>
</div>
    </div>
			</div>

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
<div id="footer">
	<p class="footer-links"><a href="/iot/go?lang=es&country=es" target="_new">Contáctanos</a> | <a href="/help/" target="_new">Afiliados</a> | <a href="/help" target="_new">FAQs</a> | <a href="/papers/termsAndConditions" target="_new">Términos y Condiciones</a> | <a href="/papers/privacy" target="_new">Política de Privacidad</a> | <a href="/help/" target="_new">La Manera Habbo</a>  | <a href="/groups/ConsejosdeSeguridad">Seguridad</a></p>
	<p class="copyright">Powered by <a href="http://onpixels.info/" target="_blank">OnCMS</a>.<br /></p>
        </div>
</div>

</div>

<div id="edit-menu" class="menu">
	<div class="menu-header">
		<div class="menu-exit" id="edit-menu-exit"><img src="%www%/web-gallery/images/dialogs/menu-exit.gif" alt="" width="11" height="11" /></div>
		<h3>Editar</h3>
	</div>
	<div class="menu-body">
		<div class="menu-content">
			<form action="#" onsubmit="return false;">
				<div id="edit-menu-skins">
	<select id="edit-menu-skins-select">
			<option value="1" id="edit-menu-skins-select-defaultskin">Por defecto</option>
			<option value="6" id="edit-menu-skins-select-goldenskin">Dorado</option>
			<option value="3" id="edit-menu-skins-select-metalskin">Metal</option>
			<option value="5" id="edit-menu-skins-select-notepadskin">Bloc de Notas</option>
			<option value="2" id="edit-menu-skins-select-speechbubbleskin">Bocadillo de Diálogo</option>
			<option value="4" id="edit-menu-skins-select-noteitskin">Nota-etiqueta</option>
<?php if(IsHCMember($my_id) || IsVIPMember($my_id)){ ?>
			<option value="8" id="edit-menu-skins-select-hc_pillowskin">HC Bling</option>
			<option value="7" id="edit-menu-skins-select-hc_machineskin">HC Scifi</option>
<?php } ?>
<?php if($my_rank > 5){ ?>
			<option value="9" id="edit-menu-skins-select-nakedskin">Transparente</option>
<?php } ?>
	</select>
				</div>
				<div id="edit-menu-stickie">
					<p>¡Atención! Si pinchas en 'Quitar', tu nota será eliminada para siempre.</p>
				</div>
				
				<div id="rating-edit-menu">
					<input type="button" id="ratings-reset-link"
						value="Reiniciar" />
				</div>
				<div id="highscorelist-edit-menu" style="display:none">
					<select id="highscorelist-game">
						<option value="">Selecciona Juego:</option>
						<option value="1">Battle Ball: Rebound!</option>
						<option value="2">SnowStorm</option>
						<option value="0">Wobble Squabble</option>
					</select>
				</div>
				<div id="edit-menu-remove-group-warning">
					<p>Esta Etiqueta pertenece a otro usuario. Si la quitas, regresará a su Inventario</p>
				</div>
				<div id="edit-menu-gb-availability">
					<select id="guestbook-privacy-options">
						<option value="private">Sólo amigos</option>
						<option value="public">Publico</option>
					</select>
				</div>
				<div id="edit-menu-trax-select">
					<select id="trax-select-options"></select>
				</div>
				<div id="edit-menu-remove">
					<input type="button" id="edit-menu-remove-button" value="Quitar" />
				</div>
			</form>
			<div class="clear"></div>
		</div>
	</div>
	<div class="menu-bottom"></div>
</div>

<script language="JavaScript" type="text/javascript">
Event.observe(window, "resize", function() { if (editMenuOpen) closeEditMenu(); }, false);
Event.observe(document, "click", function() { if (editMenuOpen) closeEditMenu(); }, false);
Event.observe("edit-menu", "click", Event.stop, false);
Event.observe("edit-menu-exit", "click", function() { closeEditMenu(); }, false);
Event.observe("edit-menu-remove-button", "click", handleEditRemove, false);
Event.observe("edit-menu-skins-select", "click", Event.stop, false);
Event.observe("edit-menu-skins-select", "change", handleEditSkinChange, false);
Event.observe("guestbook-privacy-options", "click", Event.stop, false);
Event.observe("guestbook-privacy-options", "change", handleGuestbookPrivacySettings, false);
Event.observe("trax-select-options", "click", Event.stop, false);
Event.observe("trax-select-options", "change", handleTraxplayerTrackChange, false);
</script>

<div class="cbb topdialog" id="guestbook-form-dialog">
	<h2 class="title dialog-handle">Editar un mensaje en el Libro</h2>
	
	<a class="topdialog-exit" href="#" id="guestbook-form-dialog-exit">X</a>
	<div class="topdialog-body" id="guestbook-form-dialog-body">
<div id="guestbook-form-tab">
<form method="post" id="guestbook-form">
    <p>
        Nota: el mensaje no puede superar los 200 caracteres
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
		<a href="#" class="new-button" id="guestbook-form-cancel"><b>Cancelar</b><i></i></a>
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
	<p>¿Estas seguro de eliminar este mensaje?</p>
	<p>
		<a href="#" id="guestbook-delete-cancel" class="new-button"><b>Cancelar</b><i></i></a>
		<a href="#" id="guestbook-delete" class="new-button"><b>Eliminar</b><i></i></a>
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
} else {
if($error == 1){
$cored = true;
include('./error.php');
} elseif($error == 2){
$cored = true;
$type = home_hidden;
include('./error.php');
} elseif($error == 3){
$cored = true;
$type = user_banned;
include('./error.php');
} else {
$cored = true;
include('./error.php');
}
}
?>