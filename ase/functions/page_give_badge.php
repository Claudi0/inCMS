<?php
require_once("../../includes/core.php");
<<<<<<< HEAD

=======
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ../error.php");
}
}
>>>>>>> 7c839e39a7ac190e70d09de82cf03f573169b867

?>
<script type="text/javascript" src="../web-gallery/tiny_mce/jquery.tinymce.js"></script>
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
		   url: "functions/badge.php",
		   data: "username=" + $('#username').val() + "&badge=" + $('#badge_id').val() + '&method=add',
			success: function(){
		    $('button#General').html('Posted!');
			LoadPage('badge','');
        	$('.page').css('display', 'none');
			$('.overlay').css('display', 'none');
		   }
		 });
	}
</script>

	<h1>Give Badge</h1>
    <div>
	<img src="img/info_16.png" class="tooltip" title="Username" /><label for="value">Username:</label><input type="text" name="value" id="value" style="width:384px" value="<?php echo $_GET['username']; ?>" /><br />
    <img src="img/info_16.png" class="tooltip" title="Badge" /><label for="badge_id">Badge:</label><input type="text" name="badge_id" id="badge_id" style="width:384px" />
<br />
	<button onclick="SubmitForm()" class="UpdateUser">Give</button>