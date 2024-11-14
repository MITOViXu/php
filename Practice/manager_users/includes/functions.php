<!-- Các hàm chung của projects -->

<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) die('Access denied...');

function layouts($layoutName = 'header'){
    if(file_exists(_WEB_PATH_TEMPLATES.'/layout/'.$layoutName.'.php')) require_once _WEB_PATH_TEMPLATES.'/layout/'.$layoutName.'.php';
}

?>
