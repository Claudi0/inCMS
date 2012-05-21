<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="client";
$page['redirect']="1";
require_once("./includes/core.php");
$sso_ticket=rand(1000,9999)."-SPHERA-".rand(1000,9999)."-".rand(1000,9999)."-".rand(1000,9999)."-".rand(1000,9999);
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
<meta name="csrf-token" content="fafee16ac4"/>
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
document.habboLoggedIn = true;
var habboName = "<?php echo get_userinfo("username"); ?>";
var habboId = <?php echo $_SESSION['id']; ?>;
var facebookUser = false;
var habboReqPath = "";
var habboStaticFilePath = "<?php echo get_settings("hotel_url"); ?>web-gallery";
var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo get_settings("hotel_url"); ?>client";
window.name = "27c58abb5cec783e60f8c7150e3be0b4b6648302";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "27c58abb5cec783e60f8c7150e3be0b4b6648302";
    HabboClient.maximizeWindow = true;
}


</script>

<meta property="fb:app_id" content="183096284873" />

<meta property="og:site_name" content="Habbo Hotel" />
<meta property="og:title" content="Habbo Hotel - " />
<meta property="og:url" content="http://www.habbo.com" />
<meta property="og:image" content="http://www.habbo.com/v2/images/facebook/app_habbo_hotel_image.gif" />
<meta property="og:locale" content="en_US" />

<noscript>
    <meta http-equiv="refresh" content="0;url=/client/nojs" />
</noscript>
<meta http-equiv="Pragma" content="no-cache, no-store" />
<meta http-equiv="Expires" content="-1" />
<meta http-equiv="Cache-Control" content="no-cache, no-store" />


<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/styles/habboflashclient.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/habboflashclient.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1016/web-gallery/static/js/identity.js" type="text/javascript"></script>

<script type="text/javascript">
    FlashExternalInterface.loginLogEnabled = true;
    
    FlashExternalInterface.logLoginStep("web.view.start");
    
    if (top == self) {
        FlashHabboClient.cacheCheck();
    }
    var flashvars = {
	
            "client.allow.cross.domain" : "0", 
            "client.notify.cross.domain" : "1", 
            "connection.info.host" : "<?php echo get_settings("host"); ?>", 
            "connection.info.port" : "<?php echo get_settings("port"); ?>", 
            "site.url" : "<?php echo get_settings("hotel_url"); ?>", 
            "url.prefix" : "<?php echo get_settings("hotel_url"); ?>", 
            "client.reload.url" : "<?php echo get_settings("hotel_url"); ?>client",
            "client.fatal.error.url" : "<?php echo get_settings("hotel_url"); ?>flash_client_error", 
            "client.connection.failed.url" : "<?php echo get_settings("hotel_url"); ?>client_connection_failed",
            "external.variables.txt" : "<?php echo get_settings("client_vars"); ?>", 
            "external.texts.txt" : "<?php echo get_settings("client_texts"); ?>", 
            "external.override.texts.txt" : "<?php echo get_settings("client_override_texts"); ?>", 
            "external.override.variables.txt" : "<?php echo get_settings("client_override_vars"); ?>", 
			"productdata.load.url" : "<?php echo get_settings("client_productdata"); ?>", 
            "furnidata.load.url" : "<?php echo get_settings("client_furnidata"); ?>",
            "sso.ticket" : "<?php echo $sso_ticket; ?>", 
            "processlog.enabled" : "1", 
            "account_id" : "<?php echo $_SESSION['id']; ?>", 
            "client.starting" : "<?php echo get_settings("client_loading"); ?>", 
			"flash.client.url" : "<?php echo get_settings("client_base"); ?>",
            "user.hash" : "<?php echo $sso_ticket; ?>", 
            "has.identity" : "1", 
            "flash.client.origin" : "popup"
			
    };
    var params = {
        "base" : "<?php echo get_settings("client_base"); ?>",
        "allowScriptAccess" : "always",
        "menu" : "false"                
    };

        if (!(HabbletLoader.needsFlashKbWorkaround())) {
            params["wmode"] = "opaque";
        }

    FlashExternalInterface.signoutUrl = "https://www.habbo.com/account/logout?token=3190bba959";

    var clientUrl = "<?php echo get_settings("client_base"); ?>Habbo.swf";
    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "<?php echo get_settings("hotel_url"); ?>web-gallery/flash/expressInstall.swf", flashvars, params, null, FlashExternalInterface.embedSwfCallback);

    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
    window.onresize = function() {
        HabboClient.storeWindowSize();
    }.debounce(0.5);
