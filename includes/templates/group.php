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
if(empty($body_id)){ $body_id = "home"; }
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
	<link rel="shortcut icon" href="<?php echo $webgallery; ?>/v2/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="alternate" type="application/rss+xml" title="<?php echo $shortname; ?>: RSS" href="<?php echo PATH; ?>/articles/rss.xml">
<script src="<?php echo $webgallery; ?>/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/libs.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/common.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/fullcontent.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/style.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/buttons.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/boxes.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/tooltips.css" type="text/css">

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

<meta property="fb:app_id" content="<?php echo getRpx("facebook_id"); ?>"> 

<?php if($pageid == "myprofile" || $pageid == "profile" || $group_name == true){ ?>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/myhabbo.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/skins.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/dialogs.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/buttons.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/control.textarea.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/boxes.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/myhabbo.css" type="text/css">

	<link href="http://www.habbo.es/myhabbo/styles/assets/other.css?v=f3e51119fcc26c17280d93764cb50b6c" type="text/css" rel="stylesheet" />
    <link href="http://www.habbo.es/myhabbo/styles/assets/backgrounds.css?v=12f02a88c128657d3a44c7d726ec59be" type="text/css" rel="stylesheet" />

    <link href="http://www.habbo.es/myhabbo/styles/assets/stickers.css?v=8d2e49ff9420b424537aebecf7c31273" type="text/css" rel="stylesheet" />
<script src="<?php echo $webgallery; ?>/static/js/homeview.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/homeauth.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/homeedit.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/group.js" type="text/javascript"></script>

<style type="text/css">

    #playground, #playground-outer {
	    width: <?php if(getHC($my_id) || getVIP($my_id)){ echo "922px"; }else{ echo "752px"; } ?>;
	    height: 1360px;
    }
	
</style>
<?php } ?>

<?php if($pageid == "myprofile" || $pageid == "profile" || $group_name == true){ ?>
<script language="JavaScript" type="text/javascript"> 
<?php if(isset($groupid)){ $xid = $groupid; } else { $xid = $user_row['id']; } ?>
document.observe("dom:loaded", function() { initView(<?php echo $xid . "," . $xid; ?>); });
function isElementLimitReached() {
	if (getElementCount() >= 200) {
		showHabboHomeMessageBox("Ya cuentas con el máximo número de elementos para la página. Elimina una etiqueta, una nota o un elemento para dejar espacio a uno nuevo.", "Error", "Cerrar");
		return true;
	}
	return false;
}


function cancelEditing(expired) {
	<?php if(!isset($groupid)){ ?>
	location.replace("<?php echo PATH; ?>/home/<?php echo $searchname; ?>/canceledit" + (expired ? "?expired=true" : ""));
	<?php } else { ?>
	location.replace("<?php echo PATH; ?>/groups/<?php echo $groupid; ?>/id/canceledit" + (expired ? "?expired=true" : ""));
	<?php } ?>
}

function getSaveEditingActionName(){
	return './habblet/myhabbo_savehome.php';
}

function showEditErrorDialog() {
	var closeEditErrorDialog = function(e) { if (e) { Event.stop(e); } Element.remove($("myhabbo-error")); Overlay.hide(); }
	var dialog = Dialog.createDialog("myhabbo-error", "", false, false, false, closeEditErrorDialog);
	Dialog.setDialogBody(dialog, '<p>¡Error! Por favor, vuelve a intentarlo en unos minutos.</p><p><a href="#" class="new-button" id="myhabbo-error-close"><b>Cerrar</b><i></i></a></p><div class="clear"></div>');
	Event.observe($("myhabbo-error-close"), "click", closeEditErrorDialog);
	Dialog.moveDialogToCenter(dialog);
	Dialog.makeDialogDraggable(dialog);
}


function showSaveOverlay() {
	var invalidPos = getElementsInInvalidPositions();
	if (invalidPos.length > 0) {
	    $A(invalidPos).each(function(el) { Element.scrollTo(el);  Effect.Pulsate(el); });
	    showHabboHomeMessageBox("¡Ehhh! ¡No puedes hacer eso!", "Lo sentimos, pero no puedes colocar notas, etiquetas o elementos aquí. Cierra la ventana para continuar editando tu página.", "Cerrar");
		return false;
	} else {
		Overlay.show(null,'Guardando');
		return true;
	}
}
</script>

<?php } if($pageid == "forum" || $pageid == "groupforum"){ ?>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/myhabbo.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/skins.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/dialogs.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/buttons.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/control.textarea.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/boxes.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/myhabbo.css" type="text/css">

<script src="<?php echo $webgallery; ?>/static/js/homeview.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/homeauth.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/group.css" type="text/css">
<style type="text/css">

    #playground, #playground-outer {
	    width: 752px;
	    height: 1360px;
    }

