<!-- Các hàm chung của projects -->

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) die('Access denied...');
$test = "Biến toàn cục";
function layouts($layoutName = 'header', $data = []){
    if(file_exists(_WEB_PATH_TEMPLATES.'/layout/'.$layoutName.'.php')) require_once _WEB_PATH_TEMPLATES.'/layout/'.$layoutName.'.php';
}

// Hàm gửi mail
function sendMail($to, $subject, $content){
      //Load Composer's autoloader
    //   require 'vendor/autoload.php';

      $mail = new PHPMailer(true);
  
      try {
          // Server settings
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = "smtp.gmail.com";                       // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'your email';                 // SMTP username
          $mail->Password   = 'your app password';                    // SMTP password
          $mail->Port       = 465;                                    // TCP port to connect to (587 for TLS)
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
        //   $mail->SMTPSecure = 'ssl';            // Enable implicit TLS encryption
          // Recipients
          $mail->setFrom('your email', 'your name');
          $mail->addAddress($to);                                     // Add a recipient
  
          // Content
          $mail->isHTML(true);                                        // Set email format to HTML
          $mail->Subject = $subject;
          $mail->Body    = $content;
  
          $mail->send();
          echo 'Email sent successfully';
      } catch (Exception $e) {
          echo "Email could not be sent. Error: {$mail->ErrorInfo}";
      }
}

// Kiểm tra phương thức GET
function isGet(){
  if($_SERVER['REQUEST_METHOD']=='GET') return true;
  return false;
}

// Kiểm tra phương thức POST
function isPost(){
  if($_SERVER['REQUEST_METHOD']=='POST') return true;
  return false;
}

// Hàm Filter lọc dữ liệu
function filter(){
  $filterArr = [];
  if(isGet()){
    //  Xử lý dữ liệu trước khi hiển thị ra
    if(!empty($_GET)){
      foreach($_GET as $key => $value){

        // Sử dụng hàm có sẵn trong php
        // Mã hóa tránh người dùng tùy chỉnh can thiệp vào trang web
        // http://localhost/php/Practice/manager_users/?module=auth&action=login&id=1/n%3Cscript%3Ealert(1)%3C/script%3E
        // Bước này đảm bảo rằng ngay cả khi ai đó cố gắng đưa mã độc vào tên khóa, nó sẽ bị vô hiệu hóa. 
        $key = strip_tags($key);
        // Xử lý khi dữ liệu đầu vào là một mảng
        if(is_array($value)) $filterArr[$key] = filter_input(INPUT_GET,$key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        else $filterArr[$key] = filter_input(INPUT_GET,$key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
    }
  }
  if(isPost()){
    //  Xử lý dữ liệu trước khi hiển thị ra
    if(!empty($_POST)){
      foreach($_POST as $key => $value){
        $key = strip_tags($key);
        if(is_array($value)) $filterArr[$key] = filter_input(INPUT_POST,$key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        else $filterArr[$key] = filter_input(INPUT_POST,$key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
    }
  }


  return $filterArr;
}

// Kiểm tra email
function isEmail($email){

  // Hàm có sẵn của php
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Kiểm tra số nguyên INT

function isNumber($nnumber){
  return filter_var($nnumber, FILTER_VALIDATE_INT); 
}

// Kiểm tra số thực FLOAT

function isNumberFloat($nnumber){
  return filter_var($nnumber, FILTER_VALIDATE_FLOAT); 
}