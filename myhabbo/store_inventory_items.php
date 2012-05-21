<?php
ob_start();
if (!defined('NOWHOS')) {
    define('NOWHOS', true);
} //!defined('NOWHOS')
if (!defined('Xukys')) {
    define('Xukys', true);
} //!defined('Xukys')
require_once('../global.php');
$my_id = USER_ID;
$sql   = mysql_query("SELECT credits from users where id = '" . USER_ID . "' LIMIT 1");
$myrow = mysql_fetch_array($sql);

$type = ucwords($gtfo->cleanWord($_POST['type']));
$type = substr($type, 0, strlen($type) - 1);

if ($type == "Widget") {
    require_once('store_inventory_items_widgets.php');
    exit;
} //$type == "Widget"
else if ($type == "Note") {
    require_once 'store_inventory_items_notes.php';
    exit;
} //$type == "Note"

$MyItems    = "";
$getMyItems = mysql_query("SELECT * FROM site_inventory_items WHERE userId = '" . $my_id . "' AND type = '" . $type . "' AND isWaiting = '0'");
?>
<ul id="inventory-item-list">
	<?php
if(mysql_num_rows($getMyItems) > 0) {
	for ($n = 0; $n <= 20; $n++) {
    while ($row = mysql_fetch_assoc($getMyItems)) {
        if (!Contains($row['skin'], $MyItems)) {
            $n++;
            $MyItems .= $row['skin'] . ", ";
            $getSameStickers = mysql_num_rows(mysql_query("SELECT * FROM site_inventory_items WHERE userId = '" . $my_id . "' AND skin = '" . $row['skin'] . "' AND type = '" . $type . "' AND isWaiting = '0'"));
?>
	<li id="inventory-item-<?php
            echo $row['id'];
?>" title="">
		<div class="webstore-item-preview <?php
            echo $row['skin'];
?> <?php
            echo $row['type'];
?>">
			<div class="webstore-item-mask">
				<?php
            if ($getSameStickers > 1) {
?><div class="webstore-item-count"><div>x<?php
                echo $getSameStickers;
?></div></div><?php
            } //$getSameStickers > 1
?>
			</div>
		</div>
	</li>
	<?php
            if ($n == 1) {
                header("X-JSON: [[\"Inventario\",\"" . unicodeText("Catálogo") . "\"],[\"" . $row['skin'] . "\",\"" . $row['skin'] . "\",\"\",\"" . $row['type'] . "\",null," . $getSameStickers . "]]");
            } //$n == 1
        } //!Contains($row['skin'], $MyItems)
    } //$row = mysql_fetch_assoc($getMyItems)
    if ($n <= 19) {
?>
	<li class="webstore-item-empty"></li>
		<?php
		} //$n <= 19
	}//$n = 0; $n <= 20; $n++
	}
		else
		{
			header("X-JSON: [[\"Inventario\",\"" . unicodeText("Catálogo") . "\"],[]]");
			?>
			<div class="webstore-frank">
	<div class="blackbubble">
		<div class="blackbubble-body">

<p><b>¡Tu inventario para esta categoría está completamente vacío!</b></p>
<p>Para conseguir más Etiquetas, Fondos y Notas, haz clic en la barra del Catálogo, selecciona una categoría y un producto, y luego haz clic en Comprar.</p>

		<div class="clear"></div>
		</div>
	</div>
	<div class="blackbubble-bottom">
		<div class="blackbubble-bottom-body">
			<img src="<?php echo WWW; ?>/web-gallery/images/box-scale/bubble_tail_small.gif" alt="" width="12" height="21" class="invitation-tail">
		</div>
	</div>
	<div class="webstore-frank-image"><img src="<?php echo WWW; ?>/web-gallery/images/frank/sorry.gif" alt="" width="57" height="88"></div>
</div>
<ul id="inventory-item-list">
	<li class="webstore-item-empty selected"></li>
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
			<?php
		}

?>
</ul>
<?php
ob_end_flush();
?>