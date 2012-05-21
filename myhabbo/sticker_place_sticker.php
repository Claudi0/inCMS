<?php
ob_start();
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
define("Xukys", TRUE);
require_once('../global.php');
$my_id = USER_ID;
$sql = mysql_query("SELECT credits from users where id = '".USER_ID."' LIMIT 1");
$myrow = mysql_fetch_array($sql);
$selectedStickerId = $gtfo->cleanWord($_POST['selectedStickerId']);
$zindex = $gtfo->cleanWord($_POST['zindex']);
if(isset($_POST['placeAll']))
{
$placeAll = $gtfo->cleanWord($_POST['placeAll']);
}
else
{
$placeAll = NULL;
}

$getItem = mysql_query("SELECT * FROM site_inventory_items WHERE userId = '" . $my_id . "' AND id = '" . $selectedStickerId . "' AND isWaiting = '0' LIMIT 1");

if(mysql_num_rows($getItem) > 0)
{
	$row = mysql_fetch_assoc($getItem);
	
	if($placeAll == "true")
	{
		$i = 0;
		$x_json = "";
		$getSame = mysql_query("SELECT * FROM site_inventory_items WHERE userId = '" . $my_id . "' AND skin = '" . $row['skin'] . "' AND isWaiting = '0'");
		$getSame2 = mysql_query("SELECT * FROM site_inventory_items WHERE userId = '" . $my_id . "' AND skin = '" . $row['skin'] . "' AND isWaiting = '0'");
		
		while($row = mysql_fetch_assoc($getSame))
		{
			$i++;
			$x_json .= $row['id'];
			mysql_query("UPDATE site_inventory_items SET isWaiting = '1' WHERE userId = '" . $my_id . "' AND id = '" . $row['id'] . "' AND isWaiting = '0' LIMIT 1");
			
			if($i !== mysql_num_rows($getSame))
			{	
				$x_json .= ", ";
			}
		}
		
		header("X-JSON: [" . $x_json . "]");	
	}
	else
	{	
		header("X-JSON: [\"" . $row['id'] . "\"]");	
		mysql_query("UPDATE site_inventory_items SET isWaiting = '1' WHERE userId = '" . $my_id . "' AND id = '" . $selectedStickerId . "' AND isWaiting = '0' LIMIT 1");
	}
}
else
{
	exit;
}
?>
<?php if($placeAll == "true") { while($row = mysql_fetch_assoc($getSame2)) {?>
<div class="movable sticker <?php echo $row['skin']; ?>" style="left: 20px; top: 30px; z-index: <?php echo $zindex + 1; ?>" id="sticker-<?php echo $row['id']; ?>">
<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="sticker-<?php echo $row['id']; ?>-edit" />
<script language="JavaScript" type="text/javascript">
Event.observe("sticker-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "sticker", "sticker-<?php echo $row['id']; ?>-edit"); }, false);
</script>
</div>
<?php } } else { ?>
<div class="movable sticker <?php echo $row['skin']; ?>" style="left: 20px; top: 30px; z-index: <?php echo $zindex + 1; ?>" id="sticker-<?php echo $row['id']; ?>">
<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="sticker-<?php echo $row['id']; ?>-edit" />
<script language="JavaScript" type="text/javascript">
Event.observe("sticker-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "sticker", "sticker-<?php echo $row['id']; ?>-edit"); }, false);
</script>
</div>
<?php } 
ob_end_flush(); 
?>
