<?php

$bg = "";
$my_membership = mysql_query("SELECT * FROM groups_memberships WHERE groupid = '".($_GET['id'])."' AND userid ='".USER_ID."'");
$member_rank = $my_membership['member_rank'];

if(isset($_GET['id']) && is_numeric($_GET['id']))
{
	$check = mysql_query("SELECT * FROM groups_details WHERE id = '".($_GET['id'])."' LIMIT 1");
	$exists = mysql_num_rows($check);

	if($exists > 0)
	{
		$groupid = ($_GET['id']);
		$pageid = "profile";

		$error = false;
		$groupdata = mysql_fetch_assoc($check);

		$pagename = "Grupo: ".$groupdata['name'];
		$ownerid = $groupdata['ownerid'];
		$bg = $groupdata['bg'];

		$Miembros = mysql_query("SELECT COUNT(*) FROM groups_memberships WHERE groupid = '".$groupid."' AND is_pending = '0'");
		$Members = mysql_fetch_array($Miembros);
		$check = mysql_query("SELECT * FROM groups_memberships WHERE userid = '".USER_ID."' AND groupid = '".$groupid."' AND is_pending = '0' LIMIT 1");
		$is_member = mysql_num_rows($check);

		if ($is_member > 0 && LOGGED_IN == TRUE)
		{
			$is_member = true;
			$my_membership = mysql_fetch_assoc($check);
			$member_rank = $my_membership['member_rank'];

		}
		else
		{
			$is_member = false;
		}

	}
	else
	{
		$error = true;
	}

}
else if(isset($_GET['name']))
{
	$GroupName = FilterText($_GET['name']);
	$check_name = mysql_query("SELECT * FROM groups_links WHERE short = '$GroupName' LIMIT 1") or die(mysql_error());
	$exist_name = mysql_num_rows($check_name);
	
	if($exists_name > 0)
	{
		$linkdata = mysql_fetch_assoc($check);
		$check = mysql_query("SELECT * FROM groups_details WHERE id = '".FilterText($linkdata['groupid'])."' LIMIT 1");
		$exists = mysql_num_rows($check);	

		if($exists > 0)
		{
			$groupdata = mysql_fetch_assoc($check);
			$groupid = $groupdata['id'];
			$pageid = str_replace(" ", "-", $GroupName);
			$group_name = true;

			$error = false;		

			$pagename = "Grupo: ".$groupdata['name']."";
			$ownerid = $groupdata['ownerid'];
			$bg = $groupdata['bg'];

			$Miembros = mysql_query("SELECT COUNT(*) FROM groups_memberships WHERE groupid = '".$groupid."' AND is_pending = '0'");
			$Members = mysql_fetch_array($Miembros);

			$check = mysql_query("SELECT * FROM groups_memberships WHERE userid = '".USER_ID."' AND groupid = '".$groupid."' AND is_pending = '0' LIMIT 1");
			$is_member = mysql_num_rows($check);

			if($is_member > 0 && LOGGED_IN == TRUE)
			{
				$is_member = true;
				$my_membership = mysql_fetch_assoc($check);
				$member_rank = $my_membership['member_rank'];

			}
			else
			{
				$is_member = false;
			}

		}
		else
		{
			$error = true;
		}
	}
	else
	{
		$error = true;
	}
}
else
{
	$error = true;
}

if(isset($_GET['do']) && $_GET['do'] == "edit" && LOGGED_IN)
{
	if($is_member == true && $member_rank > 1)
	{
		unset($_SESSION["Ajax"]["Update"]);
		unset($_SESSION['home_edit']);

		$_SESSION['group_edit'] = true;
		$_SESSION['group_edit_id'] = $groupid;
		$_SESSION['user_group_edit_id'] = "'.USER_ID.'";
		$check = mysql_query("SELECT * FROM cms_homes_group_linker WHERE userid = '".USER_ID."' LIMIT 1") or die(mysql_error());
		$linkers = mysql_num_rows($check);

		if($linkers > 0)
		{
			mysql_query("UPDATE cms_homes_group_linker SET active = '1', groupid = '".$groupid."' WHERE userid = '".USER_ID."' LIMIT 1") or die(mysql_error());
		}
		else
		{
			mysql_query("INSERT INTO cms_homes_group_linker (userid,groupid,active) VALUES ('".USER_ID."','".$groupid."','1')") or die(mysql_error());
		}

		restoreWaitingItems("'.USER_ID.'");

		header("location: ./groups/".$groupid."/id"); exit;
	}
	else
	{	
		$_SESSION['group_edit'] = false;
		header("location: ./groups/".$groupid."/id"); exit;
	}

}

