<!-- Đăng nhập tài khoản -->
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) {
    die('Access denied...');
}
layouts();
?>

<div class="row">
    <div class="col-4" style="margin: 50px auto;">
        <h2 class="text-center text-uppercase">Đăng nhập quản lí user</h2>
        <form action="" method="post">
            <div class="form-group mg-form">
                <label for="">Email: </label>
                <input type="email" class="form-control" placeholder="Địa chỉ email">
            </div>
            <div class="form-group mg-form">
                <label for="">Password: </label>
                <input type="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <button class="btn btn-primary btn-block mg-form" type="submit">
                Đăng nhập
            </button>
            <hr>
            <p class="text-center"><a href="?module=auth&action=forgot">Quên mật khẩu</a></p>
            <p class="text-center"><a href="?module=auth&action=register">Đăng ký tài khoản</a></p>
        </form>
    </div>
</div>

<?php
layouts('footer');
?>
