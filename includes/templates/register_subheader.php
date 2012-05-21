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
if (empty($bodyid)){ $bodyid = "register"; }
if (empty($pagename)) { $pagename = "¡Registra tu ".$shortname."!"; }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo $charsetm; ?>" />
	<title><?php echo $sitename; ?> - <?php echo $pagename; ?> </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>

<link rel="shortcut icon" href="<?php echo $webgallery; ?>/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $shortname; ?>: RSS" href="<?php echo PATH; ?>/articles/rss.xml" />
<script src="<?php echo PATH; ?>/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo PATH; ?>/web-gallery/static/js/common.js" type="text/javascript"></script>


<script type="text/javascript">
var ad_keywords = "";
var ad_key_value = "";
</script>
<script type="text/javascript"> 
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var facebookUser = false;
var habboReqPath = "<?php echo PATH; ?>/";
var habboStaticFilePath = "<?php echo $webgallery; ?>";
var habboImagerUrl = "<?php echo PATH; ?>/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo PATH; ?>/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "client"; }


</script>

<meta property="fb:app_id" content="<?php echo getRpx("facebook_id"); ?>" />

<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/tooltips.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/embeddedregistration.css" type="text/css">
<script src="<?php echo PATH; ?>/web-gallery/static/js/simpleregistration.js" type="text/javascript"></script>
<script src="<?php echo PATH; ?>/web-gallery/static/js/identity.js" type="text/javascript"></script> 

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
<body id="<?php echo $bodyid; ?>">
<div id="overlay"></div>    