if(isset($_GET['do']) && $_GET['do'] == "canceledit" && LOGGED_IN)
{
	unset($_SESSION['group_edit']);
	unset($_SESSION['group_edit_id']);
	restoreWaitingItems("'.USER_ID.'");
	header("location: ./groups/".$groupid."/id"); exit;
}

if(isset($_SESSION['group_edit']) && $_SESSION['group_edit'] == true && $is_member == true && $member_rank > 1)
{
	$edit_mode = true;
	$body_id = "editmode";
}
else
{
	$edit_mode = false;
	$body_id = "viewmode";
}

if($error == true)
{
	$body_id = "home";
}

if($groupdata['type'] !== "1" && $is_member !== true)
{	
	$remove_pending = mysql_query("DELETE FROM groups_memberships WHERE is_pending = '1' AND userid = '".USER_ID."' AND groupid = '".$groupid."' LIMIT 1") or die(mysql_error());
}

$viewtools = "	<div class=\"myhabbo-view-tools\">\n";


if(LOGGED_IN == TRUE && !$is_member && $groupdata['type'] !== "2" && $my_membership['is_pending'] !== "1")
{
	$viewtools = $viewtools . "<a href=\"/groups/actions/join.php?groupId=".$groupid."\" id=\"join-group-button\">";

	if($groupdata['type'] == "0" || $groupdata['type'] == "3")
	{
		$viewtools = $viewtools . "Unirse al Grupo";
	}
	else
	{
		$viewtools = $viewtools . "Enviar petici�n";
	}

	$viewtools = $viewtools . "</a>";
}


if(LOGGED_IN == TRUE && $my_membership['is_current'] !== "1" && $is_member)
{
	$viewtools = $viewtools . "<a href=\"#\" id=\"select-favorite-button\">Hacer favorito</a>\n";
}

if(LOGGED_IN == TRUE && $my_membership['is_current'] == "1" && $is_member)
{
	$viewtools = $viewtools . "<a href=\"#\" id=\"deselect-favorite-button\">Remover favorito</a>";
}

if(LOGGED_IN == TRUE && $is_member && "'.USER_ID.'" !== $ownerid)
{
	$viewtools = $viewtools . "<a href=\"/ajax_habblet/confirm_leave.php?groupId=".$groupid."\" id=\"leave-group-button\">Dejar el Grupo</a>\n";
}

if(LOGGED_IN == TRUE && '."'.USER_ID.'".' !== $ownerid)
{
	$viewtools = $viewtools . "<a href=\"#\" id=\"reporting-button\" style=\"display: none;\">Mostrar la opci�n de Informar.</a>\n<a href=\"#\" id=\"stop-reporting-button\" style=\"display: none;\">Ocultar la opci�n de Informar.</a>";
}

$viewtools = $viewtools . "	</div>\n";

$bg_fetch = mysql_query("SELECT data FROM cms_homes_stickers WHERE type = '4' AND groupid = '".$groupid."' LIMIT 1");
$bg_exists = mysql_num_rows($bg_fetch);

?>
<title><?php include ("nombre.php"); ?>: Grupo: <?php echo ($groupdata['name']); ?></title>
<?php 

$groupid =($_GET['id']);
$ownerid = $groupdata['ownerid'];
?>
<div id="container">
	<div id="content" style="position: relative" class="clearfix">
    <div id="mypage-wrapper" class="cbb blue">
<div class="box-tabs-container box-tabs-left clearfix">
	<?php if($member_rank > 1 && LOGGED_IN && $edit_mode == false){ ?><a href="#" id="myhabbo-group-tools-button" class="new-button dark-button edit-icon" style="float:left"><b><span></span>Editar</b><i></i></a><?php } ?>
	<?php if($edit_mode == false){ echo $viewtools; } ?>
	
    <h2 class="page-owner">
