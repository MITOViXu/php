<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) die('Access denied...');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo !empty($data['pageTitle']) ? $data['pageTitle'] : "Quản lý người dùng" ?></title>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/style.css?ver="<?php echo rand() ?>> -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/style.css?ver">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
</head>
<body>
    <h1>Header</h1>
</body>
</html>