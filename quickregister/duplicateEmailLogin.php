<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="register_email_password";
$page['redirect']="0";
require_once("../includes/core.php");
if(isset($_SESSION['step'])){
if($_SESSION['step']==3){
header("location: captcha");
exit;
}else{
$_SESSION['step']=2;
}
}else{
$_SESSION['step']=1;
header("location: age_gate/e/05x");
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo get_title(); ?></title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="http://www.habbo.es<?php echo get_settings("hotel_url"); ?>web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo: RSS" href="http://www.habbo.es/articles/rss.xml" />
<meta name="csrf-token" content="faeeac3f13"/>
<link rel="stylesheet" href="<?php echo get_settings("hotel_url"); ?>web-gallery/static/styles/common.css" type="text/css" />
<script src="<?php echo get_settings("hotel_url"); ?>web-gallery/static/js/libs2.js" type="text/javascript"></script>

<script src="<?php echo get_settings("hotel_url"); ?>web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo get_settings("hotel_url"); ?>web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="<?php echo get_settings("hotel_url"); ?>web-gallery/static/js/common.js" type="text/javascript"></script>


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
var habboDefaultClientPopupUrl = "<?php echo get_settings("hotel_url"); ?>client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "92530166a31aa000b11fc7a5f023d959fb41a8dc";
    HabboClient.maximizeWindow = true;
}


</script>

<link rel="stylesheet" href="<?php echo get_settings("hotel_url"); ?>web-gallery/static/styles/quickregister.css" type="text/css" />
<script src="<?php echo get_settings("hotel_url"); ?>web-gallery/static/js/quickregister.js" type="text/javascript"></script>

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
<meta name="build" content="63-BUILD1080 - 24.01.2012 23:05 - es" />

</head>

<body id="client">
<div id="overlay"></div>
<img src="<?php echo get_settings("hotel_url"); ?>web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border">¿Contraseña olvidada?</div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="https://www.habbo.es/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/quickregister/duplicateEmailLogin?changePwd=true" />

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
<div id="main-container" class="login">

<div class="cbb">
    <div id="alert-container" class="rounded">
        <div id="alert-title" class="notice">
            Esta cuenta ya existe
        </div>
        <div id="alert-text">

            ¿Intentas crear una nueva Habbo cuenta? Regístrate con tu cuenta actual y añade más personajes a través de Ajustes / Ajustes Habbo Cuenta.
        </div>
    </div>
</div>

    <div id="title">
        Registro en Habbo
    </div>

    <div id="inner-container" class="clearfix">
        <form method="post" action="https://www.habbo.es/quickregister/login_submit" id="quickregister-login" method="post" onsubmit="Overlay.show(null,'Cargando...');">

            <input type="hidden" name="emailOnlyLogin" value="true" />

                <input type="hidden" name="next" value="/identity/add_avatar"/>



            <div id="login-container" class="field-content clearfix">
                <div class="left">
                    <div class="field">
                        <div class="label" class="login-text">Email:</div>

                        <input type="text" id="login-username" name="credentials.username" value="<?php if(isset($_SESSION['bean_email'])){echo $_SESSION['bean_email'];} ?>"  />
                    </div>
                    <div class="field">
                        <div class="label" class="registration-text">Contraseña:</div>
                        <input type="password" name="credentials.password" id="login-password" maxlength="32" value="" />
                    </div>
                    <div id="login-forgot-password">
                        <a href="https://www.habbo.es/account/password/forgot" id="forgot-password"><span>¿Contraseña olvidada?</span></a>

                    </div>
                </div>
                <div class="right text-right">
                </div>
            </div>
            <input type="submit" style="position:absolute; margin: -1500px;"/>            
        </form>
    </div>

    <div id="select">

            <a href="<?php echo get_settings("hotel_url"); ?>quickregister/backToAccountDetails" id="back-link">Atrás</a>
        <div class="button">
            <a id="proceed-button" href="#" class="area">Finalizar</a>
            <span class="close"></span>
        </div>
   </div>
</div>

<script type="text/javascript">
        if ($("login-username").value.length == 0) {
            $("login-username").focus();
        } else {
            $("login-password").focus();
        }


    if (!!$("back-link")) {
        Event.observe($("back-link"), "click", function() {
            Overlay.show(null,'Cargando...');
        });
    }

    Event.observe($("proceed-button"), "click", function() {
        Overlay.show(null,'Cargando...');
        $("quickregister-login").submit();
    });

</script>



<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-448325-19']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html>