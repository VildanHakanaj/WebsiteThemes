<?php
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("SHARED_PATH", PRIVATE_PATH . '/shared');
define("PUBLIC_PATH", PROJECT_PATH . '/public');

$public = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$www_root = substr($_SERVER['SCRIPT_NAME'], 0, $public);

define( 'WWW_ROOT', $www_root );

require_once('library.php');
$db = new Db();
require_once('functions.php');
require_once('dbFunctions.php');