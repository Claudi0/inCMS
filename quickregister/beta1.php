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
	$('#formbeta').blur(function(e) { doBetaCheck(); });

});


BetaisValid = 0;

function errorForm() {
	$('#bd_err').removeClass("display_none");
}

</script>

<form id="register_step_one" method="post" action="beta.php">
				
				<label for="beta">Beta code:</label><br />
				<input type="text" name="beta" id="formbeta" />
				<div class="errormsg display_none" id="habbo_beta_message_box"> 
					<h3>Error message</h3> 
					Error text goes here oh no.
				</div>

				<input type="submit" id="reg_submit_button" value="Submit Beta Avaliation" onmousedown="this.style.backgroundColor='#ddd';" onmouseup="this.style.backgroundColor='#eee';" onmouseover="this.style.backgroundColor='#eee';" onmouseout="this.style.backgroundColor='#fff';" />
			</form> 