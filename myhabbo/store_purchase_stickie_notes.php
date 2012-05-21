<?php
ob_start();
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
if(!defined('Xukys'))
{
	define('Xukys', true);
}
require_once('../global.php');
$my_id = USER_ID;
$sql = mysql_query("SELECT credits from users where id = '".USER_ID."' LIMIT 1");
$myrow = mysql_fetch_array($sql);

$task = $gtfo->cleanWord($_POST['task']);
$selectedId = $gtfo->cleanWord($_POST['selectedId']);

$getItem = mysql_query("SELECT * FROM site_shop_items WHERE id = '" . $selectedId . "' LIMIT 1"); 

if(mysql_num_rows($getItem) > 0)
{
	$row = mysql_fetch_assoc($getItem);
	
		if($myrow['credits'] >= $row['price'])
		{
			if($row['skin'] == "package_product_pre")
			{
				$Items = explode(",", $row['ItemsContent']);
				$newCredits = $myrow['credits'] - $row['price'];

				if($users->EatCredits(USER_ID, $newCredits, false))
				{
					//echo 'ok';
				}
				$core->MUS('updatecredits', USER_ID);
				foreach($Items as $ItemSkin)
				{
					mysql_query("INSERT INTO site_inventory_items (userId, var, skin, type) VALUES ('".$my_id."', '', '".$ItemSkin."', 'Stickie')");
				}

				header("X-JSON: " . $row['id']);
				echo "OK";
			}
			else if($row['amount'] > 0)
			{
				$count = 1;
				$amount = $row['amount'];

				while($count <= $amount)
				{
					mysql_query("INSERT INTO site_inventory_items (userId, var, skin, type) VALUES ('".$my_id."', '', '".$row['skin']."', '".$row['type']."')");
					$count++;
				}

				header("X-JSON: " . $row['id']);
				echo "OK";
			}
			else
			{
				$newCredits = $myrow['credits'] - $row['price'];
				if($users->EatCredits(USER_ID, $newCredits, false))
				{
					//echo 'ok';
				}
				$core->MUS('updatecredits', USER_ID);
				mysql_query("INSERT INTO site_inventory_items (userId, var, skin, type) VALUES ('".$my_id."', '', '".$row['skin']."', '".$row['type']."')");
			
				header("X-JSON: " . $row['id']);
				echo "OK";
			}
		}
}

exit;
ob_end_flush(); 
?>