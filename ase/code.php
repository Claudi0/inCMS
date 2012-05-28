<?phprequire_once("./asecore.php");if(!isset($_SESSION['id'])) {if(get_userinfo("rank")>=5) {header("Location: ./error.php");}}?>
<script language="javascript">

	$('.tooltip').tooltip({ 

	    track: true, 

	    delay: 0, 

	    showURL: false, 

	    showBody: " - ", 

	    fade: 250 

	});

	

	function LoadContent(PageName, ID) {

		$.ajax({

		   type: "POST",

		   url: "functions/" + PageName + ".php?id=" + ID,

		   success: function(msg){

		     $('.content').html(msg);

		   }

		 });

	}



	function DisplayLoad(ButtonID) {

		$('button#' + ButtonID).attr('disabled', 'disabled');

	}

	

	$('.exitbutton').click(function() { 

	    $('.page').css('display', 'none');

	    $('.overlay').css('display', 'none');

	});

	

	

	function Add() {

	$('button#Add').attr('disabled', 'disabled');

		$.ajax({

		   type: "POST",

		   url: "functions/add_code.php",

		   data: "code=" + $('#beta').val(),

		   success: function(){

			LoadPage('code', '');

        	$('.page').css('display', 'none');

			$('.overlay').css('display', 'none');

		   }

		 });

	}

</script>

<div>

	<h1>Beta Codes</h1>

    <div class="overlay hidden">

		<div class="page hidden">

			<div class="exitbutton"></div>

			<div class="content">

			</div>

		</div>

	</div>

    

	<div class="formPiece">

		<div>

			<h3>Beta Code</h3>

		</div>

		<div>

        <?php
                
		$beta = substr(md5(time()+rand(100000, 999999)),0,10).substr(md5(rand(100000, 999999)),0,6);

		?>

			<img src="img/info_16.png" class="tooltip" title="Code" />

			<label for="code">Code: </label><input type="text"  name="beta" id="beta" value="<?php echo $beta; ?>" /><br />

			<button id="Add" onClick="Add();">Add Beta Code</button><br />

		</div>

	</div>

    

	<div class="formPiece">

		<div>

			<h3>Active Beta Code</h3>

		</div>

		<div>

        <?php

		$betaq = mysql_query("SELECT * FROM beta");

		while($beta = mysql_fetch_array($betaq))

		{

		?>

        <div class="UserSearchResults">

        <p>Code: <strong><?php echo $beta['code']; ?></strong><br />

        </div>

        <?php

		}

		?>

        </div>

    </div>

</div>