<?php
require_once("../includes/core.php");


?>

<script language="javascript">
	$('.tooltip').tooltip({ 
	    track: true, 
	    delay: 0, 
	    showURL: false, 
	    showBody: " - ", 
	    fade: 250 
	});
	
	$('.modify').click(function() { 
		LoadContent('page_modify_news', $(this).attr('id'));
	    $('.overlay').fadeIn();
	    $('.page').fadeIn("slow");
	});

	$('.delete').click(function() { 
		DeleteStory($(this).attr('id'));
	});

	$('button.PostNews').click(function() { 
		LoadContent('page_post_news', 0);
	    $('.overlay').fadeIn();
	    $('.page').fadeIn("slow");
	});

	$('.exitbutton').click(function() { 
	    $('.page').css('display', 'none');
	    $('.overlay').css('display', 'none');
	});

	function LoadContent(PageName, StoryID) {
		$.ajax({
		   type: "POST",
		   url: "functions/" + PageName + ".php?id=" + StoryID,
		   success: function(msg){
		     $('.content').html(msg);
		   }
		 });
	}
	
	function DeleteStory(StoryID) {
		$.ajax({
		   type: "POST",
		   url: "functions/news_delete_story.php?id=" + StoryID,
		   success: function(msg){
		     $('.SelectRow#' + StoryID).fadeOut('slow');
		   }
		 });
	}
</script>

<div>
	<h1>News</h1>
	<div class="overlay hidden">
		<div class="page hidden">
			<div class="exitbutton"></div>
			<div class="content">
			</div>
		</div>
	</div>
	
	<div class="formPiece">
		<div>
			<h3>Post Story</h3>
		</div>

		<div>
			<button class="PostNews">Post Story</button>
		</div>
	</div>

	<div class="formPiece">
		<h3>Current News</h3>

		<div>
			<?php
			$newsq = mysql_query("SELECT * FROM cms_news ORDER BY id ASC");
			while($news = mysql_fetch_array($newsq))
			{
			?>
				<div class="SelectRow" id="<?php echo $news['id']; ?>">
					<img src="img/gear_32.png" class="tooltip clickme modify" title="Modify Story - Click here to modify the selected story" id="<?php echo $news['id']; ?>"/>
					<img src="img/trash_32.png" class="tooltip clickme delete" title="Delete Story - Click here to remove the selected story" id="<?php echo $news['id']; ?>" />
					<h4><?php echo $news['title']; ?></h4>
					<div><?php echo substr(strip_tags($news['shortstory']),0,40).'...'; ?></div>
				</div>
            <?php
			}
			?><br><br><br><br><br><br>
			
		</div>
	</div>
</div>