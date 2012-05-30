<?php
require_once('../includes/core.php');
if($_POST['email'] == NULL || $_POST['bdday'] == NULL || $_POST['bdmonth'] == NULL || $_POST['bdyear'] == NULL || $_POST['password'] == NULL)
header("Location: ../index.php");
$_SESSION['register'] = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo get_title(); ?> - Add Avatar </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo RSS" href="http://www.habbo.com.br/articles/rss.xml" />
<meta name="csrf-token" content="cb96221f65"/>
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/embed.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/embed.js" type="text/javascript"></script>

<link rel="stylesheet" href="/styles/local/br.css" type="text/css" />

<script src="/js/local/br.js" type="text/javascript"></script>

<script type="text/javascript">

var ad_keywords = "gender%3Am,age%3A15";

var ad_key_value = "kvage=15;kvgender=m;kvtags=";

</script>

<script type="text/javascript">
document.habboLoggedIn = true;
var habboName = "Dr.Elm";
var habboId = 41608091;
var facebookUser = true;
var habboReqPath = "";
var habboStaticFilePath = "http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery";
var habboImagerUrl = "http://www.habbo.com.br/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.com.br/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "0030ddd6e987258dd74bb7e12019dde4c4adea1b";
    HabboClient.maximizeWindow = true;
}


</script>

<meta property="fb:app_id" content="155102069619" />

<meta property="og:site_name" content="Habbo Hotel" />
<meta property="og:title" content="Habbo Adicionar novo personagem" />
<meta property="og:url" content="http://www.habbo.com.br" />
<meta property="og:image" content="http://www.habbo.com.br/v2/images/facebook/app_habbo_hotel_image.gif" />
<meta property="og:locale" content="pt_BR" />

<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/common.css" type="text/css" />
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/avatarselection.css" type="text/css" />

<meta name="description" content="Habbo Hotel: faça amigos, divirta-se e fique conhecido!" />
<meta name="keywords" content="habbo hotel, virtual, mundo, comunidade virtual, grátis, comunidade, avatar, bate papo, online, jovem, rpg, entre, social, grupos, fóruns, seguro, jogue, jogos, online, amigos, jovens, raros, mobis raros, colecionar, expressão, emblemas, diversão, música, celebridade, visita de famosos, celebridades, mmo, mmorpg, rpg online" />



<!--[if IE 8]>
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/ie6.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="63-BUILD1392 - 28.05.2012 15:44 - br" />
</head>

<body id="embedpage">
<div id="overlay"></div>




<script type="text/javascript">

HabboView.add( function() {

     ChangePassword.init();





});

