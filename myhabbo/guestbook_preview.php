<?php
if(!defined('Xukys'))
{

	define('Xukys', true);
}
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
require_once '../global.php';

if(isset($_POST['ownerId']) && isset($_POST['message']) && isset($_POST['scope']) && isset($_POST['query']) && isset($_POST['widgetId']))
{
	$ownerId = $gtfo->cleanWord($_POST['ownerId']);
	$message = $_POST['message'];
	$widgetId = $gtfo->cleanWord($_POST['widgetId']);
	$_SESSION['Guestbook_posted_on'] = date("j-M-Y g:i:s");
	
	if(is_numeric($ownerId) && is_numeric($widgetId))
		{
			
?>

<ul class="guestbook-entries">
	<li id="guestbook-entry--1" class="guestbook-entry">
		<div class="guestbook-author">
                <img src="/habbo-imaging/avatarimage.php?figure=<?php echo $users->GetUserVar(USER_ID, 'look'); ?>&amp;size=s" alt="<?php echo USER_NAME; ?>" title="<?php echo USER_NAME; ?>"/>
		</div>
		<div class="guestbook-message">
			<div class="<?php if($row['online'] = "1") { echo 'online'; } else { echo 'offline'; } ?>">
				<a href="/home/<?php echo USER_NAME; ?>"><?php echo USER_NAME; ?></a>
			</div>
			<p><?php echo fixText($core->BBcode($message), false, false, true, false, true); ?></p>
		</div>
		<div class="guestbook-cleaner">&nbsp;</div>
		<div class="guestbook-entry-footer metadata"><?php echo $_SESSION['Guestbook_posted_on']; ?></div>
	</li>
</ul>

<div class="guestbook-toolbar clearfix">
<a href="#" class="new-button" id="guestbook-form-continue"><b>Continuar editando</b><i></i></a>
<a href="#" class="new-button" id="guestbook-form-post"><b>A�adir mensaje</b><i></i></a>	
</div>
<?php
	}

}
?>