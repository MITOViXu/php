
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

?>
<div style="height: 100vh;">

</div>
<?php
// require_once(_WEB_PATH_TEMPLATES.'/layout/footer.php'); 
layouts('footer');
?>

