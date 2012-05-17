<?php
$page['id']="1";
$page['sub_id']="1";
$page['name']="me";
$page['redirect']="1";
require_once("./includes/core.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo get_title(); ?> - Me</title><script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>

<? // CSS e JS ?>
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/common.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>
<link rel="stylesheet" href="./web-gallery/css/lightweightmepage.css" type="text/css" />
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/lightweightmepage.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/lightweightmepage.js" type="text/javascript"></script>
<script src="./web-gallery/js/lightweightmepage.js" type="text/javascript"></script>
<script type="text/javascript">var ad_keywords = "gender%3Am,age%3A24";var ad_key_value = "kvage=24;kvgender=m;kvtags=";</script><script type="text/javascript">var ad_keywords = "gender%3Am,age%3A24";var ad_key_value = "kvage=24;kvgender=m;kvtags=";</script><script type="text/javascript">
document.habboLoggedIn = true;
var habboName = "Quackster";
var habboId = 4599468;
var facebookUser = false;
var habboReqPath = "";
var habboStaticFilePath = "../web-gallery";
var habboImagerUrl = "http://www.habbo.se/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.se/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "d5597fb970ed63af424b9e0a1923c4ae8586172d";
    HabboClient.maximizeWindow = true;
}

</script>

<meta name="build" content="63-BUILD368 - 20.04.2011 11:17 - com" />
</head>
<body id="home" class=" ">
<div id="overlay"></div>
<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="<?php echo get_settings("hotel_url"); ?>/"></a></h1>
<div id="subnavi">     <div id="subnavi-search">
         <div id="subnavi-search-upper">

               <ul id="subnavi-search-links">
<?php	if(isset($_SESSION['id'])){
if(get_userinfo("rank")>=5){
?>
<li>
<a href="<?php echo get_settings("hotel_url"); ?>/ase">Panel</a>
<span></span>
</li>
<?php
}
}
?>
                               
<li>
<a href="./FAQ/index.php">FAQ</a>
</li>
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
 </script><ul id="navi">        <li class="metab selected">
                   <strong>
                           <?php echo get_userinfo("username"); ?> ( <img src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/v2/images/rpx/icon_habbo_small.png" style="margin-bottom:-2px;" /> )</i>
                   </strong>
                 <span></span>
               </li>
<li>

			<a href="/news">Community</a>
			<span></span>
		</li>
		<li>

			<a href="/credits">Credits</a>
			<span></span>
		</li>
		<li>

			<a href="/safety">Safety</a>
			<span></span>
		</li></ul>

        <div id="habbos-online"><div class="rounded"><span><?php echo get_users_online(); ?> <?php echo $language['members_online']; ?></span></div></div>

	</div></div><div id="content-container">

<div id="navi2-container" class="pngbg">
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="selected">
				Home
				
			</li>
			<li>
				<a href="/profile">Profile</a>
				
			</li>
	</ul>

    </div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
    <div id="wide-personal-info">    <div id="habbo-plate">            <a href="http://www.habbo.se/identity/avatars">     		<img alt="<?php echo get_userinfo("username"); ?>" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo get_userinfo("look"); ?>&size=lrg&direction=3&head_direction=3&gesture=sml&size=m" />

        </a>    </div>    <div id="name-box" class="info-box">        <div class="label">Nome:</div>        <div class="content"><?php echo get_userinfo("username"); ?></div>    </div>    <div id="motto-box" class="info-box">        <div class="label">Motto:</div>        <div class="content"><?php echo $language['waths_on_your_mind_today']; ?></div>    </div>    <div id="last-logged-in-box" class="info-box">        <div class="label" style="color:red">Staff Today:</div>        <div class="content">Hi, New Updates!</div>    </div>

<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="client" onclick="HabboClient.openOrFocus(this); return false;">Enter in Habbo </b><i></i></a>
	<b></b>    </div>
</div>
<div style="width:300px;margin-top:102px;font-size:12px;text-align:center;padding-top:7px;padding-bottom:13px;float:right;color:white;width:300;height:28;background-image:url(/images/infoinfo.png);background-repeat:no-repeat">
<span>
<b><span style="color:orange"><?php echo $language['credits']; ?> </span><?php echo get_userinfo("credits"); ?><span style="padding-left:25px"><span style="color:orange"><?php echo $language['pixels']; ?> </span><?php echo get_userinfo("pixels"); ?></span></b></span>
</div></div>
<script src="./web-gallery/js/lightweightmepage.js" type="text/javascript"></script>
<link rel="stylesheet" href="./web-gallery/static/styles/mepage.css" type="text/css">

<?php 
	$query_display = mysql_query("SELECT * FROM cms_news WHERE super_fader ='1'");
	$row_news = mysql_num_rows($query_display);
	?>
<div id="promo-box" style="display:<?php if ($row_news == 0) { echo'none'; }else{ echo'block'; } ?>;margin-left:-1px;margin-bottom:10px;">

    <div style="margin-top:10px;" id="promo-bullets"></div>

<?php
	$query = mysql_query("SELECT * FROM cms_news WHERE super_fader ='1' ORDER BY published DESC LIMIT 4");
	$c = 0;
	
	while($row = mysql_fetch_assoc($query)) { 
				$display = 'block';
			
			if ($c > 0)
			{
				$display = 'none';
			}
	echo '	
	
    <div class="promo-container" style="display: '.$display.'; background-image: url('.$row["super_fader_image"].');">
        <div class="promo-content">
            <div class="title"><a style="color: white;" href="articles.php?story='.$row["id"].'">'.stripslashes($row["title"]).'</a></div>
            <div class="body">'.strip_tags($row["shortstory"]).'</div>
        </div>
		<a href="" target="_blank" class="facebook-link"></a>
        <a href="http://twitter.com/#!/'.$twitter.'" target="_blank" class="twitter-link"></a>
<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="/client" target="ClientWndw">Enter in Hotel<i></i></a>
        <b></b>
    </div>
</div>
    </div>
	'; 
	$c++;
	
	}
	?>

</div>
<script type="text/javascript">
    document.observe("dom:loaded", function() { PromoSlideShow.init(); });
</script>
</div>
<!--    <div id="column1" class="column" style="width:769px;">
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix blue ">
	
							<h2 class="title">Chat
							</h2>
						<div id="community-content" style="margin-left:10px;margin-top:10px;">
<center><embed src="http://www.xatech.com/web_gear/chat/chat.swf" quality="high" width="730" height="330" name="chat" flashvars="id=168043494" align="middle"	allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://xat.com/update_flash.shtml" /></center>
</div>


						
							
					</div>
				</div>-->

<div id="column1" class="column" style="margin-top:10px;margin-left:0px;">

				<div class="habblet-container">
						<div class="cbb clearfix red">
						<div class="box-content">
<center>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=303535769703877";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://Claudi0.com.nu" data-num-posts="10" data-width="430"></div>

</div></div></div>


				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<div id="column2" class="column"  style="margin-left:1px;margin-top:13px;">
			     		
				<div class="habblet-container ">		
                               <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 310,
  height: 300,
  theme: {
    shell: {
      background: '#4a4d4f',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#4a4d4f',
      links: '#fc6304'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('<?php echo $twitter ?>').start();
</script>
                       <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>
                              
						
					
				</div>

<script type="text/javascript">    document.observe("dom:loaded", function() { PromoSlideShow.init(); });</script> 

				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

			     		
			
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
    </div>
</div>

<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script><noscript><img src="http://pixel.quantserve.com/pixel/p-b5UDx6EsiRfMI.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/></noscript><!-- End Quantcast tag -->
</body>
</html>




