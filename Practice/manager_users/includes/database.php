<!-- Các hàm xử lý liên quan đến CSDL -->
<?php
require_once "connect.php";
// Kiểm tra hằng số có tồn tại hay không 
if(!defined('_CODE')) die('Access denied...');
function querry($sql, $data=[]){
    global $con;
    $ketqua = false;
    try {
        if($con){
            $statement = $con->prepare($sql);
    
            if(!empty($data)){
                $ketqua = $statement -> execute($data);
            }
            
            else{
                $ketqua = $statement -> execute($data);
            }
        }else{echo'NULL';}
        
    }
    catch (Exception $e) {
        echo "<div style='color: red;'>";
        echo "<br>". $e->getMessage() ."<br>";
        echo "<br>File: ". $e->getFile() ."<br>";
        echo "<br>Line: ". $e->getLine() ."<br>";
        echo "</div>";
        die();
    }
    return $ketqua;
}

function insert($table, $data){
    // Lấy mảng index key
    $key = array_keys($data);
    // Nối các mảng lại với nhau cách nhau bởi dấu ,
    $truong = implode(',', $key);
    $valuetb = ':'.implode(',:', $key);
    $sql = 'INSERT INTO '.$table.'('.$truong.')'.'VALUES('.$valuetb.')';

    $kq = querry($sql, $data);
    return $kq;
}
