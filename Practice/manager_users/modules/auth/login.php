<!-- Đăng nhập tài khoản -->
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) {
    die('Access denied...');
}

$data = [
    'pageTitle'=> 'Đăng nhập tài khoản',
];

// layouts('header', $data);

// var_dump(isPost());

// $kq = filter();
// echo "<pre>";
// print_r($kq);
// echo "</pre>";


var_dump(isNumberFloat(1.1));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo !empty($data['pageTitle']) ? $data['pageTitle'] : "Quản lý người dùng" ?></title>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/style.css?ver="<?php echo rand() ?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
</head>
<body>
    <div class="row">
        <div class="col-4" style="margin: 50px auto;">
            <h2 class="text-center text-uppercase">Đăng nhập quản lí user</h2>
            <form action="" method="post">
                <div class="form-group mg-form">
                    <label for="">Email: </label>
                    <input name="email" type="email" class="form-control" placeholder="Địa chỉ email">
                </div>
                <div class="form-group mg-form">
                    <label for="">Password: </label>
                    <input name="password" type="password" class="form-control" placeholder="Mật khẩu">
                </div>
                <button class="mg-btn btn btn-primary btn-block" type="submit">
                    Đăng nhập
                </button>
                <hr>
                <p class="text-center"><a href="?module=auth&action=forgot">Quên mật khẩu</a></p>
                <p class="text-center"><a href="?module=auth&action=register">Đăng ký tài khoản</a></p>
            </form>
        </div>
    </div>
</body>
</html>

<?php
// layouts('footer');
?>