</style>

<link href="<?php echo $webgallery; ?>/styles/discussions.css" type="text/css" rel="stylesheet"/>

<?php } if($pageid == "welcome" || $pageid == "home" && ($myrow['noob'] == "0" || $myrow['noob'] == "1")){ ?>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/welcome.css" type="text/css">

<?php } if($pageid == "community"){ ?>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/rooms.css" type="text/css">
<script src="<?php echo $webgallery; ?>/static/js/rooms.js" type="text/javascript"></script>
<script src="<?php echo $webgallery; ?>/static/js/moredata.js" type="text/javascript"></script>

<?php } if($body_id == "profile"){ ?>
<script src="<?php echo $webgallery; ?>/static/js/settings.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/settings.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/friendmanagement.css" type="text/css">

<?php } if($pageid == "home"){ ?>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/personal.css" type="text/css">
<script src="<?php echo $webgallery; ?>/static/js/habboclub.js" type="text/javascript"></script>
<link rel="prefetch" href="<?php if($client == "SWF"){ echo getConfig("dcr10"); } else { echo getConfig("dcr"); } ?>">

<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/minimail.css" type="text/css">
<link rel="stylesheet" href="<?php echo $webgallery; ?>/styles/myhabbo/control.textarea.css" type="text/css">
<script src="<?php echo $webgallery; ?>/static/js/minimail.js" type="text/javascript"></script>

<?php } if($pageid == "credits"){ ?>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/newcredits.css" type="text/css">
<?php } ?>

<?php if($my_rank > 4){ ?>
<style type="text/css">
#to-housekeeping {
	position: absolute;
	top: 33px;
	right: 1;
}

#to-housekeeping a {
	margin: 0;
}
</style>
<?php } ?>

<?php $easy_style = getConfig("easy_style"); if($easy_style !== "normal"){ ?>
<!-- Fixes del usuario | HabboCMS | EasyStyle: Activado - <?php echo $easy_style; ?> -->
<style type="text/css">
.enter-btn a, .enter-btn span {
    float: left;
    background: transparent url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/enter_button.png) no-repeat -9px 0;
    height: 49px;
    text-align: center;
    line-height: 47px;
    padding: 0 26px 0 19px;
    font-size: 14px;
    position: relative;
    color: #fff;
}

.enter-btn b {
    float: left;
    background: transparent url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/enter_button.png) no-repeat 0 0;
    height: 49px;
    width: 9px;
}

#header h1 a, #header h1 span {
	text-indent: -10000px;
	float: left;
	width: 111px;
	height: 42px;
	border: 0;
	background-repeat: no-repeat;
	background-image: url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/habbo.png);
}

ul.box-tabs li strong, ul.box-tabs li a {
	float: left;
	height: 19px;
	padding: 6px 10px 0 14px;
	background-repeat: no-repeat;
	background-image: url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/inner-tabs.png);
	background-position: -16px -25px;
	color: #FFFFFF;
	font-weight: normal;
	text-decoration: none;

	/* hide overflowing text */
	max-width: 184px;
	overflow: hidden;
}

ul.box-tabs li span.tab-spacer {
	float: left;
	height: 25px;
	width: 4px;
	background: url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/inner-tabs.png) no-repeat -12px -25px;
}

a.new-button b {
	float: left;
	padding: 5px 17px 4px 20px;
	font-size: 11px;
	height: 17px;
	margin-right: 3px;
	background: transparent url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/new_button.png) no-repeat -3px 0;
	color: #000 !important;
	font-weight: bold;
	text-align: center;
	display: inline;
}

