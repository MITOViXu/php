<?php
session_start();

// require mailer source code, thư viện php mailer
require_once("./includes/phpmailer/Exception.php");
require_once("./includes/phpmailer/PHPMailer.php");
require_once("./includes/phpmailer/SMTP.php");

require_once("config.php");
require_once("./includes/functions.php");
require_once("./includes/database.php");
require_once("./includes/session.php"); 

// Gọi hàm set session
// $test_session = $setSession('mtoan', 'Giá trị của session mtoan');
// var_dump($test_session);

// Gọi hàm getSession va removeSession
// echo '<br>';
// removeSession();
// echo getSession('mtoan');

// Hàm flash này cài đặt và set flash data xong thì sẽ tự động xóa nen tiết kiệm bộ nhớ
// setFlashData("msg", "Cài đặt thành công");
// echo "<h1 style='color: green'>".getFlashData("msg")."</h1>";
// sendMail("your client email", "Hello from You", "Nội dung của email");

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