</script>

<meta name="description" content="Check into the world?s largest virtual hotel for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more?" />
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
<meta name="build" content="63-BUILD-FOR-PATCH-919a - 15.03.2012 13:22 - com" />
</head>

<body id="client" class="flashclient">
<div id="overlay"></div>
<img src="<?php echo get_settings("hotel_url"); ?>web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="overlay"></div>
<div id="client-ui" >
    <div id="flash-wrapper">
    <div id="flash-container">
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none">
<div class="cbb clearfix">
    <h2 class="title">Please update your Flash Player to the latest version.</h2>
    <div class="box-content">
            <p>You can install and download Adobe Flash Player here: <a href="http://get.adobe.com/flashplayer/">Install flash player</a>. More instructions for installation can be found here: <a href="http://www.adobe.com/products/flashplayer/productinfo/instructions/">More information</a></p>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="<?php echo get_settings("hotel_url"); ?>web-gallery/v2/images/client/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
</div>
        </div>
        <script type="text/javascript">
            $('content').show();
        </script>
        <noscript>
            <div style="width: 400px; margin: 20px auto 0 auto; text-align: center">
                <p>If you are not automatically redirected, please <a href="/client/nojs">click here</a></p>
            </div>
        </noscript>
    </div>
    </div>
	<div id="content" class="client-content"></div>            
</div>
    <script type="text/javascript">
        RightClick.init("flash-wrapper", "flash-container");
        if (window.opener && window.opener != window && window.opener.location.href == "/") {
            window.opener.location.replace("/me");
        }
        $(document.body).addClassName("js");
       	HabboClient.startPingListener();
        Pinger.start(true);
        HabboClient.resizeToFitScreenIfNeeded();
    </script>
<div id="fb-root"></div>

<script type="text/javascript">

    window.fbAsyncInit = function() {

        Cookie.erase("fbsr_183096284873");

        FB.init({appId: '183096284873', status: true, cookie: true, xfbml: true, oauth: true});

        $(document).fire("fbevents:scriptLoaded");



    };

    window.assistedLogin = function(FBobject, optresponse) {

        

        Cookie.erase("fbsr_183096284873");

        FB.init({appId: '183096284873', status: true, cookie: true, xfbml: true, oauth: true});



        permissions = 'user_birthday,email';

        defaultAction = function(response) {



            if (response.authResponse) {

                fbConnectUrl = "/facebook?connect=true";

                Cookie.erase("fbhb_val_183096284873");

                Cookie.set("fbhb_val_183096284873", response.authResponse.accessToken);

                Cookie.erase("fbhb_expr_183096284873");

                Cookie.set("fbhb_expr_183096284873", response.authResponse.expiresIn);

                window.location.replace(fbConnectUrl);

            }

        };



        if (typeof optresponse == 'undefined')

            FB.login(defaultAction, {scope:permissions});

        else

            FB.login(optresponse, {scope:permissions});



    };



    (function() {

        var e = document.createElement('script');

        e.async = true;

        e.src = 'https://connect.facebook.net/en_US/all.js';

        document.getElementById('fb-root').appendChild(e);

    }());

</script>




        <iframe name="logframe" src="/bc/logframe?" width="0" height="0" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="position: absolute; top:0; left:0"></iframe>


<iframe name="conversion-tracking" src="/conversion_tracking_frame" width="0" height="0" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="position: absolute; top:0; left:0"></iframe>

