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
}elseif($_SESSION['step']==2){
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

<<script type="text/javascript">
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
<meta name="build" content="63-BUILD906 - 16.11.2011 11:59 - es" />
</head>

<body id="client" class="background-accountdetails-<?php if($_SESSION['bean_gender']=="F"){echo "fe";}?>male">
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
    <div class="step2focus"><?php echo $language['account_details']; ?></div>
    <div class="step3"><?php echo $language['security_check']; ?></div>
    <div class="stephabbo"></div>
</div>

<div id="main-container">

<?php
if(isset($_GET['error'])){
if($_GET['error']=="06x"){
?>
<div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">
                    <?php echo $language['please_enter_a_valid_email_address']; ?> <br />
               </div>

            </div>
        </div>
<?php
}elseif($_GET['error']=="07x"){
?>
<div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">
                    <?php echo $language['emails_dont_match']; ?> <br />
               </div>

            </div>
        </div>
<?php
}elseif($_GET['error']=="09x"){
?>
<div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">
                    <?php echo $language['please_accept_the_terms_of_service']; ?> <br />
               </div>

            </div>
        </div>
<?php
}elseif($_GET['error']=="03x"){
if(isset($_SESSION['bean_error'])){
if($_SESSION['bean_error']==0){
?>
<div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">
                    <?php echo $language['please_enter_a_password']; ?> <br />
               </div>

            </div>
        </div>
<?php
}elseif($_SESSION['bean_error']==1){
?>
<div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">
                    <?php echo $language['your_password_needs_be_at_least_6_characters_long']; ?> <br />
               </div>

            </div>
        </div>
<?php
}elseif($_SESSION['bean_error']==2){
?>
<div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">
                    <?php echo $language['your_password_must_also_include_letters']; ?> <br />
               </div>

            </div>
        </div>
<?php
}elseif($_SESSION['bean_error']==3){
?>
<div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">
                    <?php echo $language['your_password_must_also_include_numbers']; ?> <br />
               </div>

            </div>
        </div>
<?php
}
}
}else{
?>
       <div id="error-placeholder"></div>
<?php
}
}else{
?>
	   <div id="error-placeholder"></div>
<?php
}
?>

        <form method="post" action="<?php echo get_settings("hotel_url"); ?>quickregister/email_password_submit" id="quickregister-form">

        <h2><?php echo $language['account_details']; ?></h2>

      <div id="inner-container">

        <div class="inner-content bottom-border">
            <div class="field">
                <label for="email-address"><?php echo $language['email_qr']; ?></label>
                <input type="text" id="email-address" name="bean.email" value="" <?php if(isset($_GET['error'])){if($_GET['error']=="06x"){echo"class=\"error\"";}} ?>/>
            </div>
            <div class="help"><?php echo $language['email_qr_help']; ?></div>

            <div class="field">
                <label for="email-address2"><?php echo $language['re_enter_email']; ?></label>
                <input type="text" id="email-address2" name="bean.retypedEmail" value="" <?php if(isset($_GET['error'])){if($_GET['error']=="07x"){echo"class=\"error\"";}} ?>/>
            </div>
            <div class="help"><?php echo $language['re_enter_email_help']; ?></div>

            <div id="password-field" class="field">
                <label for="register-password"><?php echo $language['password_qr']; ?></label>

                <input type="password" name="bean.password" id="register-password" maxlength="32" value="" <?php if(isset($_GET['error'])){if($_GET['error']=="03x"){echo"class=\"error\"";}} ?>/>
            </div>
            <div class="help"><?php echo $language['password_qr_help']; ?></div>
        </div>

        <div class="inner-content top-margin">
			<div class="field-content checkbox <?php if(isset($_GET['error'])){if($_GET['error']=="09x"){echo" error";}} ?>">

			  <label>
			    <input type="checkbox" name="bean.termsOfServiceSelection" id="terms" value="true" class="checkbox-field"/>
			    <?php echo $language['i_accept_the_terms_of_service']; ?>
			  </label>
			</div>            

			<div class="field-content checkbox">
			  <label>
							    <input type="checkbox" name="bean.marketing" id="marketing" value="true" checked="checked" class="checkbox-field"/>

			    <?php echo $language['keep_me_updated']; ?>
			  </label>
			</div>
			
			
			
        </div>
      </div>
    </form>


  <div id="select">
        <div class="button">
            <a id="proceed-button" href="#" class="area"><?php echo $language['next_qr']; ?></a>

            <span class="close"></span>
        </div>
        <a href="../../quickregister/back" id="back-link"><?php echo $language['back_qr']; ?></a>
   </div>
</div>

<script type="text/javascript">
    document.observe("dom:loaded", function() {
        Event.observe($("back-link"), "click", function() {
            Overlay.show(null,'Cargando...');
        });
        Event.observe($("proceed-button"), "click", function() {
            Overlay.show(null,'Cargando...');            
            $("quickregister-form").submit();
        });
            $("email-address").focus();
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