<?php echo ($groupdata['name']); ?>&nbsp;
<?php if($groupdata['type'] == "2"){ ?><img src='/web-gallery/images/status_closed_big.gif' alt='Grupo Cerrado' title='Grupo Cerrado'><?php } ?>
<?php if($groupdata['type'] == "1"){ ?><img src='/web-gallery/images/status_exclusive_big.gif' alt='Grupo Moderado' title='Grupo Moderado'><?php } ?></h2>
	</h2>
    <ul class="box-tabs">
        <li class="selected"><a href="/groups/<?php echo $groupid; ?>/id">P�gina Principal</a><span class="tab-spacer"></span></li>
    </ul>
</div>
	<div id="mypage-content">
<?php if($edit_mode == true){ ?>
<div id="top-toolbar" class="clearfix">
	<ul>
		<li><a href="#" id="inventory-button">Inventario</a></li>
		<li><a href="#" id="webstore-button">Tienda</a></li>
	</ul>
	
	<form action="#" method="get" style="width: 50%">
		<a id="cancel-button" class="new-button red-button cancel-icon" href="#"><b><span></span>Cancelar edici�n</b><i></i></a>

		<a id="save-button" class="new-button green-button save-icon" href="#"><b><span></span>Guardar cambios</b><i></i></a>
	</form>
</div>
<?php } ?>
		<div id="mypage-bg" class="<?php echo $bg; ?>">
			<div id="playground-outer">
				<div id="playground">

<?php

$getStickies = mysql_query("SELECT * FROM site_items WHERE groupId = '" . $groupid . "' AND type = 'stickie'");

while($row = mysql_fetch_assoc($getStickies))
{
?>
<div class="movable stickie <?php echo $row['skin']; ?>-c" style=" left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>;" id="stickie-<?php echo $row['id']; ?>">

	<div class="<?php echo $row['skin']; ?>" >
		<div class="stickie-header">
			<h3>
<?php if($edit_mode) { ?>
<img src="/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="stickie-<?php echo $row['id']; ?>-edit" />
<script type="text/javascript">
var editButtonCallback = function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "stickie", "stickie-<?php echo $row['id']; ?>-edit"); };
Event.observe("stickie-<?php echo $row['id']; ?>-edit", "click", editButtonCallback);
Event.observe("stickie-<?php echo $row['id']; ?>-edit", "editButton:click", editButtonCallback); 
</script>
<?php } else { ?>
			<img id="stickie-<?php echo $row['id']; ?>-report" class="report-button report-s" alt="report" src="./web-gallery/images/myhabbo/buttons/report_button.gif" style="display: none" />
<?php } ?>
			</h3>
			<div class="clear"></div>
		</div>
		<div class="stickie-body">
			<div class="stickie-content">

				<div class="stickie-markup">
				<?php echo $row['content']; ?>
				</div>
				<div class="stickie-footer">
				</div>
			</div>
		</div>

	</div>
</div>
<?php } ?>




<?php
// Stickers
$getStickers = mysql_query("SELECT * FROM site_items WHERE groupId = '" . $groupid . "' AND type = 'sticker'");
while($row = mysql_fetch_assoc($getStickers)) {
?>
<div class="movable sticker <?php echo $row['skin']; ?>" style="left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>" id="sticker-<?php echo $row['id']; ?>">
<?php if($edit_mode) { ?>
<img src="/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="sticker-<?php echo $row['id']; ?>-edit" />
<script type="text/javascript">
var editButtonCallback = function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "sticker", "sticker-<?php echo $row['id']; ?>-edit"); };
Event.observe("sticker-<?php echo $row['id']; ?>-edit", "click", editButtonCallback);
Event.observe("sticker-<?php echo $row['id']; ?>-edit", "editButton:click", editButtonCallback); 
</script>
<?php } ?>
</div>
<?php } ?>

