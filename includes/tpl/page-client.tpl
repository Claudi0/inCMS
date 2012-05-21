<body id="client" class="flashclient">
 
<script type="text/javascript">
var habboDefaultClientP opupUrl = "%www%/client";
</script>

<noscript>
    <meta http-equiv="refresh" content="0;url=%www%/client/nojs" />
</noscript>

<script type="text/javascript">
    FlashExternalInterf ace.loginLogEnabled = true;
   
    FlashExternalInterf ace.logLoginStep("web.view.start");
   
    if (top == self) {
        FlashHabboClient.ca cheCheck();
    }
    var flashvars = {
            "client.allow.cross. domain" : "1",
            "client.notify.cross .domain" : "0",
            "connection.info.hos t" : "TUNOIP",
            "connection.info.por t" : "TUPUERTO",
            "site.url" : "http://TUNOIP",
            "url.prefix" : "http://TUNOIP",
            "client.reload.url" : "http://TUNOIP/account/reauthenticate?page=/flash_client",
            "client.fatal.error. url" : "http://blox.zapto.org/flash_client_error",
            "client.connection.f ailed.url" : "http://blox.zapto.org/client_connection_failed",
            "external.hash" : "",
            "external.variables. txt" : "http://drakohotel.com/gamedata/external_variables/dd0e5d566940ff76b763c18c1efcaee7a50d32d6",
            "external.texts.txt" : "http://drakohotel.com/gamedata/external_flash_texts/47a143450bd71bbe0699c1c954e24464af0e3bff",
            "productdata.load.ur l" : "http://drakohotel.com/gamedata/productdata/0f8c97207bce440e9647fb83ac905365a631ed46",
            "furnidata.load.url" : "http://drakohotel.com/gamedata/furnidata/e573f191d3d2019783ef589228c8f4b1b5d7961f",
            "use.sso.ticket" : "1",
<?php

if ($forwardType > 0)
{
    echo '            "forward.type" : "' . $forwardType . '",' . LB;
    echo '            "forward.id" : "' . $forwardId . '",' . LB;
}

?>
            "sso.ticket" : "%sso_ticket%",
            "processlog.enabled" : "0",
            "account_id" : "0",
            "client.starting" : "¡Por favor espera %habboname%!, El nombre de tu holo se están cargando",
            "flash.client.url" : "//drakohotel.com/gordon/RELEASE63-201112132302-513448431/",
            "user.hash" : "",
            "facebook.user" : "0",
            "has.identity" : "0",
            "flash.client.origin" : "popup"
    };
    var params = {
        "base" : "//drakohotel.com/gordon/RELEASE63-201112132302-513448431/",
        "allowScriptAccess" : "always",
        "menu" : "false"               
    };
   
    if (!(HabbletLoader.needs FlashKbWorkaround())) {
       params["wmode"] = "opaque";
    }
   
    var clientUrl = "//drakohotel.com/gordon/RELEASE63-201112132302-513448431/hokep.swf";
    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "http://images.habbo.com/habboweb/%web_build%/web-gallery/flash/expressInstall.swf", flashvars, params);
 
    window.onbeforeunlo ad = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.i ndexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unload ing();
        } catch (e) {}
    }
</script>
 
<div id="overlay"></div>
<div id="client-ui" >
    <div id="flash-wrapper">
    <div id="flash-container">
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none">
<div class="cbb clearfix">
    <h2 class="title">Please install Adobe Flash Player.</h2>
    <div class="box-content">
            <p>You can install and download Adobe Flash Player here: <a href="http://get.adobe.com/flashplayer/">Install flash player</a>. More instructions for installation can be found here: <a href="http://www.adobe.com/products/flashplayer/productinfo/instructions/">More information</a></p>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://images.habbo.com/habboweb/%web_build%/web-gallery/v2/images/client/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
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
    <div style="display: none">
<div id="habboCountUpdateTar get">
%hotel_status%
</div>
    <script language="JavaScript" type="text/javascript">
        setTimeout(function() {
            HabboCounter.init(600);
        }, 20000);
    </script>