<script type="text/javascript">
    var ssa_json = {
            'applicationUserId': '30222678',
        'applicationKey': '2abb40ad',
        'onCampaignsReady': supersaverAdsOnCampaignsReady,
        'onCampaignOpen': supersaverAdsOnCampaignOpen,
        'onCampaignClose': supersaverAdsOnCampaignClose,
        'onCampaignCompleted': supersaverAdsOnCampaignCompleted,
        'pagination': false,
            'customCss': '<?php echo get_settings("hotel_url"); ?>web-gallery/styles/supersonicads.css'
    };

    function supersaverAdsLog(message) {
        if ("console" in window && "log" in console) {
            console.log(message);
        }
    }

    function supersaverAdsCamapaignEngage() {
        supersaverAdsLog("supersaverAdsCamapaignEngage");
        SSA_CORE.BrandConnect.engage();

        var topBar = document.getElementById("ssaInterstitialTopBar");
        var innerHTML = topBar.innerHTML;
        topBar.innerHTML = "";

        var topBarInnerContainerLeft = document.createElement("div");
        topBarInnerContainerLeft.className = "ssaInterstitialTopBarInnerContainerLeft";

        var topBarInnerContainerRight = document.createElement("div");
        topBarInnerContainerRight.className = "ssaInterstitialTopBarInnerContainerRight";

        var closeButton = document.createElement("div");
        closeButton.className = "ssaTopBarCloseButton";
        closeButton.setAttribute("onClick", "SSA_CORE.close('ssaBrandConnect')");
        closeButton.innerHTML = "";

        var textDiv = document.createElement("span");
        textDiv.className = "ssaTopBarTextSpan";
        textDiv.innerHTML = innerHTML;

        topBarInnerContainerLeft.appendChild(closeButton);
        topBarInnerContainerLeft.appendChild(textDiv);

        topBar.appendChild(topBarInnerContainerRight);
        topBar.appendChild(topBarInnerContainerLeft);

        var bottomBar = document.getElementById("ssaInterstitialBottomBar");
        var bottomInnerContainerLeft = document.createElement("div");
        bottomInnerContainerLeft.className = "ssaBottomBarInnerLeft";
        var bottomInnerContainerRight = document.createElement("div");
        bottomInnerContainerRight.className = "ssaBottomBarInnerRight";

        bottomBar.appendChild(bottomInnerContainerRight);
        bottomBar.appendChild(bottomInnerContainerLeft);
    }

    function supersaverAdsOnCampaignsReady(offers) {
        if (typeof offers !== 'undefined' && offers.length) {
            supersaverAdsLog("supersaverAdsOnCampaignsReady offers: " + offers.length);
            for (var i = 0; i < offers.length; i++) {
                supersaverAdsLog(offers[i]);
            }
            FlashExternalInterface.clientElement.supersaverAdsOnCampaignsReady(offers.length.toString());
        } else {
            supersaverAdsLog("supersaverAdsOnCampaignsReady no offers!");
			FlashExternalInterface.clientElement.supersaverAdsOnCampaignsReady("0");
        }
    }

    function supersaverAdsOnCampaignOpen(offer) {
        supersaverAdsLog("supersaverAdsOnCampaignOpen");
        supersaverAdsLog(offer);
        FlashExternalInterface.clientElement.supersaverAdsOnCampaignOpen();
    }

    function supersaverAdsOnCampaignClose(offer) {
        supersaverAdsLog("supersaverAdsOnCampaignClose");
        supersaverAdsLog(offer);
        FlashExternalInterface.clientElement.supersaverAdsOnCampaignClose();
    }

    function supersaverAdsOnCampaignCompleted(offer) {
        supersaverAdsLog("supersaverAdsOnCampaignCompleted");
        supersaverAdsLog(offer);
        FlashExternalInterface.clientElement.supersaverAdsOnCampaignCompleted();
    }

    function supersaverAdsLoadCampaigns() {
        // We need the client to have wmode=opaque or wmode=transparent for video offers
        if (HabbletLoader.needsFlashKbWorkaround()) {
            return;
        }
        supersaverAdsLog("loading supersaver script");
        var g = document.createElement('script');
        var s = document.getElementsByTagName('script')[0];
        g.async = true;
        g.src = '//jsd.supersonicads.com/inlineDelivery/delivery.compressed.gz.js';
        s.parentNode.insertBefore(g,s);
    }
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