<?php
// Widgets
$getWidgets = mysql_query("SELECT * FROM site_items WHERE groupId = '" . $groupid . "' AND type = 'widget'");
while($row = mysql_fetch_assoc($getWidgets)) {

$WidgetId = $row['id'];
		$Miembros = mysql_query("SELECT * FROM groups_memberships WHERE groupid = '".$groupid."' AND is_pending = '0'");
		$Members = mysql_num_rows($Miembros);
if($row['var'] == "MemberWidget") {
?>

<div class="movable widget <?php echo $row['var']; ?>" id="widget-<?php echo $WidgetId; ?>" style=" left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $WidgetId; ?>-handle">

		<div class="widget-headline"><h3>
		<?php if($edit_mode) { ?>
		<img src="./web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
		<script language="JavaScript" type="text/javascript">
		Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
		</script>
		<?php } else { ?><span class="header-left">&nbsp;</span><span class="header-middle">Miembros del Grupo (<span id="avatar-list-size"><?php echo $Members; ?></span>)</span><span class="header-right">&nbsp;</span><?php } ?></h3>
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

<div class="avatar-widget-list-container">

<?php
$getMemberss = mysql_query("SELECT userID FROM groups_memberships WHERE groupID = '" . $groupid . "' AND is_pending = '0'");

while($rowMember = mysql_fetch_assoc(($getMemberss)))
{

$rowUser = mysql_fetch_assoc(getData($rowMember['userID']));
?>
<ul id="avatar-list-list" class="avatar-widget-list">
	<li id="avatar-list-<?php echo $WidgetId; ?>-<?php echo $rowUser['id']; ?>" title="<?php echo $rowUser['username']; ?>"><div class="avatar-list-open"><a href="#" id="avatar-list-open-link-<?php echo $WidgetId; ?>-<?php echo $rowUser['id']; ?>" class="avatar-list-open-link"></a></div>
<div class="avatar-list-avatar"><img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $rowUser['look']; ?>&direction=4&head_direction=4&gesture=sml&action=&size=s" alt="" /></div>
<h4><a href="/home/<?php echo $rowUser['username']; ?>"><?php echo $rowUser['username']; ?></a></h4>
<p class="avatar-list-birthday"><?php echo $rowUser['account_created']; ?></p>
<p>
<img 
	src="/web-gallery/images/groups/owner_icon.gif" alt="" class="avatar-list-groupstatus" />
</p></li>

</ul>
<?php } ?>

<div id="avatar-list-info" class="avatar-list-info">
<div class="avatar-list-info-close-container"><a href="#" class="avatar-list-info-close"></a></div>
<div class="avatar-list-info-container"></div>
</div>

</div>

<div id="avatar-list-paging">
    1 - 1 / 1
    <br/>
    Primero |
    &lt;&lt; |
    &gt;&gt; |
    �ltimo

<input type="hidden" id="pageNumber" value="1"/>
<input type="hidden" id="totalPages" value="1"/>
</div>

<script type="text/javascript">
document.observe("dom:loaded", function() {
	window.widget<?php echo $WidgetId; ?> = new MemberWidget('<?php echo $groupid; ?>', '<?php echo $WidgetId; ?>');
});
</script>

</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>



<?php } else if($row['var'] == "GuestbookWidget")
{
	$sql = mysql_query("SELECT * FROM cms_guestbook WHERE widget_id = '$WidgetId' ORDER BY id DESC");
	$count = mysql_num_rows($sql);
	
	if($row['content'] == "private")
		$status = "private";
	else
		$status = "public";
?>

<div class="movable widget GuestbookWidget" id="widget-<?php echo $WidgetId; ?>" style=" left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $WidgetId; ?>-handle">
		<div class="widget-headline"><h3>
		<?php if($edit_mode) { ?>
<img src="./web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
<script type="text/javascript">
var editButtonCallback = function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); };
Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", editButtonCallback);
Event.observe("widget-<?php echo $row['id']; ?>-edit", "editButton:click", editButtonCallback); 
</script>
		<?php } ?>
<span class="header-left">&nbsp;</span><span class="header-middle">Mi Libro de invitados (<span id="guestbook-size"><?php echo $count; ?></span>) <span id="guestbook-type" class="<?php echo $status; ?>"><?php if($status == "private"){ ?><img src="./web-gallery/images/groups/status_exclusive.gif" title="S�lo para miembros" alt="S�lo para miembros"/><?php } ?></span></span><span class="header-right">&nbsp;</span></h3>

		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
