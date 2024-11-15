<!-- Kết nối tới database -->
<?php
require_once("./manager_users/config.php");
// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) die('Access denied...');

  
try {
    if(class_exists('PDO')) {
        $dsn = 'mysql:dbname='._DB.';'._HOST;
        $con = new PDO($dsn, _USER, _PASS);
        echo'Nếu kết nối thành công sẽ hiện ra: object(PDO)#1 (0) { } <br><br>';
        echo"<h4 style='color: green; font-weight: bold; margin-left: 20px;'> Success: ";
        var_dump( $con );
        echo'<h4>';
    }
}
catch (Exception $e) {
    echo '<div style="color: red; padding: 5px 15px; border: 1px solid red; white-space: pre-wrap; word-wrap: break-word; overflow-wrap: break-word;">';
    echo "<br>Loi roi <br>";
    echo $e;
    echo '</div>';
    die();
}
?>  
