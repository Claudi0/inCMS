<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="register_email_password";
$page['redirect']="0";
require_once("../includes/core.php");
if(isset($_SESSION['step'])){
if($_SESSION['step']==2){
header("location: email_password");
exit;
}elseif($_SESSION['step']==3){
}else{
$_SESSION['step']=1;
header("location: age_gate/e/05x");
exit;
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
<link rel="shortcut icon" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo RSS" href="http://www.habbo.com.br/articles/rss.xml" />
<meta name="csrf-token" content="2e9d1d9d35"/>
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/styles/common.css" type="text/css" />

<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/common.js" type="text/javascript"></script>



<script type="text/javascript">

var ad_keywords = "";

var ad_key_value = "";

</script>

<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery";
var habboImagerUrl = "http://www.habbo.com.br/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.com.br/client";
window.name = "607dde7a4007168fabf9c7b1fa9e771715395b4b";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "607dde7a4007168fabf9c7b1fa9e771715395b4b";
    HabboClient.maximizeWindow = true;
}


</script>

<meta property="fb:app_id" content="155102069619" />

<meta property="og:site_name" content="Habbo Hotel" />
<meta property="og:title" content="Habbo " />
<meta property="og:url" content="http://www.habbo.com.br" />
<meta property="og:image" content="http://www.habbo.com.br/v2/images/facebook/app_habbo_hotel_image.gif" />
<meta property="og:locale" content="pt_BR" />

<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/styles/quickregister.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/quickregister.js" type="text/javascript"></script>

    <script type="text/javascript" src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>

<meta name="description" content="Check into the world’s largest virtual hotel for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more…" />
<meta name="keywords" content="habbo hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />

<script src="//cdn.optimizely.com/js/13389159.js"></script>

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
<meta name="build" content="63-BUILD1070 - 19.01.2012 09:25 - com" />
</head>

<body id="client" class="background-captcha">
<div id="overlay"></div>
<img src="<?php echo get_settings("hotel_url"); ?>web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border"><?php echo $language['forgot_password']; ?></div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="./account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/?changePwd=true" />
                <span><?php echo $language['type_in_your_email']; ?></span>
                <div id="email" class="center bottom-border">

                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;"><?php echo $language['enter_correct_email']; ?></div>
                </div>
            </form>
            <div class="change-password-buttons">
                <a href="#" id="change-password-cancel-link"><?php echo $language['cancel']; ?></a>
                <a href="#" id="change-password-submit-button" class="new-button"><b><?php echo $language['send_email']; ?></b><i></i></a>

            </div>
        </div>
        <div id="change-password-email-sent-notice" style="display: none;">
            <div class="bottom-border">
                <span><?php echo $language['we_sent_email_password']; ?><br>
<br>

<?php echo $language['check_junk_folder']; ?></span>
                <div id="email-sent-container"></div>

            </div>
            <div class="change-password-buttons">
                <a href="#" id="change-password-change-link"><?php echo $language['change_password_change']; ?></a>
                <a href="#" id="change-password-success-button" class="new-button"><b><?php echo $language['change_password_success']; ?></b><i></i></a>
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
<div id="stepnumbers">
    <div class="stepdone"><?php echo $language['birthdate_and_gender']; ?></div>
    <div class="stepdone"><?php echo $language['account_details']; ?></div>
    <div class="step3focus"><?php echo $language['security_check']; ?></div>
    <div class="stephabbo"></div>
</div>

<div id="main-container">
<?php
if(isset($_GET['error'])){
if($_GET['error']=="12x"){
?>
<div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">
                    El código de seguridad no era válido. Por favor, inténtalo de nuevo. <br />
               </div>

            </div>
        </div>
<?php
}else{
?>
       <div id="error-placeholder"></div>
<?php
}
}else
{
?>
       <div id="error-placeholder"></div>
<?php
}
?>

    <h2>Avanza hacia el Hotel</h2>

        <div id="avatar-choices">

            <h3>Elige look para tu primera visita:</h3>
            <ul id="avatars">
<?php
$looks_query = mysql_query("SELECT look FROM users WHERE gender = '".$_SESSION['bean_gender']."' ORDER BY RAND() LIMIT 6");
while($looks_result = mysql_fetch_array($looks_query)){
?>
<li>
    <span class="bgtop"></span>
    <span class="bgbottom"></span>
    <img alt="<?php echo $looks_result['look']; ?>" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $looks_result['look']; ?>&size=b&direction=4&head_direction=4&crr=0&gesture=sml&frame=1" width="64" height="110"/>
</li>
<?php
}
mysql_free_result($looks_query);
?>

            </ul>
            <p style="clear: left;">
                ¿No te gusta ninguno?
                <a href="#" id="more-avatars">Mira más estilos.</a>

                <br/><span class="help">No te preocupes - podrás cambiar el look más tarde.</span>
            </p>
        </div>

    <div id="captcha-container">
        <h3>Una última cuestión de seguridad antes de acceder:</h3>
        <div id="captcha-image-container">
            <div id="recaptcha_image" style="background-image:url('<?php echo get_settings("hotel_url"); ?>captcha.jpg?t=<?php echo time(); ?>&register=1'); width: 200px; height: 60px;"></div>

        </div>
        <div id="captcha-reload-container">

            ¿No ves las palabras?
            <a id="recaptcha-reload" href="#" onclick="recaptcha_reload();">Prueba otro código</a>
        </div>
    </div>

    <div class="delimiter_smooth">
        <div class="flat">&nbsp;</div>

        <div class="arrow">&nbsp;</div>
        <div class="flat">&nbsp;</div>
    </div>

    <div id="inner-container">
        <form id="captcha-form" method="post" action="<?php echo get_settings("hotel_url"); ?>quickregister/captcha_submit" onsubmit="Overlay.show(null,'Loading...');">
            <div id="recaptcha-input-title">Escribe las dos palabras (separadas por un espacio):</div>
            <div id="recaptcha-input">
                <input type="text" tabindex="2" name="captchaResponse" id="recaptcha_response_field">

            </div>
                <input type="hidden" id="avatarFigure" name="bean.figure" value=""/>
        </form>
    </div>

    <div id="select">
        <a href="backToAccountDetails" id="back-link">Atrás</a>
        <div class="button">
            <a id="proceed-button" href="#" class="area">Finalizar</a>

            <span class="close"></span>
        </div>
   </div>

    <script type="text/javascript">
        document.observe("dom:loaded", function() {
            if ($("more-avatars")) {
                Event.observe($("more-avatars"), "click", function(e) {
                    Event.stop(e);
                    new Ajax.Updater("avatars", "/quickregister/refresh_avatars", {
                        onComplete: function (t) {
                            QuickRegister.initAvatarChooser();
                        }
                    });
                });
            }

            if($("proceed-button")) {
                $("proceed-button").observe("click", function(e) {
                    Event.stop(e);
                    Overlay.show(null,'Loading...');
                    $("captcha-form").submit();
                });

                Event.observe($("back-link"), "click", function() {
                    Overlay.show(null,'Loading...');
                });
            }

            $("recaptcha_response_field").focus();

            QuickRegister.initAvatarChooser();
        });	
		function recaptcha_reload(){
		document.getElementById("recaptcha_image").style.backgroundImage= "url('<?php echo get_settings("hotel_url"); ?>captcha.jpg?t=" + (new Date()).getTime() + "')";
		}
    </script>

</div>



<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-448325-2']);
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