<?php
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
if(!defined('Xukys'))
{
	define('Xukys', true);
}
include '../global.php';

if(isset($_SESSION['startSessionEditHome']) && $_SESSION['startSessionEditHome'] == USER_ID)
{
	if(isset($_POST['stickieId']))
	{
		$stickieId = $gtfo->cleanWord($_POST['stickieId']);
		if(is_numeric($stickieId))
		{
			$sql = mysql_query("SELECT home_id FROM homes_items WHERE id = '".$stickieId."' LIMIT 1");
			$data = mysql_fetch_array($sql);
			
			if(mysql_num_rows($sql) > 0)
			{
				if($data['home_id'] == $_SESSION['startSessionEditHome'])
				{
					mysql_query("DELETE from homes_items WHERE id = '".$stickieId."' LIMIT 1");
					echo "SUCCESS";
				}
				else
				{
					echo "ERROR";
				}
			}
			else
			{
				echo "ERROR";
			}
		}
		else
		{
			echo "ERROR";
		}
	}
	else
	{
		echo "ERROR";
	}
}
elseif(isset($_SESSION['startSessionEditGroup']) && $core->GetGroupPerm($_SESSION['startSessionEditGroup']) >= 2)
{
	if(isset($_POST['stickieId']))
	{
		$stickieId = $gtfo->cleanWord($_POST['stickieId']);
		if(is_numeric($stickieId))
		{
			$sql = mysql_query("SELECT group_id FROM groups_items WHERE id = '".$stickieId."' LIMIT 1");
			$data = mysql_fetch_array($sql);
			
			if(mysql_num_rows($sql) > 0)
			{
				if($data['group_id'] == $_SESSION['startSessionEditGroup'])
				{
					mysql_query("DELETE from groups_items WHERE id = '".$stickieId."' LIMIT 1");
					echo "SUCCESS";
				}
				else
				{
					echo "ERROR";
				}
			}
			else
			{
				echo "ERROR";
			}
		}
		else
		{
			echo "ERROR";
		}
	}
	else
	{
		echo "ERROR";
	}	
}

?>