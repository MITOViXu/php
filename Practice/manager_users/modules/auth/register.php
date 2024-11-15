<!-- Đăng nhập tài khoản -->
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) {
    die('Access denied...');
}

$data = [
    'fullname'=> 'KTuong',
    'email'=> 'tuong@gmail.com',
    'phone'=> '09876123451',
];

$kq = update('users', $data, " id = 4");
// $kq = getRow('SELECT * FROM users');

// var_dump($kq);

echo "<pre>";
print_r($kq);
echo "</pre>";

layouts('header');
?>

<div class="row">
    <div class="col-4" style="margin: 50px auto;">
        <h2 class="text-center text-uppercase">Đăng ký tài khoản</h2>
        <form action="" method="post">
            <div class="form-group mg-form">
                <label for="">Họ tên: </label>
                <input type="fullname" class="form-control" placeholder="Họ tên">
            </div>
            <div class="form-group mg-form">
                <label for="">Email: </label>
                <input type="email" class="form-control" placeholder="Địa chỉ email">
            </div>
            <div class="form-group mg-form">
                <label for="">Số điện thoại: </label>
                <input type="number" class="form-control" placeholder="Số điện thoại">
            </div>
            <div class="form-group mg-form">
                <label for="">Password: </label>
                <input type="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <div class="form-group mg-form">
                <label for="">Nhập lại Password: </label>
                <input type="password" class="form-control" placeholder="Nhập lại Mật khẩu">
            </div>
            <button class="mg-btn btn btn-primary btn-block" type="submit">
                Đăng ký
            </button>
            <hr>
            <p class="text-center"><a href="?module=auth&action=login">Đã có tài khoản (Đăng nhập)</a></p>
        </form>
    </div>
</div>

<?php
layouts('footer');
?>
