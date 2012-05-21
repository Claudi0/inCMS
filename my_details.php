<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for UberEmu
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

define('TAB_ID', 1);
define('PAGE_ID', 4);

require_once "global.php";
require_once "nucleo/class.mutant.php";

if (!LOGGED_IN)
{
	header("Location: " . WWW . "/");
	exit;
}

// Initialize template system
$tpl->Init();

// Initial variables
$tpl->SetParam('page_title', 'Ajustes');
$tpl->SetParam('body_id', 'profile');

// Generate page header
$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('generic');
$tpl->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/settings.js'));
$tpl->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/settings.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/friendmanagement.css', 'stylesheet'));
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-generic');
$tpl->AddGeneric('head-bottom');

// Generate generic top/navigation/login box
$tpl->AddGeneric('generic-top');

// Navigation
$settingsNavi = new Template('comp-settings-navi');
$tpl->AddTemplate($settingsNavi);

// Content
$updateResult = 0;

$settingsEditor = new Template('page-mydetails');
$settingsEditor->SetParam('username', $users->GetUserVar(USER_ID, 'username'));
$settingsEditor->SetParam('respect1', $users->GetUserVar(USER_ID, 'respect'));
$settingsEditor->SetParam('motto', $users->GetUserVar(USER_ID, 'motto'));
$settingsEditor->SetParam('id', $users->GetUserVar(USER_ID, 'id'));
$settingsEditor->SetParam('mail', $users->GetUserVar(USER_ID, 'mail'));
$settingsEditor->SetParam('last_online', $users->GetUserVar(USER_ID, 'last_online'));
$settingsEditor->SetParam('gender', $users->GetUserVar(USER_ID, 'gender'));
$settingsEditor->SetParam('activity_points', $users->GetUserVar(USER_ID, 'activity_points'));
$settingsEditor->SetParam('credits', $users->GetUserVar(USER_ID, 'credits'));
$settingsEditor->SetParam('account_created', $users->GetUserVar(USER_ID, 'account_created'));
$settingsEditor->SetParam('userH', $userH);
$settingsEditor->SetParam('updateResult', $updateResult);
$tpl->AddTemplate($settingsEditor);

// Footer
$tpl->AddGeneric('footer');

// Output the page
$tpl->Output();

?>