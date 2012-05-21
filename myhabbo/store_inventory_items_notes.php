<?php
if(!defined("NOWHOS"))
{
	define("NOWHOS", TRUE);
}
if(!defined("Xukys"))
{
define("Xukys", TRUE);
}
require_once('../global.php');

	if(!LOGGED_IN)
	{
		header('Location: '.WWW.'/');
	}
?>
<ul id="inventory-item-list">
<?php
$sql = mysql_query("SELECT id,skin,type FROM site_inventory_items WHERE type = 'Notes' AND userId = '".USER_ID."'");
$data = mysql_fetch_array($sql);
$count = mysql_num_rows($sql);

if($count > 0)
{
?>
	<li id="inventory-item-<?php echo $data['id']; ?>" title="Notas" class="selected">
		<div class="webstore-item-preview <?php echo $data['skin']; ?> <?php echo $data['type']; ?>">
			<div class="webstore-item-mask">
				<div class="webstore-item-count"><div>x<?php echo $count; ?></div></div>
			</div>
		</div>
	</li>
<?php
}
else
{
?>
	<li class="webstore-item-empty"></li>
<?php
}
?>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
	<li class="webstore-item-empty"></li>
</ul>