<div id="guestbook-wrapper" class="gb-public">
<ul class="guestbook-entries" id="guestbook-entry-container">
	<?php if($count == 0){ ?>
	<div id="guestbook-empty-notes">Este Libro est� vac�o.</div>
	<?php
		}
		else
		{
			$sql123 = mysql_query("SELECT * FROM groups_details WHERE id = '".$_GET['id']."' LIMIT 1");
			$grouprrow = mysql_fetch_assoc($sql123);
			$i = 0;

			while ($row1 = mysql_fetch_assoc($sql))
			{
				$i++;
				$userrow = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$row1['userid']."' LIMIT 1"));

				if("'.USER_ID.'" == $row1['userid'])
				{
					$owneronly = "<img src=\"/images/myhabbo/buttons/delete_entry_button.gif\" id=\"gbentry-delete-".$row1['id']."\" class=\"gbentry-delete\" style=\"cursor:pointer\" alt=\"\"/><br/>";
				}
				else if($grouprrow['ownerid'] == "'.USER_ID.'")
				{
					$owneronly = "<img src=\"/images/myhabbo/buttons/delete_entry_button.gif\" id=\"gbentry-delete-".$row1['id']."\" class=\"gbentry-delete\" style=\"cursor:pointer\" alt=\"\"/><br/>";
				}
				else
				{
					$owneronly = "";
				}

				if($row['online'] == 1)
				{
					$useronline = "online";
				}
				else
				{
					$useronline = "offline";
				}
?>
				<li id="guestbook-entry-<?php echo $row1['id']; ?>" class="guestbook-entry">
		<div class="guestbook-author">
			<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $userrow['look']; ?>&direction=2&head_direction=2&gesture=sml&size=s" alt="<?php echo $userrow['username']; ?>" title="<?php echo $userrow['username']; ?>"/>
		</div>
			<div class="guestbook-actions">
					<?php echo $owneronly; ?>
			</div>
		<div class="guestbook-message">
			<div class="<?php echo $useronline; ?>">
				<a href="/home/<?php echo $userrow['username']; ?>"><?php echo $userrow['username']; ?></a>
			</div>
			<p><?php echo $row1['message']; ?></p>
		</div>
		<div class="guestbook-cleaner">&nbsp;</div>
		<div class="guestbook-entry-footer metadata"><?php echo date("d-M-o G:i:s", $row1['time']); ?></div>
	</li>
	<?php }	} ?>
</ul></div>

	<div class="guestbook-toolbar clearfix">
	<a href="#" class="new-button envelope-icon" id="guestbook-open-dialog">

	<b><span></span>Publicar un nuevo mensaje</b><i></i>
	</a>
	</div>

<script type="text/javascript">	
	document.observe("dom:loaded", function() {
		var gb<?php echo $row['id']; ?> = new GuestbookWidget('<?php echo time(); ?>', '<?php echo $row['id']; ?>', 500);
		var editMenuSection = $('guestbook-privacy-options');
		if (editMenuSection) {
			gb<?php echo $row['id']; ?>.updateOptionsList('public');
		}
	});
</script>
		<div class="clear"></div>
		</div>
	</div>
</div>

</div>

