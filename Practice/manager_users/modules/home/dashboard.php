
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) die('Access denied...');

// require_once(_WEB_PATH_TEMPLATES.'/layout/header.php');
$data = [
    'pageTitle'=> 'Trang Dashboard',
];

layouts('header', $data);



if(!isLogin()){
    redirect("?module=auth&action=login");
}
// require_once _WEB_PATH_VIEW.'/users/list.php';
?>
<?php
// require_once(_WEB_PATH_TEMPLATES.'/layout/footer.php'); 
layouts('footer');
?>

