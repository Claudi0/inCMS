<?php
require_once("../../includes/core.php");
<<<<<<< HEAD
if(!get_userinfo("username") < 6)
{
header("Location: ../error");
die;
}

=======
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ../error.php");
}
}
>>>>>>> 7c839e39a7ac190e70d09de82cf03f573169b867
?>
<script type="text/javascript" src="../../web-gallery/tiny_mce/jquery.tinymce.js"></script>
<script language="javascript">
	$('textarea.wysiwyg').tinymce({
		script_url : '../../web-gallery/tiny_mce/tiny_mce.js',
        theme : "advanced",
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,forecolor,backcolor",
        theme_advanced_buttons3 : "",
        skin : "o2k7",
        skin_variant : "black",
	});

	$('#mainimage').keypress(function(e){
		if(e.which == 13){
			$('#ImagePreview').attr('src', $(this).val());
		}
	});
			
	$('#mainimage').change(function(){
		$('#ImagePreview').attr('src', $(this).val());
	});
	
	$('#campaignimage').change(function(){
		$('#CampaignImagePreview').attr('src', $(this).val());
	});
	
	$('#super_fader_image').change(function(){
		$('#SuperFaderImagePreview').attr('src', $(this).val());
	});
	
	function LoadPage(PageName) {
		    $('.page').css('display', 'none');
		    $('.overlay').css('display', 'none');
			$.ajax({
			   type: "POST",
			   url: PageName + ".php",
			   success: function(msg){
			     $('.conColumn').html(msg);
			     $('li#' + OldPage).removeClass('selected');
			     $('li#' + PageName).addClass('selected');
			     OldPage = PageName;
			   }
			 });
		}

	function SubmitForm() {
		$('button.PostStory').attr('disabled', 'disabled');
		$.ajax({
		   type: "POST",
		   url: "functions/news_post_story.php",
		   data: "shortstory=" + escape($('#ShortStory').val()) + "&longstory=" + escape($('#LongStory').val()) + "&image=" + $('#mainimage').val() + "&title=" + $('#title').val() + "&campaign=" + $('#campaign').val() + "&super_fader=" + $('#super_fader').val() + "&campaignimage=" + $('#campaignimage').val() + "&super_fader_image=" + $('#super_fader_image').val(),
			success: function(){
		    $('button#General').html('Posted!');
			LoadPage('done');
        	$('.page').css('display', 'none');
			$('.overlay').css('display', 'none');
		   }
		 });
	}
</script>

	<h1> Post new News</h1><br>
	
	<img src="img/block_32.png" id="SuperFaderImagePreview" /><br />
			<label for="campaignimage">Super Fader: </label><br />
			<select name="super_fader_image" id="super_fader_image" style="width:500px">
            <option value=""></option>
            <?php
            $newsimages = opendir('../../includes/newsimage/') or die('Error');  
			while($images = @readdir($newsimages)) {  
				if(!is_dir($images))
  				echo '<option value="../../includes/newsimage/'.$images.'">'.$images.'</option>';  
			}
			closedir($newsimages);  
			?>			</select>
	
	<div class="ImagePreview">

            <img src="img/block_32.png" id="ImagePreview" /><br />
			<label for="campaignimage">News: </label><br />
			<select name="mainimage" id="mainimage" style="width:300px">
            <option value=""></option>
            <?php
            $newsimages = opendir('../../includes/newsimage/news/') or die('Error');  
			while($images = @readdir($newsimages)) {  
				if(!is_dir($images))
  				echo '<option value="../../includes/newsimage/news/'.$images.'">'.$images.'</option>';  
			}
			closedir($newsimages);  
			?>			</select><br /><br />
            
            <img src="img/block_32.png" id="CampaignImagePreview" /><br />
			<label for="campaignimage">Campaign: </label><br />
			<select name="campaignimage" id="campaignimage" style="width:120px">
            <option value=""></option>
            <?php
            $newsimages = opendir('../../includes/newsimage/campaign/') or die('Error');  
			while($images = @readdir($newsimages)) {  
				if(!is_dir($images))
  				echo '<option value="../../includes/newsimage/campaign/'.$images.'">'.$images.'</option>';  
			}
			closedir($newsimages);  
			?>
			</select>
		
	</div>
	
	<br /><label for="title">Title: </label><br />
	<input type="text" name="title" id="title" style="width:343px" /><br /><br />
    
    <label for="campaign">Campaign </label>
    <select style="width: 300px;" name="campaign" id="campaign">
    <option value="0">No</option>
    <option value="1">Yes</option>
    </select>
	
	<label for="super_fader">Super Fader. <i></i></label>
	<select style="width: 300px;" name="super_fader" id="super_fader">
    <option value="0">No</option>
    <option value="1">Yes</option>
    </select><br /><br /><br /><br />

	Short Story:<br />
	<textarea class="wysiwyg" name="short" id="ShortStory" style="width:350px; height:175px"></textarea><br /><br />
	
	Long Story:<br />
	<textarea class="wysiwyg" name="long" id="LongStory" style="width:100%; height:275px"></textarea><br /><br />
	
	<button onclick="SubmitForm()" class="PostStory">Post</button><br /><br />
