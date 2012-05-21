<?php
/*=========================================================+
|| # HabboCMS - Sistema de administración de contenido Habbo.
|+=========================================================+
|| # Copyright © 2010 Kolesias123. All rights reserved.
|| # http://www.infosmart.com.mx
|| # Partes Copyright © 2009 Yifan Lu. All rights reserved.
|| # http://www.yifanlu.com
|| # Base Copyright © 2007-2008 Meth0d. All rights reserved.
|| # http://www.meth0d.org
|+=========================================================+
|| # InfoSmart 2010. The power of Proyects.
|| # Este es un Software de código libre, libre edición.
|+=========================================================+
|| # Todas las imagenes, scripts y temas
|| # Copyright (C) 2010 Sulake Ltd. All rights reserved.
|+=========================================================*/

if (!defined("IN_HOLOCMS")) { header("Location:".PATH); exit; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo $charsetm; ?>" />
	<title>Habbo:</title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
	<link rel="shortcut icon" href="../web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php echo $shortname; ?>: RSS" href="<?php echo PATH; ?>/articles/rss.xml" />
<script src="../web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/domready.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/common.js" type="text/javascript"></script>
<link rel="stylesheet" href="../web-gallery/v2/styles/style.css" type="text/css" />
<link rel="stylesheet" href="../web-gallery/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="../web-gallery/v2/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="../web-gallery/v2/styles/tooltips.css" type="text/css" />
<link rel="stylesheet" href="../web-gallery/v2/styles/embedtopbar.css" type="text/css" />
<link rel="stylesheet" href="../web-gallery/v2/styles/process.css" type="text/css" />

<script type="text/javascript">
var ad_keywords = "<?php echo showtags($my_id); ?>";
var ad_key_value = "";
</script>
<script type="text/javascript"> 
document.habboLoggedIn = <?php if(LOGGED_IN == TRUE){ echo "true"; } else { echo "false"; } ?>;
var habboName = <?php if(LOGGED_IN == TRUE){ echo "\"".$name."\""; } else { echo "null"; } ?>;
var habboId = <?php if(LOGGED_IN == TRUE){ echo $myrow['id']; } else { echo "null"; } ?>;
var facebookUser = <?php if($is_facebook == true || FACEBOOK_LOGGED_IN == TRUE){ echo "true"; } else { echo "false"; } ?>;
var habboReqPath = "<?php echo PATH; ?>/";
var habboStaticFilePath = "<?php echo PATH; ?>/web-gallery";
var habboImagerUrl = "<?php echo PATH; ?>/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo PATH; ?>/client";
window.name = "<?php if(LOGGED_IN == TRUE){ echo $myrow['client_token']; } else { echo "client"; } ?>";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "<?php if(LOGGED_IN == TRUE){ echo $myrow['client_token']; } else { echo "client"; } ?>"; }

</script>

<meta property="fb:app_id" content="<?php echo getRpx("facebook_id"); ?>" /> 

<noscript>
    <meta http-equiv="refresh" content="0;url=<?php echo PATH; ?>/client/nojs" />
</noscript>
<link rel="stylesheet" href="../web-gallery/v2/styles/habboclient.css" type="text/css" />
<?php if($client == "SWF" && $clientutils !== true){ ?>
<link rel="stylesheet" href="../web-gallery/v2/styles/habboflashclient.css" type="text/css" />
<script src="../web-gallery/static/js/habboflashclient.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/identity.js" type="text/javascript"></script>
<script type="text/javascript">
    FlashExternalInterface.loginLogEnabled = true;
    
    FlashExternalInterface.logLoginStep("web.view.start");
    
    if (top == self) {
        FlashHabboClient.cacheCheck();
    }
	 var flashvars = {
            "client.allow.cross.domain" : "0", 
            "client.notify.cross.domain" : "1", 
            "connection.info.host" : "<?php echo $ip; ?>", 
            "connection.info.port" : "<?php echo $port; ?>", 
            "site.url" : "<?php echo PATH; ?>", 
            "url.prefix" : "<?php echo PATH; ?>", 
            "client.reload.url" : "<?php echo PATH; ?>/account/reauthenticate?page=/flash_client", 
            "client.fatal.error.url" : "<?php echo PATH; ?>/flash_client_error", 
            "client.connection.failed.url" : "<?php echo PATH; ?>/client_connection_failed", 
            "external.hash" : "f93e32c4e0fcc12d80b5285bd308aac7e560e8ed", 
            "external.variables.txt" : "<?php echo $variables; ?>", 
            "external.texts.txt" : "<?php echo $texts; ?>", 
			"user_partnersite" : "habbo", 
            "use.sso.ticket" : "1", 
            "sso.ticket" : "<?php echo $myticket; ?>", 
			<?php if(!empty($shortcut)){ ?>
			"shortcut.id" : "<?php echo $shortcut; ?>", 
			<?php } ?>
            "processlog.enabled" : "1", 
            "account_id" : "<?php echo $my_id; ?>", 
            "client.starting" : "¡Por favor, espera! <?php echo $shortname; ?> se está cargando", 
            "flash.client.url" : "<?php echo $flash_client_url; ?>", 
            "user.hash" : "<?php echo $my_id; echo sha1($my_id); ?>", 
            "has.identity" : "1", 
            "flash.client.origin" : "popup" 
    };  
    var params = {
        "base" : "<?php echo $flash_base; ?>",
        "allowScriptAccess" : "always",
        "menu" : "false"                
    };
    
    if (!(HabbletLoader.needsFlashKbWorkaround())) {
    	params["wmode"] = "opaque";
    }
    
    var clientUrl = "<?php echo $dcr10; ?>";
    try {
        if (swfobject.getFlashPlayerVersion().major <= 9) { 
            clientUrl = "<?php echo $dcr; ?>"; 
        }
    } catch(e) {}

    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "9.0.115", "http://images.habbo.com/habboweb/54_321ed6a04ad8e30309c4821c9f3e0949/8/web-gallery/flash/expressInstall.swf", flashvars, params);

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
</script>
<?php } else { ?>
<?php } ?>