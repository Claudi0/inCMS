<?php
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
define('Xukys', true);
define('MUST_LOG', true);
require_once '../global.php';
if(isset($_SESSION['startSessionEditHome'])) {
	require_once "../nucleo/class.homes.php";
} elseif(isset($_SESSION['startSessionEditGroup'])) {
	if($core->GetGroupPerm($_SESSION['startSessionEditGroup']) < 2) {
	die('Qué intentas?'); }
	require_once "../nucleo/class.groups.php";
}

if(isset($_POST['maxlength']) && isset($_POST['skin']) && isset($_POST['noteText']) && isset($_POST['scope']))
{

$skin = $gtfo->cleanWord($_POST['skin']);
$maxlenght = $gtfo->cleanWord($_POST['maxlength']);
$noteText = $gtfo->cleanWord($_POST['noteText']);
$scope = $gtfo->cleanWord($_POST['scope']);
$skin = 'n_skin_';
		switch($_POST['skin'])
		{
			case 1:
				$skin .= 'defaultskin';
				break;
			case 2:
				$skin .= 'speechbubbleskin';
				break;
			case 3:
				$skin .= 'metalskin';
				break;
			case 4:
				$skin .= 'noteitskin';
				break;
			case 5:
				$skin .= 'notepadskin';
				break;
			case 6:
				$skin .= 'goldenskin';
				break;
			case 7:
				$skin .= 'hc_machineskin';
				break;
			case 8:
				$skin .= 'hc_pillowskin';
				break;
			default:
				$skin .= '';
				break;
		}
		
		if(isset($_SESSION['startSessionEditHome'])) {
			dbquery("INSERT INTO homes_items (id, home_id, type, x, y, z, data, skin, owner_id, link) VALUES (NULL, '".USER_ID."', 'stickie', '10', '10', '6', '".$noteText."', '".$skin."', '".USER_ID."', '0');");
		} elseif(isset($_SESSION['startSessionEditGroup'])) {
			dbquery("INSERT INTO groups_items (id, group_id, type, x, y, z, data, skin, owner_id, link) VALUES (NULL, '".$gtfo->cleanWord($_SESSION['startSessionEditGroup'])."', 'stickie', '10', '10', '6', '".$noteText."', '".$skin."', '".USER_ID."', '0');");
		}
		mysql_query("DELETE from site_inventory_items WHERE type='Notes' AND userId = '".USER_ID."' LIMIT 1");
		
	if(isset($_SESSION['startSessionEditHome'])) {
		$sql = mysql_query("SELECT id from homes_items WHERE home_id = '".USER_ID."' AND data = '".$noteText."' LIMIT 1");
	} elseif(isset($_SESSION['startSessionEditGroup'])) {
		$sql = mysql_query("SELECT id from groups_items WHERE group_id = '".$gtfo->cleanWord($_SESSION['startSessionEditGroup'])."' AND data = '".$noteText."' LIMIT 1");
	}
	$data = mysql_fetch_array($sql);

	if(isset($_SESSION['startSessionEditHome'])) {
		$homeData = HomesManager::GetHome(HomesManager::GetHomeId('user', USER_ID));
	} elseif(isset($_SESSION['startSessionEditGroup'])) {
		$homeData = HomesManager::GetHome(HomesManager::GetHomeId('group', $_SESSION['startSessionEditGroup']));
	}
	
	$item = $homeData->GetItems($data['id']);
	
					echo $item->GetHtml();
	
}
?>