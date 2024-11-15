<?php
session_start();
require_once("config.php");
require_once("./includes/functions.php");
require_once("./includes/database.php");

$module = _MODULE;
$action = _ACTION;

// echo _WEB_HOST."<br>";
// echo _WEB_HOST_TEMPLATES."<br>";
// echo _WEB_PATH."<br>";
// echo _WEB_PATH_TEMPLATES."<br>";
// echo _CODE;

if(!empty($_GET["module"])) {
    if(is_string($_GET["module"])) {
        $module = trim($_GET["module"]);
    }
}
if(!empty($_GET["action"])) {
    if(is_string($_GET["action"])) {
        $action = trim($_GET["action"]);
    }
}
$path = 'modules/'.$module.'/'.$action.'.php';

if(file_exists($path))  require_once($path);
else require_once('modules/error/404.php');