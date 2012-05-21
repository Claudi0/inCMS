<?php
ob_start();
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
define("Xukys", true);
require_once('../global.php');
$sql = mysql_query("SELECT credits from users where id = '".USER_ID."' LIMIT 1");
$myrow = mysql_fetch_array($sql);

$productId = $gtfo->cleanWord($_POST['productId']);
//$subCategoryId = FilterText($_POST['subCategoryId'], true);

$getPreview = mysql_query("SELECT * FROM site_shop_items WHERE id = '" . $productId . "'"); 

if(mysql_num_rows($getPreview) > 0)
{
	$row = mysql_fetch_assoc($getPreview);
}
else
{
	exit;
}
?>
<h4 title="<?php echo $row['skin']; ?>"><?php echo $row['ItemName']; ?></h4>
<div id="webstore-preview-box"><div class="<?php echo $row['skin']; ?> <?php echo $row['type']; ?>" id="webstore-preview-pre"><?php if($row['type'] == "Background") { ?><div id="webstore-preview-bgpreview"><a href="#" class="toolbutton" id="webstore-preview-bg"><span id="webstore-preview-bg-<?php echo $row['skin']; ?>">Previa</span></a></div><?php } ?><?php if($row['amount'] > 0) { ?><div id="webstore-preview-count" class="webstore-item-count"><div>x<?php echo $row['amount']; ?><?php } ?></div><?php if($row['ItemPack'] > 0) { ?><div id="webstore-preview-page">1/<?php echo $row['amount']; ?></div><div id="webstore-preview-next"></div><div id="webstore-preview-prev"></div><?php } ?></div></div>

<div id="webstore-preview-price">
Precio:<br /><b>
	<?php echo $row['price']; ?> Crédito<?php if($row['price'] > 1) { echo "s"; } ?>
	
</b>
</div>

<div id="webstore-preview-purse">
Tienes:<br /><b><?php if($myrow['credits'] > 0) { echo $myrow['credits']; ?> Crédito<?php } else { echo "No tienes Créditos"; } if($myrow['credits'] > 1) { echo "s"; } ?></b><br />
<?php if($row['price'] > $myrow['credits']) { ?>
<span class="webstore-preview-error">¡No tienes Créditos suficientes!</span><br>
<a class="clearfix" webstore-preview-purchase="" href="http://xukys-hotel.com/credits">Comprar Créditos</a>
<?php } ?>

<a href="http://xukys-hotel.com/credits">Obtener Créditos</a>
</div>

<div id="webstore-preview-purchase" class="clearfix">
	<div class="clearfix">
		<a href="#" class="new-button <?php if($row['price'] > $myrow['credits']) { echo "disabled-button\" disabled=\"disabled"; } ?>" id="webstore-purchase"><b>Comprar</b><i></i></a>
	</div>
</div>

<span id="webstore-preview-bg-text" style="display: none">Previa</span>
<?php
$type = $row['type'];

if($type == 'Background')
{
	header('X-JSON: [{"bgCssClass":"'.$row['skin'].'","type":"Background","itemCount":1,"previewCssClass":"'.$row['skin'].'","titleKey":""}]');
}
else if($type == 'Sticker')
{
	header('X-JSON: [{"type":"Sticker","itemCount":1,"previewCssClass":"'.$row['skin'].'","titleKey":""}]');
}
ob_end_flush();
?>