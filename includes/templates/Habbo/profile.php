<?php
$page['id']="1";
$page['sub_id']="1";
$page['name']="profile";
$page['redirect']="1";
require_once("./includes/core.php");
$myrow = "get_userinfo";
?>
<?php
if(isset($_GET['tab'])){
	if(($_GET['tab']) < 1 || $_GET['tab'] > 8 ){
		echo "Id non trovato";
		$tab = 0;
		exit;
	} else {
		$tab = $_GET['tab'];
	}
} else {
	$tab = "1";
}

if($tab == "1"){

	

	// Wardrobe handler



} else if($tab == "3"){
	if(isset($_POST['save'])){
	$pass1 = $_POST['password'];
	//Hashes and salts the first password with the user id (in lowercase) --encryption--
	$pass1_hash = HoloHash($pass1, $myrow['username']);

	$mail1 = $_POST['email'];
	$themail = $mail1;
	if($_POST['directemail'] == "on"){ $newsletter = "checked=\"checked\""; }else{ $newsletter = ""; }
		//checks password --encryption--
		if($pass1_hash == $myrow['password']){
		$email_check = preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $mail1);
			if($email_check == "1"){
			if($_POST['directemail'] == "on"){ $newsletter = "1"; }else{ $newsletter = "0"; }
			mysql_query("UPDATE users SET mail = '".$mail1."', newsletter = '".$newsletter."' WHERE username = '".$rawname."' and password = '".$rawpass."'") or die(mysql_error());
			$result = "Email Cambiata con successo ".$mail1."";
			} else {
			$result = "Indirizzo email invalido";
			$error = "1";
			}
		} else {
		$result = "Errore!";
		$error = "1";
		}
	} else {
	$themail = $myrow['email'];
	//if($myrow['newsletter'] == "1"){ $newsletter = "checked=\"checked\""; }else{ $newsletter = ""; }
	}
} else if($tab == "4"){
	if(isset($_POST['save'])){
	$pass1 = $_POST['password'];
	//Hashes and salts the old password with the user id (in lowercase) --encryption--
	$pass1_hash = HoloHash($pass1, $myrow['username']);

	$newpass = $_POST['pass'];
	//Hashes and salts the new password with the user id (in lowercase) --encryption--
	$newpass_hash = HoloHash($newpass, $rawname);
	$newpass_conf = $_POST['confpass'];
		if($pass1_hash == $myrow['password']){
			if($newpass == $newpass_conf){
				if(strlen($newpass) < 6){
				$result = "La tua password deve contenere almeno 6 caratteri";
				$error = "1";
				} else {
					if(strlen($newpass) > 25){
					$result = "La tua password puo' avere un max di 25 caratteri";
					$error = "1";
					} else {
					//Updates password --encryption--
					mysql_query("UPDATE users SET password = '".$newpass_hash."' WHERE username = '".$rawname."' and password = '".$rawpass."'") or die(mysql_error());
					$result = "Password Cambiata con successo rieffettua il login.";
					}
				}
			} else {
			$result = "Password invalida";
			$error = "1";
			}
		} else {
		$result = "Le informazioni fornite non corrispondono a quello che abbiamo sul database";
		$error = "1";
		}
	}


}

?>
<div id="overlay"></div>
<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="<?php echo get_settings("hotel_url"); ?>/"></a></h1>
<div id="subnavi">     <div id="subnavi-search">
         <div id="subnavi-search-upper">

               <ul id="subnavi-search-links">

                               
<li>
<a href="./FAQ/index.php">FAQ</a>
</li>
                       <li>

                               <form action="logout.php" method="post">

                                       <button type="submit" id="signout" class="link"><span>Logout</span></button>

                               </form>

                       </li>

               </ul>         </div>
     </div>
     <div id="to-hotel">
                 <a href="client" class="new-button green-button" target="104b4c2297835b0959575b9926d7729ebc753c0e" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter in <?php echo get_title(); ?></b><i></i></a>
     </div>
 </div>
 <script type="text/javascript">

 L10N.put("purchase.group.title", "Create a Group");
 document.observe("dom:loaded", function() {
     $("signout").observe("click", function() {
         HabboClient.close();
     });
 });
 </script><ul id="navi">        <li class="metab selected">
                   <strong>
                           <?php echo get_userinfo("username"); ?> ( <img src="http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/<?php echo $habboweb ?>/web-gallery/v2/images/rpx/icon_habbo_small.png" style="margin-bottom:-2px;" /> )</i>
                   </strong>
                 <span></span>
               </li>
<li>

			<a href="/news">Community</a>
			<span></span>
		</li>
		<li>

			<a href="/credits">Credits</a>
			<span></span>
		</li>
		<li>

			<a href="/safety">Safety</a>
			<span></span>
		</li></ul>

        <div id="habbos-online"><div class="rounded"><span><?php echo get_users_online(); ?> <?php echo $language['members_online']; ?></span></div></div>

	</div></div><div id="content-container">

<div id="navi2-container" class="pngbg">
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li>
				<a href="/profile">Home</a>
				
			</li>
			<li class="selected">
				Profile
				
			</li>
	</ul>
    </div>
</div>
<div id="container">
	<div id="content">
    <div>
<div class="content">
<div class="habblet-container" style="float:left; width:210px;">
<div class="cbb settings">

<h2 class="title">Account Settings</h2>
<div class="box-content">
            <div id="settingsNavigation">
            <ul>
		<?php
		


		if($tab == "3"){
                echo "<li class='selected'>Email
                </li>";
		} else {
                echo "<li><a href='profile.php?tab=3'>Email</a>
                </li>";
		}

		if($tab == "4"){
                echo "<li class='selected'>Password
                </li>";
		} else {
                echo "<li><a href='profile.php?tab=4'>Password</a>
                </li>";
		}



		if($tab == "8"){

		} else {

		}
		?>
            </ul>
            </div>
