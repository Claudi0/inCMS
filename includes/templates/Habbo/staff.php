<?php
$page['id']="1";
$page['sub_id']="1";
$page['name']="Staff";
$page['redirect']="1";
require_once("./includes/core.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo get_title(); ?> - Staff</title><script type="text/javascript">
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
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
<script src="web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="web-gallery/static/js/fullcontent.js" type="text/javascript"></script>
<script src="web-gallery/static/js/libs2.js" type="text/javascript"></script>
<link rel="stylesheet" href="./web-gallery/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="./web-gallery/v2/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="./web-gallery/v2/styles/tooltips.css" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="<?php $sitename; ?> News RSS" href="./rss.php"/>
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
		<h1><a href="<?php echo get_settings('hotel_url'); ?>/"></a></h1>
<div id="subnavi">     <div id="subnavi-search">
         <div id="subnavi-search-upper">

               <ul id="subnavi-search-links">

                               
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
 </script><ul id="navi">        <li>
                   <strong>
                           <?php echo get_userinfo("username"); ?> ( <img src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/v2/images/rpx/icon_habbo_small.png" style="margin-bottom:-2px;" /> )</i>
                   </strong>
                 <span></span>
               </li>
<li class="metab selected">
<strong>
			Community
			 </strong>
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
			<li>
				<a href="/staff">News</a>
				
			</li class="selected">
			<li>
				Staff
				
			</li>
	</ul>
    </div>
</div>

<div id="container">
	<div id="content">
    <div id="column1" class="column">
				<div class="habblet-container ">
<?php
			$rankq = mysql_query("SELECT * FROM `ranks` WHERE id >= 3 ORDER BY id DESC");
			while($rank = mysql_fetch_array($rankq))
			{
				?>
<div class="cbb clearfix red ">

							<h2 class="title"><span style="float: left;"><?php echo $rank['name']; ?></span></h2>
		<div class="habblet box-content">

                <?php
			$staffq = mysql_query("SELECT * FROM users WHERE rank = ".$rank['id']." ORDER BY rank DESC");
			while($staff = mysql_fetch_array($staffq))
			{
				?>
					<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $staff['look']; ?>" alt="<?php echo $staff['usuario']; ?>" style="float:left" />
					<div class="OnlineStatus">
						<?php
						if($staff['isonline'] == 1)
						{
						?>
							<div class="Online"><img src="./web-gallery/images/online.gif" alt="Online" /></div>
						<?php
						}
						else
						{
						?>
							<div class="Offline"><img src="./web-gallery/images/offline.gif" alt="Online" /></div>
						<?php
						}
						?>
					<div class="Usersname"><a href="home.php?u=<?php echo $staff['username']; ?>"><?php echo $staff['username']; ?></a></div>
					<div class="Usersmotto"><?php echo $staff['motto']; ?></div>
					<img src="./web-gallery/badges/<?php echo $rank['badgeid']; ?>.gif" alt="Teen Staff" />
				</div>
            <?php
			}
			echo('</div></div>');
			}
			?>







</div>


					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>




	
    
				

				
				

</div>
<div id="column2" class="column">

				<div class="habblet-container ">
						<div class="cbb clearfix red ">

							<h2 class="title">Who are the members of the Staff?
							</h2>
						<div id="notfound-looking-for" class="box-content">
<img src="http://images.habbo.com/c_images/album1584/ADM.gif" align="right">

					<p class="">Members of the team staff, are the users that are in the hotel to keep everything in order to make events, and to moderate the hotel.</p>

    </div>

</div>
					</div><script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>


				
				
				



				<div class="habblet-container ">
						<div class="cbb clearfix red ">

							<h2 class="title">NOTICE
							</h2>
						<div id="notfound-looking-for" class="box-content">

					<p class=""><i>The staff is not looking, so if the hotel and "looking for new members will communicate the 'via News.</i><br>
<br>
-<b>The Staffs</b></p>

    
</div>
</div>
					</div><script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>

                                


