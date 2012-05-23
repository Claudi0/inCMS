<div id="overlay"></div>
<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="<?php echo get_settings("hotel_url"); ?>/"></a></h1>
<div id="subnavi">     <div id="subnavi-search">
         <div id="subnavi-search-upper">

               <ul id="subnavi-search-links">

                               

                       <li>

                               <form action="logout.php" method="post">

                                       <button type="submit" id="signout" class="link"><span>Logout</span></button>

                               </form>

                       </li>

               </ul>         </div>
     </div>
     <div id="to-hotel">
                 <a href="client" class="new-button green-button" target="104b4c2297835b0959575b9926d7729ebc753c0e" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter in <?php echo get_title(); ?></b><i></i></a>
     </div>
 </div>
 <script type="text/javascript">

 L10N.put("purchase.group.title", "Create a Group");
 document.observe("dom:loaded", function() {
     $("signout").observe("click", function() {
         HabboClient.close();
     });
 });
 </script><ul id="navi">        <li>
                   <strong>
                           <?php echo get_userinfo("username"); ?> ( <img src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/v2/images/rpx/icon_habbo_small.png" style="margin-bottom:-2px;" /> )</i>
                   </strong>
                 <span></span>
               </li>
<li class="metab selected">
<strong>
			Community</strong>
			<span></span>
		</li>
		<li>

			<a href="/credits">Credits</a>
			<span></span>
		</li>
<li>

			<a href="/safety1">Safety</a>
			<span></span>
		</li>		</ul>

        <div id="habbos-online"><div class="rounded"><span><?php echo get_users_online(); ?> <?php echo $language['members_online']; ?></span></div></div>

	</div></div><div id="content-container">

<div id="navi2-container" class="pngbg">
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="selected">
				News
				
			</li>
			<li>
				<a href="/staff">Staff</a>
				
			</li>
	</ul>
    </div>
</div>
<?php
if(!isset($_GET['story']) || !is_numeric($_GET['story']))
{
$articleq = mysql_query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 1");
}
else
{
$articleq = mysql_query("SELECT * FROM cms_news WHERE id = '".addslashes($_GET['story'])."' LIMIT 1");
}
$article = mysql_fetch_array($articleq);
$authorq = mysql_query("SELECT * FROM users WHERE id = '".$article['author']."' LIMIT 1");
$author = mysql_fetch_array($authorq);
$recentstoriesq = mysql_query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 25");
$recentstoriesq1 = mysql_query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 25");
?>
<div id="container">
	<div id="content" style="position: relative" class="clearfix">
    <div id="column1" class="column" style="width: 210px;">
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix default ">
	
							<h2 class="title">News
							</h2>

						<div id="article-archive">
<?php
            while($recentstories = mysql_fetch_array($recentstoriesq))
			{
				echo '<a href="?story='.$recentstories['id'].'">'.$recentstories['title'].' &raquo;</a><br />';
			}
			?>
</div>

						
					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>

<div id="column2" class="column" style="width: 560px;">
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix blue ">
						<h2 class="title"><?php echo stripslashes($article['title']); ?>
							</h2>
<p style="align:middle;margin-left:30px;margin-top:20px;"><?php echo stripslashes($article['longstory']); ?></p>
<br>
<div style="float:right;margin-right:10px;"> <?php echo $author['usuario']; ?> / <?php echo @date("d-m-Y",$article['published']); ?>
					</div></div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>

<div class="habblet-container ">		
<div class="cbb clearfix notitle ">				
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=303535769703877";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div  style="margin-left:30px;" class="fb-comments" data-href="http://<?php echo get_settings("hotel_url"); ?>/articles.php?<?php echo stripslashes($article['id']); ?>" data-num-posts="10" data-width="430"></div>
</div>
</div></div>
<script type="text/javascript">
HabboView.run();
</script>
<div id="column3" class="column">
			     		
				<div class="habblet-container ">		
	
					

						
					
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

			     		
				
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
    </div>

<div id="footer">
<?php
get_footer();
?>
</div></div>

</div>



<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-448325-19']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>    <!-- START Nielsen Online SiteCensus V6.0 -->
<!-- COPYRIGHT 2009 Nielsen Online -->
<script type="text/javascript" src="//secure-uk.imrworldwide.com/v60.js">
</script>
<script type="text/javascript">
 var theCid = "es-widantena3tv";
 if (top == self) {
   theCid = "es-antena3tv";
 }
 var pvar = { cid: theCid, content: "0", server: "secure-uk" };
 var trac = nol_t(pvar);
 trac.record().post();
</script>

<!-- END Nielsen Online SiteCensus V6.0 -->
    <!-- Start Quantcast tag -->
<script type="text/javascript">
_qoptions={
qacct:"p-b5UDx6EsiRfMI"
};
</script>

<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<noscript>
<img src="http://pixel.quantserve.com/pixel/p-b5UDx6EsiRfMI.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->
    
    
        


</body>
</html>
