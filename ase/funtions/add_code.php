<?php
if(isset($_POST['code']))

{
	
      $query = mysql_query("INSERT INTO beta (code) VALUES ('".$core->EscapeStringHK($_POST['code'])."')");

}

?>