<?php } else if($row['var'] == "GroupInfoWidget") { ?>

<div class="movable widget <?php echo $row['var']; ?>" id="widget-<?php echo $WidgetId; ?>" style=" left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $WidgetId; ?>-handle">
		<div class="widget-headline"><h3>
		<?php if($edit_mode == true) { ?>
		<img src="./web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
		<script language="JavaScript" type="text/javascript">
		Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
		</script>
		<?php } else { ?><span class="header-left">&nbsp;</span><span class="header-middle">Info del Grupo</span><span class="header-right">&nbsp;</span><?php } ?></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">

<div class="group-info-icon"><img src="/habbo-imaging/badge.php?badge=<?php echo $groupdata['badge']; ?>.gif" /></div>

	    <img id="groupname-<?php echo $groupdata['id']; ?>-report" class="report-button report-gn" alt="report" src="./web-gallery/images/myhabbo/buttons/report_button.gif" style="display: none;" />
<h4><?php echo HoloText($groupdata['name']); ?></h4>

<p>Grupo creado: <b><?php echo $groupdata['created']; ?></b></p>
<p><?php echo $Members; ?> miembros</p>
<?php if($groupdata['roomid'] != 0) { ?>
<p><a href="/client?forwardId=2&amp;roomId=<?php echo $groupdata['roomid']; ?>" onclick="HabboClient.roomForward(this, '<?php echo $groupdata['roomid']; ?>', 'private'); return false;" target="<?php echo $myrow["client_token"]; ?>" class="group-info-room">Territorio xdr-lns</a></p>
<?php } ?>
<div class="group-info-description"><?php echo CleanText($groupdata['description']); ?></div>


<div id="profile-tags-panel">
<div id="profile-tag-list">
<div id="profile-tags-container">
<?php
$getTags = mysql_query("SELECT * FROM user_tags_groups WHERE groupid = '".$groupid."'");
if(mysql_num_rows($getTags) > 0) {
while($row = mysql_fetch_assoc($getTags)) {
?>
<span class="tag-search-rowholder">
    <a href="<?php echo SITE; ?>/tag/<?php echo $row['tag']; ?>" class="tag"><?php echo $row['tag']; ?></a>
	<div class="tag-id" style="display:none"><?php echo $row['id']; ?></div>
	<img border="0" class="tag-delete-link" onMouseOver="this.src='/web-gallery/images/buttons/tags/tag_button_delete_hi.gif'" onMouseOut="this.src='<?php echo SITE; ?>/web-gallery/images/buttons/tags/tag_button_delete.gif'" src="<?php echo SITE; ?>/web-gallery/images/buttons/tags/tag_button_delete.gif" />
</span>
<?php } } else { ?>
No hay ning�n 'YoSoy'
<?php } ?>
</div>

<script type="text/javascript">
    document.observe("dom:loaded", function() {
        TagHelper.setTexts({
            buttonText: "OK",
            tagLimitText: "�Has alcanzado el l�mite de \'YoSoys\'! Elimina uno antes si quieres a�adir otro nuevo."
        });
    });
</script>
</div>

<div id="profile-tags-status-field">
 <div style="display: block;">
  <div class="content-red">
   <div class="content-red-body">

    <span id="tag-limit-message"><img src="./web-gallery/images/register/icon_error.gif"/> �Has alcanzado el l�mite de 'YoSoys'! Elimina uno antes si quieres a�adir otro nuevo.</span>
    <span id="tag-invalid-message"><img src="./web-gallery/images/register/icon_error.gif"/> 'YoSoy' no v�lido</span>
   </div>
  </div>
 <div class="content-red-bottom">
  <div class="content-red-bottom-body"></div>
 </div>

 </div>
</div>    <div class="profile-add-tag">
        <input type="text" id="profile-add-tag-input" maxlength="30"/><br clear="all"/>
        <a href="#" class="new-button" style="float:left;margin:5px 0 0 0;" id="profile-add-tag"><b>A�adir 'YoSoy'</b><i></i></a>
    </div>
</div>
<script type="text/javascript">
    document.observe("dom:loaded", function() {
        new GroupInfoWidget('<?php echo $groupid; ?>', '"'.USER_ID.'"');
    });
</script>



	<img id="groupdesc-<?php echo $groupdata['id']; ?>-report" class="report-button report-gd"
	    alt="report"
	    src="./web-gallery/images/myhabbo/buttons/report_button.gif"
        style="display: none;" />

		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
					
				</div>
<?php } } ?>





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

<script language="JavaScript" type="text/javascript">
initEditToolbar();
initMovableItems();
document.observe("dom:loaded", initDraggableDialogs);
Utils.setAllEmbededObjectsVisibility('hidden');
Pinger.start();
</script>


<?php if($edit_mode){ 
include ("grupos-edit.tpl");?>
<?php } ?>


<script type="text/javascript">
if (typeof HabboView != "undefined") {
	HabboView.run();
}
</script>


</body>
</html>

<?php
 {
$cored = true;

}


?>