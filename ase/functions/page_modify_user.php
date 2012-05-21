<?php
require_once("../../includes/core.php");
<<<<<<< HEAD
if(isset($_SESSION['id'])){
if(get_userinfo("rank")>=5){
header("Location: ../error.php");
}
}
=======
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ../error.php");
}
}

>>>>>>> 7c839e39a7ac190e70d09de82cf03f573169b867
?>
<script type="text/javascript" src="../Public/tiny_mce/jquery.tinymce.js"></script>
<script language="javascript">
	$('.tooltip').tooltip({ 
	    track: true, 
	    delay: 0, 
	    showURL: false, 
	    showBody: " - ", 
	    fade: 250 
	});
	
	function LoadPage(PageName, Data) {
		    $('.page').css('display', 'none');
		    $('.overlay').css('display', 'none');
			$.ajax({
			   type: "POST",
			   url: PageName + ".php",
			   data: Data,
			   success: function(msg){
			     $('.conColumn').html(msg);
			     $('li#' + OldPage).removeClass('selected');
			     $('li#' + PageName).addClass('selected');
			     OldPage = PageName;
			   }
			 });
		}

	function SubmitForm() {
		$('button.UpdateUser').attr('disabled', 'disabled');
		$.ajax({
		   type: "POST",
		   url: "functions/update_user.php",
		   data: "username=" + $('#username').val() + "&real_name=" + $('#real_name').val() + "&mail=" + $('#mail').val() + "&motto=" + $('#motto').val() + "&rank=" + $('#rank').val() + "&credits=" + $('#credits').val() + "&activity_points=" + $('#pixels').val() + "&vip=" + $('#vip').val() + "&id=" + $('#id').val() + "&oldusername=" + $('#oldusername').val(),
			success: function(){
		    $('button#General').html('Posted!');
			LoadPage('users', 'method=id&value='+$('#id').val());
        	$('.page').css('display', 'none');
			$('.overlay').css('display', 'none');
		   }
		 });
	}
</script>
<?php
$userq = mysql_query("SELECT * FROM users WHERE id = '".$core->EscapeString($_GET['id'])."' LIMIT 1");
$user = mysql_fetch_array($userq);
?>

	<h1>Edit User</h1>
    <input type="text" name="id" id="id" value="<?php echo $core->EscapeString($_GET['id']); ?>" style="visibility:hidden;" />
    <input type="text" name="oldusername" id="oldusername" value="<?php echo $user['username']; ?>" style="visibility:hidden;" />

	<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $user['look']; ?>" /><br /><br />
	
    <div>
    <img src="img/info_16.png" class="tooltip" title="Modify username" /><label for="username">Username:</label><input type="text" name="username" id="username" style="width:384px" value="<?php echo $user['username']; ?>" /><br />
    <img src="img/info_16.png" class="tooltip" title="Modify real name" /><label for="real_name">Real Name:</label><input type="text" name="real_name" id="real_name" style="width:384px" value="<?php echo $user['real_name']; ?>" /><br />
    <img src="img/info_16.png" class="tooltip" title="Modify mail" /><label for="mail">Mail:</label><input type="text" name="mail" id="mail" style="width:384px" value="<?php echo $user['mail']; ?>" /><br />
    <img src="img/info_16.png" class="tooltip" title="Modify motto" /><label for="motto">Motto:</label><input type="text" name="motto" id="motto" style="width:384px" value="<?php echo $user['motto']; ?>" /><br />
    <img src="img/info_16.png" class="tooltip" title="Modify rank" /><label for="rank">Rank:</label><input type="text" name="rank" id="rank" style="width:384px" value="<?php echo $user['rank']; ?>" /><br />
    <img src="img/info_16.png" class="tooltip" title="Modify credits" /><label for="credits">Credits:</label><input type="text" name="credits" id="credits" style="width:384px" value="<?php echo $user['credits']; ?>" /><br />
    <img src="img/info_16.png" class="tooltip" title="Modify pixels" /><label for="pixels">Pixels:</label><input type="text" name="pixels" id="pixels" style="width:384px" value="<?php echo $user['activity_points']; ?>" /><br />
    <img src="img/info_16.png" class="tooltip" title="VIP" /><label for="vip">VIP:</label><select type="text" name="vip" id="vip" style="width:384px"><option value="0" <?php if($user['vip'] == '0') echo 'selected'; ?>>0</option><option value="1" <?php if($user['vip'] == '1') echo 'selected'; ?>>1</option></select><br />
    </div>
	<button onclick="SubmitForm()" class="UpdateUser">Update</button>