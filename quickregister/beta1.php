<?php
require_once('../includes/config1.php');
 ?>

<link rel="shortcut icon" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo RSS" href="http://www.habbo.com.br/articles/rss.xml" />
<meta name="csrf-token" content="2e9d1d9d35"/>
<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/common.css" type="text/css" />

<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/common.js" type="text/javascript"></script>



<script type="text/javascript">

var ad_keywords = "";

var ad_key_value = "";

</script>

<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery";
var habboImagerUrl = "http://www.habbo.com.br/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.com.br/client";
window.name = "607dde7a4007168fabf9c7b1fa9e771715395b4b";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "607dde7a4007168fabf9c7b1fa9e771715395b4b";
    HabboClient.maximizeWindow = true;
}


</script>

<meta property="fb:app_id" content="155102069619" />

<meta property="og:site_name" content="Habbo Hotel" />
<meta property="og:title" content="Habbo " />
<meta property="og:url" content="http://www.habbo.com.br" />
<meta property="og:image" content="http://www.habbo.com.br/v2/images/facebook/app_habbo_hotel_image.gif" />
<meta property="og:locale" content="pt_BR" />

<link rel="stylesheet" href="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/styles/quickregister.css" type="text/css" />
<script src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/static/js/quickregister.js" type="text/javascript"></script>
<body id="client" class="background-captcha">
<div id="overlay"></div>
<img src="../web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;">
<div id="stepnumbers">
    <div class="step1focus">Beta Checking</div>
    <div class="stepdone">Account details</div>
    <div class="stepdone">Security Check</div>
    <div class="stephabbo"></div>
</div>
<script type="text/javascript">
function doBetaCheck() {
	BetaisValid = 1;
	betakey = $("#formbeta").val();
	$.get("beta.php", {ajaxAct: "check_habbo_beta", beta: betakey}, function(data) {
		if( $.trim(data) == "0" ) {
			$("#habbo_beta_message_box").html("Beta key is invalid");
			$("#habbo_beta_message_box").removeClass().addClass("errormsg");
			$('input[type=submit]').attr('disabled', 'disabled');
			BetaisValid = 0;
		} else {
			$("#habbo_beta_message_box").html("");
			$("#habbo_beta_message_box").removeClass();
			
		}
	});
}

$().ready(function() {
	
	$('#formbeta').keypress(function(e){
		if(e.which == 13) doBetaCheck();
	});

	
	$('#formbeta').blur(function(e) { doBetaCheck(); });
	
	$("#register_step_one").validate({
		submitHandler: function(form) {
			fail_test = false;
			checkBd();
					doBetaCheck();
					if(BetaisValid === 1) {
						form.submit();
					} else fail_test = true;
			if(fail_test) {
				$('input[type=submit]', this).attr('disabled', 'disabled');
				errorForm();
			}
		},
		rules: {
		
			beta: {
				required: true
			}
		},
		messages: {
			beta: "<?php echo $lang['register_field_required']; ?>"
		}
	});
});

emailIsValid = 0;
usernameIsValid = 0;
passwordIsValid = 0;
passwordIsConfirmed = 0;
birthdayIsValid = 0;
MailisFree = 0;
BetaisValid = 0;
ipischecked = 0;

function errorForm() {
	$('#bd_err').removeClass("display_none");
}

</script>
<div id="main-container">
       <div id="error-placeholder"></div>

    <h2>Security Code</h2>

        <div id="avatar-choices">
<form id="register_step_one" method="post" action="beta.php">
				
				 <div id="recaptcha-input">
				<input type="text" name="beta" id="recaptcha_response_field" />
				<div class="help">Enter your Beta Code Please</div>
				</div>
			
			</div>
			<div class="button">
             <a id="proceed-button" href="#" class="area"><input type="submit" id="proceed-button" class="area" value="" onmousedown="this.style.backgroundColor='#ddd';" />Enter</a>
           
		   <span class="close"></span>
        </div>
				
			</form> 
		