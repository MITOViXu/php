
<!-- Hàm liên quan đến session hay cookies -->
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) die('Access denied...');

// Hàm gán session sử dụng arrow function giống như js
$setSession = fn($key, $value) => $_SESSION[$key] = $value;

function setSession($key, $value) {
    return $_SESSION[$key] = $value;
}

// Hàm đọc session
function getSession($key = '')
{
    if(empty($key)) return $_SESSION;
    else if(isset($_SESSION[$key])) return $_SESSION[$key];
}

// Hàm xóa session
function removeSession($key='')
{
    if(empty($key)) {
        session_destroy();
        return true;
    } 
    else{
        if(isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return true;
        }
    }
}

// Hàm gán flash data khi sử dụng xong data lại xóa đi
function setFlashData($key, $value)  {
    $key = 'flash_'.$key;
    return setSession($key, $value);
}

// Hàm đọc xong xóa session
function getFlashData($key){
    $key = 'flash_'.$key;
    $data = getSession($key);
    removeSession($key);
    return $data;
}