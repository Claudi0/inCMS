<?php
/*=========================================================+
|| # HabboCMS - Sistema de administraci�n de contenido Habbo.
|+=========================================================+
|| # Copyright � 2010 Kolesias123. All rights reserved.
|| # http://www.infosmart.com.mx
|| # Partes Copyright � 2009 Yifan Lu. All rights reserved.
|| # http://www.yifanlu.com
|| # Base Copyright � 2007-2008 Meth0d. All rights reserved.
|| # http://www.meth0d.org
|+=========================================================+
|| # InfoSmart 2010. The power of Proyects.
|| # Este es un Software de c�digo libre, libre edici�n.
|+=========================================================+
|| # Todas las imagenes, scripts y temas
|| # Copyright (C) 2010 Sulake Ltd. All rights reserved.
|+=========================================================*/

function fixText($str, $clean = false)
	{
		$str = str_replace("¡","�",$str);
		$str = str_replace("¿","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("ñ","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("á","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("é","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("ó","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("ú","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("�","�",$str);
//		$str = str_replace("\'","'",$str);
//		$str = str_replace('\"','"',$str);
	
		if($clean)
		{
			$str = str_replace("�","N",$str);
			$str = str_replace("�","n",$str);
			$str = str_replace("�","A",$str);
			$str = str_replace("�","a",$str);
			$str = str_replace("�","E",$str);
			$str = str_replace("�","e",$str);
			$str = str_replace("�","O",$str);
			$str = str_replace("�","o",$str);
			$str = str_replace("�","U",$str);
			$str = str_replace("�","u",$str);
			$str = str_replace("�","I",$str);
			$str = str_replace("�","i",$str);
		}
	
		return $str;
	}

$groupid = FixText($_POST['groupId']);

if(is_numeric($groupid) && $groupid > 0){

	$check = mysql_query("SELECT type FROM groups_details WHERE id = '".$groupid."' LIMIT 1") or die(mysql_error());
	$exists = mysql_num_rows($check);

	if($exists > 0){

		$check2 = mysql_query("SELECT groupid FROM groups_memberships WHERE userid = '".USER_ID."' AND groupid = '".$groupid."' LIMIT 1") or die(mysql_errors());
		$already_member = mysql_num_rows($check2);

		if($already_member > 0){

			mysql_query("DELETE FROM groups_memberships WHERE userid = '".$my_id."' AND groupid = '".$groupid."' LIMIT 1") or die(mysql_error());
			echo "<script type=\"text/javascript\">\nlocation.href = habboReqPath + \"groups/".$groupid."/id\";\n</script>";
			echo "<p>Has dejado el grupo con �xito.</p>";
			echo "<p>Por favor espera, seras reedireccionado...</p>";

		} else {

			exit;

		}

	} else {

		exit;

	}

}
?>