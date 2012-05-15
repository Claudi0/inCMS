<?php
require_once("../../includes/core.php");
if(!get_userinfo("username") < 6)
{
header("Location: ../error");
die;
}

?>
<script type="text/javascript" src="../Public/tiny_mce/jquery.tinymce.js"></script>
<script language="javascript">
	$('textarea.wysiwyg').tinymce({
		script_url : '../web-gallery/tiny_mce/tiny_mce.js',
        theme : "advanced",
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,forecolor,backcolor",
        theme_advanced_buttons3 : "",
        skin : "o2k7",
        skin_variant : "blue",
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
		   url: "functions/news_update_story.php",
		   data: "shortstory=" + escape($('#ShortStory').val()) + "&longstory=" + escape($('#LongStory').val()) + "&image=" + $('#mainimage').val() + "&title=" + $('#title').val() + "&campaign=" + $('#campaign').val() + "&campaignimage=" + $('#campaignimage').val() + "&id=" + $('#id').val(),
			success: function(){
		    $('button#General').html('Posted!');
			LoadPage('news');
        	$('.page').css('display', 'none');
			$('.overlay').css('display', 'none');
		   }
		 });
	}
</script>
<?php
$newsq = mysql_query("SELECT * FROM cms_news WHERE id = '".$core->EscapeString($_GET['id'])."' LIMIT 1");
$news = mysql_fetch_array($newsq);
?>

	<h1>Modify Article</h1>
    <input type="text" name="id" id="id" value="<?php echo $core->EscapeString($_GET['id']); ?>" style="visibility:hidden;" />
	<div class="ImagePreview">

			<img src="../<?php echo $news['image']; ?>" id="ImagePreview" /><br /><br />
			<label for="mainimage">Main Image: </label>
			<select name="mainimage" id="mainimage" style="width:300px">
            <option value=""></option>
            <?php
            $newsimages = opendir('../../web-gallery/Noticias/news/') or die('Error');  
			while($images = @readdir($newsimages)) {  
				if(!is_dir($images))
				{
					if(preg_match("/".$images."/", $news['image']))
					$selected = 'selected="selected"';
					else
					$selected = '';
  					echo '<option value="web-gallery/Noticias/news/'.$images.'" '.$selected.'>'.$images.'</option>';  
				}
			}
			closedir($newsimages);  
			?>
			</select><br /><br />
            
            <img src="../<?php echo $news['campaignimg']; ?>" id="CampaignImagePreview" /><br />
			<label for="campaignimage">Campaign Image: </label><br />
			<select name="campaignimage" id="campaignimage" style="width:120px">
            <option value=""></option>
            <?php
            $newsimages = opendir('../../web-gallery/Noticias/campaign/') or die('Error');  
			while($images = @readdir($newsimages)) {  
				if(!is_dir($images))
				{
					if(preg_match("/".$images."/", $news['campaignimg']))
					$selected = 'selected="selected"';
					else
					$selected = '';
  					echo '<option value="/web-gallery/Noticias/campaign/'.$images.'" '.$selected.'>'.$images.'</option>';  
				}
			}
			closedir($newsimages);  
			?>
			</select>
		
	</div>
	
	<br /><label for="title">Title: </label><br />
	<input type="text" name="title" id="title" style="width:343px" value="<?php echo $news['title']; ?>" /><br /><br />
    
    <label for="campaign">Campaign </label><br />
    <select name="campaign" id="campaign">
    <option value="0" <?php if($news['campaign'] == 0) echo 'selected="selected"'; ?>>No</option>
    <option value="1" <?php if($news['campaign'] == 1) echo 'selected="selected"'; ?>>Yes</option>
    </select><br /><br />

	Short story:<br />
	<textarea class="wysiwyg" name="short" id="ShortStory" style="width:350px; height:175px"><?php echo $news['shortstory']; ?></textarea><br /><br />
	
	Long story:<br />
	<textarea class="wysiwyg" name="long" id="LongStory" style="width:100%; height:275px"><?php echo $news['longstory']; ?></textarea><br /><br />
	
	<button onclick="SubmitForm()" class="PostStory">Post</button>