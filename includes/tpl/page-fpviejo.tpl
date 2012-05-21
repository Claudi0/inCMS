<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
    <link rel="shortcut icon" href="%www%/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="alternate" type="application/rss xml" title="Habbo: RSS" href="http://www.habbo.es/articles/rss.xml" />


<script src="%www%/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="%www%/web-gallery/static/js/landing.js" type="text/javascript"></script>
<link rel="stylesheet" href="%www%/web-gallery/v2/styles/frontpage.css" type="text/css" />
<link rel="stylesheet" href="%www%/web-gallery/v2/styles/embeddedfonts.css" type="text/css" />


<link rel="stylesheet" href="/styles/local/es.css" type="text/css" />

<script src="/js/local/es.js" type="text/javascript"></script>

<script type="text/javascript">
var ad_keywords = "";
var ad_key_value = "";
</script>
<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "%www%/web-gallery";
var habboImagerUrl = "%www%/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "%www%/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "client"; }


</script>

<meta property="fb:app_id" content="157382664122" />

<style type="text/css">
        body {
             background-color: #000000;
                    }

        #footer .footer-links {
            color: #808080;
        }

        #footer .footer-links a {
            color: #bebebe;
        }

        #footer .copyright {
            color: #727272;
        }
    </style>

<meta name="description" content="Habbo Hotel: haz amig@s, nete a la diversin y date a conocer." />
<meta name="keywords" content="habbo hotel, mundo, virtual, red social, gratis, comunidad, personaje, chat, online, adolescente, roleplaying, unirse, social, grupos, forums, seguro, jugar, juegos, amigos, adolescentes, raros, furni raros, coleccionable, crear, coleccionar, conectar, furni, muebles, mascotas, diseo de salas, compartir, expresin, placas, pasar el rato, msica, celebridad, visitas de famosos, celebridades, juegos en lnea, juegos multijugador, multijugador masivo" />



<!--[if IE 8]>
<link rel="stylesheet" href="%www%/web-gallery/v2/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="%www%/web-gallery/v2/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="%www%/web-gallery/v2/styles/ie6.css" type="text/css" />
<script src="%www%/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="58-BUILD47 - 20.09.2010 14:29 - es" />
</head>

<head>
    <script type="text/javascript" src="http://api.recaptcha.net/js/recaptcha_ajax.js"></script>
</head>

<body id="frontpage">

<div id="overlay"></div>


<div id="site-header">

<form id="loginformitem" name="loginformitem" action="%www%/account/submit"          method="post">


        <div style="clear: both;"></div>

        <div id="site-header-content">

            <div id="habbo-logo"></div>

            <div id="login-form">


                <div id="login-form-email">

                    <label for="login-username"
                           class="login-text">Email o Habbo Nombre</label>
                    <input tabindex="3" type="text" class="login-field" name="credentials.username" id="login-username"
                           value="" maxlength="48"/>
                    <input tabindex="6" type="checkbox" name="_login_remember_me" id="login-remember-me"
                           value="true"/>
                    <label for="login-remember-me">Mantener conectado</label>

<div id="landing-remember-me-notification" class="bottom-bubble" style="display:none;">
    <div class="bottom-bubble-t"><div></div></div>
    <div class="bottom-bubble-c">
                Seleccionando esta opcin permanecers conectado a Habbo hasta que des a la opcin 'Desconectar'
    </div>

    <div class="bottom-bubble-b"><div></div></div>
</div>

                </div>

                <div id="login-form-password">
                    <label for="login-password" class="login-text">Contraseña</label>
                    <input tabindex="4" type="password" class="login-field" name="credentials.password"
                           id="login-password" maxlength="32"/>

                    <div id="login-forgot-password">

                        <a href="%www%/account/password/forgot"
                           id="forgot-password"><span>Contraseña olvidada?</span></a>
                    </div>
                </div>

                <div id="login-form-submit">
                    <input type="submit" value="Conectar" class="login-top-button"
                           id="login-submit-button"/>
                    <a href="#" tabindex="5"
                       id="login-submit-new-button"><span>Conectar</span></a>
                </div>

            </div>

            <div id="rpx-login">
                <li>
