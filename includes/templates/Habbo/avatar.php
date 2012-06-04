<?php
$username = $core->EscapeString($_SESSION['id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo get_title(); ?> - Avatars </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo RSS" href="http://www.habbo.com.br/articles/rss.xml" />
<meta name="csrf-token" content="42d3b9b9d5"/>
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
    HabboClient.windowName = "c11348fafb3817e135653636467265efdf322f6d";
    HabboClient.maximizeWindow = true;
}


</script>

<meta property="fb:app_id" content="155102069619" />

<meta property="og:site_name" content="Habbo Hotel" />
<meta property="og:title" content="Habbo Escolha seu avatar" />
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

    <div id="select-avatar">

	<div class="pick-avatar-container clearfix">

        <div class="title">

            <span class="habblet-close"></span>

            <h1>Avatars</h1>

        </div>

		<div id="content">

            <div id="user-info">

                  <img src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/174517_100000405189098_958370194_q.jpg"/>

              <div>

                  <div id="name"><?php echo get_userinfo("username"); ?></div>

                  <a href="/me" id="logout">Back to Hotel</a>

                

              </div>



            </div>
			<script language="javascript"> 
	(function($){
		$(document).ready(function() {
			$('.avatar').click(function()  {
				var Name = $(this).attr('alt');
				var Figure = $(this).attr('figure');
				var LoginDate = $(this).attr('lastlogin');
				container = '.CurrentAvatar';
				$(container).fadeOut(500, function () {
					$('#CharName').html(Name)
					$('.Mainavatar').html('<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=' + Figure + '" alt="' + Name + '" />')
					$('.LastLogin').html('Last Login: ' + LoginDate)
					$(container).fadeIn(500)
				});
				return;
			});

			$('.LoginButton').click(function()  {
				var Name = $('#CharName').html();
				location.href='./includes/functions/userlogin.php?name=' + Name;
				return;
			});

		});
		
	})(jQuery);
	</script>
            <div id="first-avatar" class="CurrentAvatar">

                    <div class="Mainavatar"><img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo get_userinfo("look"); ?>&size=lrg&direction=3&head_direction=3&gesture=sml&size=m" width="64" height="110"/></div>

                    <div id="first-avatar-info">

                        <div class="first-avatar-name" id="CharName"><?php echo get_userinfo("username"); ?></div>

                        <div class="first-avatar-lastonline">Last Access: <span title="30/05/12 14:36"><div class="LastLogin"><?php echo get_userinfo("lastaccess"); ?></div></span></div>

                        <a id="first-avatar-play-link" href="/me">

                            <div class="play-button-container">

                                <div class="play-button"><div class="play-text"><div class="LoginButton">Play</div></div></div>

                                <div class="play-button-end"></div>

                            </div>

                        </a>

                    </div>

            </div>



            

<form id="link-new-avatar" method="post" action="./includes/functions/addavatar.php">
            	<input type="hidden" name="character" id="character" value="1" />
				<input type="hidden" name="email" id="email" value="<?php echo get_userinfo("username"); ?>" />
				<input type="hidden" name="bdday" id="bdday" value="why" />
				<input type="hidden" name="bdmonth" id="bdmonth" value="are" />
				<input type="hidden" name="bdyear" id="bdyear" value="you" />
				<input type="hidden" name="password" id="password" value="LookingHere" />
				<div id="link-new-avatar"><a class="new-button " onclick="Add_Avatar.submit();"><b>+ Add</b><i></i></a></div>
				
			</form>


<p style="margin: 20px 10px">Podes adicionar mais N Habbos</p>
            <div class="other-avatars">

                  <ul>
				  <?php
				  $uutu = $core->get_userinfo('mail');
			$userq = mysql_query("SELECT * FROM `users` WHERE `mail` LIKE '$uutu' LIMIT 5");
			while($user = mysql_fetch_array($userq))
			{
				echo '<li class="even"><img src="http://www.habbo.com/habbo-imaging/avatarimage?figure='.$user["look"].'&size=s" figure="'.$user["look"].'" alt="'.$user["username"].'" class="avatar" lastlogin="'.@date("d-m-Y", $user["last_online"]).'" />
				 <div class="avatar-info">

                        <div class="avatar-info-container">

                          <div class="avatar-name">"'.$user["username"].'"</div>

	            	      <div class="avatar-lastonline">Last Acces: <span title="14/02/12 22:18">"'.$user["lastaccess"].'"</span></div>

                        </div>

                          <div class="avatar-select"><a href=/includes/functions/userlogin.php?name='.$user["username"].'><b>Play</b><i></i></a></div>

                      </div></li>
				
				';
			}
			?>

                   

                  </ul>

            </div>

        </div>

    </div>

    <div class="pick-avatar-container-bottom"></div>

  </div>
<div id="footer">
	<p class="footer-links"><a href="mailto:advertising.br@sulake.com" taget="_new">Anuncie</a> | <a href="https://help.habbo.com.br" target="_new">Contate-nos</a> | <a href="https://help.habbo.com.br/forums" target="_new">FAQs</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.com.br/entries/20477982-termos-e-condicoes" target="_new">Termos e Condições</a> | <a href="https://help.habbo.com.br/entries/390888-politica-de-privacidade" target="_new">Política de Privacidade</a> | <a href="http://www.habbo.com.br/groups/guiapais" target="_new">Guia dos Pais</a> | <a href="http://www.habbo.com.br/groups/etiquetahabbo" target="_new">Habbo Etiqueta</a> | <a href="/groups/dicasdeseguranca">Segurança</a></p>
	<p class="copyright">© 2008 - 2010 Sulake Corporation Ltd. HABBO é marca registrada da Sulake Corporation Oy na União Européia, EUA, Japão, China e várias outras jurisdições. Todos os direitos reservados.</p>
</div>    <script type="text/javascript">
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