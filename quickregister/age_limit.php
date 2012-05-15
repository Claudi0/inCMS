<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="register_age_gate";
$page['redirect']="0";
require_once("../includes/core.php");
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
<link rel="shortcut icon" href="<?php echo get_settings("hotel_url"); ?>web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo Hotel - RSS" href="http://www.habbo.com/articles/rss.xml" />
<meta name="csrf-token" content="42200b6c6a"/>
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
var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.com/client";
window.name = "8182213b3119947b32e43acd4e4e8dea9e0f5c0f";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "8182213b3119947b32e43acd4e4e8dea9e0f5c0f";
    HabboClient.maximizeWindow = true;
}


</script>

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
<meta name="build" content="63-BUILD906 - 16.11.2011 11:59 - com" />
</head>

<body id="client">
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
<link rel="stylesheet" href="<?php echo get_settings("hotel_url"); ?>web-gallery/static/styles/quickregister.css" type="text/css" />
<div id="main-container">

    <div id="inner-container">
        <div id="title" class="age-limit">
            <?php echo $language['we_are_sorry']; ?>
        </div>

        <div class="field-content clearfix">
            <div class="left">
                <div class="registration-text">
                    <?php echo $language['age_limit_text']; ?>
                </div>
            </div>
       </div>
    </div>

    <div class="button">

        <a id="close" href="#" class="area gray">
            <?php echo $language['close']; ?>
        </a>
        <span class="close gray"></span>
    </div>
</div>

<script language="JavaScript" type="text/javascript">
    Event.observe('close', 'click', function(event) {
            window.location = "<?php echo get_settings("hotel_url"); ?>";
    });
</script>



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