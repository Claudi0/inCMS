var Collectibles=function(){var D;var B=function(){Overlay.show();
D=Dialog.createDialog("collectibles-dialog",L10N.get("collectibles.purchase.title"),9001,0,-1000,C);
Dialog.setAsWaitDialog(D);Dialog.moveDialogToCenter(D);
new Ajax.Request(habboReqPath+"habblet/ajax_shop_auctionConfirm.php",{onComplete:function(E){Dialog.setDialogBody(D,E.responseText);
if(!!$("collectibles-close")){$("collectibles-close").observe("click",C)
}if(!!$("collectibles-purchase")){$("collectibles-purchase").observe("click",function(F){Event.stop(F);A()})}}})};
var A=function(){Dialog.setAsWaitDialog(D);
new Ajax.Request(habboReqPath+"habblet/ajax_shop_auctionPurchase.php",{onComplete:function(E){Dialog.setDialogBody(D,E.responseText);
if(!!$("collectibles-close")){$("collectibles-close").observe("click",C)
}}})};var C=function(E){if(!!E){Event.stop(E)}$("collectibles-dialog").remove();Overlay.hide();
D=null};return{init:function(E){if(E>0){timerEl=$("collectibles-timeleft-value");
if(!!timerEl){new PrettyTimer(E,function(F){timerEl.update(F)},{localizations:{days:L10N.get("time.days")+" ",hours:L10N.get("time.hours")+" ",minutes:L10N.get("time.minutes")+" ",seconds:L10N.get("time.seconds")},endCallback:function(){$("collectibles-purchase").hide()
}})}$$(".collectibles-purchase-current").invoke("observe","click",function(F){Event.stop(F);B()})}}}}();




var habboclub={closeSubscriptionWindow:function(A){if(A){Event.stop(A)}if($("subscription_dialog")){Element.remove("subscription_dialog")}if($("subscription_result")){Element.remove("subscription_result")}Overlay.hide()},showSubscriptionResultWindow:function(A,B){Element.wait($("hc_confirm_box"));var C={optionNumber:A};
if(!!$("settings-gender")){C.newGender=$F("settings-gender")}if(!!$("settings-figure")){C.figureData=$F("settings-figure")}new Ajax.Request(habboReqPath+"habblet/ajax_shop_auctionPurchase.php",{method:"post",parameters:C,onComplete:function(E,D){if($("subscription_dialog")){Element.remove("subscription_dialog")
}habboclub.updateMembership();var F=Dialog.createDialog("subscription_result",B,"9003",0,-1000,habboclub.closeSubscriptionWindow);Dialog.appendDialogBody(F,E.responseText,true);Dialog.moveDialogToCenter(F)}})},catalogUpdate:function(B,A){new Ajax.Request(habboReqPath+"/habblet/ajax/habboclub_gift",{method:"post",parameters:"month="+encodeURIComponent(B)+"&catalogpage="+encodeURIComponent(A),onComplete:function(D,C){($("hc-gift-catalog")).innerHTML=D.responseText
}});return false},updateMembership:function(){new Ajax.Request(habboReqPath+"habblet/ajax_club.php",{method:"get",onComplete:habboclub._updateMembershipCallback})},buttonClick:function(C,A){var B=Dialog.createDialog("subscription_dialog",A,9001,0,-1000,habboclub.closeSubscriptionWindow);Dialog.setAsWaitDialog();
Dialog.moveDialogToCenter(B);Overlay.show();var D={optionNumber:C};if(!!$("settings-gender")){D.newGender=$F("settings-gender")}if(!!$("settings-figure")){D.figureData=$F("settings-figure")}new Ajax.Request(habboReqPath+"habblet/ajax_shop_auctionConfirm.php",{method:"post",parameters:D,onComplete:function(F,E){Dialog.setDialogBody(B,F.responseText)
}});return false},_updateMembershipCallback:function(B,A){$("hc-membership-info").innerHTML=B.responseText}};