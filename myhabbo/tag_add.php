<?php
define('Xukys', true);
define('NOWHOS', true);
require_once('../global.php');

if(!LOGGED_IN)
{
	header("Location: " . WWW . "/");
	exit;
}

if(isset($_POST['accountId']) && isset($_POST['tagName']))
{
	if(is_numeric($_POST['accountId']))
	{
$accountId = $gtfo->cleanWord($_POST['accountId']);
$tagName = fixText($gtfo->cleanWord($_POST['tagName']), true, false, true, false, false);
$filter = preg_replace("/[^a-z \d]/i", "", $tagName);

$sql = mysql_query("SELECT id FROM users WHERE id = '".$accountId."' LIMIT 1");
if(mysql_num_rows($sql) > 0 && !empty($tagName) && strlen($tagName) <= 20)
{
	$getTags = mysql_num_rows(mysql_query("SELECT null FROM user_tags WHERE user_id = '" . $accountId . "'"));
	$alreadyTag = mysql_num_rows(mysql_query("SELECT null FROM user_tags WHERE tag = '".$tagName."' AND user_id = '".$accountId."'"));
	
	if($alreadyTag == 0 && $getTags < 20)
	{
		if($tagName == $filter && $core->CheckComment($tagName))
		{
			$tagName = strtolower($tagName);
			mysql_query("INSERT INTO user_tags (id, user_id, tag) VALUES (NULL, '".USER_ID."', '".$tagName."');");
			echo "valid";
		}
		else
		{
			echo "invalidtag";
		}
	} elseif($getTags >= 20) { 
		echo 'taglimit';
	} else {
		echo 'exists';
	}
}
	}
	else
	{
		echo "invalidtag";
	}
}












exit;
?>