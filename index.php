<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="index";
$page['redirect']="0";
require_once("./includes/core.php");
if(file_exists('./install/install.php'))
header("Location: install/install.php");
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
<link rel="shortcut icon" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo RSS" href="http://www.habbo.com.br/articles/rss.xml" />
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/frontpage.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/landing.js" type="text/javascript"></script>



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
var habboDefaultClientPopupUrl = "<?php echo get_settings("hotel_url"); ?>client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "client";
    HabboClient.maximizeWindow = true;
}


</script>

<meta property="fb:app_id" content="157382664122" />

<style type="text/css">
        body {
             background-color: #000000;
            
        }
        #footer .footer-links   { color: #666666; }
            #footer .footer-links a { color: #ffffff; }
            #footer .copyright      { color: #666666; }
            #footer #compact-tags-container span, #footer #compact-tags-container a { color: #333333; }
    </style>

<meta name="description" content="Check into the world’s largest virtual hotel for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more…" />
<meta name="keywords" content="habbo hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />



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
<meta name="build" content="63-BUILD733 - 14.09.2011 12:49 - es" />
</head>


<body id="frontpage">

<div id="overlay"></div>

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

<div id="site-header">


    <form id="loginformitem" name="loginformitem" action="./account/submit" method="post">

    



        <div style="clear: both;"></div>

        <div id="site-header-content">

            <div id="habbo-logo"></div>

            <div id="login-form">


                <div id="login-form-email">
                    <label for="login-username"
                           class="login-text"><?php echo $language['email']; ?></label>
                    <input tabindex="3" type="text" class="login-field" name="username" id="login-username"
                           value="" maxlength="48"/>
						   
                    <input tabindex="6" type="checkbox" name="_login_remember_me" id="login-remember-me"
                           value="true"/>
                    <label for="login-remember-me"><?php echo $language['keep_me_logged_in']; ?></label>

<div id="landing-remember-me-notification" class="bottom-bubble" style="display:none;">
	<div class="bottom-bubble-t"><div></div></div>
	<div class="bottom-bubble-c">
                <?php echo $language['keep_me_logged_in_message']; ?>
	</div>
	<div class="bottom-bubble-b"><div></div></div>
</div>

                </div>

                <div id="login-form-password">
                    <label for="login-password" class="login-text"><?php echo $language['password']; ?></label>
                    <input tabindex="4" type="password" class="login-field" name="password"
                           id="login-password" maxlength="32"/>

                    <div id="login-forgot-password">
                        <a href="#" id="forgot-password"><span><?php echo $language['forgot_your_password']; ?></span></a>
                    </div>
                </div>

                <div id="login-form-submit">
                    <input type="submit" value="<?php echo $language['login']; ?>" class="login-top-button" id="login-submit-button"/>
                    <a href="#" tabindex="5" id="login-submit-new-button"><span><?php echo $language['login']; ?></span></a>
                </div>

            </div>

            <div id="rpx-login">
                <div>

