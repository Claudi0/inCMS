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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Habbo: embedded_signin.title </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
    <link rel="shortcut icon" href="<?php echo PATH; ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="alternate" type="application/rss+xml" title="Habbo: RSS" href="http://www.habbo.co.uk/articles/rss.xml" />
<script src="<?php echo PATH; ?>/web-gallery/static/js/visual.js" type="text/javascript"></script>

<script src="<?php echo PATH; ?>/web-gallery/static/js/common.js" type="text/javascript"></script>

<script src="/js/local/secure.uk.js" type="text/javascript"></script>

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
var habboImagerUrl = "http://www.habbo.co.uk/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.co.uk/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "client"; }


</script>

<meta property="fb:app_id" content="140597994210" />

<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/tooltips.css" type="text/css" />

<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/embeddedregistration.css" type="text/css" />
<script src="<?php echo PATH; ?>/web-gallery/static/js/simpleregistration.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://api-secure.recaptcha.net/js/recaptcha_ajax.js"></script>

<meta name="description" content="Habbo Hotel: Make friends, join the fun, get noticed!" />
<meta name="keywords" content="habbo hotel , virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets , room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />



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
<meta name="build" content="58-BUILD38 - 09.09.2010 15:29 - uk" />
</head>
