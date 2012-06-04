<?php 
require_once('../includes/core.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

function beta_verify($beta_code) {
	global $database_Beta, $Beta;	
	mysql_select_db($database_Beta, $Beta);
	$query_Beta = "SELECT code FROM beta WHERE code = '".$beta_code."'";
	$Beta2 = mysql_query($query_Beta, $Beta) or die(mysql_error());
	$row_Beta = mysql_fetch_assoc($Beta2);
	$totalRows_Beta = mysql_num_rows($Beta2);
	
	if($totalRows_Beta) $valid_beta = true; else $valid_beta = false;
	mysql_free_result($Beta2);
	
	return $valid_beta;
}

function beta_delete($beta_code) {
	global $database_Beta, $Beta;
	if (isset($beta_code) && ($beta_code != "")) {
	  $deleteSQL = sprintf("DELETE FROM beta WHERE code=%s",
						   GetSQLValueString($beta_code, "text"));
	
	  mysql_select_db($database_Beta, $Beta);
	  $Result1 = mysql_query($deleteSQL, $Beta) or die(mysql_error());
	}	
}

if($_GET['ajaxAct'] == "check_habbo_beta") {
	

	$beta = $core->EscapeString($_GET['beta']);
	$beta_verify = beta_verify($beta);
	if($beta_verify) echo 1; else header("location: start");;
}
?>
