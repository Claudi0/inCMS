<?php
/*#################################
#		HEIL XUKYS CMS 			  #
#     Hecho por masacre10  		  #
#  masacre_11 at hotmail dot com  #
###################################*/



define('SISTEMA', 'XDR'); // [EDITAR] SISTEMA WEB (CMS) :: XDR :: UBER
define('TEST', true); // [EDITAR] TESTING / PROBANDO PAYGOL :: true :: false



if(SISTEMA == 'XDR'):
require './Kernel/Init.php';
elseif(SISTEMA == 'UBER'):
require './global.php';
endif;
if(!in_array($_SERVER['REMOTE_ADDR'], array('109.70.3.48', '109.70.3.146', '109.70.3.58', '127.0.0.1')) && !TEST): die(); endif;

/* VARIABLES EDITAR */
define('CONTRASENA', '12345678910wil'); // EDITAR
define('CREDITOS_A_DAR', 0); //3000000
define('DAR_PLACA', ''); //VIP
/* VARIABLES EDITAR */

if(CONTRASENA == '12345678910wil') { die('Edita la contraseña.'); } // NO EDITAR
if(!isset($_GET[CONTRASENA])): die(); endif;

function cleanWord($str) {
	return htmlspecialchars(mysql_real_escape_string(stripslashes($str)));
}


	$userId = intval(cleanWord($_GET['custom']));

	$passWord = cleanWord($_GET[CONTRASENA]); // NO EDITAR

if(!empty($passWord) && $passWord == CONTRASENA):
	$CheckStaff = mysql_query("SELECT rank FROM users WHERE id = '".$userId."' LIMIT 1") or die(mysql_error());
		if(mysql_num_rows($CheckStaff)):
			$Rank = mysql_result($CheckStaff, 0);
			if($Rank >= 3):
				define('IS_ADMIN', true);
			else:
				define('IS_ADMIN', false);
			endif;
		else: 
		die(); 
		endif;
		mysql_query("UPDATE users SET ".(!IS_ADMIN ? 'rank = \'2\' AND' : '')." vip = '1' WHERE id = '".$userId."' LIMIT 1") or die(mysql_error());
	
	if(CREDITOS_A_DAR != 0):
		mysql_query("UPDATE users SET credits = credits+".CREDITOS_A_DAR." WHERE id = '".$userId."' LIMIT 1") or die(mysql_error());
		if(SISTEMA == 'XDR') { $Socket->_New('credits', $userId); } elseif(SISTEMA == 'UBER') { $core->MUS('updatecredits', $userId); }
	endif;
	
	if(DAR_PLACA != ''):
		mysql_query("INSERT into user_badges (user_id, badge_id) VALUES ('".$userId."', '".DAR_PLACA."')") or die(mysql_error());
	endif;
	
else: die();
endif;
?>