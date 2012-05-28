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
			<li>
				Home
				
			</li>
			<li>
				<a href="/profile">Profile</a>
				
			</li>
			<li class="selected">
				<a href="/home">My Page</a>
				
			</li>
	</ul>

    </div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
    <div id="mypage-wrapper" class="cbb blue">
<div class="box-tabs-container box-tabs-left clearfix">
    <h2 class="page-owner"><?php echo get_userinfo("username"); ?> </h2>
    <ul class="box-tabs"></ul>
</div>
	<div id="mypage-content">
			<div id="mypage-bg" class="b_bg_pattern_abstract2">
				<div id="playground">



<div class="movable widget ProfileWidget" id="widget-6195436" style=" left: 457px; top: 26px; z-index: 2;">
<div class="w_skin_defaultskin">
	<div class="widget-corner" id="widget-6195436-handle">
		<div class="widget-headline"><h3><span class="header-left">&nbsp;</span><span class="header-middle">My Page</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
	<div class="profile-info">
		<div class="name" style="float: left">
		<span class="name-text"><?php echo get_userinfo("username"); ?> </span>
			<img id="name-10695383-report" class="report-button report-n"
				alt="report"
				src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1064/web-gallery/images/myhabbo/buttons/report_button.gif"
				style="display: none;" />
		</div>

		<br class="clear" />
<?php
						if(get_userinfo($username, 'isOnline') == 1)
						{
						?>
							<img alt="Online" src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1064/web-gallery/images/myhabbo/profile/habbo_online.gif" />
						<?php
						}
						else
						{
						?>
							<img alt="offline" src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1064/web-gallery/images/myhabbo/profile/habbo_offline.gif" />
						<?php
						}
						?>
			
		<div class="birthday text">
			Registerd in
		</div>
		<div class="birthday date">
			<?php echo get_userinfo("registered"); ?>
		</div>
		<div>
        	
            
        </div>
	</div>
	<div class="profile-figure">
			<img alt="claudio398" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo get_userinfo("look"); ?>&size=lrg&direction=3&head_direction=3&gesture=sml&size=m" />
	</div>
	<br clear="all" style="display: block; height: 1px"/>

    <script type="text/javascript">
		document.observe("dom:loaded", function() {
			new ProfileWidget('10695383', '10695383', {
				headerText: "Bist du sicher?",
				messageText: "Bist du sicher, dass du <strong\>claudio398</strong\> fragen möchtest, ob er/sie dein Freund wird? Sei dir sicher, bevor du OK klickst!",
				loginText: "Du musst dich einloggen, um eine Freundschaftsanfrage zu senden.",
				buttonText: "OK",
				cancelButtonText: "Abbrechen"
			});
		});
	</script>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>


<script type="text/javascript">	
document.observe("dom:loaded", function() {
	new GroupsWidget('10695383', '6195434');
});
</script>


<div class="movable widget BadgesWidget" id="widget-6195437" style=" left: 12px; top: 21px; z-index: 4;">
<div class="w_skin_goldenskin">
	<div class="widget-corner" id="widget-6195437-handle">
		<div class="widget-headline"><h3><span class="header-left">&nbsp;</span><span class="header-middle">Badges</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
    <div id="badgelist-content">
    <ul class="clearfix">
			<?php
		$userbadges = mysql_query("SELECT * FROM users_badges WHERE userid = '".$core->get_userinfo("username")."'");
		if(mysql_num_rows($userbadges) == 0)
		{
			echo '<strong><center>No Badges</center></strong>';
		}
		while($userbadge = mysql_fetch_array($userbadges))
		{
		?>
            <li style="background-image: url(//habbo.hs.llnwd.net/c_images/album1584/<?php echo $userbadge['badge_id']; ?>.gif)"></li>
        <?php
		}
		?>
    </ul>


    </div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>



<div class="movable widget RoomsWidget" id="widget-6195433" style=" left: 450px; top: 319px; z-index: 1;">
<div class="w_skin_defaultskin">
	<div class="widget-corner" id="widget-6195433-handle">
		<div class="widget-headline"><h3><span class="header-left">&nbsp;</span><span class="header-middle">Rooms</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">

