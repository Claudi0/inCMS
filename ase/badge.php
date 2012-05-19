<?php
require_once("./asecore.php");
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ./error.php");
}
}

?>
<script language="javascript">
	$('.tooltip').tooltip({ 
	    track: true, 
	    delay: 0, 
	    showURL: false, 
	    showBody: " - ", 
	    fade: 250 
	});
	
	function LoadContent(PageName, ID) {
		$.ajax({
		   type: "POST",
		   url: "functions/" + PageName + ".php?id=" + ID,
		   success: function(msg){
		     $('.content').html(msg);
		   }
		 });
	}

	function DisplayLoad(ButtonID) {
		$('button#' + ButtonID).attr('disabled', 'disabled');
	}
	
	$('.exitbutton').click(function() { 
	    $('.page').css('display', 'none');
	    $('.overlay').css('display', 'none');
	});
	

	function Give() {
		if($('#username').val() != '')
		{
		$.ajax({
		   type: "POST",
		   url: "functions/page_give_badge.php?username=" + $('#username').val(),
		   success: function(msg){
		     $('.content').html(msg);
		   }
		 });
	    $('.overlay').fadeIn();
	    $('.page').fadeIn("slow");
		}
	}
	
	function Remove(user,badge,username)
	{
			$('.page').css('display', 'none');
		    $('.overlay').css('display', 'none');
			$.ajax({
			   type: "POST",
			   url: "functions/badge.php",
			   data: "user=" + user + '&badge=' + badge + '&method=remove',
			   success: function(msg){
			     $('.conColumn').html(msg);
				 Search2(username);
			   }
			 });
	}
	
		function Search() {
		    $('.page').css('display', 'none');
		    $('.overlay').css('display', 'none');
			$.ajax({
			   type: "POST",
			   url: "badge.php",
			   data: "username="+$('#username2').val(),
			   success: function(msg){
			     $('.conColumn').html(msg);
			   }
			 });
		}
		
		function Search1() {
		    $('.page').css('display', 'none');
		    $('.overlay').css('display', 'none');
			$.ajax({
			   type: "POST",
			   url: "badge.php",
			   data: "badge_id="+$('#badge_id').val(),
			   success: function(msg){
			     $('.conColumn').html(msg);
			   }
			 });
		}
		
		function Search2(username) {
		    $('.page').css('display', 'none');
		    $('.overlay').css('display', 'none');
			$.ajax({
			   type: "POST",
			   url: "badge.php",
			   data: "username="+username,
			   success: function(msg){
			     $('.conColumn').html(msg);
			   }
			 });
		}
	
</script>
<div>
	<h1>Badges</h1>
    <div class="overlay hidden">
		<div class="page hidden">
			<div class="exitbutton"></div>
			<div class="content">
			</div>
		</div>
	</div>
    
	<div class="formPiece">
		<div>
			<h3>Give badge</h3>
		</div>
		<div>
			<img src="img/info_16.png" class="tooltip" title="Username" />
			<label for="username">Username: </label><input type="text"  name="username" id="username" /><br />
			<button id="Give" onClick="Give();">Give Badge</button><br /><br />
		</div>
	</div>
    
	<div class="formPiece">
		<div>
			<h3>Search user's badges</h3>
		</div>
		<div>
			<img src="img/info_16.png" class="tooltip" title="Username" />
			<label for="username2">Username: </label><input type="text"  name="username2" id="username2" /><br />
			<button id="Search" onClick="Search();">Search</button><br /><br />
		</div>
	</div>
    
    <div class="formPiece">
		<div>
			<h3>Search users with badge</h3>
		</div>
		<div>
			<img src="img/info_16.png" class="tooltip" title="Username" />
			<label for="badge_id">Badge: </label><input type="text"  name="badge_id" id="badge_id" /><br />
			<button id="Search" onClick="Search1();">Search</button><br /><br />
		</div>
	</div>
    
	<div class="formPiece">
		<h3>Search Result</h3><br />

		<div>
			<?php

			if(isset($_POST['username']))
			{
				$badges = mysql_query("SELECT * FROM user_badges WHERE user_id = '".$users->UserID($core->EscapeString($_POST['username']))."'");
				echo 'Click the badge to remove it<br />';
			}
			elseif(isset($_POST['badge_id']))
			{
				$badges = mysql_query("SELECT * FROM user_badges WHERE badge_id = '".$core->EscapeString($_POST['badge_id'])."'");
				echo 'Click the badge to remove it<br />';
			}
			else
			{
				echo '<h3>No Data Available</h3>';
			}
			
			while($badge = @mysql_fetch_array($badges))
			{
			?>
				<div class="BadgeSearchResults" onClick="Remove('<?php echo $badge['user_id']; ?>','<?php echo $badge['badge_id']; ?>','<?php echo $users->UserName($badge['user_id']); ?>');">
                	<img src="../web-gallery/badges/<?php echo $badge['badge_id']; ?>.gif" alt="<?php echo $badge['badge_id']; ?>" />
                    <center>
                    <?php if(isset($_POST['badge_id'])) echo $users->UserName($badge['user_id']); ?></center>
				</div>
            <?php
			}
			?>
			
		</div>
	</div>
</div>