<?php
if(!defined('Xukys'))
{
	define('Xukys', true);
}
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
include '../global.php';

if(isset($_POST['ownerId']) && isset($_POST['message']) && isset($_POST['scope']) && isset($_POST['query']) && isset($_POST['widgetId']) && isset($_SESSION['Guestbook_posted_on']))
{
	$ownerId = $gtfo->cleanWord($_POST['ownerId']);
	$message = $gtfo->cleanWord($_POST['message']);
	$widgetId = $gtfo->cleanWord($_POST['widgetId']);
//	$_SESSION['Guestbook_posted_on'] = date("j-M-Y g:i:s");
	
	if(is_numeric($ownerId) && is_numeric($widgetId))
		{
			
				mysql_query("INSERT INTO cms_guestbook_entries (id, message, time, home_id, userid) VALUES (NULL, '".$message."', '".$_SESSION['Guestbook_posted_on']."', '".$ownerId."', '".USER_ID."');");
?>

	<li id="guestbook-entry--1" class="guestbook-entry">
		<div class="guestbook-author">
                <img src="http://www.xukys-hotel.com/habbo-imaging/avatarimage.php?figure=<?php echo $users->GetUserVar(USER_ID, 'look'); ?>&amp;size=s" alt="<?php echo USER_NAME; ?>" title="<?php echo USER_NAME; ?>"/>
		</div>
		<div class="guestbook-message">
			<div class="<?php if($users->IsUserOnline(USER_ID)) { echo 'online'; } else { echo 'offline'; } ?>">
				<a href="/home/<?php echo USER_NAME; ?>"><?php echo USER_NAME; ?></a>
			</div>
			<p><?php echo fixText($core->BBcode($message), false, false, true, false, true); ?></p>
		</div>
		<div class="guestbook-cleaner">&nbsp;</div>
		<div class="guestbook-entry-footer metadata"><?php echo $_SESSION['Guestbook_posted_on']; ?></div>
	</li>
	
<?php
	}
unset($_SESSION['Guestbook_posted_on']);
}
?>