</div></div>
</div>

<?php if($tab == "1"){ ?>
<div class="habblet-container" style="float:left; width: 560px;">
<div class="cbb clearfix settings">

<h2 class="title">Change Settings</h2>
<div class="box-content">

<?php
if(!empty($result)){
	if($error == "1"){
	echo "<div class='rounded rounded-red'>";
	} else {
	echo "<div class='rounded rounded-green'>";
	}
	echo "".$result."<br />
	</div><br />";
}
?>
	<div>&nbsp;</div>
To Change Settings Simply choose from one of <b> settings </b> you can find here on the Left Side.
<div id="settings-editor">

</div>

<div id="settings-hc" style="display: none">
	<div class="rounded rounded-hcred clearfix">
<a href="club.php" id="settings-hc-logo"></a>
Vestiti Marcati HC <img src="./web-gallery/v2/images/habboclub/hc_mini.png" /> sono disponibili solo per i soci del Club Melux. <a href="club.php">Entra Ora</a>
	</div>
</div>

<div id="settings-oldfigure" style="display: none">
	<div class="rounded rounded-lightbrown clearfix">
Il tuo Habbo aveva vestiti o colori che non sono più selezionabili.
Scegli un nuovo look.
	</div>
</div>

<form method="post" action="profile.php?tab=1" id="settings-form" style="display: none">
<input type="hidden" name="tab" value="1" />
<input type="hidden" name="__app_key" value="HoloCMS" />
<input type="hidden" name="figureData" id="settings-figure" value="<?php echo $mylook1; ?>" />
<input type="hidden" name="newGender" id="settings-gender" value="<?php echo $mysex1; ?>" />
<input type="hidden" name="editorState" id="settings-state" value="" />
<a href="#" id="settings-submit" class="new-button disabled-button"><b>Salva i Cambiamenti</b><i></i></a>

<script type="text/javascript" language="JavaScript">


swfobj.addVariable("showClubSelections", "1");
<?php if( $hc_member ){ ?>swfobj.addVariable("userHasClub", "1");<?php } ?>

if (deconcept.SWFObjectUtil.getPlayerVersion()["major"] >= 8) {
	<?php if( !$hc_member){ ?>$("settings-editor").setStyle({ textAlign: "center"});<?php } ?>
	swfobj.write("settings-editor");
	$("settings-form").show();
	<?php if( $hc_member){ ?>$("settings-wardrobe").show();<?php } ?>
}
</script>

</form>

</div>

</div>
</div>
</div>
</div>
    </div>

<?php } else if($tab == "3"){ ?>
    <div class="habblet-container " style="float:left; width: 560px;">
        <div class="cbb clearfix settings">

            <h2 class="title">Change Your Email Address</h2>
            <div class="box-content">

<?php
if(!empty($result)){
	if($error == "1"){
	echo "<div class='rounded rounded-red'>";
	} else {
	echo "<div class='rounded rounded-green'>";
	}
	echo "".$result."<br />
	</div><br />";
}
?>



<form action="profile.php?tab=3" method="post" id="emailform">
<input type="hidden" name="tab" value="3" />
<input type="hidden" name="__app_key" value="HoloCMS" />

<div class="settings-step">

	<h4>1.</h4>
	<div class="settings-step-content">

<h3>Write your current password!</h3>

<p>
 <label for="currentpassword">Password:</label><br />
 <input type="password" size="32" maxlength="32" name="password" id="currentpassword" class="currentpassword " />
</p>



	</div>
</div>
<div class="settings-step">

	<h4>2.</h4>
	<div class="settings-step-content">

<h3>Enter your new Email Address</h3>



<p>
<label for="email">Email Address:</label><br />
<input type="text" name="email" id="email" size="32" maxlength="48" value="<?php echo $themail; ?>" />
</p>



	</div>
</div>

<div class="settings-buttons">
<input type="submit" value="Salva" name="save" class="submit" />
</div>

</form>

</div></div></div></div>


</div>
    </div>
<?php } else if($tab == "4"){ ?>
    <div class="habblet-container " style="float:left; width: 560px;">
        <div class="cbb clearfix settings">

            <h2 class="title">Change Your Password</h2>
            <div class="box-content">

<?php
if(!empty($result)){
	if($error == "1"){
	echo "<div class='rounded rounded-red'>";
	} else {
	echo "<div class='rounded rounded-green'>";
	}
	echo "".$result."<br />
	</div><br />";
}
?>

<form action="profile.php?tab=4" method="post" id="passwordform">
<input type="hidden" name="tab" value="4" />
<input type="hidden" name="__app_key" value="HoloCMS" />

<div class="settings-step">

	<h4>1.</h4>
	<div class="settings-step-content">

<h3>Enter your details</h3>

<p>
 <label for="currentpassword">Password:</label><br />
 <input type="password" size="32" maxlength="32" name="password" id="currentpassword" class="currentpassword " />
</p>



	</div>
</div>
<div class="settings-step">

	<h4>2.</h4>
	<div class="settings-step-content">

<h3>Old Password</h3>

<p>Re-enter the current password.</p>

<p>
<label for="pass">New Password:</label><br />
<input type="password" name="pass" id="password" size="32" maxlength="48" value="" />
</p>

<p>
<label for="confpass">Confirm new password:</label><br/>
<input type="password" name="confpass" id="password" size="32" maxlength="48" value="" />
</p>

	</div>
</div>

<div class="settings-buttons">
<input type="submit" value="Salva" name="save" class="submit" />
</div>

</form>

</div></div></div></div>



</div>
    </div>

    </div>
    </div>
<?php } else { ?>
<b>ID Non Valido.</b>
<?php } ?>

