<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d'
| http://www.meth0d.org
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/
define('Xukys', true);
require "global.php";
require "nucleo/class.homes.php";

$qryId = 0;
$userData = null;

if (isset($_GET['qryName']))
{
	$qryId = $users->name2id(clean($_GET['qryName']));
}
else if (isset($_GET['qryId']) && is_numeric($_GET['qryId']))
{
	$qryId = intval($_GET['qryId']);
}

if ($qryId <= 0 || !$users->IdExists($qryId))
{
	require "error.php";
	exit;
}

if (LOGGED_IN && $qryId == USER_ID)
{
	define('TAB_ID', 1);
	define('PAGE_ID', 33);
}

if (!HomesManager::HomeExists('user', $qryId))
{
	HomesManager::CreateHome('user', $qryId);
}

$userData = mysql_fetch_assoc(dbquery("SELECT username FROM users WHERE id = '" . $qryId . "' LIMIT 1"));
$homeData = HomesManager::GetHome(HomesManager::GetHomeId('user', $qryId));

$tpl->Init();

$tpl->SetParam('page_title', clean($userData['username']));
if(isset($_SESSION['startSessionEditHome']))
{
	if($_SESSION['startSessionEditHome'] == $qryId)
	{
		$tpl->SetParam('body_id', 'editmode');
	}
	else
	{
		$tpl->SetParam('body_id', 'viewmode');
	}
}
else
{
	$tpl->SetParam('body_id', 'viewmode');
}
$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('homes');
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-generic');
//$tpl->AddGeneric('head-myhabbo');
if(isset($_SESSION['startSessionEditHome']))
{
	$homeedit = new Template('home-edit');
	$homeedit->SetParam('qryId', $qryId);
	$tpl->AddTemplate($homeedit);
}
$tpl->AddGeneric('head-bottom');
$tpl->AddGeneric('generic-top');

$home = new Template('page-home-personaje');
$home->SetParam('home_title', clean($userData['username']));
$home->SetParam('qryId', $qryId);
$home->SetParam('homeData', $homeData);
$tpl->AddTemplate($home);

$tpl->AddGeneric('footer');
$tpl->Output();

?>