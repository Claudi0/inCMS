<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="logout_ok";
$page['redirect']="0";
require_once("./includes/core.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo get_title(); ?></title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo RSS" href="http://www.habbo.com.br/articles/rss.xml" />
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/styles/common.css" type="text/css" />
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/styles/process.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>

<link rel="stylesheet" href="/styles/local/br.css" type="text/css" />

<script type="text/javascript">
var ad_keywords = "";
var ad_key_value = "";
</script>
<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "<?php echo get_settings("hotel_url"); ?>web-gallery";
var habboImagerUrl = "http://www.habbo.es/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.es/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "client";
    HabboClient.maximizeWindow = true;
}


</script>

<meta property="fb:app_id" content="157382664122" />

<script language="JavaScript" type="text/javascript">
	document.logoutPage = true;
	</script>

<meta name="description" content="Habbo Hotel: haz amig@s, únete a la diversión y date a conocer." />
<meta name="keywords" content="habbo hotel, mundo, virtual, red social, gratis, comunidad, personaje, chat, online, adolescente, roleplaying, unirse, social, grupos, forums, seguro, jugar, juegos, amigos, adolescentes, raros, furni raros, coleccionable, crear, coleccionar, conectar, furni, muebles, mascotas, diseño de salas, compartir, expresión, placas, pasar el rato, música, celebridad, visitas de famosos, celebridades, juegos en línea, juegos multijugador, multijugador masivo" />



<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo get_settings("hotel_url"); ?>web-gallery/static/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="<?php echo get_settings("hotel_url"); ?>web-gallery/static/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php echo get_settings("hotel_url"); ?>web-gallery/static/styles/ie6.css" type="text/css" />
<script src="<?php echo get_settings("hotel_url"); ?>web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="63-BUILD678 - 22.08.2011 23:04 - es" />
</head>
<body id="logout" class="process-template">

<div id="overlay"></div>

<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border">¿Contraseña olvidada?</div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="https://www.habbo.es/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/account/logout_ok?changePwd=true" />
                <span>Por favor, introduce el email de tu Habbo cuenta:</span>

                <div id="email" class="center bottom-border">
                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;">Por favor, introduce un e-mail</div>
                </div>
            </form>
            <div class="change-password-buttons">
                <a href="#" id="change-password-cancel-link">Cancelar</a>
                <a href="#" id="change-password-submit-button" class="new-button"><b>Enviar email</b><i></i></a>

            </div>
        </div>
        <div id="change-password-email-sent-notice" style="display: none;">
            <div class="bottom-border">
                <span>Te hemos enviado un email a tu dirección de correo electrónico con el link que necesitas clicar para cambiar tu contraseña.<br>
<br>

¡NOTA!: Recuerda comprobar también la carpeta de 'Spam'</span>
                <div id="email-sent-container"></div>

            </div>
            <div class="change-password-buttons">
                <a href="#" id="change-password-change-link">Atrás</a>
                <a href="#" id="change-password-success-button" class="new-button"><b>Cerrar</b><i></i></a>
            </div>
        </div>
    </div>
    <div id="change-password-form-container-bottom"></div>

</div>

<script type="text/javascript">
HabboView.add( function() {
     ChangePassword.init();


});
</script>
<div id="container">
	<div class="cbb process-template-box clearfix">
		<div id="content" class="wide">
					<div id="header" class="clearfix">
						<h1><a href="http://www.habbo.es/"></a></h1>
<ul class="stats">
    <li class="stats-online"><?php if($language['show_iexcl']=="1"){ echo "¡"; } ?><span class="stats-fig"><?php echo get_users_online(); ?></span> <?php echo get_settings("hotel_name"); ?>s <?php echo $language['online_now']; ?></li>

</ul>
					</div>
			<div id="process-content">
	        	<div class="action-confirmation flash-message">
	<div class="rounded">
		<?php echo $language['you_have_successfully_signed_out']; ?>
	</div>
</div>

<div style="text-align: center">


        <div style="width:100px; margin: 10px auto"><a href="#" id="logout-ok" class="new-button fill"><b>OK</b><i></i></a></div>


<div id="column1" class="column">
			     		
				<div class="habblet-container ">		
	
						<div class="ad-container">
<?php echo get_ads("728x90"); ?>
</div>
	
						
					
				</div>

				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<div id="column2" class="column">
</div>
</div>

<script type="text/javascript">
document.observe("dom:loaded", function() {

    if (!!$("logout-ok")) {
	    Event.observe('logout-ok', 'click', function(e) {
		    Event.stop(e);
			    document.location.href='<?php echo get_settings("hotel_url"); ?>';
	    });
    }

    if (!!$("facebook-wall-logout-ok")) {
        Event.observe('facebook-wall-logout-ok', 'click', function(e) {
            Event.stop(e);
            top.location.href = 'http://www.facebook.com/apps/application.php?id=157382664122';
        });
    }

    Cookie.erase("habboclient");
    Cookie.erase("friendlist");

    HabboView.run();
});
</script>
<div id="footer">
<?php get_footer(); ?>
</div>			</div>
        </div>
    </div>
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