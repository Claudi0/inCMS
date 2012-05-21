<?php
/*=========================================================+
|| # HabboCMS - Sistema de administracin de contenido Habbo.
|+=========================================================+
|| # Copyright  2010 Kolesias123. All rights reserved.
|| # http://www.infosmart.com.mx
|| # Partes Copyright  2009 Yifan Lu. All rights reserved.
|| # http://www.yifanlu.com
|| # Base Copyright  2007-2008 Meth0d. All rights reserved.
|| # http://www.meth0d.org
|+=========================================================+
|| # InfoSmart 2010. The power of Proyects.
|| # Este es un Software de cdigo libre, libre edicin.
|+=========================================================+
|| # Todas las imagenes, scripts y temas
|| # Copyright (C) 2010 Sulake Ltd. All rights reserved.
|+=========================================================*/

if (!defined("IN_HOLOCMS")) { header("Location:".PATH.""); exit; }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>" lang="<?php echo $language; ?>" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $shortname; ?>: </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
	<link rel="shortcut icon" href="../web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php echo $shortname; ?>: RSS" href="<?php echo PATH; ?>/articles/rss.xml" />
	

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
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "<?php if(LOGGED_IN == TRUE){ echo $myrow['client_token']; } else { echo "client"; } ?>"; }


</script>

<meta property="fb:app_id" content="<?php echo getRpx("facebook_id"); ?>" />

<link rel="stylesheet" href="../web-gallery/v2/styles/style.css" type="text/css" />
<link rel="stylesheet" href="../web-gallery/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="../web-gallery/v2/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="../web-gallery/v2/styles/tooltips.css" type="text/css" />
<script src="../web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/fullcontent.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/faq.js" type="text/javascript"></script>

<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />

<!--[if IE 8]>
<link rel="stylesheet" href="../web-gallery/v2/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="../web-gallery/v2/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="../web-gallery/v2/styles/ie6.css" type="text/css" />
<script src="../web-gallery/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>
 
<style type="text/css">
body { behavior: url(../web-gallery/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="%www%" />
</head>
<body id="faq" class="plain-template">
<div id="faq" class="clearfix">
<div id="faq-header" class="clearfix"><img src="../web-gallery/v2/images/faq/faq_header.png" /><form method="post" action="%www%/help/faqsearch" class="search-box"><input type="text" id="faq-search" name="query" class="search-box-query search-box-onfocus" size="50" value="Buscando..."/><input type="submit" value="" title="Buscar" class="search" /></form></div>
<div id="faq-container" class="clearfix">
<div id="faq-category-list">
<ul class="faq">
<?php
$sql = mysql_query("SELECT * FROM cms_faq WHERE type = 'cat' ORDER BY id ASC") or die(mysql_error());
while($row = mysql_fetch_assoc($sql)){
?>
<li><a href="<?php echo PATH; ?>/help/<?php echo $row['id']; ?>" name=""><span class="faq-link <?php if($id == $row['id'] || $id == "".$row['id'].".php/".$row['id'].""){ ?>selected<?php } ?>"><?php echo HoloText($row['title']); ?></span></a></li>
<?php } ?>
</ul>
</div>