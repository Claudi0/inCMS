<?phprequire_once("../asecore.php");if(!isset($_SESSION['id'])) {if(get_userinfo("rank")>=6) {header("Location: ../error.php");}}
if(isset($_POST['code']))

{
	
      $query = mysql_query("INSERT INTO beta (code) VALUES ('".$core->EscapeStringHK($_POST['code'])."')");

}

?>