<div id="fb-root"></div>
<script type="text/javascript">
    window.fbAsyncInit = function() {
        window.fbLoginStatus = "too early!";
        FB.init({appId: '157382664122', status: true, cookie: true, xfbml: true});
        FB.getLoginStatus(function(response) {
        LandingPage.updateButton(response.status);
        });
    };
    assistedLogin = function(FBobject, optresponse) {

        permissions = 'user_birthday,email';
        defaultAction = function(response) {
            fbConnectUrl = "/facebook?connect=true&partner=FBC";
            if (response.session) {
                window.location.replace(fbConnectUrl);
            }
        };

        if (typeof optresponse == 'undefined')
            FBobject.login(defaultAction, {perms:permissions});
        else
            FBobject.login(optresponse, {perms:permissions});

    };
    (function() {
        var e = document.createElement('script');
        e.async = true;
        e.src = document.location.protocol   '//connect.facebook.net/es_ES/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
</script>
<a class="fb_button fb_button_large" onclick="assistedLogin(FB); return false;">
    <span class="fb_button_text">Conectar via Facebook</span>
</a>
                </li>

                <li>
<div id="rpx-signin">
    <a class="rpxnow" onclick="return false;" href="https://login.habbo.com/openid/v2/signin?token_url=http://www.habbo.es/rpx">%hotel_status%</a>
</div>                
                </li>

            </div>

            <script type="text/javascript">
                HabboView.add(function() {
                    fieldFocus('login-username');
                    popdownSetupRun();
                });
                HabboView.add(function() {
                    LandingPage.init();
                });
            </script>

        </div>

    </form>

</div>

<div id="fp-container">
    <div id="content">
    <div id="column1" class="column">
                         
                <div class="habblet-container ">       
   
                  <div style="width: 890px; margin: 0 auto"></div>

<div id="frontpage-image-container">


    <div id="join-now-button-container">
        <div id="join-now-button-wrapper-fb">
            <div class="join-now-button">
                <a class="join-now-link" href="#" onclick="assistedLogin(FB); return false;">
                    <div class="join-now-text-big">Usa Habbo</div>
                    <div class="join-now-text-small">con<span
                            class="fbword">Facebook</span></div>

                </a>
                <span class="close"></span>
            </div>
            <div class="join-now-alternative">
                <a href="/register">
                o crea una Habbo cuenta
                </a>
            </div>
        </div>

        <div id="join-now-button-wrapper">
            <div class="join-now-button">
                <a class="join-now-link" href="/quickregister/start"
                   onclick="location.href=this.href">
                    <div class="join-now-text-big">Unete ahora</div>
                    <div class="join-now-text-small">es Gratis</div>
                </a>
                <span class="close"></span>
            </div>

            <div class="join-now-alternative">
                <a class="fbicon" href="#" onclick="assistedLogin(FB); return false;">
                Usa Habbo con Facebook
                </a>
            </div>
        </div>
    </div>

</div>
<a href="%www%/register" id="frontpage-image"
   style="background-image: url('%www%/web-gallery/v2/images/landing/hotel_view_low_BB.png')"></a>
</div>


<div id="tags-main-container">

    <div id="sulake-logo"><a href="http://www.sulake.com"></a></div>

    <div id="tags-container" style="width: 650px;">
        <div class="roundedrect" id="tag-cloud-slim">
            <span class="tags-habbos-like">Loc@s por</span>

    <ul class="tag-list">

            <li><a href="http://www.habbo.es/tag/bailar" class="tag">bailar</a> </li>
            <li><a href="http://www.habbo.es/tag/cool" class="tag">cool</a> </li>
            <li><a href="http://www.habbo.es/tag/deporte" class="tag">deporte</a> </li>
            <li><a href="http://www.habbo.es/tag/diestro" class="tag">diestro</a> </li>
            <li><a href="http://www.habbo.es/tag/fiesta" class="tag">fiesta</a> </li>

            <li><a href="http://www.habbo.es/tag/futbol" class="tag">futbol</a> </li>
            <li><a href="http://www.habbo.es/tag/guapo" class="tag">guapo</a> </li>
            <li><a href="http://www.habbo.es/tag/habbo" class="tag">habbo</a> </li>
            <li><a href="http://www.habbo.es/tag/hablar" class="tag">hablar</a> </li>
            <li><a href="http://www.habbo.es/tag/ingles" class="tag">ingles</a> </li>

            <li><a href="http://www.habbo.es/tag/linda" class="tag">linda</a> </li>
            <li><a href="http://www.habbo.es/tag/manu frocio" class="tag">manu frocio</a> </li>
            <li><a href="http://www.habbo.es/tag/noche" class="tag">noche</a> </li>
            <li><a href="http://www.habbo.es/tag/perros" class="tag">perros</a> </li>
            <li><a href="http://www.habbo.es/tag/playa" class="tag">playa</a> </li>

            <li><a href="http://www.habbo.es/tag/pop" class="tag">pop</a> </li>
            <li><a href="http://www.habbo.es/tag/postre" class="tag">postre</a> </li>
            <li><a href="http://www.habbo.es/tag/rap" class="tag">rap</a> </li>
            <li><a href="http://www.habbo.es/tag/rock" class="tag">rock</a> </li>

            <li><a href="http://www.habbo.es/tag/xd" class="tag">xd</a> </li>
    </ul>
        </div>
    </div>
</div>
   
                       
                           
                   
      </div>
                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
             


</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
</div>
</div>
<script type="text/javascript">
    LandingPage.checkLoginButtonSetTimer();
</script>

<script type="text/javascript">
HabboView.run();
</script>

<script src="http://static.rpxnow.com/js/lib/rpx.js" type="text/javascript"></script>

<script type="text/javascript">
  RPXNOW.overlay = false;
  RPXNOW.language_preference = 'es';
  RPXNOW.default_provider = 'google';
</script>

<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-448325-19");
pageTracker._trackPageview();
</script>
    <!-- START Nielsen Online SiteCensus V6.0 -->
<!-- COPYRIGHT 2009 Nielsen Online -->
<script type="text/javascript" src="//secure-uk.imrworldwide.com/v60.js">
</script>
<script type="text/javascript">
 var theCid = "es-widantena3tv";
 if (top == self) {
   theCid = "es-antena3tv";
 }
 var pvar = { cid: theCid, content: "0", server: "secure-uk" };
 var trac = nol_t(pvar);
 trac.record().post();
</script>
<!-- END Nielsen Online SiteCensus V6.0 -->
    <script type="text/javascript">
if (window.location.href.indexOf(".es/register/welcome") != -1) {

    var tdTrackBackImg = new Image();
        var tdTrackBackUrl = "";

    if (typeof tdInit != 'undefined') { tdInit(); }
        if (typeof tdTrack != 'undefined') { tdTrack(); }

        <!-- Google Code for Registration Conversion Page HL-14191 BEGIN -->
        var google_conversion_id = 1042387290;
        var google_conversion_language = "es";
        var google_conversion_format = "2";
        var google_conversion_color = "FFFFFF";
        var google_conversion_label = "gyfsCK6qSBDaoobxAw";

        document.write('<'   'script language="JavaScript" type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"'   '>'   '</'   'script'   '>');

}

</script>

<script type="text/javascript">
if (window.location.href.indexOf("/register/welcome") != -1) {

    var tdTrackBackImg = new Image();
        var tdTrackBackUrl = "";

    if (typeof tdInit != 'undefined') { tdInit(); }
        if (typeof tdTrack != 'undefined') { tdTrack(); }

        <!-- Google Code for Registration Conversion Page HL-14191 BEGIN -->
        var google_conversion_id = 1042373520;
        var google_conversion_language = "es";
        var google_conversion_format = "2";
        var google_conversion_color = "FFFFFF";
        var google_conversion_label = "yJatCLTBTRCQt4XxAw";

        document.write('<'   'script language="JavaScript" type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"'   '>'   '</'   'script'   '>');

}
</script>


<script type="text/javascript">
if (window.location.href.indexOf(".co/register/welcome") != -1) {

        var tdTrackBackImg = new Image();
        var tdTrackBackUrl = "";

        if (typeof tdInit != 'undefined') { tdInit(); }
        if (typeof tdTrack != 'undefined') { tdTrack(); }

}
</script>


<script type="text/javascript">
if (window.location.href.indexOf(".cl/register/welcome") != -1) {

        var tdTrackBackImg = new Image();
        var tdTrackBackUrl = "";

        if (typeof tdInit != 'undefined') { tdInit(); }
        if (typeof tdTrack != 'undefined') { tdTrack(); }

}
</script>



<script type="text/javascript">
if (typeof tagCertifica != 'undefined') {
tagCertifica(19251, 'url');
}
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
   
   
       

</body>
</html>