</script><div id="container">

			<script type="text/javascript"> 
				function doUpdateImage( incoming ) {
					$('#figure').val(incoming.rel);
					document.getElementById('main_reg_img').src = 'http://www.habbo.com/habbo-imaging/avatarimage?figure=' + incoming.rel + '&size=b&direction=2';
					return false;
				}
				
				function enableField() {
					$('#username').val($('#habbo_name_field').val());
					document.getElementById('register-button').disabled=false;
				}
 
				function disableField() {
					$('#username').val('');
					document.getElementById('register-button').disabled=true;
				}
 
				function doCheckHabboName() {
					name = $("#habbo_name_field").val();
					
					if( name.length < 3 ) {
						$("#habbo_name_message_box").html("Username");
						$("#habbo_name_message_box").removeClass().addClass("errormsg");
						disableField();
							
						return false;
					}
					
					$.get("namecheck.php", {ajaxAct: "check_habbo_name", habbo_name: name}, function(data) {
						if( $.trim(data) == "1" ) {
							$("#habbo_name_message_box").html("Name Avaliable");
							$("#habbo_name_message_box").removeClass().addClass("goodmsg");
							enableField();
						} else {
							$("#habbo_name_message_box").html("Name Not Avaliable");
							$("#habbo_name_message_box").removeClass().addClass("errormsg");
							disableField();
						}
					});
				}
				
				$('#habbo_name_field').keypress(function(e){
					if(e.which == 13){
						doCheckHabboName();
					}
				});
				
				$('#habbo_name_field').blur(function(e){
					doCheckHabboName();
				});
				</script>



  <div id="add-avatar">

    <div class="add-avatar-container clearfix">

        <div class="title">

          <span class="habblet-close"></span>

          <h1>Add Avatar</h1>

        </div>

        <div id="content">

          



            <input type="hidden" name="__app_key" value="cb96221f65" />



            <div id="error-messages-container" style="margin-top: 10px" class="errormsg display_none">

            </div>



            <div id="name-field-container">

                <div class="field field-habbo-name">

                  <label for="habbo-name">Username</label>

                  <a href="#" class="new-button" id="check-name-btn" onmousedown="this.style.backgroundColor='#ddd'; doCheckHabboName();"><b>Checar</b><i></i></a>

                  <input type="text" id="habbo-name" size="32" value="" name="bean.avatarName" class="text-field" maxlength="32"/>

                    <div id="name-suggestions">

                    </div>

                  <p class="help">Seu nome pode conter minúsculas, maiúsculas, números e caracteres  - =?!@:.</p>

                </div>

            </div>

            <div id="avatar-field-container" class="clearfix">


                <div id="avatar-choices">

                  <h3>Girls</h3> 
						<?php
						$query = mysql_query("SELECT * FROM cms_registration_figures WHERE gender = 'f' ORDER BY RAND() LIMIT 11");
						while($figure = mysql_fetch_array($query))
						{
							echo '<a class="female-avatar" onclick="doUpdateImage(this); return false;" rel="'.$figure["figure"].'"><img src="http://www.habbo.com/habbo-imaging/avatarimage?figure='.$figure["figure"].'&direction=4&size=s" width="33" height="56"/></a>';
						}
						?>
                        <h3>Boys</h3> 
						<?php
						$query = mysql_query("SELECT * FROM cms_registration_figures WHERE gender = 'm' ORDER BY RAND() LIMIT 11");
						while($figure = mysql_fetch_array($query))
						{
							echo '<a class="male-avatar" onclick="doUpdateImage(this); return false;" rel="'.$figure["figure"].'"><img src="http://www.habbo.com/habbo-imaging/avatarimage?figure='.$figure["figure"].'&direction=4&size=s" width="33" height="56"/></a>';
						}
						?>

                    
                </div>

            </div>

            <br clear="all"/>

            

         

        <form id="register_step_two" method="post" action="complete.php">
                	<?php if($_POST['character'] == '1')
					echo  '<input type="hidden" name="character" id="character" value="1" />';
					?>
					<input type="hidden" name="email" id="email" value="<?php echo($_POST['email']); ?>" />
					<input type="hidden" name="bdday" id="bdday" value="<?php echo($_POST['bdday']); ?>" />
					<input type="hidden" name="bdmonth" id="bdmonth" value="<?php echo($_POST['bdmonth']); ?>" />
					<input type="hidden" name="bdyear" id="bdyear" value="<?php echo($_POST['bdyear']); ?>">
					<input type="hidden" name="username" id="username" value="" />
					<input type="hidden" name="figure" id="figure" value="hr-515-45.hd-600-8.ch-884-76.lg-696-76.sh-740-76.ea-1401-76.ca-1815-62.wa-2011" />
					<input type="hidden" name="password" id="password" value="<?php echo($_POST['password']); ?>" />
					<input type="submit" id="done-btn" class="new-button green-button" value="Complete" id="register-button" onmousedown="this.style.backgroundColor='##ddd';" onmouseup="this.style.backgroundColor='##eee';" onmouseover="this.style.backgroundColor='##eee';" onmouseout="this.style.backgroundColor='##fff';" disabled="disabled" />	
				</form>

        </div>

    </div>

    <div class="add-avatar-container-bottom"></div>

  </div>
<script type="text/javascript">
        Embed.decorateFooterLinks();
    </script>
</div>
<script type="text/javascript">
if (typeof HabboView != "undefined") {
	HabboView.run();
}
</script>


<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-448325-21']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>    

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

<!-- HL-16707 -->
<script type="text/javascript">
if ((Math.random()*100) < 1) {
var fullPageLoadMeasure = (new Date()).getTime() - andSoItBegins;
pageTracker._trackEvent("timing","fullpage_millis",window.location.pathname,fullPageLoadMeasure);
}
</script>

<!-- HL-30554 -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1036490139;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "0ETsCO_z3gIQm6ue7gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1036490139/?label=0ETsCO_z3gIQm6ue7gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
    
    
        


</body>
</html>