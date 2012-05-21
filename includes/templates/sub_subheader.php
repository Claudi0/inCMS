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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<title><?php echo $sitename; ?> - <?php echo $pagename; ?> </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
	<link rel="shortcut icon" href="<?php echo PATH; ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php echo $shortname; ?>: RSS" href="<?php echo PATH; ?>/articles/rss.xml" />
	
<?php if(!$old_login){ ?>
<script src="<?php echo PATH; ?>/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo PATH; ?>/web-gallery/static/js/landing.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/<?php if($cms_row["type_index"] == "old"){ ?>old_<?php } ?>frontpage.css" type="text/css" />
<?php } else { ?>
<script src="<?php echo PATH; ?>/web-gallery/static/js/landing.js" type="text/javascript"></script>
<script src="<?php echo PATH; ?>/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/tooltips.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/v2/styles/process.css" type="text/css" />
<?php } ?>

<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/styles/.css" type="text/css" />


<script type="text/javascript">
var ad_keywords = "";
var ad_key_value = "";
</script>
<script type="text/javascript"> 
document.habboLoggedIn = <?php if(isLoggedIn()){ echo "true"; } else { echo "false"; } ?>;
var habboName = <?php if(isLoggedIn()){ echo "\"".$name."\""; } else { echo "null"; } ?>;
var habboId = <?php if(isLoggedIn()){ echo $myrow['id']; } else { echo "null"; } ?>;
var facebookUser = <?php if($is_facebook || FACEBOOK_LOGGED_IN){ echo "true"; } else { echo "false"; } ?>;
var habboReqPath = "<?php echo PATH; ?>/";
var habboStaticFilePath = "<?php echo $webgallery; ?>";
var habboImagerUrl = "<?php echo PATH; ?>/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo PATH; ?>/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "<?php if(LOGGED_IN){ echo $myrow['client_token']; } else { echo "client"; } ?>"; }


</script>

<meta property="fb:app_id" content="<?php echo getRpx("facebook_id"); ?>" /> 



<style type="text/css"> 
		div.left-column { float: left; width: 48% }
		div.right-column { float: right; width: 47% }
		label { display: block }
		input { width: 98% }
		input.process-button { width: auto; float: right }
        div.box-content { padding: 15px 8px; }
        div.right-column p { color: gray; }
        div.right-column .habbo-id-logo { background: transparent url(<?php echo PATH; ?>/web-gallery/v2/images/registration/Habbo_ID_logo_white.png) no-repeat; padding-top: 2px; height: 35px; width: 124px; float:right; }
        div.divider {background: transparent url(<?php echo PATH; ?>/web-gallery/v2/images/shared_icons/line_gray.png) repeat-y; width: 1px; height: 130px; float:left; margin: 1px 15px 20px;}
	</style> 


<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />

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
body { behavior: url(<?php echo PATH; ?>/web-gallery/js/csshover.htc); }
</style>
<![endif]-->

<meta name="build" content="<?php echo $holocms['web']; ?>" />
</head>
<body id="" class="process-template secure-page">

<div id="overlay"></div>

<div id="container">
	<div class="cbb process-template-box clearfix">

		<div id="content">
			<div id="header" class="clearfix">
				<h1><a href="<?php echo PATH; ?>"></a></h1>
				<ul class="stats">
					<li class="stats-online">¡<span class="stats-fig"><?php echo $online_count; ?></span> <?php echo $shortname; ?>s conectados ahora!</li>
					<li class="stats-visited"><img src='<?php echo PATH; ?>/web-gallery/v2/images/<?php echo $online; ?>.gif' border='0'></li>						   
				</ul>

			</div>
<div id="process-content">