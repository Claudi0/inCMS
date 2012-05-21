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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo $charsetm; ?>" />
	<title><?php echo $sitename; ?> - <?php echo $pagename; ?> </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
	<link rel="shortcut icon" href="<?php echo $webgallery; ?>/v2/favicon.ico" type="image/vnd.microsoft.icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php echo $shortname; ?>: RSS" href="<?php echo PATH; ?>/articles/rss.xml" />
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/process.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/embed.css" type="text/css" />
<script src="<?php echo PATH; ?>/web-gallery/static/js/embed.js" type="text/javascript"></script>

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
var habboStaticFilePath = "<?php echo $webgallery; ?>";
var habboImagerUrl = "<?php echo PATH; ?>/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo PATH; ?>/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "<?php if(LOGGED_IN == TRUE){ echo $myrow['client_token']; } else { echo "client"; } ?>"; }


</script>

<meta property="fb:app_id" content="<?php echo getRpx("facebook_id"); ?>" /> 

<?php if($pageid == "embedpage"){ ?>
<style type="text/css">
body {
    background-color: #3D3D3D;
    background-image: none;
}
#container {
    height: 300px;
    left: 0;
    margin-top: -195px;
    position: absolute;
    top: 50%;
    width: 100%;
    z-index: 0;
}
#footer {
    padding: 0;
    margin: 0 auto;
    position: relative;
    width: 700px;
}
#footer p {
    padding-top: 20px;
}
#footer .footer-links { color: #595959; }
#footer .footer-links a { color: #333333; }
#footer .copyright { color: #595959; }        
</style>

<?php } else if($pageid == "welcomeembed"){ ?>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/embeddedregistration.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/welcome.css" type="text/css" />
<?php } else { ?>
<script src="<?php echo PATH; ?>/web-gallery/static/js/identity.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/identity.css" type="text/css">
<?php } ?>

<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />

<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/ie6.css" type="text/css" />
<script src="<? echo PATH; ?>web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(<?php echo PATH; ?>/web-gallery/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="<?php echo $holocms['web'] ?>" />
</head>

<body id="embedpage">
<div id="container">