a.new-button i {
	position: absolute;
	right: 0;
	top: 0;
	width: 3px;
	height: 25px;
	background: transparent url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/new_button.png) no-repeat 0px 0px;
}

#navi li strong, #navi li a {
	float: left;
	height: 22px;
	padding: 6px 16px 0 22px;
	background-repeat: no-repeat;
	background-image: url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/tabs.png);
	background-position: -10px -28px;
	color: #FFFFFF;
	font-weight: normal;
	text-decoration: none;

    /* hide overflowing text */
	max-width: 290px;
	overflow: hidden;
	text-overflow: ellipsis;
}

#navi li span {
	float: left;
	height: 28px;
	width: 6px;
	background-repeat: no-repeat;
	background-image: url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/tabs.png);
	background-position: -4px -28px;
}

body {
	background-color: #e3e3db;
	background-image: url(<?php echo $webgallery; ?>/v2/images/styles/<?php echo $easy_style; ?>/bg.png);
	font-size: 11px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	text-align: center;
	margin: 0;
	padding: 0;
}

</style>
<?php } ?>


<?php if((getConfig("image_logo") !== "" || getConfig("custom_logo") == "1") && $easy_style == "normal"){ ?>
<style type="text/css">
#header h1 a {
	float: left;
	<!--width: 200px;
	height: 42px;-->
	width: 200px;
	height: 50px;
	border: 0;
	background-repeat: no-repeat;
	<?php if(getConfig("custom_logo") == "1"){ ?>
	background-image: url(http://plugins.habbos.es/fontgen/index.php?font=1&spacing=-10&text=<?php echo $shortname; ?>);
	<?php } else { ?>
	background-image: url(<?php echo FilterText(getConfig("image_logo")); ?>);
	<?php } ?>
}
</style>
<?php } ?>

<link rel="stylesheet" href="<?php echo PATH; ?>/web-gallery/styles/info.css" type="text/css">

<?php if($pageid == "articles"){ ?>
<meta property="og:site_name" content="<?php echo $sitename; ?>" /> 
<meta property="og:title" content="<?php echo HoloText($news_row['title']); ?>" /> 
<meta property="og:type" content="article" /> 
<meta property="og:url" content="<?php echo PATH; ?>/articles/<?php echo $id; ?>-<?php echo stringToURL(HoloText($news_row['title'],true),true,true); ?>" /> 
<meta property="og:image" content="<?php echo $webgallery; ?>/v2/images/app_habbo_hotel_image.gif" /> 
<?php } ?>

<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">

