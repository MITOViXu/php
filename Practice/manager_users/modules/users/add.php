<!-- Đăng nhập tài khoản -->
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')){
    require_once "../error/access_denied.php";
    die();
}

// $kq = getRow('SELECT * FROM users');

// var_dump($kq);

// echo "<pre>";
// print_r($kq);
// echo "</pre>";

if(isPost()) {
    $filterAll = filter();
    $errors = [];

    if(empty($filterAll["fullname"]))
        $errors['fullname']['required'] = "Họ tên bắt buộc phải nhập";
    else 
        if(strlen($filterAll["fullname"]) < 5)
            $errors["fullname"]["min"] = "Họ tên bắt buộc phải có 5 ký tự";

    if(empty($filterAll["email"]))
        $errors['email']['required'] = "Email bắt buộc phải nhập";
    else {
        $email = $filterAll["email"];
        $sql="SELECT id FROM users where email = '$email'";
        if(getRow($sql))
            $errors['email']['unique'] = "Email Đã tồn tại";
    }
    if(empty($filterAll["phone"]))
        $errors['phone']['required'] = "Sđt bắt buộc phải nhập";
    else
        if(!isPhone(($filterAll["phone"])))
            $errors["phone"]["isPhone"] = "Sđt không hợp lệ";
    
    if(empty($filterAll["password"]))
        $errors['password']['required'] = "Mật khẩu bắt buộc phải nhập";
    else
        if(strlen(($filterAll["password"])) < 8)
            $errors["password"]["min"] = "Mật khẩu phải có ít nhất 8 ký tự";
    
    if(empty($filterAll["confirm_password"]))
        $errors['confirm_password']['required'] = "Phải nhập lại mật khẩu";
    else
        if($filterAll["confirm_password"] != $filterAll["password"])
            $errors["confirm_password"]["match"] = "Mật khẩu bạn nhập lại không đúng";
    

    if(empty($errors)){
        // $smgAdd = setFlashData('smg', 'Đăng ký thành công');
        // $smg_type = setFlashData('smg_type', 'success');
        // redirect('?module=auth&action=login');
        $dataInsert = [
            "fullname"=> $filterAll['fullname'],
            "email"=> $filterAll['email'],
            "phone"=> $filterAll['phone'],
            "password"=> password_hash($filterAll['password'], PASSWORD_DEFAULT),
            "status"=>  $filterAll['status'],
            "create_at"=> date('Y-m-d H:i:s'),
        ];
        $insertStatus = insert('users',$dataInsert);
        // var_dump($insertStatus);
        if($insertStatus)
        {
            setFlashData('smgAdd', "Thêm người dùng mới thành công");   
            setFlashData('smgAdd_type', "success");
            redirect('?module=users&action=list');
        }else{
            setFlashData('smgAdd', "Hệ thống đang lỗi, vui lòng thử lại sau");   
            setFlashData('smgAdd_type', "danger");
            redirect('?module=users&action=add');
        }
        
    } else {
        setFlashData('smgAdd', 'Vui lòng kiểm tra lại dữ liệu');
        setFlashData('smgAdd_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $filterAll);
        redirect('?module=users&action=add');
    }
    
    echo '<pre>';
    print_r($filterAll);
    echo '</pre>';
}

$smgAdd =getFlashData('smgAdd');
$errors =getFlashData('errors');
$smgAdd_type =getFlashData('smgAdd_type');
$old =getFlashData('old');
layouts('header-login');


?>

<div class="container">
    <div class="row" style="margin: 50px auto;">
        <h2 class="text-center text-uppercase">Thêm người dùng vào danh sách</h2>
        <?php 
            if(!empty($smgAdd)) {
                getSmg($smgAdd, $smgAdd_type);
            }
        ?>
        <form action="" method="post">
            <div class="row">
                <div class="col"> 
                    <div class="form-group mg-form">
                    <label for="">Họ tên: </label>
                    <input type="text" name="fullname" class="form-control" placeholder="Họ tên">
                    <span class="error">
                        <?php
                            form_error('fullname','required', $errors);
                        ?>
                    </span>
                    <span class="error">
                        <?php
                            form_error('fullname','min', $errors);
                        ?>
                    </span>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Email: </label>
                        <input type="email" name="email" class="form-control" placeholder="Địa chỉ email">
                        <span class="error">
                            <?php
                                form_error('email','required', $errors);
                            ?>
                        </span>
                        <span class="error">
                            <?php
                                form_error('email','unique', $errors);
                            ?>
                        </span>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Số điện thoại: </label>
                        <input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
                        <span class="error">
                            <?php
                                form_error('phone','required', $errors);
                            ?>
                        </span>
                        <span class="error">
                            <?php
                                form_error('phone','isPhone', $errors);
                            ?>
                        </span>
                    </div>
                </div>
                <div class="col"> 
                    <div class="form-group mg-form">
                    <label for="">Password: </label>
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                    <span class="error">
                        <?php
                            form_error('password','required', $errors); 
                        ?>
                    </span>
                    <span class="error">
                        <?php
                            form_error('password','min', $errors);
                        ?>
                    </span>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Nhập lại Password: </label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Nhập lại Mật khẩu">
                        <span class="error">
                            <?php
                                form_error('confirm_password','required', $errors);
                            ?>
                        </span>
                        <span class="error">
                            <?php
                                form_error('confirm_password','match', $errors);
                            ?>
                        </span>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Trạng thái</label>
                        <select name="status" id="" class="form-control">
                            <option  value="0" style="color: #DE6F20; font-weight: bold">Chưa kích hoạt</option>
                            <option  value="1" style="color: #476E55; font-weight: bold">Đã kích hoạt</option>
                        </select>
                    </div>
                </div>
            </div>
            

            <button class="mg-btn-add btn btn-primary btn-block" type="submit">
                Thêm người dùng
            </button>
            <a href="?module=users&action=list" class="mg-btn-add btn btn-success btn-block">Quay lại</a>
            <hr>
        </form>
    </div>
</div>

<?php
layouts('footer-login');
?>
