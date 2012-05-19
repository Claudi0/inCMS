<?php
require_once("./asecore.php");
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ./error.php");
}
}
?>
<script language="javascript">
	$('.tooltip').tooltip({ 
	    track: true, 
	    delay: 0, 
	    showURL: false, 
	    showBody: " - ", 
	    fade: 250 
	});

	function DisplayLoad(ButtonID) {
		$('button#' + ButtonID).attr('disabled', 'disabled');
	}

	function SubmitGeneral() {
		$('button#General').attr('disabled', 'disabled');
		$.ajax({
		   type: "POST",
		   url: "functions/basics_update_general.php",
		   data: "cms_url=" + $('#cms_url').val() + "&cms_name=" + $('#cms_name').val() + "&maintenance=" + $('#maintenance').val(),
		   success: function(){
		    $('button#General').html('Updated!')
		     .delay(1200)
		     .queue(function(n) {
        	 	$('button#General').html('Update');
        	 	$('button#General').removeAttr("disabled");
        	 	n();
        	 })
		   }
		 });
	}

	function SubmitClient() {
		$('button#Client').html('Updating...');
		$('button#Client').attr('disabled', 'disabled');
		$.ajax({
		   type: "POST",
		   url: "functions/basics_update_client.php",
		   data: "client_ip=" + $('#client_ip').val() + "&client_port=" + $('#client_port').val() + "&client_mus=" + $('#client_mus').val() + "&client_texts=" + $('#client_texts').val() + "&client_variables=" + $('#client_variables').val() + "&client_swf_path=" + $('#swf_path').val() + "&client_habbo_swf=" + $('#habbo_swf').val(),
		   success: function(){
		    $('button#Client').html('Updated!')
		     .delay(1200)
		     .queue(function(n) {
        	 	$('button#Client').html('Update');
        	 	$('button#Client').removeAttr("disabled");
        	 	n();
        	 })
		   }
		 });
	}

	function SubmitHotel() {
		$('button#Hotel').html('Updating...');
		$('button#Hotel').attr('disabled', 'disabled');
		$.ajax({
		   type: "POST",
		   url: "functions/basics_update_hotel.php",
		   data: "timer=" + $('#timer').val() + "&pixels=" + $('#pixels').val() + "&credits=" + $('#credits').val() + "&motd=" + $('#motd').val(),
		   success: function(){
		    $('button#Hotel').html('Updated!')
		     .delay(1200)
		     .queue(function(n) {
        	 	$('button#Hotel').html('Update');
        	 	$('button#Hotel').removeAttr("disabled");
        	 	n();
        	 })
		   }
		 });
	}
</script>
<div>
	<h1>Basics</h1>
	<div class="formPiece">
		<div>
			<h3>General</h3>
		</div>
		<div>
			<img src="img/info_16.png" class="tooltip" title="Hotel Name - " />
			<label for="cms_name">Hotel Name: </label><input type="text" value="<?php echo get_settings("hotel_name"); ?>" name="cms_name" id="cms_name" /><br />
			
			<img src="img/info_16.png" class="tooltip" title="Website URL - The url to your websites root directory" />
			<label for="cms_url">CMS URL: </label><input type="text" value="<?php echo get_settings("hotel_url"); ?>" name="cms_url" id="cms_url" /><br />
            
            <img src="img/info_16.png" class="tooltip" title="Maintenance" />
			<label for="cms_url">Maintenance: </label><select name="maintenance" id="maintenance"><option value="true" <?php if(get_settings("maintenance") == 'true') echo 'selected'; ?>>True</option><option value="false" <?php if(get_settings("maintenance") == 'false') echo 'selected'; ?>>False</option></select><br />
	
			<button id="General" onClick="SubmitGeneral();">Update</button>
		</div>
	</div>
	<div class="formPiece">
		<div>
			<h3>Client</h3>
		</div>
		
		<div>
			<div class="infobox infobox_info">The hotel may need to reboot for these settings to update</div><br /><br />

			<img src="img/info_16.png" class="tooltip" title="IP Address - The IP address to your hotel emulator" />
			<label for="client_ip">IP Address: </label><input type="text" value="<?php echo get_settings("host"); ?>" name="client_ip" id="client_ip" /><br />

			<img src="img/info_16.png" class="tooltip" title="Port - The port that your emulator is running on" />
			<label for="client_port">Port: </label><input type="text" value="<?php echo get_settings("port"); ?>" name="client_port" id="client_port" /><br />

			<img src="img/info_16.png" class="tooltip" title="MUS Port - The port that your emulators MUS is running on" />
			<label for="client_mus">MUS Port: </label><input type="text" value="<?php echo get_settings("port"); ?>" name="client_mus" id="client_mus" /><br />

			<img src="img/info_16.png" class="tooltip" title="External Texts - The url to your external texts" />
			<label for="client_texts">External Texts: </label><input type="text" value="<?php echo get_settings('client_texts'); ?>" name="client_texts" id="client_texts" /><br />

			<img src="img/info_16.png" class="tooltip" title="External Variables - The url to your external variables" />
			<label for="client_variables">External Variables: </label><input type="text" value="<?php echo get_settings('client_vars'); ?>" name="client_variables" id="client_variables" /><br />
            
            <img src="img/info_16.png" class="tooltip" title="SWF Path - The url to your SWF Path" />
			<label for="swf_path">SWF Path: </label><input type="text" value="<?php echo get_settings('client_base'); ?>" name="swf_path" id="swf_path" /><br />
            
            <img src="img/info_16.png" class="tooltip" title="Habbo SWF - The url to your SWF Path" />
			<label for="habbo_swf">Habbo SWF: </label><input type="text" value="<?php echo $core->CMSConfigs('client_base'); ?>" name="habbo_swf" id="habbo_swf" /><br />

			<button id="Client" onClick="SubmitClient();">Update</button>
		</div>
	</div>
</div>