<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php echo $webgallery; ?>/v2/styles/ie6.css" type="text/css" />
<script src="<?php echo PATH; ?>/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(<?php echo $webgallery; ?>/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="<?php echo $holocms['web']; ?>">
</head>
<body id="<?php echo $body_id; ?>" class="<?php if(LOGGED_IN == FALSE){ echo "anonymous"; } ?> ">
<div id="overlay"></div>
<div id="header-container">
   <div id="header" class="clearfix">
      <h1><a href="<?php echo PATH; ?>/"></a></h1>
       <div id="subnavi">
         <div id="subnavi-user">
          <?php if(LOGGED_IN == TRUE){ ?>
            <ul>
               <li id="myfriends"><a href="#"><span><?php if($lang == "spanish"){ ?>Mis Amigos<?php } ?><?php if($lang == "english"){ ?>My Friends<?php } ?></span></a><span class="r"></span></li>
               <li id="mygroups"><a href="#"><span><?php if($lang == "spanish"){ ?>Mis Grupos<?php } ?><?php if($lang == "english"){ ?>My Groups<?php } ?></span></a><span class="r"></span></li>
               <li id="myrooms"><a href="#"><span><?php if($lang == "spanish"){ ?>Mis Salas<?php } ?><?php if($lang == "english"){ ?>My Rooms<?php } ?></span></a><span class="r"></span></li>
			   <?php if(getServer("enableHappyHour") == "1"){ ?>
			   <li><a href="<?php echo PATH; ?>/papers/happyhour" target="_blank">¡Happy Hour!</a><?php echo bbcode_format(":)"); ?></li>
			   <?php } ?>
            </ul>
	</div>
	
		<div id="subnavi-search">
			<div id="subnavi-search-upper">
                <ul id="subnavi-search-links">
                   <li><a href="<?php echo PATH; ?>/help" target="habbohelp" onClick="openOrFocusHelp(this); return false"><?php if($lang == "spanish"){ ?>Ayuda<?php } ?><?php if($lang == "english"){ ?>Help<?php } ?></a></li>
                   <li><a href="<?php echo PATH; ?>/account/logout?token=<?php echo $myrow['token']; ?>" class="userlink" id="signout"><?php if($lang == "spanish"){ ?>Salir<?php } ?><?php if($lang == "english"){ ?>Sign Out<?php } ?></a></li>
            </ul>
                </div>
</div>
	<?php if($maintenance == "1" || $online !== "online" || $staffs_only == true){?>
   <div id="to-hotel"><div id="hotel-closed-medium">Hotel Cerrado</div></div>
	<?php } else { ?>
	 <div id="to-hotel">
		<a href="<?php echo PATH; ?>/client" class="new-button green-button" target="<?php echo $myrow['client_token']; ?>" onClick="HabboClient.openOrFocus(this); return false;"><b><?php if($lang == "spanish"){ ?>Entra a <?php echo $sitename; ?><?php } ?><?php if($lang == "english"){ ?>Enter <?php echo $sitename; ?><?php } ?></b><i></i></a>
	 </div>
	 <?php } if($my_rank > 4){ ?>
	 <div id="to-housekeeping">
	 <a href="<?php echo PATH; ?>/<?php echo $hpath; ?>" class="new-button red-button" target="_blank"><b><?php if($lang == "spanish"){ ?>Administración<?php } ?><?php if($lang == "english"){ ?>Housekeeping<?php } ?></b><i></i></a>
	 </div>
	 <?php } ?>
</div>
	<script type="text/javascript">
		L10N.put("purchase.group.title", "Crear un Grupo");
		document.observe("dom:loaded", function() {
            $("signout").observe("click", function() {
                HabboClient.close();
            });
        });
        </script>	
	
<?php } elseif(LOGGED_IN == FALSE){

if(!isset($_SESSION['login'])){
	$_SESSION['login']['enabled'] = true;
	$_SESSION['login']['tries'] = 0;
}	 
?>
                                <div class="clearfix">&nbsp;</div>
<?php if($maintenance == "1" || $online !== "online"){?>
<p><div id="hotel-closed-medium">Hotel Cerrado</div></p>
<?php } else { ?>
<p><a href="<?php echo PATH; ?>/client" id="enter-hotel-open-medium-link" target="<?php echo $myrow['client_token']; ?>" onclick="HabboClient.openOrFocus(this); return false;"><?php if($lang == "spanish"){ ?>Entra a <?php echo $sitename; ?><?php } ?><?php if($lang == "english"){ ?>Enter <?php echo $sitename; ?><?php } ?></a></p>
<?php } ?>
                               </div>
            <div id="subnavi-login">
                <form action="<?php echo PATH; ?>/account/submit" method="post" id="login-form">
                  <input type="hidden" name="page" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" />
                    <ul>
                        <li>
                            <label for="login-username" class="login-text"><b>Mi  <?php echo $shortname; ?> Nombre</b></label>
                            <input tabindex="1" type="text" class="login-field" name="credentials.username" id="login-username" />
                            <a href="#" id="login-submit-new-button" class="new-button" style="float: left; display:none"><b>Entra</b><i></i></a>
                            <input type="submit" id="login-submit-button" value="Entra" class="submit"/>
                        </li>
                        <li>
                            <label for="login-password" class="login-text"><b>Contraseña</b></label>
                            <input tabindex="2" type="password" class="login-field" name="credentials.password" id="login-password" />
                            <input tabindex="3" type="checkbox" name="_login_remember_me" value="true" id="login-remember-me" />
                            <label for="login-remember-me" class="left">Recuérdame</label>
                        </li>
                    </ul>
                </form>
                <div id="subnavi-login-help" class="clearfix">
                    <ul>
                        <li class="register"><a href="<?php echo PATH; ?>/account/password/forgot" id="forgot-password"><span>He olvidado mi clave/usuario</span></a></li>
                       <li><a href="<?php echo PATH; ?>/register"><span>Regístrate gratis</span></a></li>
                    </ul>
                </div>
<div id="remember-me-notification" class="bottom-bubble" style="display:none;">
   <div class="bottom-bubble-t"><div></div></div>
   <div class="bottom-bubble-c">
               Seleccionando 'Recuérdame', aparecerá tu cuenta en este ordenador hasta que te desconectes. Si éste es un ordenador público, es mejor que no utilices esta herramienta.
   </div>
   <div class="bottom-bubble-b"><div></div></div>
</div>
            </div>
        </div>
      <script type="text/javascript">
         LoginFormUI.init();
         RememberMeUI.init("right");
      </script>
<?php } ?>