<div id="fb-root"></div>
<script type="text/javascript">
    (function() {
        var e = document.createElement('script');
        e.async = true;
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
</script><script type="text/javascript">
    window.fbAsyncInit = function() {
        Cookie.erase("fbs_183096284873");
        FB.init({appId: '183096284873', status: true, cookie: true, xfbml: true});
        $(document).fire("fbevents:scriptLoaded");

    };
    window.assistedLogin = function(FBobject, optresponse) {
        
        Cookie.erase("fbs_183096284873");
        FB.init({appId: '183096284873', status: true, cookie: true, xfbml: true});

        permissions = 'user_birthday,email';
        defaultAction = function(response) {
            fbConnectUrl = "/facebook?connect=true";
            if (response.session) {
                window.location.replace(fbConnectUrl);
            }
        };

        if (typeof optresponse == 'undefined')
            FBobject.login(defaultAction, {perms:permissions});
        else
            FBobject.login(optresponse, {perms:permissions});

    };
</script>
<a class="fb_button fb_button_large" onclick="assistedLogin(FB); return false;">
    <span class="fb_button_text"><?php echo $language['login_with_facebook']; ?></span>
</a>
                </div>

                <div>

<div id="rpx-signin">
    <a class="rpxnow" onclick="return false;" href="https://login.habbo.com/openid/v2/signin?token_url=http%3A%2F%2Fwww.habbo.com/rpx"><?php echo $language['more_ways_to_login']; ?></a>

</div>                </div>

            </div>

<noscript>
<div id="alert-javascript-container">
    <div id="alert-javascript-title">
        <?php echo $language['missing_javascript_support']; ?>
    </div>
    <div id="alert-javascript-text">
        <?php echo $language['alert_javascript_text']; ?>
    </div>
</div>
</noscript>

<div id="alert-cookies-container" style="display:none">
    <div id="alert-cookies-title">
		<?php echo $language['missing_cookie_support']; ?>
    </div>
    <div id="alert-cookies-text">

        <?php echo $language['alert_cookies_text']; ?>
    </div>
</div>
<script type="text/javascript">
    document.cookie = "habbotestcookie=supported";
    var cookiesEnabled = document.cookie.indexOf("habbotestcookie") != -1;
    if (cookiesEnabled) {
        var date = new Date();
        date.setTime(date.getTime()-24*60*60*1000);
        document.cookie="habbotestcookie=supported; expires="+date.toGMTString();
    } else {
        $('alert-cookies-container').show();
    }
</script>

            <script type="text/javascript">
                HabboView.add(function() {
                    LandingPage.init();
                    if (!LandingPage.focusForced) {
                        LandingPage.fieldFocus('login-username');
                    }
                });
            </script>

        </div>

    </form>

</div>

<div id="fp-container">
    <div id="content">
    <div id="column1" class="column">
			     		
				<div class="habblet-container ">		
						<div style="width: 890px; margin: 0 auto">
        <div id="tagline"><?php echo $language['index_message']; ?></div>
</div>

<div id="frontpage-image-container">

    <div id="join-now-button-container">
        <div id="join-now-button-wrapper-fb">
            <div class="join-now-alternative">
                <a href="/quickregister/start" class="newusers" onclick="startRegistration(this); return false;"><b><?php echo $language['new_to_habbo']; ?></b><span style="color: #8f8f8f;"><?php echo $language['click_here_to']; ?></span></a>
            </div>
            <div class="join-now-button">
                <a class="join-now-link" id="register-link" href="/quickregister/start" onclick="startRegistration(this); return false;"> 
                    <span class="join-now-text-big"><?php echo $language['join_now']; ?></span>
                    <span class="join-now-text-small"><?php echo $language['for_free']; ?></span>

                </a>
                <span class="close"></span>
            </div>
            <div class="join-now-alternative">
                <a class="fbicon" href="#" onclick="assistedLogin(FB); return false;">
                <?php echo $language['play_habbo_with_facebook']; ?>
                </a>
            </div>
        </div>

    <div id="join-now-button-container">
        <div id="join-now-button-wrapper">
            <div class="join-now-alternative">
                <a href="/quickregister/start" class="newusers" onclick="startRegistration(this); return false;"><b><?php echo $language['new_to_habbo']; ?></b><span style="color: #8f8f8f;"><?php echo $language['click_here_to']; ?></span></a>
            </div>
            <div class="join-now-button">
                <a class="join-now-link" id="register-link" href="/quickregister/start" onclick="startRegistration(this); return false;"> 
                    <span class="join-now-text-big"><?php echo $language['join_now']; ?></span>
                    <span class="join-now-text-small"><?php echo $language['for_free']; ?></span>

                </a>
                <span class="close"></span>
            </div>
            <div class="join-now-alternative">
                <a class="fbicon" href="#" onclick="assistedLogin(FB); return false;">
                <?php echo $language['play_habbo_with_facebook']; ?>
                </a>
            </div>
        </div>

    </div>
	</div>
    <script type="text/javascript">
        function startRegistration(elem) {
            targetUrl = elem.href;
            if (typeof targetUrl == "undefined") {
                targetUrl = "/quickregister/start";
            }
            window.location.href = targetUrl;
        }
    </script>

    <div id="people-inside">
        <b><span><span class="stats-fig">0</span> <?php echo $language['players_online_now']; ?></span></b>
        <i></i>
    </div>

    <a href="/quickregister/start" id="frontpage-image" style="background-image: url('//habbo.hs.llnwd.net/c_images/Frontpage_images/landing_val12_b.png')" onclick="startRegistration(this); return false;"></a>

</div>



<script type="text/javascript">
    document.observe("dom:loaded", function() {
        LandingPage.checkLoginButtonSetTimer();
    });
</script>
	
						
							
					
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>

<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
<div id="footer" class="new_and_improved">
	<?php get_login_footer(); ?>
       <div id="compact-tags-container">
            <span class="tags-habbos-like"><?php echo $language['habbos_like']; ?></span>

    <ul class="tag-list">
           <?php
		   $tags_query = mysql_query("SELECT tag FROM user_tags ORDER BY RAND() LIMIT 20");
		   while($tags_result = mysql_fetch_array($tags_query)){
		   echo "<li><a href=\"".get_settings("hotel_url")."tag/".$tags_result['tag']."\" class=\"tag\">".$tags_result['tag']."</a> </li>\n";
		   }
		   mysql_free_result($tags_query);
		   ?>
    </ul>

        </div>
</div>
    </div>
</div>
<script type="text/javascript">
if (typeof HabboView != "undefined") {
	HabboView.run();
}
</script>



<script src="http://static.rpxnow.com/js/lib/rpx.js" type="text/javascript"></script>

<script type="text/javascript">
    RPXNOW.overlay = false;
    RPXNOW.language_preference = 'en'; 
    
    var flags =  'show_provider_list';
    RPXNOW.flags = flags.split(',');
    

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

<!-- START Nielsen Online SiteCensus V6.0 -->
<!-- COPYRIGHT 2009 Nielsen Online -->
<script src="//secure-au.imrworldwide.com/v60.js">
</script>

<script type="text/javascript">
 nol_t({cid:"Habbohotel",content:"0",server:"secure-au"}).record().post();
</script>
<noscript>
 <div>
 <img src="//secure-au.imrworldwide.com/cgi-bin/m?ci=Habbohotel&cg=0&cc=1&ts=noscript" alt="" />
 </div>
</noscript>
<!-- END Nielsen Online SiteCensus V6.0 -->
</body>
</html>
<?php
mysql_stop();
?>