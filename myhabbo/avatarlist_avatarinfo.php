<?php
define('Xukys', true);
define('NOWHOS', true);
define('MUST_LOG', true);

require '../global.php';

if(isset($_POST['groupId']) && is_numeric($_POST['groupId']) && isset($_POST['anAccountId']) && is_numeric($_POST['anAccountId']))
$groupId = $gtfo->cleanWord($_POST['groupId']);
$AccountId = $gtfo->cleanWord($_POST['anAccountId']);

$checkMember = mysql_num_rows(dbquery("SELECT null FROM groups_memberships WHERE userid = '".$AccountId."' AND groupid = '".$groupId."' LIMIT 1;"));

if($checkMember > 0) {

$memberQuery = dbquery("SELECT id,look,username,motto,account_created FROM users WHERE id = '".$AccountId." LIMIT 1'");
if(mysql_num_rows($memberQuery) > 0) {
$data = mysql_fetch_array($memberQuery);
$rango = dbquery("SELECT member_rank FROM groups_memberships WHERE groupid = '".$groupId."' AND userid = '".$AccountId."'");
$rank = mysql_num_rows($rango);

if($rank == 3) {
	$OWNER = true;
	$ADMIN = false;
	$MEMBER = false;
}
elseif($rank == 2) {
	$OWNER = false;
	$ADMIN = true;
	$MEMBER = false;
}
elseif($rank == 1) {
	$OWNER = false;
	$ADMIN = false;
	$MEMBER = true;
}
?>
<div class="avatar-list-info-container">
	<div class="avatar-info-basic clearfix">
		<div class="avatar-list-info-close-container"><a href="#" class="avatar-list-info-close" id="avatar-list-info-close-<?php echo $data['id']; ?>"></a></div>
		<div class="avatar-info-image">
			
			<img src="http://images.xukys-hotel.com/habbo-imaging/avatar.php?figure=<?php echo $data['look']; ?>&amp;size=b" alt="<?php echo $data['username']; ?>" />
		</div>
<h4><a href="/home/<?php echo $data['username']; ?>"><?php echo $data['username']; ?></a></h4>
<p>
<a href="<?php echo WWW; ?>/client" target="c0f14adbac8007cd664016827f5ebc02eff85b7d" onclick="HabboClient.openOrFocus(this); return false;">
	<?php
	if(!$users->Is_Online($data['id'])) {
	?>
	<img src="<?php echo WWW; ?>/web-gallery/images/myhabbo/profile/habbo_offline.gif" />
	<?php } else { ?>
	<img src="<?php echo WWW; ?>/web-gallery/images/myhabbo/profile/habbo_online_anim.gif" />
	<?php } ?>
</a>
</p>
<p>Habbo creado el: <b><?php echo substr($data['account_created'], 0, 11); ?></b></p>
<p><a href="/home/<?php echo $data['username']; ?>" class="arrow">Ver Página</a></p>
<p class="avatar-info-motto"><?php echo fixText($data['motto'], true, false, true, false, false); ?></p>
	</div>
	<div class="avatar-info-rights clearfix">
		<div>
Derechos del Grupo: 
<?php if($OWNER) {
echo '<b>Dueñ@ <img src="'.WWW.'/web-gallery/images/groups/owner_icon.gif" width="15" height="15" alt="Dueñ@"></b>';
}
elseif($ADMIN) {
echo '<b>Administrador <img src="'.WWW.'/web-gallery/images/groups/administrator_icon.gif" width="15" height="15" alt="Administrador" /></b>';
}
elseif($MEMBER) {
echo '<b>Socio</b>';
}

?>
		</div>
<?php if(!$OWNER && $rank >= 2) {
if($ADMIN) { ?>
<div class="clear"><a href="#" class="avatar-info-rights-revoke new-button"><b>Eliminar derechos de Socio</b><i></i></a></div>
<?php } else { ?>
<div class="clear"><a href="#" class="avatar-info-rights-give new-button"><b>Dar derechos de Administrador</b><i></i></a></div>
<?php } if($data['id'] == USER_ID) { ?>
<div class="clear"><a href="#" class="avatar-info-rights-leave new-button"><b>myhabbo.memberwidget.leave_group</b><i></i></a></div>
<?php } else { ?>
<div class="clear"><a href="#" class="avatar-info-rights-remove new-button"><b>Eliminar Socio</b><i></i></a></div>
<?php } } ?>
	</div>
</div>
<!-- <?php echo $rank; ?> -->
<?php
	}
}
?>