<ul id="navi">
        <?php if(($pageid == "home" || $pageid == "myprofile" || $pageid == "settings" || $pageid == "guides") && LOGGED_IN == TRUE){ ?>
        <li class="selected"><strong><?php echo $name; ?> 
		<?php if($is_email){ ?>(<img src="<?php echo PATH; ?>/web-gallery/v2/images/rpx/icon_habbo_small.png" /> <?php echo $name_email; ?>)<?php } ?>
		<?php if($is_facebook || $is_rpx){ ?>(<img src="<?php echo PATH; ?>/web-gallery/v2/images/rpx/icon_<?php if(isset($provider)){ echo strtolower($provider); } else { echo "facebook"; } ?>_connect_small.png" /> <?php echo $first_name; ?>)<?php } ?>
		</strong><span></span></li>
        <?php } elseif(($pageid !== "home" || $pageid !== "myprofile" || $pageid !== "settings" || $pageid !== "guides") && LOGGED_IN == TRUE){ 
		$alerts = mysql_evaluate("SELECT COUNT(*) FROM cms_alerts WHERE userid = ".$my_id.""); ?>
        <li><a href="<?php echo PATH; ?>/me"><?php echo $name; ?> <?php if($alerts > 0){ ?> <img src="<?php echo $webgallery; ?>/v2/images/star_white.png" alt="*" title="Tienes mensajes sin leer" width="10" height="10" /><?php } ?> 
		<?php if($is_email == true){ ?>(<img src="<?php echo $webgallery; ?>/v2/images/rpx/icon_habbo_small.png" /> <?php echo $name_email; ?>)<?php } ?>
		<?php if($is_facebook == true){ ?>(<img src="<?php echo $webgallery; ?>/v2/images/rpx/icon_facebook_connect_small.png" /> <?php echo $first_name; ?>)<?php } ?>
		</a><span></span></li>
        <?php } elseif(LOGGED_IN == FALSE){ ?>
        <li id="tab-register-now"><a href="<?php echo PATH; ?>/register">¡Regístrate ahora!</a><span></span></li>
        <?php } ?>

        <?php if($pageid == "community" || $pageid == "celebrity" || $pageid == "staffs" || $pageid == "applications" || $pageid == "forum" || $pageid == "news_events" || $pageid == "articles" || $pageid == "staff_picks" || $pageid == "fansites"){ ?>
        <li class="selected"><strong><?php if($lang == "spanish"){ ?>Comunidad<?php } ?><?php if($lang == "english"){ ?>Community<?php } ?></strong><span></span></li>
        <?php } else { ?>
        <li><a href="<?php echo PATH; ?>/community"><?php if($lang == "spanish"){ ?>Comunidad<?php } ?><?php if($lang == "english"){ ?>Community<?php } ?></a><span></span></li>
        <?php } ?>
		
		<?php if($pageid == "ConsejosdeSeguridad" || $pageid == "LaManeraHabbo" || $pageid == "GuiaparaPadres"){ ?>
        <li class="selected"><strong><?php if($lang == "spanish"){ ?>Seguridad<?php } ?><?php if($lang == "english"){ ?>Safety<?php } ?></strong><span></span></li>
        <?php } else { ?>
        <li><a href="<?php echo PATH; ?>/safety"><?php if($lang == "spanish"){ ?>Seguridad<?php } ?><?php if($lang == "english"){ ?>Safety<?php } ?></a><span></span></li>
        <?php } ?>

        <?php if($pageid == "credits" || $pageid == "offers" || $pageid == "habboclub" || $pageid == "pixels" || $pageid == "history" || $pageid == "tryout" || $pageid == "habbovip"){ ?>
        <li class="selected"><strong><?php if($lang == "spanish"){ ?>Créditos<?php } ?><?php if($lang == "english"){ ?>Coins<?php } ?></strong><span></span></li>
        <?php } else { ?>
        <li><a href="<?php echo PATH; ?>/credits"><?php if($lang == "spanish"){ ?>Créditos<?php } ?><?php if($lang == "english"){ ?>Coins<?php } ?></a><span></span></li>
        <?php } ?>

