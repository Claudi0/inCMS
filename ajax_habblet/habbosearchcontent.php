<?php
require_once("../global.php");

function time_stamp($session_time){$time_difference = time() - $session_time ;$seconds = $time_difference ;$minutes = round($time_difference / 60 );$hours = round($time_difference / 3600 );$days = round($time_difference / 86400 );$weeks = round($time_difference / 604800 );$months = round($time_difference / 2419200 );$years = round($time_difference / 29030400 );if($seconds <= 60){return "Hace $seconds segundos";}else if($minutes <=60){if($minutes==1){return "Hace 1 minuto";}else{return "Hace $minutes minutos";}}else if($hours <=24){if($hours==1){return "Hace 1 hora"; } else{return "Hace $hours horas";}}else if($days <= 7){if($days==1){return "Hace 1 d&#237;a";}else{return "Hace $days d&#237;as";}}else if($weeks <= 4){if($weeks==1){return "Hace 1 semana";}else{return "Hace $weeks semanas";}}else if($months <=12){if($months==1){return "Hace 1 mes";}else{return "Hace $months meses";}}else{if($years==1){return "Hace 1 a&#241;o";}else{return "Hace $years a&#241;os";}}}
function searchHabbos($tag) {
	if(!isset($_POST['pageNumber']))
		$_POST['pageNumber'] = 1;
	$pag = (int)$_POST['pageNumber']*10;
	$pag2 = $pag-9;
	$buscarhabbo = mysql_query("SELECT * FROM users WHERE username LIKE '%".$tag."%' LIMIT ".$pag2.", 10");
	$net = '<ul class="habblet-list">';
	$m = 0;
	while($datoshabbo = mysql_fetch_array($buscarhabbo)) {
		$amigosdehabbo = mysql_query("SELECT * FROM messenger_friendships WHERE user_one_id = '".USER_ID."' AND user_two_id = '".$datoshabbo['id']."'");
		if ($m%2 == 0)
			$color = "even";
		else
			$color = "odd";
		$acceso = @date("d/m/Y h:iA", $datoshabbo['last_online']);
		if(empty($datoshabbo['last_online']))	
		$acceso = "Nunca";
		if (empty($datoshabbo['motto']))
		$datoshabbo['motto'] = "";
		if(empty($datoshabbo['last_online']))	{
		$hace = "Nunca";}else{$hace = time_stamp($datoshabbo['last_online']);};
		$net .='<li style="background-image: url(http://www.habbo.es/habbo-imaging/avatar/hr-165-45.hd-208-2.ch-250-64.lg-285-82.sh-290-64,s-3.g-0.d-3.h-3.a-0,107c88f630e47d53d3ca4bc0194f18a5.gif)" homeurl="/home/'.$datoshabbo['username'].'" class="'.$color.' offline">';
		$net .='<div class="item"><b>'.$datoshabbo['username'].'</b><br>'.$datoshabbo['motto'].'</div>';
		$net .='<div class="lastlogin"><b>&#218;ltimo acceso</b><br><span title="'.$acceso.'">'.$hace.'</span></div>';
		if((mysql_num_rows($amigosdehabbo) == 0)&&($datoshabbo['id'] != USER_ID))
		$net .='<div class="tools"><a title="A&#241;ade a '.$datoshabbo['username'].' a tu Lista de Amigos" avatarid="'.$datoshabbo['id'].'" class="add" href="#"></a></div>';
		$net .='<div class="clear"></div></li>';
		$m++;
	}
	$net .='</ul>';
	if ($m==0) {
		$net .= "No se ha encontrado ning&uacute;n usuario";
	}
	$dato1 = mysql_query("SELECT * FROM users WHERE username LIKE '%".$tag."%'");
	$dato = mysql_num_rows($dato1)/10;
	if(substr($dato, strlen($dato)-2, strlen($dato)-1) == ".9" or ".8" or ".7" or ".6" or ".5" or ".4" or ".3" or ".2" or ".1")
	$dato = substr($dato, 0, strlen($dato)-2)+1;

	if($dat != 1) {
		$net .='<div id="habblet-paging-avatar-habblet-list-container"><p class="paging-navigation" id="avatar-habblet-list-container-list-paging">';
		$net .= '<a id="avatar-habblet-list-container-list-previous" class="avatar-habblet-list-container-list-paging-link" href="#">&#171;</a>';
		for($i=$_POST['pageNumber'];$i<=$_POST['pageNumber']+5;$i++) {
			if($i<=$dato)
			$net .= '<a id="avatar-habblet-list-container-list-page-'.$i.'" class="avatar-habblet-list-container-list-paging-link" href="#">'.$i.'</a>';
		}
		$net .= '<a id="avatar-habblet-list-container-list-next" class="avatar-habblet-list-container-list-paging-link" href="#">&#187;</a></p><input type="hidden" value="'.$_POST['pageNumber'].'" id="avatar-habblet-list-container-pageNumber"><input type="hidden" value="'.$dat.'" id="avatar-habblet-list-container-totalPages"></div>';
	}
	return $net;
}
echo searchHabbos($_POST['searchString']);

?>