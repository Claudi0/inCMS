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
if(!isset($body_id)){ $body_id = "landing"; }
if(!isset($body_class)){ $body_class = "process-template"; }

if(!isset($pagename)){ 
$pagename = "Reserva suite gratis en el mayor Hotel virtual. Queda con tus viej@s amig@s, haz nuev@s, juega, chatea, crea tu avatar, tus habitaciones y más aún..."; 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo $charsetm; ?>">
	<title><?php echo $sitename; ?> - <?php echo $pagename; ?> </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
    <link rel="shortcut icon" href="<?php echo PATH; ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="alternate" type="application/rss+xml" title="<?php echo $sitename; ?> - RSS" href="<?php echo PATH; ?>/articles/rss.xml">
<script src="<?php echo PATH; ?>/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo PATH; ?>/web-gallery/static/js/landing.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/frontpage.css" type="text/css">
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/embeddedfonts.css" type="text/css">

<link rel="stylesheet" href="/styles/local/com.css" type="text/css">

<script src="/js/local/com.js" type="text/javascript"></script>

<script type="text/javascript">
var ad_keywords = "";
var ad_key_value = "";
</script>
<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "<?php echo PATH; ?>/web-gallery";
var habboImagerUrl = "/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo PATH; ?>/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "client"; }


</script>

<meta property="fb:app_id" content="183096284873">

<style type="text/css">
body {
    background-color: #000000;
    
}
#footer .footer-links { color: #666666; }
#footer .footer-links a { color: #b3b3b3; }
#footer .copyright { color: #727272; }    
</style>

<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">


<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/ie6.css" type="text/css" />
<script src="<?php echo PATH; ?>/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="<?php echo $holocms['web']; ?>" />
</head>

<?php ?>