<?php if(getConfig("show_extras") == "1"){ ?>
		<?php if($pageid == "lotery" || $pageid == "marketplace" || $pageid == "salesroom" || $pageid == "transaction" || $pageid == "badges" || $pageid == "back" || $pageid == "pets" || $pageid == "others"){ ?>
        <li class="selected"><strong><?php if($lang == "spanish"){ ?>Herramientas<?php } ?><?php if($lang == "english"){ ?>Tools<?php } ?></strong><span></span></li>
        <?php } else { ?>
        <li><a href="<?php echo PATH; ?>/lotery"><?php if($lang == "spanish"){ ?>Herramientas<?php } ?><?php if($lang == "english"){ ?>Tools<?php } ?></a><span></span></li>
        <?php } ?>  <?php } ?>
</ul>

	<div id="habbos-online"><div class="rounded"><span><?php if($maintenance == "1" || $online !== "online" || $staffs_only == true){ ?>Oops, el Hotel se encuentra offline<?php } else { echo $online_count; ?> <?php if($lang == "spanish"){ ?><?php echo $shortname; ?>s conectados<?php } ?><?php if($lang == "english"){ ?>members online<?php } ?><?php } ?></span></div></div>
	</div>
</div>

<div id="content-container">

		<?php if(($pageid == "home" || $pageid == "myprofile" || $pageid == "settings" || $pageid == "profile" || $pageid == "guides" || $pageid == "tags") && LOGGED_IN == TRUE){ ?>
	<div id="navi2-container" class="pngbg">
		<div id="navi2" class="pngbg clearfix">
			<ul>
            <li class="<?php if($pageid == "home"){ echo "selected"; } ?>">
			<?php if($pageid == "home"){ ?>
			Home
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/me">Home</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "myprofile"){ echo "selected"; } ?>">
			<?php if($pageid == "myprofile"){ ?>
			<?php if($lang == "spanish"){ ?>Mi Página<?php } ?><?php if($lang == "english"){ ?>My Page<?php } ?>
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/home/<?php echo $name; ?>"><?php if($lang == "spanish"){ ?>Mi Página<?php } ?><?php if($lang == "english"){ ?>My Page<?php } ?></a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "settings"){ echo "selected"; } ?>">
			<?php if($pageid == "settings"){ ?>
			<?php if($lang == "spanish"){ ?>Ajustes<?php } ?><?php if($lang == "english"){ ?>Account Settings<?php } ?>
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/profile"><?php if($lang == "spanish"){ ?>Ajustes<?php } ?><?php if($lang == "english"){ ?>Account Settings<?php } ?></a>
			<?php } ?>
			</li>
			
			<li class="">
			<a href="<?php echo PATH; ?>/credits/habboclub"><?php echo $shortname; ?> Club</a>
			</li>
			
			<!--<li class="">
			<a href="<?php echo PATH; ?>/credits/vip"><?php echo $shortname; ?> VIP</a>
			</li>-->
			
		</div>
</div>			
        <?php }elseif($pageid == "community" || $pageid == "celebrity" || $pageid == "staffs" || $pageid == "applications" || $pageid == "forum" || $pageid == "news_events" || $pageid == "articles" || $pageid == "staff_picks" || $pageid == "fansites"){ ?>
		<div id="navi2-container" class="pngbg">
		<div id="navi2" class="pngbg clearfix">
			<ul>
			<li class="<?php if($pageid == "community"){ echo "selected"; } ?>">
			<?php if($pageid == "community"){ ?>
			<?php if($lang == "spanish"){ ?>Comunidad<?php } ?><?php if($lang == "english"){ ?>Community<?php } ?>
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/community"><?php if($lang == "spanish"){ ?>Comunidad<?php } ?><?php if($lang == "english"){ ?>Community<?php } ?></a>
			<?php } ?>
			</li>

                        <?php if($lang == "english"){ ?>
			<li class="<?php if($pageid == "celebrity"){ echo "selected"; } ?>">
			<?php if($pageid == "celebrity"){ ?>
			Celebrity Visits
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/community/celebrity_visits">Celebrity Visits</a>
			<?php } ?>
			</li>
			<?php } ?>
			
			<?php if(getConfig("enable_staffs_page") == "1"){ ?>
			<li class="<?php if($pageid == "staffs"){ echo "selected"; } ?>">
			<?php if($pageid == "staffs"){ ?>
			Staffs
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/community/staffs">Staffs</a>
			<?php } ?>
			</li>
			<?php } ?>
			
			<li class="<?php if($pageid == "staff_picks"){ echo "selected"; } ?>">
			<?php if($pageid == "staff_picks"){ ?>
			Selección Staff
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/community/staff_picks">Selección Staff</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "fansites"){ echo "selected"; } ?>">
			<?php if($pageid == "fansites"){ ?>
			En Colaboración
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/community/fansites">En Colaboración</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "articles"){ echo "selected"; } ?>">
			<?php if($pageid == "articles"){ ?>
			<?php if($lang == "spanish"){ ?>Noticias<?php } ?><?php if($lang == "english"){ ?>Articles<?php } ?>
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/articles"><?php if($lang == "spanish"){ ?>Noticias<?php } ?><?php if($lang == "english"){ ?>Articles<?php } ?></a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "news_events"){ echo "selected"; } ?> last">
			<?php if($pageid == "news_events"){ ?>
			Concursos y Encuestas
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/community/competitions">Concursos y Encuestas</a>
			<?php } ?>
			</li>
			</ul>
		</div>
</div>
		<?php }elseif($pageid == "ConsejosdeSeguridad" || $pageid == "LaManeraHabbo" || $pageid == "GuiaparaPadres"){ ?>
		<div id="navi2-container" class="pngbg">
		<div id="navi2" class="pngbg clearfix">
			<ul>
			<li class="<?php if($pageid == "ConsejosdeSeguridad"){ echo "selected"; } ?>">
			<?php if($pageid == "ConsejosdeSeguridad"){ ?>
			Consejos de Seguridad
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/groups/ConsejosdeSeguridad">Consejos de Seguridad</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "LaManeraHabbo"){ echo "selected"; } ?>">
			<?php if($pageid == "LaManeraHabbo"){ ?>
			La Manera Habbo
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/groups/_LaManeraHabbo">La Manera <?php echo $shortname; ?></a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "GuiaparaPadres"){ echo "selected"; } ?> last">
			<?php if($pageid == "GuiaparaPadres"){ ?>
			Guía para Padres
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/groups/GuiaparaPadres">Guía para Padres</a>
			<?php } ?>
			</li>
			</ul>
		</div>
</div>
        <?php }elseif($pageid == "credits" || $pageid == "offers" || $pageid == "habboclub" || $pageid == "pixels" || $pageid == "history" || $pageid == "tryout" || $pageid == "habbovip"){ ?>
		<div id="navi2-container" class="pngbg">
		<div id="navi2" class="pngbg clearfix">
			<ul>
			<li class="<?php if($pageid == "credits"){ echo "selected"; } ?>">
			<?php if($pageid == "credits"){ ?>
			<?php if($lang == "spanish"){ ?>Créditos<?php } ?><?php if($lang == "english"){ ?>Coins<?php } ?>
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/credits"><?php if($lang == "spanish"){ ?>Créditos<?php } ?><?php if($lang == "english"){ ?>Coins<?php } ?></a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "offers"){ echo "selected"; } ?>">
			<?php if($pageid == "offers"){ ?>
			Ofertas
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/credits/furniture_news">Ofertas</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "habboclub" || $pageid == "tryout"){ echo "selected"; } ?>">
			<?php if($pageid == "habboclub" || $pageid == "tryout"){ ?>
			<?php echo $shortname; ?> Club
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/credits/habboclub"><?php echo $shortname; ?> Club</a>
			<?php } ?>
			</li>
			
			<!--<li class="<?php if($pageid == "habbovip"){ echo "selected"; } ?>">
			<?php if($pageid == "habbovip"){ ?>
			<?php echo $shortname; ?> VIP
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/credits/vip"><?php echo $shortname; ?> VIP</a>
			<?php } ?>
			</li>-->
			
			<li class="<?php if($pageid == "pixels"){ echo "selected"; } ?> last">
			<?php if($pageid == "pixels"){ ?>
			<?php if($lang == "spanish"){ ?>Píxeles<?php } ?><?php if($lang == "english"){ ?>Pixels<?php } ?>
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/credits/pixels"><?php if($lang == "spanish"){ ?>Píxeles<?php } ?><?php if($lang == "english"){ ?>Pixels<?php } ?></a>
			<?php } ?>
			</li>
			</ul>
		</div>
</div>
		<?php }elseif($pageid == "lotery" || $pageid == "marketplace" || $pageid == "salesroom" || $pageid == "transaction" || $pageid == "badges" || $pageid == "back" || $pageid == "pets" || $pageid == "others"){ ?>
		<div id="navi2-container" class="pngbg">
		<div id="navi2" class="pngbg clearfix">
			<ul>
			<li class="<?php if($pageid == "lotery"){ echo "selected"; } ?>">
			<?php if($pageid == "lotery"){ ?>
			Loteria
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/lotery">Loteria</a>
			<?php } ?>
			</li>

			<!--<li class="<?php if($pageid == "marketplace"){ echo "selected"; } ?>">
			<?php if($pageid == "marketplace"){ ?>
			Mercadillo
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/">Mercadillo</a>
			<?php } ?>
			</li>-->
			
			<li class="<?php if($pageid == "salesroom"){ echo "selected"; } ?>">
			<?php if($pageid == "salesroom"){ ?>
			Salas
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/rooms">Salas</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "transaction"){ echo "selected"; } ?>">
			<?php if($pageid == "transaction"){ ?>
			Transacciones
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/transactions">Transacciones</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "badges"){ echo "selected"; } ?>">
			<?php if($pageid == "badges"){ ?>
			Placas
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/badges">Placas</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "back"){ echo "selected"; } ?>">
			<?php if($pageid == "back"){ ?>
			Mudanzas
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/back">Mudanzas</a>
			<?php } ?>
			</li>
			
			<li class="<?php if($pageid == "pets"){ echo "selected"; } ?> last">
			<?php if($pageid == "pets"){ ?>
			Mascotas
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/pets">Mascotas</a>
			<?php } ?>
			</li>
			
			<!--<li class="<?php if($pageid == "others"){ echo "selected"; } ?> last">
			<?php if($pageid == "others"){ ?>
			Otros
			<?php } else { ?>
			<a href="<?php echo PATH; ?>/">Otros</a>
			<?php } ?>
			</li>-->
			</ul>

</div>
<?php } ?>

<?php if($notify_maintenance == true && $_SESSION['already_know'] !== true){ ?>
 <script type="text/javascript">
    Dialog.showConfirmDialog("Ahora mismo el Hotel se encuentra en mantenimiento es probable que algunas funciones hayan sido desactivadas.<br /><br />Por favor te pedimos que no hagas demasiadas cosas ya que podrias dañar el sistema.<br /><br />Para continuar haz clic en 'OK'.", {
        headerText: "¡Atención!",
        buttonText: "",
        cancelButtonText: "OK"
    });
  </script>
<?php $_SESSION['already_know'] = true; } ?>