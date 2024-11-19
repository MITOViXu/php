<!-- Đăng nhập tài khoản -->
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) {
    die('Access denied...');
}

$data = [
    'pageTitle'=> 'Đăng nhập tài khoản',
];

layouts('header-login');

if(isPost()){
    $filterAll = filter();
    // Hàm trim là loại bỏ khoảng cách
    if(!empty(trim($filterAll['email'])) && !empty(trim($filterAll['password']))){
        $email = $filterAll['email'];
        $password = $filterAll['password'];
        $useQuerry = oneRaw("SELECT * FROM users where email = '$email'");
        $userId = $useQuerry['id'];
        // printRaw($useQuerry);
        if(!empty($useQuerry)){
            $hash = $useQuerry['password'];
            setFlashData('old',$filterAll);
            if(password_verify($password, $hash)){
                
                $userLoginMulti = getRow("SELECT * from tokenlogin where user_Id = $userId");

                if($userLoginMulti > 0){
                    setFlashData('msg','Bạn đang đăng nhập ở một nơi khác.');
                    setFlashData('msg_type','danger');
                    redirect('?module=auth&action=login');
                }

                // Tạo token login kiểm tra xem người dùng có đang đăng nhập hay không
                $tokenlogin = sha1(uniqid().time());
                // $userId = $useQuerry['id'];
                $dataInsert = [
                    'user_id'=> $userId,
                    'token' =>  $tokenlogin,
                    'create_at'=> date('Y-m-d H:i:s')
                ];

                $insertStatus = insert('tokenlogin',$dataInsert);

                if($insertStatus){

                    // Insert thành công
                    // lưu vào session
                    setSession('loginToken', $tokenlogin); 

                    redirect('?module=home&action=dashboard');
                }else{
                    setFlashData('msg','Không thể đăng nhập, vui lòng thử lại sau');
                    setFlashData('msg_type','danger');
                }
            }
            else{
                setFlashData('msg','Mật khẩu không chính xác.');
                setFlashData('msg_type','danger');
            }
            
        }
        else{
            setFlashData('msg','Email không tồn tại.');
            setFlashData('msg_type','danger');
        }
    }
    else{
        setFlashData('msg','Vui lòng nhập email và mật khẩu.');
        setFlashData('msg_type','danger');
    }
    redirect('?module=auth&action=login');

}

if(isLogin()){
    redirect("?module=home&action=dashboard");
}

$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$old = getFlashData('old');

// var_dump(isPost());

// $kq = filter();
// echo "<pre>";
// print_r($kq);
// echo "</pre>";


// var_dump(isNumberFloat(1.1));

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
            <?php 
                getSmg($msg, $msg_type);
            ?>
            <form action="" method="post">
                <div class="form-group mg-form">
                    <label for="">Email: </label>
                    <input name="email" type="email" class="form-control" placeholder="Địa chỉ email" value = "<?php echo !empty($old['email']) ? $old['email'] : null ?>">
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
layouts('footer-login');
?>
