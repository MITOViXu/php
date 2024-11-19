<!-- Xóa người dùng -->
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')){
    require_once "../error/access_denied.php";
    die();
}

// Kiểm tra id trong database -> tồn tại -> tiến hành xóa
// Xóa dữ liệu bằng logintoken -> Xóa dữ liệu người dùng

$filterAll = filter();
if(!empty($filterAll['id'])) {
    $userId = $filterAll['id'];
    $userDetail = getRow("SELECT * from users where id = $userId");
    if(!empty($userDetail)) {
        $deleteToken = delete("tokenlogin", "user_Id = $userId");
        if($deleteToken) {
            $deleteUser = delete("users", "id = $userId");
            if($deleteUser) {
                setFlashData('smgAdd',"DELETE user thành công");
                setFlashData('smgAdd_type','success');
            }else{
                setFlashData('smgAdd','Lỗi hệ thống');
                setFlashData('smgAdd_type','danger');
            }
        }
    }else{
        setFlashData('smgAdd','Người dùng không tồn tại trong hệ thống');
        setFlashData('smgAdd_type','danger');
    }

}else{
    setFlashData('smgAdd','Liên kết không tồn tại');
    setFlashData('smgAdd_type','danger');
}

redirect('?module=users&action=list');

?>
