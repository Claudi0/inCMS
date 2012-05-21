<?php
ob_start();
	define('Xukys', true);
	define('NOWHOS', true);
	require '../global.php';

	if(isset($_POST['ownerId']) && isset($_POST['lastEntryId']) && isset($_POST['widgetId']))
	{
		$ownerId = $gtfo->cleanWord($_POST['ownerId']);
		$lastEntryId = $gtfo->cleanWord($_POST['lastEntryId']);
		$widgetId = $gtfo->cleanWord($_POST['widgetId']);
		
		$sql = dbquery("SELECT * from cms_guestbook_entries WHERE home_id = '".$ownerId."' AND id < '".$lastEntryId."' ORDER BY id DESC LIMIT 20");
		$count = dbquery("SELECT id from cms_guestbook_entries WHERE home_id = '".$ownerId."' AND id < '".$lastEntryId."' ORDER BY id DESC LIMIT 20");
		$last = mysql_fetch_array(dbquery("SELECT id from cms_guestbook_entries WHERE home_id = '".$ownerId."' AND id < '".$lastEntryId."' ORDER BY id ASC LIMIT 1"));
		$i = 0;
			if($count > 0)
			{
			while($data = mysql_fetch_array($sql))
			{
				$i++;
				if(uberUsers::IsUserOnline($data['userid'])) 
				{
				$status = 'online';
				}
				else
				{
				$status = 'offline'; 
				}
			echo '
		<li id="guestbook-entry-'.$data['id'].'" class="guestbook-entry">
			<div class="guestbook-author">
					<img src="/habbo-imaging/avatarimage.php?figure='.$users->GetUserVar($data['userid'], 'look').'&amp;size=s" alt="'.$users->GetUserVar($data['userid'], 'username').'" title="'.$users->GetUserVar($data['userid'], 'username').'" />
			</div>
				<div class="guestbook-actions">';
		if(LOGGED_IN) { if(USER_ID == $ownerId) {	echo '<img src="'.WWW.'/web-gallery/images/myhabbo/buttons/delete_entry_button.gif" id="gbentry-delete-'.$data['id'].'" class="gbentry-delete" style="cursor:pointer" alt="" /><br />'; } }
						echo '<img src="'.WWW.'/web-gallery/images/myhabbo/buttons/report_button.gif" id="gbentry-report-'.$data['id'].'" class="gbentry-report" style="cursor:pointer" alt="" />';
				echo '</div>
			<div class="guestbook-message">
				<div class="'. $status .'">
					<a href="/home/'.$users->GetUserVar($data['userid'], 'username').'">'.$users->GetUserVar($data['userid'], 'username').'</a>
				</div>
				<p>'.fixText(uberCore::BBcode($data['message']), false, false, true, false, true).'</p>
			</div>
			<div class="guestbook-cleaner">&nbsp;</div>
			<div class="guestbook-entry-footer metadata">'.$data['time'].'</div>
		</li>';
			if($i == mysql_num_rows($count)) {
				if($data['id'] == $last['id']) {
					header('X-JSON: {"lastPage":"true"}');
				} else {
					header('X-JSON: {"lastPage":"false"}');
				}
			}
			}
			
			}
			else
			{
				echo '';
			}
	}
	ob_end_flush();
	?>	