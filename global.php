<?php

// ############################################################################
// Prepare the local environment

define('UBER', true);
define('DS', DIRECTORY_SEPARATOR);
define('LB', chr(13));
define('CWD', str_replace('manage' . DS, '', dirname(__FILE__) . DS));
define('INCLUDES', CWD . 'includes' . DS);
define('USER_IP', $_SERVER['REMOTE_ADDR']);

//ini_set("magic_quotes_runtime", 0);
error_reporting(E_ALL);

session_start();
ini_set ('default_charset', 'iso-8859-1');

// ############################################################################
// Initialize core classes

require_once INCLUDES . "class.core.php";
require_once INCLUDES . "mysql.php";
require_once INCLUDES . "core.php";
require_once INCLUDES . "functions.php";
require_once INCLUDES . "class.cron.php";
require_once INCLUDES . "class.users.php";
require_once INCLUDES . "class.tpl.php";
require_once INCLUDES . "class.grupos.php";

$core = new uberCore();
$cron = new uberCron();
$users = new uberUsers();
$tpl = new uberTpl();


// ############################################################################
// Execute some required core functionality

$core->ParseConfig();
$cron->Execute();

// ############################################################################
// Session handling

if (isset($_SESSION['UBER_USER_N']) && isset($_SESSION['UBER_USER_H']))
{
	$userN = $_SESSION['UBER_USER_N'];
	$userH = $_SESSION['UBER_USER_H'];
	
	if ($users->ValidateUser($userN, $userH))
	{
		define('LOGGED_IN', true);
		define('USER_NAME', $userN);
		define('USER_ID', $users->name2id($userN));
		define('USER_HASH', $userH);
		
		$users->CacheUser(USER_ID);
	}
	else
	{
		@session_destroy();
		header('Location: ./index.html');
		exit;
	}	
}
else
{
	define('LOGGED_IN', false);
	define('USER_NAME', 'Guest');
	define('USER_ID', -1);
	define('USER_HASH', null);
}

define('FORCE_MAINTENANCE', ((uberCore::GetMaintenanceStatus() == "1") ? true : false));

if (FORCE_MAINTENANCE && !defined('IN_MAINTENANCE'))
{
	if (!LOGGED_IN || !$users->HasFuse(USER_ID, 'fuse_ignore_maintenance'))
	{
		header("Location: " . WWW . "/maintenance.html");
		exit;
	}
}

if ((!defined('BAN_PAGE') || !BAN_PAGE) && ($users->IsIpBanned(USER_IP) || (LOGGED_IN && $users->IsUserBanned(USER_NAME))))
{
	header("Location: " . WWW . "/banned.php");
	exit;
}

$core->CheckCookies();

// ############################################################################
// Some commonly used functions for easy access

function dbquery($strQuery = '')
{
	global $db;
	
	if($db->IsConnected())
	{
		return $db->DoQuery($strQuery);
	}
	
	return $db->Error('Could not process query, no active db connection detected..');
}

function filter($strInput = '')
{
	global $core;
	
	return $core->FilterInputString($strInput);
}

function clean($strInput = '', $ignoreHtml = false, $nl2br = false)
{
	global $core;
	
	return $core->CleanStringForOutput($strInput, $ignoreHtml, $nl2br);
}

function shuffle_assoc(&$array)
{
	$keys = array_keys($array);

	shuffle($keys);

	foreach($keys as $key)
	{
		$new[$key] = $array[$key];
	}

	$array = $new;

	return true;
}

include INCLUDES . "class.gtfo.php";
$gtfo  = new GtfoClean();
$gtfo->cleanSystem();

if (defined('MUST_LOG') && !LOGGED_IN) {
    header('Location: ' . WWW . '/');
}

function fixText($str, $quotes = true, $clean = false, $ltgt = false, $transform = false, $guestbook = false)
{
    global $core;
    
    return $core->fixText($str, $quotes, $clean, $ltgt, $transform, $guestbook);
}

function GenRandom()
{
    global $core;
    
    return $core->GenRandom();
}

function BBCode($str)
{
    global $core;
    
    return $core->BBCode($str);
}

function unicodeText($str, $clean = false)
{
    $str = str_replace("�", "\u00a1", $str);
    $str = str_replace("�", "\u00bf", $str);
    $str = str_replace("�", "\u00d1", $str);
    $str = str_replace("�", "\u00f1", $str);
    $str = str_replace("��", "\u00c1", $str);
    $str = str_replace("�", "\u00e1", $str);
    $str = str_replace("�", "\u00c9", $str);
    $str = str_replace("�", "\u00e9", $str);
    $str = str_replace("�", "\u00d3", $str);
    $str = str_replace("�", "\u00f3", $str);
    $str = str_replace("�", "\u00da", $str);
    $str = str_replace("�", "\u00fa", $str);
    $str = str_replace("͍", "\u00cd", $str);
    $str = str_replace("�", "\u00ed", $str);
    
    $str = str_replace('"', '\"', $str);
    
    return $str;
}

function Contains($str, $words, $filter = false)
{
    $return = false;
    
    if ($filter) {
        $str   = strtolower($str);
        $words = strtolower($words);
    }
    
    if (@strpos($str, $words) === false) {
        $return = false;
    } else {
        $return = true;
    }
    
    $getWords = explode(",", str_replace(" ", "", $words));
    
    foreach ($getWords as $Word) {
        if (!$return) {
            if (@strpos($str, $Word) === false) {
                $return = false;
            } else {
                $return = true;
            }
        }
    }
    
    return $return;
}

function write($str, $quotes = true, $clean = false, $ltgt = true, $transform = false, $guestbook = false)
{
    echo fixText($str, $quotes, $clean, $ltgt, $transform, $guestbook);
}


function IsEven($intNumber)
{
    if ($intNumber % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
