<?php
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
if(!defined('Xukys'))
{
	define('Xukys', true);
}
require_once('../global.php');

$productId = $gtfo->cleanWord($_POST['productId']);
//$subCategoryId = FilterText($_POST['subCategoryId'], true);

$getItem = mysql_query("SELECT * FROM site_shop_items WHERE id = '" . $productId . "'"); 

if(mysql_num_rows($getItem) > 0)
{
	$row = mysql_fetch_assoc($getItem);
}
else
{
	exit;
}
?>
<div class="webstore-item-preview <?php echo $row['skin']; ?> <?php echo $row['type']; ?>"
	>
	<div class="webstore-item-mask">
		
	</div>
</div>

<p>
¿Estás seguro de que quieres comprar ?
</p>

<p class="new-buttons">
<a href="#" class="new-button" id="webstore-confirm-cancel"><b>Cancelar</b><i></i></a>
<a href="#" class="new-button" id="webstore-confirm-submit"><b>Continuar</b><i></i></a>
</p>

<div class="clear"></div>