<div id="room_wrapper">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" >
</td>
<td >
      
					 <?php
		$userrooms = mysql_query("SELECT * FROM rooms WHERE ownerid = '".$core->get_userinfo("id")."'");
		$color = 'odd';
		if(mysql_num_rows($userrooms) == 0)
		{
			echo '<div class="room_name" id="even"><strong>No Rooms</strong></div>';
		}
		while($userroom = mysql_fetch_array($userrooms))
		{
			?>
			
		<div class="room_image">
				<img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1064/web-gallery/images/myhabbo/rooms/room_icon_open.gif" alt="" align="middle"/>
		</div>
			<div class="room_name" id="<?php echo $color; ?>">
            <strong><?php echo $userroom['name']; ?></strong></div>
			<img id="room-20727724-report" class="report-button report-r"
						alt="report"
						src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/images/myhabbo/buttons/report_button.gif"
						style="display: none;" />
            <br /><br>Room Rating: <?php echo $userroom['score']; ?>
            
            <?php
			if($color == 'odd')
			$color='even';
			else
			$color='odd';
		}
		?>
        	</div>
		<br class="clear" />

</td>
</tr>
</table>
</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
					
				</div>
				<div id="mypage-ad">
    <div class="habblet ">
<div class="ad-container">
<!--JavaScript Tag // Tag for network 957: Sulake // Website: HabboHotel_DE // Page: MyPage // Placement: MyPage_Sky (2195294) // created at: Oct 7, 2009 4:05:46 PM-->

<script language="javascript">

<!--

if (window.adgroupid == undefined) {

	window.adgroupid = Math.round(Math.random() * 1000);

}

if (window.adkeywords == undefined) {

    if (typeof(ad_keywords) == 'undefined') {

        window.adkeywords = '';

    } else {

        window.adkeywords = ad_keywords.split(',').join('+');

    }

}

if (typeof(ad_key_value) == 'undefined') {

    ad_key_value = "";

}

document.write('<scr'+'ipt language="javascript1.1" src="http://adtech.habbo.com/addyn|3.0|957.1|2195294|0|154|ADTECH;cookie=info;loc=100;target=_blank;key='+window.adkeywords+';'+ad_key_value+';grp='+window.adgroupid+';misc='+new Date().getTime()+'"></scri'+'pt>');

//-->

//-->

</script><noscript><a href="http://adtech.habbo.com/adlink|3.0|957.1|12195294|0|154|ADTECH;loc=300;alias=;cookie=info;" target="_blank" target="_blank"><img src="http://adtech.habbo.com/adserv|3.0|957.1|2195294|0|154|ADTECH;loc=300;alias=;cookie=info;" border="0"></a></noscript>

<!-- End of JavaScript Tag -->
</div>
    
    </div>
				</div>
			</div>
	</div>
</div>

<script type="text/javascript">
	Event.observe(window, "load", observeAnim);
	document.observe("dom:loaded", function() {
		initDraggableDialogs();
        repositionInvalidItems();
	});
</script>
    </div>
<div id="footer">
	<p class="footer-links"><a href="https://help.habbo.de" target="_new">Kontakt</a> | <a href="http://www.habbo.de/groups/werbepartner" target="_new">Werben auf Habbo</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.de/entries/21282092-nutzungsbedingungen" target="_new">Nutzungsbedingungen</a> | <a href="https://help.habbo.de/entries/21314863-datenschutzerklarung" target="_new">Datenschutzerklärung</a> | <a href="https://help.habbo.de/entries/21271731-impressum" target="_new">Impressum</a> | <a href="http://www.habbo.de/groups/sicherheitshinweise">Sicherheitshinweise</a> | <a href="http://www.habbo.de/groups/fuereltern" target="_new">Für Eltern</a> | <a href="http://www.habbo.de/groups/teilnahmebedingungen" target="_new">Teilnahmebedingungen für Gewinnspiele</a> | <a href="https://help.habbo.de/entries/21271731-impressum" target="_new">Impressum</a></p>
	<p class="copyright">© 2011 Sulake Corporation Oy. HABBO ist eine eingetragene Marke der Sulake Corporation Oy in Europa, den USA, Japan, China und weiteren Gerichtsständen. Alle Rechte vorbehalten.</p>
</div></div>

</div>

	 

</body>
</html>
