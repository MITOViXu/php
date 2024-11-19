<!-- Liệt kê danh sách người dùng -->
<?php

// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')){
    require_once "../error/access_denied.php";
    die();
}

$data =[
    'pageTitle' => 'Danh sách người dùng'
];

layouts('header', $data);

if(!isLogin()){
    redirect("?module=auth&action=login");
}

// Truy vấn vào bảng users
$list_user = getRaw("SELECT * from users order by update_at");

// echo '<pre>';
// print_r($list_user);
// echo '</pre>';
$smgAdd =getFlashData('smgAdd');
$smgAdd_type =getFlashData('smgAdd_type');

?>
<div class="container">
    <hr>
    <h2>Quản lí người dùng</h2>
    <p>
        <a href="?module=users&action=add" class="btn btn-success btn-sm">Thêm người dùng <i class="fa-solid fa-plus"></i></a>
    </p>
    <?php 
        if(!empty($smgAdd)) {
            getSmg($smgAdd, $smgAdd_type);
        }
    ?>
    <table class="table table-bordered">
        <thead>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Trạng thái</th>
            <th width="5%">Sửa</th>
            <th width="5%">Xóa</th>
        </thead>
        <tbody>
            <?php
                if(!empty($list_user)) :
                    $count=0;
                    foreach($list_user as $item) :
                        $count++;
                
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $item['fullname']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['phone']; ?></td>
                    <td><?php echo $item['status'] == 1 ? '<button class="btn btn-success btn-sm">Đã kích hoạt</button>' : '<button class="btn btn-danger btn-sm">Chưa kích hoạt</button>' ; ?></td>
                    <td><a href="<?php echo _WEB_HOST ?>?module=users&action=edit&id=<?php echo $item['id']; ?>" class="btn btn-warning btn-sm" ><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <!-- onclick="return confirm('Bạn có chắc muốn xóa? ')"  -->
                    <td><a href="<?php echo _WEB_HOST ?>?module=users&action=delete&id=<?php echo $item['id']; ?>" class="btn btn-danger btn-sm" ><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            <?php 
                    endforeach;
                endif; 
            ?>
        </tbody>
    </table>
</div>
<?php
layouts('footer');
?>

